<?php
App::uses('AppController', 'Controller');
class BlocksController extends AppController {

////////////////////////////////////////////////////////////

	public function admin_index() {
		$this->paginate = array(
			'recursive' => 0,
			'order' => array(
				'Block.id' => 'DESC',
				
			),
			
		);
		$blocks = $this->paginate('Block');
		$this->set(compact('blocks'));
	}
	
////////////////////////////////////////////////////////////

	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Block->create();
			if ($this->Block->save($this->request->data)) {
				$this->Session->setFlash('The test has been saved');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('The test could not be saved. Please, try again.');
			}
		}
		
		
		
	}
		

////////////////////////////////////////////////////////////


	public function admin_edit($id = null) {
		
		
		if (!$this->Block->exists($id)) {
			throw new NotFoundException(__('Invalid block'));
			
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			
			
			if ($this->Block->save($this->request->data)) {
				$this->Session->setFlash(__('The block has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The block could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Block.id' => $id));
			$this->request->data = $this->Block->find('first', $options);
		}
		// Getting records of articles
		//$blocks = $this->Article->Block->find('list');
		$this->set(compact('blocks'));
	}






//	public function admin_edit($id = null) {
//		$this->Block->id = $id;
//		
//		if (!$this->Block->exists()) {
//			throw new NotFoundException('Invalid note');
//		}
//		
//		
//		if ($this->request->is('post') || $this->request->is('put')) {
//			if ($this->Block->save($this->request->data)) {
//				$this->Session->setFlash('The block has been saved');
//				$this->redirect(array('action' => 'index'));
//			} else {
//				$this->Session->setFlash('The block could not be saved. Please, try again.');
//				
//			}
//		} else {
//			$this->request->data = $this->Block->read(null, $id);
//		}
//		
//	
//		//$priorities = $this->Test->priorities();
//		//$authors = $this->Test->authors();
//		//$this->set(compact('priorities','authors'));
//	}

////////////////////////////////////////////////////////////

	public function admin_delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->Block->id = $id;
		if (!$this->Block->exists()) {
			throw new NotFoundException('Invalid note');
		}
		if ($this->Block->delete()) {
			$this->Session->setFlash('Block deleted');
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash('Block was not deleted');
		$this->redirect(array('action' => 'index'));
	}

////////////////////////////////////////////////////////////

}
