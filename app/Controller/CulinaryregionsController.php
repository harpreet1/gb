<?php
App::uses('AppController', 'Controller');
class CulinaryregionsController extends AppController {

////////////////////////////////////////////////////////////

	public function index() {
	}

////////////////////////////////////////////////////////////

	public function view($slug = null) {

		$culinaryregion = $this->Culinaryregion->find('first', array(
			'recursive' => -1,
			'conditions' => array(
				'Culinaryregion.slug' => $slug
			)
		));
		if(empty($culinaryregion)) {
			die('invalid region');
		}
		$this->set(compact('culinaryregion'));

		$regionid = $culinaryregion['Culinaryregion']['id'];

		$culinaryregions = $this->Culinaryregion->find('all', array(
			'recursive' => -1,
			'conditions' => array(),
			'order' => array(
				'Culinaryregion.name' => 'ASC'
			)
		));
		$this->set(compact('culinaryregions'));

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
				'User.short_name',
			),
			'conditions' => array("FIND_IN_SET('$regionid', tradition_ids)"),
			'limit' => 30,
			'order' => array('Product.id' => 'DESC')
		);

		$products = $this->paginate('Product');
		$this->set(compact('products'));

	}

////////////////////////////////////////////////////////////

	public function admin_index() {
		$this->Culinaryregion->recursive = 0;
		$this->set('culinaryregions', $this->paginate());
	}

////////////////////////////////////////////////////////////

	public function admin_view($id = null) {
		$this->Culinaryregion->id = $id;
		if (!$this->Culinaryregion->exists()) {
			throw new NotFoundException(__('Invalid culinaryregion'));
		}
		$this->set('culinaryregion', $this->Culinaryregion->read(null, $id));
	}

////////////////////////////////////////////////////////////

	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Culinaryregion->create();
			if ($this->Culinaryregion->save($this->request->data)) {
				$this->Session->setFlash(__('The culinaryregion has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The culinaryregion could not be saved. Please, try again.'));
			}
		}
	}

////////////////////////////////////////////////////////////

	public function admin_edit($id = null) {
		$this->Culinaryregion->id = $id;
		if (!$this->Culinaryregion->exists()) {
			throw new NotFoundException(__('Invalid culinaryregion'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Culinaryregion->save($this->request->data)) {
				$this->Session->setFlash(__('The culinaryregion has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The culinaryregion could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Culinaryregion->read(null, $id);
		}
	}

////////////////////////////////////////////////////////////

	public function admin_delete($id = null) {
		$this->Culinaryregion->id = $id;
		if (!$this->Culinaryregion->exists()) {
			throw new NotFoundException(__('Invalid culinaryregion'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Culinaryregion->delete()) {
			$this->Session->setFlash(__('Culinaryregion deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Culinaryregion was not deleted'));
		$this->redirect(array('action' => 'index'));
	}

////////////////////////////////////////////////////////////

}
