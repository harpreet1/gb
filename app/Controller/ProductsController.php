<?php
App::uses('AppController', 'Controller');
class ProductsController extends AppController {

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
		die('end');
		$products = $this->Product->find('all', array(
			'recursive' => -1,
			'conditions' => array(
			//'Product.slug' => ''
			),
			'limit' => 10000
		));

		foreach($products as $product) {
			$data['Product']['id'] = $product['Product']['id'];
			$data['Product']['name'] = trim($product['Product']['name']);
			$this->Product->save($data, false);
		}
		//die('end');
	}

////////////////////////////////////////////////////////////

	public function index() {

		$conditions = array('User.level' => 'vendor');

		$subDomain = $this->_getSubDomain();

		if($subDomain != 'www') {

			$user = $this->Product->User->getBySubdomain($subDomain);
			if(!$user) {
				die('error');
			}

			$usercategories =  $this->Product->find('all', array(
				'contain' => array('Category'),
				'fields' => array(
					'Category.name',
					'Category.slug'
				),
				'conditions' => array(
					'Product.active' => 1,
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
				'Product.active' => 1,
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

	public function category($slug) {

		$subDomain = $this->_getSubDomain();

		if($subDomain != 'www') {
			$user = $this->Product->User->getBySubdomain($subDomain);
		}

		$category = $this->Product->Category->find('first', array(
			'conditions' => array(
				'Category.slug' => $slug
			)
		));

		$usersubcategories =  $this->Product->find('all', array(
			'contain' => array('Subcategory'),
			'fields' => array(
				'Subcategory.id',
				'Subcategory.name',
				'Subcategory.slug'
			),
			'conditions' => array(
				'Product.active' => 1,
				'Product.user_id' => $user['User']['id'],
				'Product.category_id' => $category['Category']['id'],
			),
			'group' => array(
				'Product.subcategory_id'
			),
			'order' => array(
				'Subcategory.name' => 'ASC'
			),
		));

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
			'conditions' => array(
				'Product.active' => 1,
				'Product.user_id' => $user['User']['id'],
				'Product.category_id' => $category['Category']['id'],
			),
			'order' => array(
				'Product.name' => 'ASC'
			),
			'paramType' => 'querystring',
		);
		$products = $this->paginate('Product');


		$this->set(compact('user', 'category', 'usersubcategories', 'products'));

		$this->render('index');
	}

////////////////////////////////////////////////////////////

	public function subcategory($id) {

		$subDomain = $this->_getSubDomain();

		if($subDomain != 'www') {
			$user = $this->Product->User->getBySubdomain($subDomain);
		}

		$subcategory = $this->Product->Subcategory->find('first', array(
			'conditions' => array(
				'Subcategory.id' => $id
			)
		));

		$category = $this->Product->Category->find('first', array(
			'conditions' => array(
				'Category.id' => $subcategory['Subcategory']['category_id']
			)
		));

		$usersubsubcategories =  $this->Product->find('all', array(
			'contain' => array('Category', 'Subcategory', 'Subsubcategory'),
			'fields' => array(
				'Subsubcategory.name',
				'Subsubcategory.slug'
			),
			'conditions' => array(
				'Product.active' => 1,
				'Product.user_id' => $user['User']['id'],
				'Product.subcategory_id' => $id,
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
				'Product.active' => 1,
				'Product.user_id' => $user['User']['id'],
				'Product.subcategory_id' => $id,
			),
			'order' => array(
				'Subsubcategory.name' => 'ASC'
			),
			'paramType' => 'querystring',
		);
		$products = $this->paginate('Product');

		$this->set(compact('user', 'category', 'subcategory', 'usersubsubcategories', 'products'));

		$this->render('index');
	}

////////////////////////////////////////////////////////////

	public function subsubcategory($slug) {

		$subDomain = $this->_getSubDomain();

		if($subDomain != 'www') {
			$user = $this->Product->User->getBySubdomain($subDomain);
		}

		$subsubcategory = $this->Product->Subsubcategory->find('first', array(
			'conditions' => array(
				'Subsubcategory.id' => $slug
			)
		));

		$subcategory = $this->Product->Subcategory->find('first', array(
			'conditions' => array(
				'Subcategory.id' => $subsubcategory['Subsubcategory']['subcategory_id']
			)
		));

		$category = $this->Product->Category->find('first', array(
			'conditions' => array(
				'Category.id' => $subcategory['Subcategory']['category_id']
			)
		));

		$this->paginate = array(
			'contain' => array('User'),
			'fields' => array(
				'Product.id',
				'Product.name',
				'Product.slug',
				'Product.image',
				'Product.price',
				'User.slug'
			),
			'conditions' => array(
				'Product.active' => 1,
				'Product.user_id' => $user['User']['id'],
				'Product.subsubcategory_id' => $slug,
			),
			'order' => array(
				'Product.name' => 'ASC'
			),
			'paramType' => 'querystring',
		);
		$products = $this->paginate('Product');

		$this->set(compact('user', 'category',  'subcategory', 'subsubcategory', 'products'));

		$this->render('index');
	}

////////////////////////////////////////////////////////////

	public function view($id = null) {

		$subDomain = $this->_getSubDomain();

		if($subDomain != 'www') {
			$user = $this->Product->User->getBySubdomain($subDomain);

			$usercategories = $this->Product->find('all', array(
				'contain' => array('Category'),
				'fields' => array(
					'Category.name',
					'Category.slug'
				),
				'conditions' => array(
					'Product.active' => 1,
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
			$usercategories = null;
		}
		$this->set(compact('user', 'usercategories'));

		$product = $this->Product->find('first', array(
			'recursive' => -1,
			'contain' => array(
				'Category',
				'Subcategory',
				'Subsubcategory'
			),
			'conditions' => array(
				'Product.id' => $id,
				'Product.active' => 1,
			)
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
			//$search = preg_replace('/[^a-zA-Z0-9 ]/', '', $search);
			$terms = explode(' ', trim($search));
			$terms = array_diff($terms, array(''));
			$conditions = array(
				'User.active' => 1,
				'User.level' => 'vendor',
				'Product.active' => 1,
			);
			foreach($terms as $term) {
				//$terms1[] = preg_replace('/[^a-zA-Z0-9]/', '', $term);
				$conditions[] = array('Product.name LIKE' => '%' . $term . '%');
			}
			$products = $this->Product->find('all', array(
				'recursive' => -1,
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
			));
			if(count($products) == 1) {
				$this->redirect(array('subdomain' => $products[0]['User']['slug'], 'controller' => 'products', 'action' => 'view', 'id' => $products[0]['Product']['id'], 'slug' => $products[0]['Product']['slug']));
			}
			$terms1 = array_diff($terms, array(''));
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
			$conditions = array(
				'User.active' => 1,
				'User.level' => 'vendor',
				'Product.active' => 1,
			);
			foreach($terms as $term) {
				//$conditions[] = array(
				//'Product.name LIKE' => '%' . $term . '%'
				//);
				$conditions[] = array(
					'OR' => array(
						array('Product.name LIKE' => '%' . $term . '%'),
						array('Product.brand LIKE' => '%' . $term . '%'),
					)
				);
			}
			$products = $this->Product->find('all', array(
				'recursive' => 0,
				'contain' => array('User'),
				'fields' => array(
					'Product.name',
					'Product.image'
				),
				'conditions' => $conditions,
				'limit' => 200,
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
			'conditions' => array(
				'User.active' => 1,
				'User.level' => 'vendor',
				'Product.active' => 1,
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

	public function admin_filter() {

		$field = $this->request->query['field'];
		$id = $this->request->query['id'];

		$this->Session->delete('Product');

		if($field == 'user_id') {
			$conditions[] = array(
				'Product.user_id' => $id,
			);
			$this->Session->write('Product.user_id', $id);
			$this->Session->write('Product.filter', '');
			$this->Session->write('Product.name', '');
		} else {
			$this->Session->write('Product.user_id', null);
			$this->Session->write('Product.filter', $field);
			$this->Session->write('Product.name', $id);
			$conditions[] = array(
				'Product.' . $field => $id
			);
		}

		$this->Session->write('Product.conditions', $conditions);

		$this->redirect(array('action' => 'index'));

	}

////////////////////////////////////////////////////////////

	public function vendor_index() {
		$this->paginate = array(
			'recursive' => 0,
			'conditions' => array(
				'Product.user_id' => $this->Auth->user('id')
			),
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
	}

////////////////////////////////////////////////////////////

	public function admin_index() {

		if ($this->request->is('post')) {

			if(!empty($this->request->data['Product']['user_id'])) {
				$conditions[] = array(
					'Product.user_id' => $this->request->data['Product']['user_id']
				);
				$this->Session->write('Product.user_id', $this->request->data['Product']['user_id']);
			} else {
				$this->Session->write('Product.user_id', '');
			}

			if(!empty($this->request->data['Product']['name'])) {
				$filter = $this->request->data['Product']['filter'];
				$this->Session->write('Product.filter', $filter);
				$name = $this->request->data['Product']['name'];
				$this->Session->write('Product.name', $name);
				$conditions[] = array(
					'Product.' . $filter . ' LIKE' => '%' . $name . '%'
				);
			} else {
				$this->Session->write('Product.filter', '');
				$this->Session->write('Product.name', '');
			}

			$this->Session->write('Product.conditions', $conditions);
			$this->redirect(array('action' => 'index'));

		}

		$all = array(
			'user_id' => '',
			'name' => '',
			'filter' => '',
			'conditions' => ''
		);

		if($this->Session->check('Product')) {
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

		$users = $this->Product->find('all', array(
			'contain' => array('User'),
			'fields' => array(
				'User.id',
				'User.name',
				'User.level',
			),
			'conditions' => array(
			),
			'order' => array(
				'User.level' => 'DESC',
				'User.name' => 'ASC'
			),
			'group' => array(
				'Product.user_id'
			),
		));
		$users = Hash::combine($users, '{n}.User.id', array('%s - (%s)', '{n}.User.name', '{n}.User.level'));

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

			$type = $this->request->data['Product']['image_type'];

			$targetdir = IMAGES . 'products/' . $type . '/';

			$this->Image = $this->Components->load('Image');

			$upload = $this->Image->upload($this->request->data['Product']['image']['tmp_name'], $targetdir, $image);

			if($upload == 'Success') {
				$this->Product->id = $this->request->data['Product']['id'];
				$this->Product->saveField($type, $image);
				$uploadedfile = $targetdir . '/' . $image;
				//$this->Image->resample($uploadedfile, IMAGES . '/user_image/' . $slug . '/', $image, 900, 600, 1, 0);
				//$this->Image->resample($uploadedfile, IMAGES . '/user_image/', $image, 200, 200, 1, 0);
			}

			$this->Session->setFlash($upload);
			$this->redirect($this->referer());
		}

		if (!$this->Product->exists($id)) {
			throw new NotFoundException(__('Invalid product'));
		}

		$product = $this->Product->find('first', array(
			'recursive' => 0,
			'conditions' => array(
				'Product.id' => $id
			)
		));
		$this->set(compact('product'));

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

		$creations = $this->Product->creations();

		$this->set(compact('users', 'categories', 'subcategories', 'subsubcategories', 'ustraditions', 'countries', 'creations'));

	}

////////////////////////////////////////////////////////////

	public function admin_edit($id = null) {

		$this->Product->id = $id;
		if (!$this->Product->exists()) {
			throw new NotFoundException(__('Invalid product'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if(!empty($this->request->data['Product']['traditions'])) {
				asort($this->request->data['Product']['traditions']);
				$this->request->data['Product']['traditions'] = implode(',', $this->request->data['Product']['traditions']);
			}
			if ($this->Product->save($this->request->data)) {
				$this->Session->setFlash(__('The product has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The product could not be saved. Please, try again.'));
			}
		} else {
			$options = array(
				'recursive' => 0,
				'conditions' => array('Product.id' => $id)
			);
			$this->request->data = $this->Product->find('first', $options);

			$product = $this->Product->find('first', array(
				'recursive' => 0,
				'conditions' => array(
					'Product.id' => $id
				)
			));
			$this->set(compact('product'));
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

		//$categories1 = $this->Product->Category->find('all', array(
		//	'recursive' => -1,
		//	'fields'=> array(
		//		'Category.id',
		//		'Category.name',
		//	),
		//	'order' => array(
		//		'Category.name' => 'ASC'
		//	)
		//));
		//foreach($categories1 as $category) {
		//	$categories[$category['Category']['id']] = array('name' => $category['Category']['name'], 'value' => $category['Category']['id'], 'class' => 'c_' . $category['Category']['id']);
		//}

		//$subcategories = $this->Product->Subcategory->find('list', array(
		//	'order' => array(
		//		'Subcategory.name' => 'ASC'
		//	)
		//));

		$subcategories1 = $this->Product->Subcategory->find('all', array(
			'recursive' => -1,
			'fields'=> array(
				'Subcategory.id',
				'Subcategory.category_id',
				'Subcategory.name',
			),
			'order' => array(
				'Subcategory.name' => 'ASC'
			)
		));
		foreach($subcategories1 as $subcategory) {
			$subcategories[$subcategory['Subcategory']['id']] = array('name' => $subcategory['Subcategory']['name'], 'value' => $subcategory['Subcategory']['id'], 'class' => $subcategory['Subcategory']['category_id']);
		}

		//$subsubcategories = $this->Product->Subsubcategory->find('list', array(
		//	'order' => array(
		//		'Subsubcategory.name' => 'ASC'
		//	)
		//));

		$subsubcategories1 = $this->Product->Subsubcategory->find('all', array(
			'recursive' => -1,
			'fields'=> array(
				'Subsubcategory.id',
				'Subsubcategory.subcategory_id',
				'Subsubcategory.name',
			),
			'order' => array(
				'Subsubcategory.name' => 'ASC'
			)
		));
		foreach($subsubcategories1 as $subsubcategory) {
			$subsubcategories[$subsubcategory['Subsubcategory']['id']] = array('name' => $subsubcategory['Subsubcategory']['name'], 'value' => $subsubcategory['Subsubcategory']['id'], 'class' => $subsubcategory['Subsubcategory']['subcategory_id']);
		}

		$traditions = ClassRegistry::init('Tradition')->find('list', array(
			'recursive' => -1,
			'fields'=> array(
				'Tradition.id',
				'Tradition.name',
			),
			'order' => array(
				'Tradition.name' => 'ASC'
			)
		));

		$traditionsselected = array_map('intval', explode(',', $product['Product']['traditions']));

		$ustraditions = $this->Product->Ustradition->find('list', array(
			'order' => array(
				'Ustradition.name' => 'ASC'
			)
		));

		$countries = $this->Product->countries();

		$creations = $this->Product->creations();

		$this->set(compact('users', 'categories', 'subcategories', 'subsubcategories', 'traditions', 'traditionsselected', 'ustraditions', 'countries', 'creations'));

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

