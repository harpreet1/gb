<?php
App::uses('AppController', 'Controller');
class ProductsController extends AppController {

////////////////////////////////////////////////////////////

	public $components = array('Image');

////////////////////////////////////////////////////////////

	public function slug() {

		die('slug');

		$products = $this->Product->find('all', array(
			'recursive' => -1,
			'conditions' => array(
				'Product.slug' => ''
			),
			'limit' => 10000
		));

		foreach($products as $product) {
			$data['Product']['id'] = $product['Product']['id'];
			$data['Product']['slug'] = strtolower(Inflector::slug($product['Product']['name'], '-'));
			$this->Product->save($data, false);
		}
		die('end');
	}

////////////////////////////////////////////////////////////

	public function __trimname() {
		$products = $this->Product->find('all', array(
			'recursive' => -1,
			'conditions' => array(
//				'Product.slug' => ''
			),
			'limit' => 10000
		));

		foreach($products as $product) {
			$data['Product']['id'] = $product['Product']['id'];
			$data['Product']['name'] = trim($product['Product']['name']);
			$this->Product->save($data, false);
		}
//		die('vege');
	}

////////////////////////////////////////////////////////////

	public function index() {

		$conditions = array('User.level' => 'vendor');

		$subDomain = $this->_getSubDomain();

		if($subDomain != 'www') {

			$user = $this->Product->User->getBySubdomain($subDomain);

			$usercategories =  $this->Product->find('all', array(
				'contain' => array('Category'),
				'fields' => array(
					'Category.name',
					'Category.slug'
				),
				'conditions' => array(
					'Product.user_id' => $user['User']['id']
				),
				'group' => array(
					'Product.category_id'
				),
				'order' => array(
					'Category.name' => 'ASC'
				),
			));

		} else{
			$user = array();
			$usercategories = array();
		}
		$this->set(compact('user', 'usercategories'));

		if(!empty($user)) {
			$conditions[]	= array(
				'Product.user_id' => $user['User']['id']
			);
		}

		$this->paginate = array(
			'contain' => array('User'),
			'recursive' => -1,
			'fields' => array(
				'Product.id',
				'Product.name',
				'Product.slug',
				'Product.image',
				'Product.price',
				'User.slug'
			),
			'limit' => 40,
			'order' => array(
				'Product.name' => 'ASC'
			),
			'paramType' => 'querystring',
			'conditions' => $conditions
		);
		$products = $this->paginate('Product');

		$this->set(compact('products'));

		$title = empty($user) ? 'All Products' : $user['User']['name'];

		$title_for_layout = $title . ' :: GB';
		$this->set(compact('title_for_layout'));

	}

////////////////////////////////////////////////////////////

	public function subcategory($slug) {

		$subDomain = $this->_getSubDomain();

		if($subDomain != 'www') {
			$user = $this->Product->User->getBySubdomain($subDomain);
		}

		$usersubcategories =  $this->Product->find('all', array(
			'contain' => array('Category', 'Subcategory'),
			'fields' => array(
				'Subcategory.id',
				'Subcategory.name',
				'Subcategory.slug'
			),
			'conditions' => array(
				'Product.user_id' => $user['User']['id'],
				'Category.slug' => $slug,
			),
			'group' => array(
				'Product.subcategory_id'
			),
			'order' => array(
				'Subcategory.name' => 'ASC'
			),
		));

		$this->paginate = array(
			'contain' => array('User', 'Category', 'Subcategory'),
			'recursive' => -1,
			'fields' => array(
				'Product.id',
				'Product.name',
				'Product.slug',
				'Product.image',
				'Product.price',
				'User.slug'
			),
			'limit' => 40,
			'conditions' => array(
				'Product.user_id' => $user['User']['id'],
				'Category.slug' => $slug,
			),
			'order' => array(
				'Subcategory.name' => 'ASC'
			),
			'paramType' => 'querystring',
		);
		$products = $this->paginate('Product');


		$this->set(compact('user', 'usersubcategories', 'products'));

		$this->render('index');
	}

////////////////////////////////////////////////////////////

