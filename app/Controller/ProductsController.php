<?php
App::uses('AppController', 'Controller');
class ProductsController extends AppController {

////////////////////////////////////////////////////////////

	public function __slugcreate() {
		die();
		$products = $this->Product->find('all', array(
			'recursive' => -1,
			'conditions' => array(
				'Product.slug' => ''
			),
			'limit' => 10000
		));

		foreach($products as $product) {
			$data['Product']['id'] = $product['Product']['id'];
			$data['Product']['slug'] = Inflector::slug(strtolower($product['Product']['name']), '-');
			$this->Product->save($data, false);
		}
		die();
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

		$conditions = array();

		$subDomain = $this->_getSubDomain();

		if($subDomain != 'www') {

			$user = $this->Product->User->getBySubdomain($subDomain);

			$usercategories =  $this->Product->find('all', array(
				'contain' => array('Category'),
				'fields' => array(
//					'DISTINCT Product.category_id',
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
			$conditions	= array(
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
				'User.short_name'
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

		$tt = empty($user) ? 'All Products' : $user['User']['shop_name'];

		$title_for_layout = $tt . ' :: GB';
		$this->set(compact('title_for_layout'));

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
//			'contain' => array('Tag'),
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

	public function subcategory() {

		$subDomain = $this->_getSubDomain();

		if($subDomain != 'www') {
			$user = $this->Product->User->getBySubdomain($subDomain);
		}

		$slug = $this->request->params['named']['slug'];

		$usersubcategories =  $this->Product->find('all', array(
			'contain' => array('Category', 'Subcategory'),
			'fields' => array(
//					'DISTINCT Product.category_id',
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

		echo '<pre>';
		print_r($usersubcategories);
//		die('end');

		$products =  $this->Product->find('all', array(
			'contain' => array('Category', 'Subcategory'),
			'fields' => array(
				'Product.id',
				'Product.name',
				'Product.slug',
				'Product.image',
			),
			'conditions' => array(
				'Product.user_id' => $user['User']['id'],
				'Category.slug' => $slug,
			),
			'order' => array(
				'Subcategory.name' => 'ASC'
			),
		));

		echo '<pre>';
		print_r($products);

		die('end');

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
					'User.short_name'
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
			'fields' => array(
				'Product.id',
				'Product.slug'
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

	public function admin_index() {
		$this->Product->recursive = 0;
		$this->set('products', $this->paginate());
	}

////////////////////////////////////////////////////////////

	public function admin_view($id = null) {
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
		$categories = $this->Product->Category->find('list');
		$tags = $this->Product->Tag->find('list');
		$this->set(compact('categories', 'tags'));
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
		$categories = $this->Product->Category->find('list');
		$tags = $this->Product->Tag->find('list');
		$this->set(compact('categories', 'tags'));
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
