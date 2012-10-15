<?php
App::uses('AppController', 'Controller');
class CategoriesController extends AppController {

////////////////////////////////////////////////////////////

	public function index() {
		$categories = $this->Category->find('all', array(
			'recursive' => -1,
			'fields' => array(
				'Category.id',
				'Category.name',
				'Category.slug',
				'Category.image',
			),
			'order' => array(
				'Category.name' => 'ASC'
			)
		));
		$this->set(compact('categories'));
	}

////////////////////////////////////////////////////////////

	public function view($id = null) {
		$this->Category->id = $id;
		if (!$this->Category->exists()) {
			throw new NotFoundException(__('Invalid category'));
		}

		$subcategories = $this->Category->Subcategory->find('all', array(
			'recursive' => -1,
			'contain' => array(
//				'User',
				'Subsubcategory'
			),
			'conditions' => array(
//				'User.active' => 1,
//				'User.level' => 'vendor',
				'Subcategory.category_id' => $id
			)
		));
		debug($subcategories);
		$this->set(compact('subcategories'));

		$products = $this->Category->Product->find('all', array(
			'recursive' => -1,
			'contain' => array('User'),
			'fields' => array(
				'Product.id',
				'Product.name',
				'Product.slug',
				'Product.image',
				'Product.price',
				'User.id',
				'User.name',
				'User.slug',
			),
			'conditions' => array(
				'User.active' => 1,
				'User.level' => 'vendor',
				'Product.active' => 1,
				'Product.category_id' => $id
			)
		));
//		debug($products);
		$this->set(compact('products'));

		$this->set('category', $this->Category->read(null, $id));
	}

////////////////////////////////////////////////////////////

	public function admin_index() {
		$this->Category->recursive = 0;
		$this->set('categories', $this->paginate());
	}

////////////////////////////////////////////////////////////

	public function admin_view($id = null) {
		$this->Category->id = $id;
		if (!$this->Category->exists()) {
			throw new NotFoundException(__('Invalid category'));
		}
		$this->set('category', $this->Category->read(null, $id));
	}

////////////////////////////////////////////////////////////

	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Category->create();
			if ($this->Category->save($this->request->data)) {
				$this->Session->setFlash(__('The category has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The category could not be saved. Please, try again.'));
			}
		}
		$users = $this->Category->User->find('list');
		$this->set(compact('users'));
	}

////////////////////////////////////////////////////////////

	public function admin_edit($id = null) {
		$this->Category->id = $id;
		if (!$this->Category->exists()) {
			throw new NotFoundException(__('Invalid category'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Category->save($this->request->data)) {
				$this->Session->setFlash(__('The category has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The category could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Category->read(null, $id);
		}
		$users = $this->Category->User->find('list');
		$this->set(compact('users'));
	}

////////////////////////////////////////////////////////////

	public function admin_delete($id = null) {
		$this->Category->id = $id;
		if (!$this->Category->exists()) {
			throw new NotFoundException(__('Invalid category'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Category->delete()) {
			$this->Session->setFlash(__('Category deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Category was not deleted'));
		$this->redirect(array('action' => 'index'));
	}

////////////////////////////////////////////////////////////

}