	public function subsubcategory($slug) {

		$subDomain = $this->_getSubDomain();

		if($subDomain != 'www') {
			$user = $this->Product->User->getBySubdomain($subDomain);
		}

		$usersubsubcategories =  $this->Product->find('all', array(
			'contain' => array('Category', 'Subcategory', 'Subsubcategory'),
			'fields' => array(
				'Subsubcategory.name',
				'Subsubcategory.slug'
			),
			'conditions' => array(
				'Product.user_id' => $user['User']['id'],
				'Subsubcategory.slug' => $slug,
			),
			'group' => array(
				'Product.subsubcategory_id'
			),
			'order' => array(
				'Subsubcategory.name' => 'ASC'
			),
		));

		$this->paginate = array(
			'contain' => array('User', 'Category', 'Subcategory', 'Subsubcategory'),
			'fields' => array(
				'Product.id',
				'Product.name',
				'Product.slug',
				'Product.image',
				'Product.price',
				'User.slug'
			),
			'conditions' => array(
				'Product.user_id' => $user['User']['id'],
				'Product.subsubcategory_id' => $slug,
			),
			'order' => array(
				'Subsubcategory.name' => 'ASC'
			),
			'paramType' => 'querystring',
		);
		$products = $this->paginate('Product');

		$this->set(compact('user', 'usersubsubcategories', 'products'));

		$this->render('index');
	}

////////////////////////////////////////////////////////////

	public function view($id = null) {

		$subDomain = $this->_getSubDomain();

		if($subDomain != 'www') {
			$user = $this->Product->User->getBySubdomain($subDomain);
		} else{
			$user = array();
		}
		$this->set(compact('user'));

		$product = $this->Product->find('first', array(
			'recursive' => -1,
			// 'contain' => array('Tag'),
			'conditions' => array('Product.id' => $id)
		));
		if (empty($product)) {
			$this->redirect(array('action' => 'index'), 301);
		}
		$this->set(compact('product'));

		$title_for_layout = $product['Product']['name'] . ' :: GB';
		$this->set(compact('title_for_layout'));

	}

////////////////////////////////////////////////////////////

	public function search() {

		$search = null;
		if(!empty($this->request->query['search']) || !empty($this->request->data['name'])) {
			$search = empty($this->request->query['search']) ? $this->request->data['name'] : $this->request->query['search'] ;
			$search = preg_replace('/[^a-zA-Z0-9 ]/', '', $search);
			$terms = explode(' ', trim($search));
			$terms = array_diff($terms, array(''));
			$conditions = array();
			foreach($terms as $term) {
				$terms1[] = preg_replace('/[^a-zA-Z0-9]/', '', $term);
				$conditions[] = array('Product.name LIKE' => '%' . $term . '%');
			}
			$products = $this->Product->find('all', array(
				'contain' => array('User'),
				'fields' => array(
					'Product.id',
					'Product.name',
					'Product.slug',
					'Product.image',
					'Product.price',
					'User.slug'
				),
				'conditions' => $conditions,
				'limit' => 200,
				'recursive' => -1
			));
			if(count($products) == 1) {
				$this->redirect(array('controller' => 'products', 'action' => 'view', 'id' =>  $products[0]['Product']['id'], 'slug' => $products[0]['Product']['slug']));
			}
			$terms1 = array_diff($terms1, array(''));
			$this->set(compact('products', 'terms1'));
		}
		$this->set(compact('search'));

		if ($this->request->is('ajax')) {
			$this->layout = false;
			$this->set('ajax', 1);
		} else {
			$this->set('ajax', 0);
		}

		$this->set('title_for_layout', 'Search');

		$description = 'Search';
		$this->set(compact('description'));

		$keywords = 'search';
		$this->set(compact('keywords'));
	}

////////////////////////////////////////////////////////////

