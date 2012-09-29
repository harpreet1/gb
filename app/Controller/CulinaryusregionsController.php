<?php
App::uses('AppController', 'Controller');

class CulinaryusregionsController extends AppController {

////////////////////////////////////////////////////////////

	public function index() {
		$this->Culinaryusregion->recursive = 0;
		$this->set('culinaryusregions', $this->paginate());
	}

////////////////////////////////////////////////////////////

	public function view($slug = null) {

		$culinaryusregion = $this->Culinaryusregion->find('first', array(
			'recursive' => -1,
			'conditions' => array(
				'Culinaryusregion.slug' => $slug
			)
		));
		if(empty($culinaryusregion)) {
			die('invalid region');
		}
		$this->set(compact('culinaryusregion'));

		$culinaryusregions = $this->Culinaryusregion->find('all', array(
			'recursive' => -1,
			'conditions' => array(),
			'order' => array(
				'Culinaryusregion.name' => 'ASC'
			)
		));
		$this->set(compact('culinaryusregions'));

		$regionid = $culinaryusregion['Culinaryusregion']['id'];

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
			'conditions' => array('FIND_IN_SET("'.$regionid.'", dom_tradition_ids)'),
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
		$this->Culinaryusregion->recursive = 0;
		$this->set('culinaryusregions', $this->paginate());
	}

////////////////////////////////////////////////////////////

	public function admin_view($id = null) {
		$this->Culinaryusregion->id = $id;
		if (!$this->Culinaryusregion->exists()) {
			throw new NotFoundException(__('Invalid culinaryusregion'));
		}
		$this->set('culinaryusregion', $this->Culinaryusregion->read(null, $id));
	}

////////////////////////////////////////////////////////////

	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Culinaryusregion->create();
			if ($this->Culinaryusregion->save($this->request->data)) {
				$this->Session->setFlash(__('The culinaryusregion has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The culinaryusregion could not be saved. Please, try again.'));
			}
		}
	}

////////////////////////////////////////////////////////////

	public function admin_edit($id = null) {
		$this->Culinaryusregion->id = $id;
		if (!$this->Culinaryusregion->exists()) {
			throw new NotFoundException(__('Invalid culinaryusregion'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Culinaryusregion->save($this->request->data)) {
				$this->Session->setFlash(__('The culinaryusregion has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The culinaryusregion could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Culinaryusregion->read(null, $id);
		}
	}

////////////////////////////////////////////////////////////

	public function admin_delete($id = null) {
		$this->Culinaryusregion->id = $id;
		if (!$this->Culinaryusregion->exists()) {
			throw new NotFoundException(__('Invalid culinaryusregion'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Culinaryusregion->delete()) {
			$this->Session->setFlash(__('Culinaryusregion deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Culinaryusregion was not deleted'));
		$this->redirect(array('action' => 'index'));
	}

////////////////////////////////////////////////////////////

}
