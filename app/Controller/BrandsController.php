<?php
App::uses('AppController', 'Controller');
class BrandsController extends AppController {

////////////////////////////////////////////////////////////

	public function index() {
		$this->Brand->recursive = 0;
		$this->set('brands', $this->paginate());
	}

////////////////////////////////////////////////////////////

	public function view($id = null) {
		if (!$this->Brand->exists($id)) {
			throw new NotFoundException(__('Invalid brand'));
		}
		$options = array('conditions' => array('Brand.' . $this->Brand->primaryKey => $id));
		$this->set('brand', $this->Brand->find('first', $options));
	}

////////////////////////////////////////////////////////////

	public function admin_reset() {
		$this->Session->delete('Brand');
		$this->redirect(array('action' => 'index'));
	}

////////////////////////////////////////////////////////////

	public function admin_index() {

		if ($this->request->is('post')) {

			if(!empty($this->request->data['Brand']['name'])) {
				$filter = $this->request->data['Brand']['filter'];
				$this->Session->write('Brand.filter', $filter);
				$name = $this->request->data['Brand']['name'];
				$this->Session->write('Brand.name', $name);
				$conditions[] = array(
					'Brand.' . $filter . ' LIKE' => '%' . $name . '%'
				);
			} else {
				$this->Session->write('Brand.filter', '');
				$this->Session->write('Brand.name', '');
			}

			$this->Session->write('Brand.conditions', $conditions);
			$this->redirect(array('action' => 'index'));

		}

		$all = array(
			'user_id' => '',
			'brand_id' => '',
			'name' => '',
			'filter' => '',
			'conditions' => ''
		);

		if($this->Session->check('Brand')) {
			$all = $this->Session->read('Brand');
		}

		$this->set(compact('all'));

		$this->paginate = array(
			'recursive' => -1,
			'contain' => array(
			),
			'conditions' => $all['conditions'],
			'limit' => 50,
		);

		$brands = $this->paginate('Brand');

		$this->set(compact('brands'));
	}

////////////////////////////////////////////////////////////

	public function admin_view($id = null) {
		if (!$this->Brand->exists($id)) {
			throw new NotFoundException(__('Invalid brand'));
		}
		$options = array('conditions' => array('Brand.' . $this->Brand->primaryKey => $id));
		$this->set('brand', $this->Brand->find('first', $options));
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