	public function searchjson() {
		$search = null;
		if(!empty($this->request->query['search'])) {
			$search = $this->request->query['search'];
			$terms = explode(' ', trim($search));
			$terms = array_diff($terms, array(''));
			$conditions = array();
			foreach($terms as $term) {
				$conditions[] = array('Product.name LIKE' => '%' . $term . '%');
			}
			$products = $this->Product->find('all', array(
				'fields' => array(
					'Product.name',
					'Product.image'
				),
				'conditions' => $conditions,
				'limit' => 200,
				'recursive' => -1
			));
		}
		echo json_encode($products);
		$this->autoRender = false;
	}

////////////////////////////////////////////////////////////

	public function sitemap() {
		$products = $this->Product->find('all', array(
			'recursive' => -1,
			'contain' => array('User'),
			'fields' => array(
				'Product.id',
				'Product.slug',
				'User.slug'
			),
			'order' => array(
				'Product.created' => 'DESC'
			),
		));
		$this->set(compact('products'));
		$this->layout = 'xml';
		$this->response->type('xml');
	}

////////////////////////////////////////////////////////////

	public function admin_reset() {
		$this->Session->delete('Product');

		$this->redirect(array('action' => 'index'));
	}

////////////////////////////////////////////////////////////

	public function admin_index() {

		if ($this->request->is('post')) {
			if(!empty($this->request->data['Product']['user_id'])) {
				$conditions = array(
					'Product.user_id' => $this->request->data['Product']['user_id']
				);
				$this->Session->write('Product.conditions', $conditions);
				$this->Session->write('Product.user_id', $this->request->data['Product']['user_id']);
				$this->Session->write('Product.filter', '');
				$this->Session->write('Product.name', '');

			}
			if(!empty($this->request->data['Product']['name'])) {
				$this->Session->write('Product.user_id', '');
				$filter = $this->request->data['Product']['filter'];
				$this->Session->write('Product.filter', $filter);
				$name = $this->request->data['Product']['name'];
				$this->Session->write('Product.name', $name);
				$conditions = array(
					'Product.' . $filter . ' LIKE' => '%' . $name . '%'
				);
				$this->Session->write('Product.conditions', $conditions);
			}

			$this->redirect(array('action' => 'index'));

		}

		$all = array(
			'user_id' => '',
			'name' => '',
			'filter' => '',
			'conditions' => ''
		);

		if($this->Session->check('Product.conditions')) {
			$all = $this->Session->read('Product');
		}

		$this->set(compact('all'));

		$this->paginate = array(
			'recursive' => 0,
			'conditions' => $all['conditions'],
			'fields' => array(
				'Product.*',
				'User.id',
				'User.name',
				'User.level',
				'Category.id',
				'Category.name',
				'Subcategory.id',
				'Subcategory.name',
				'Subsubcategory.id',
				'Subsubcategory.name',
				'Ustradition.id',
				'Ustradition.name',
			),
			'limit' => 50,
		);

		$products = $this->paginate('Product');

		$this->set(compact('products'));

		$users = $this->Product->find('list', array(
			'contain' => array('User'),
			'fields' => array(
				'User.id',
				'User.name',
			),
			'conditions' => array(
				//'User.active' => 1,
				//'User.level' => 'vendor',
			),
			'order' => array(
				'User.name' => 'ASC'
			),
			'group' => array(
				'Product.user_id'
			),
		));

		$categories = $this->Product->Category->find('list', array(
			'order' => array(
				'Category.name' => 'ASC'
			)
		));

		$subcategories = $this->Product->Subcategory->find('list', array(
			'order' => array(
				'Subcategory.name' => 'ASC'
			)
		));

		$subsubcategories = $this->Product->Subsubcategory->find('list', array(
			'order' => array(
				'Subsubcategory.name' => 'ASC'
			)
		));

		$ustraditions = $this->Product->Ustradition->find('list', array(
			'order' => array(
				'Ustradition.name' => 'ASC'
			)
		));

		$countries = $this->Product->countries();

		$this->set(compact('users', 'categories', 'subcategories', 'subsubcategories', 'ustraditions', 'countries'));

	}

////////////////////////////////////////////////////////////

