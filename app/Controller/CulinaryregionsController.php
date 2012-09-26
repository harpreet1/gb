<?php
App::uses('AppController', 'Controller');
/**
 * Culinaryregions Controller
 *
 * @property Culinaryregion $Culinaryregion
 */
class CulinaryregionsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Culinaryregion->recursive = 0;
		$this->set('culinaryregions', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Culinaryregion->id = $id;
		if (!$this->Culinaryregion->exists()) {
			throw new NotFoundException(__('Invalid culinaryregion'));
		}
		$this->set('culinaryregion', $this->Culinaryregion->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
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

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
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

/**
 * delete method
 *
 * @throws NotFoundException
 * @throws MethodNotAllowedException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
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

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Culinaryregion->recursive = 0;
		$this->set('culinaryregions', $this->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		$this->Culinaryregion->id = $id;
		if (!$this->Culinaryregion->exists()) {
			throw new NotFoundException(__('Invalid culinaryregion'));
		}
		$this->set('culinaryregion', $this->Culinaryregion->read(null, $id));
	}

/**
 * admin_add method
 *
 * @return void
 */
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

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
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

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @throws MethodNotAllowedException
 * @param string $id
 * @return void
 */
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
}
