<?php
App::uses('AppController', 'Controller');

class TraditionsController extends AppController {

////////////////////////////////////////////////////////////

	public function index() {
	}

////////////////////////////////////////////////////////////

	public function view($slug = null) {

		$tradition = $this->Tradition->find('first', array(
			'recursive' => -1,
			'conditions' => array(
				'Tradition.slug' => $slug
			)
		));
		if(empty($tradition)) {
			die('invalid tradition');
		}
		$this->set(compact('tradition'));

		$traditionid = $tradition['Tradition']['id'];

		$traditions = $this->Tradition->find('all', array(
			'recursive' => -1,
			'conditions' => array(),
			'order' => array(
				'Tradition.name' => 'ASC'
			)
		));
		$this->set(compact('traditions'));

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
				'Product.category_id',
				'Product.name',
				'Product.slug',
				'Product.description',
				'Product.price',
				'Product.image',
				'Product.image_1',
				'Product.image_2',
				'Product.image_3',
				'Product.image_4',
				'Product.image_5',
				'User.id',
				'User.slug',
			),
			'conditions' => array(
				"FIND_IN_SET('$traditionid', traditions)"
			),
			'limit' => 30,
			'order' => array('Product.id' => 'DESC')
		);

		$products = $this->paginate('Product');
		$this->set(compact('products'));

	}

////////////////////////////////////////////////////////////

	public function admin_index() {
		$this->Tradition->recursive = 0;
		$this->set('traditions', $this->paginate());
	}

////////////////////////////////////////////////////////////

	public function admin_view($id = null) {
		if (!$this->Tradition->exists($id)) {
			throw new NotFoundException(__('Invalid tradition'));
		}
		$options = array('conditions' => array('Tradition.' . $this->Tradition->primaryKey => $id));
		$this->set('tradition', $this->Tradition->find('first', $options));
	}

////////////////////////////////////////////////////////////

	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Tradition->create();
			if ($this->Tradition->save($this->request->data)) {
				$this->Session->setFlash(__('The tradition has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tradition could not be saved. Please, try again.'));
			}
		}
	}

////////////////////////////////////////////////////////////

	public function admin_edit($id = null) {
		if (!$this->Tradition->exists($id)) {
			throw new NotFoundException(__('Invalid tradition'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Tradition->save($this->request->data)) {
				$this->Session->setFlash(__('The tradition has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tradition could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Tradition.' . $this->Tradition->primaryKey => $id));
			$this->request->data = $this->Tradition->find('first', $options);
		}
	}

////////////////////////////////////////////////////////////

	public function admin_delete($id = null) {
		$this->Tradition->id = $id;
		if (!$this->Tradition->exists()) {
			throw new NotFoundException(__('Invalid tradition'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Tradition->delete()) {
			$this->Session->setFlash(__('Tradition deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Tradition was not deleted'));
		$this->redirect(array('action' => 'index'));
	}

////////////////////////////////////////////////////////////

}