	public function admin_view($id = null) {


		if ($this->request->is('post')) {

			$image = $this->request->data['Product']['id'] . '.jpg';

			$targetdir = IMAGES . 'products';

			$upload = $this->Image->upload($this->request->data['Product']['image']['tmp_name'], $targetdir, $image);

			if($upload == 'Success') {
				$this->Product->id = $this->request->data['Product']['id'];
				$this->Product->saveField('image', $image);
				$uploadedfile = $targetdir . '/' . $image;
				//$this->Image->resample($uploadedfile, IMAGES . '/user_image/' . $slug . '/', $image, 900, 600, 1, 0);
//				$this->Image->resample($uploadedfile, IMAGES . '/user_image/', $image, 200, 200, 1, 0);
			}

			$this->Session->setFlash($upload);
			$this->redirect($this->referer());
		}

		$this->Product->id = $id;
		if (!$this->Product->exists()) {
			throw new NotFoundException(__('Invalid product'));
		}
		$this->set('product', $this->Product->read(null, $id));
	}

////////////////////////////////////////////////////////////

	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Product->create();
			if ($this->Product->save($this->request->data)) {
				$this->Session->setFlash(__('The product has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The product could not be saved. Please, try again.'));
			}
		}

		$users = $this->Product->User->find('list', array(
			'conditions' => array(
				'User.active' => 1,
				'User.level' => 'vendor',
			),
			'order' => array(
				'User.name' => 'ASC'
			)
		));
		$categories = $this->Product->Category->find('list', array(
			'order' => array(
				'Category.name' => 'ASC'
			)
		));
		$subcategories = $this->Product->Subcategory->find('list', array(
			'order' => array(
				'Subcategory.name' => 'ASC'
			)
		));
		$subsubcategories = $this->Product->Subsubcategory->find('list', array(
			'order' => array(
				'Subsubcategory.name' => 'ASC'
			)
		));

		$ustraditions = $this->Product->Ustradition->find('list', array(
			'order' => array(
				'Ustradition.name' => 'ASC'
			)
		));

		$countries = $this->Product->countries();

		$this->set(compact('users', 'categories', 'subcategories', 'subsubcategories', 'ustraditions', 'countries'));

	}

////////////////////////////////////////////////////////////

	public function admin_edit($id = null) {
		$this->Product->id = $id;
		if (!$this->Product->exists()) {
			throw new NotFoundException(__('Invalid product'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Product->save($this->request->data)) {
				$this->Session->setFlash(__('The product has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The product could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Product->read(null, $id);
		}

		$users = $this->Product->User->find('list', array(
			'conditions' => array(
				'User.active' => 1,
				'User.level' => 'vendor',
			),
			'order' => array(
				'User.name' => 'ASC'
			)
		));
		$categories = $this->Product->Category->find('list', array(
			'order' => array(
				'Category.name' => 'ASC'
			)
		));
		$subcategories = $this->Product->Subcategory->find('list', array(
			'order' => array(
				'Subcategory.name' => 'ASC'
			)
		));
		$subsubcategories = $this->Product->Subsubcategory->find('list', array(
			'order' => array(
				'Subsubcategory.name' => 'ASC'
			)
		));

		$ustraditions = $this->Product->Ustradition->find('list', array(
			'order' => array(
				'Ustradition.name' => 'ASC'
			)
		));

		$countries = $this->Product->countries();

		$this->set(compact('users', 'categories', 'subcategories', 'subsubcategories', 'ustraditions', 'countries'));

	}

////////////////////////////////////////////////////////////

	public function admin_delete($id = null) {
		$this->Product->id = $id;
		if (!$this->Product->exists()) {
			throw new NotFoundException(__('Invalid product'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Product->delete()) {
			$this->Session->setFlash(__('Product deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Product was not deleted'));
		$this->redirect(array('action' => 'index'));
	}

////////////////////////////////////////////////////////////

}
