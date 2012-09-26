<?php
App::uses('AppController', 'Controller');
/**
 * Culinaryusregions Controller
 *
 * @property Culinaryusregion $Culinaryusregion
 */
class CulinaryusregionsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Culinaryusregion->recursive = 0;
		$this->set('culinaryusregions', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Culinaryusregion->id = $id;
		if (!$this->Culinaryusregion->exists()) {
			throw new NotFoundException(__('Invalid culinaryusregion'));
		}
		$this->set('culinaryusregion', $this->Culinaryusregion->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
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

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
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

/**
 * delete method
 *
 * @throws NotFoundException
 * @throws MethodNotAllowedException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
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

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Culinaryusregion->recursive = 0;
		$this->set('culinaryusregions', $this->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		$this->Culinaryusregion->id = $id;
		if (!$this->Culinaryusregion->exists()) {
			throw new NotFoundException(__('Invalid culinaryusregion'));
		}
		$this->set('culinaryusregion', $this->Culinaryusregion->read(null, $id));
	}

/**
 * admin_add method
 *
 * @return void
 */
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

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
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

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @throws MethodNotAllowedException
 * @param string $id
 * @return void
 */
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
}
