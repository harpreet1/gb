<?php
App::uses('AppController', 'Controller');
class BrandsController extends AppController {

////////////////////////////////////////////////////////////

	public function index() {
		$this->Brand->recursive = 0;
		$this->set('brands', $this->paginate());
	}

////////////////////////////////////////////////////////////

	public function view($slug = null) {

		$brand = $this->Brand->find('first', array(
			'recursive' => -1,
			'conditions' => array(
				'Brand.slug' => $slug
			)
		));
		if(empty($brand)) {
			die('invalid region');
		}
		$this->set(compact('brand'));

		$brands = $this->Brand->find('all', array(
			'recursive' => -1,
			'conditions' => array(),
			'order' => array(
				'Brand.name' => 'ASC'
			)
		));
		$this->set(compact('brands'));

		$brand_id = $brand['Brand']['id'];

		$this->loadModel('Product');

		$this->paginate = array(
			'joins' => array(
				array(
					'table' => 'users',
					'type' => 'RIGHT',
					'alias' => 'User',
					'conditions' => array('User.id = Product.user_id AND User.level = "vendor"')
				),
				array(
					'table' => 'categories',
					'type' => 'RIGHT',
					'alias' => 'categories',
					'conditions' => array('categories.id = Product.category_id')
				),
				array(
					'table' => 'subcategories',
					'type' => 'RIGHT',
					'alias' => 'subcategories',
					'conditions' => array('subcategories.id = Product.subcategory_id')
				)
			),
			'fields' => array(
				'Product.id',
				'Product.name',
				'Product.slug',
				'Product.description',
				'Product.price',
				'Product.image',
				'Product.category_id',
				'User.id',
				'User.slug',
			),
			'conditions' => array(
				'Product.active' => 1,
				'Product.brand_id' => $brand_id,
			),
			'limit' => 30,
			'order' => array('
				Product.id' => 'DESC'
			)
		);
		$products = $this->paginate('Product');
		$this->set(compact('products'));

	}

////////////////////////////////////////////////////////////

	public function admin_index() {
		$this->Brand->recursive = 0;
		$this->set('brands', $this->paginate());
	}

////////////////////////////////////////////////////////////

	public function admin_view($id = null) {
		if (!$this->Brand->exists($id)) {
			throw new NotFoundException(__('Invalid brand'));
		}
		$brand = $this->Brand->find('first', array(
			'conditions' => array(
				'Brand.id' => $id
			)
		));
		$this->set(compact('brand'));
	}

////////////////////////////////////////////////////////////

	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Brand->create();
			if ($this->Brand->save($this->request->data)) {
				$this->Session->setFlash(__('The brand has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The brand could not be saved. Please, try again.'));
			}
		}
	}

////////////////////////////////////////////////////////////

	public function admin_edit($id = null) {
		if (!$this->Brand->exists($id)) {
			throw new NotFoundException(__('Invalid brand'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Brand->save($this->request->data)) {
				$this->Session->setFlash(__('The brand has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The brand could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Brand.' . $this->Brand->primaryKey => $id));
			$this->request->data = $this->Brand->find('first', $options);
		}
	}

////////////////////////////////////////////////////////////

	public function admin_delete($id = null) {
		$this->Brand->id = $id;
		if (!$this->Brand->exists()) {
			throw new NotFoundException(__('Invalid brand'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Brand->delete()) {
			$this->Session->setFlash(__('Brand deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Brand was not deleted'));
		$this->redirect(array('action' => 'index'));
	}

////////////////////////////////////////////////////////////

}
