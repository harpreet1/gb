<?php
App::uses('AppController', 'Controller');
class BlogsController extends AppController {

////////////////////////////////////////////////////////////

	public function index() {
		$this->paginate = array(
			'recursive' => -1,
			'limit' => 40,
			'conditions' => array(
				'Blog.active' => 1
			),
			'order' => array(
				'Blog.created' => 'DESC'
			),
			'paramType' => 'querystring',
		);
		$blogs = $this->paginate('Blog');
		$this->set(compact('blogs'));
	}

////////////////////////////////////////////////////////////

	public function view($slug = null) {
		$blog = $this->Blog->find('first', array(
			'conditions' => array(
				'Blog.slug' => $slug
			)
		));

		if (empty($blog)) {
			$this->Session->setFlash('Invalid blog');
			$this->redirect(array('action' => 'index'));
		}

		$this->set(compact('blog'));
	}

////////////////////////////////////////////////////////////

	public function admin_index() {
		$this->Blog->recursive = 0;
		$this->set('blogs', $this->paginate());
	}

////////////////////////////////////////////////////////////

	public function admin_view($id = null) {
		$this->Blog->id = $id;
		if (!$this->Blog->exists()) {
			throw new NotFoundException(__('Invalid blog'));
		}
		$this->set('blog', $this->Blog->read(null, $id));
	}

////////////////////////////////////////////////////////////

	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Blog->create();
			if ($this->Blog->save($this->request->data)) {
				$this->Session->setFlash(__('The blog has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The blog could not be saved. Please, try again.'));
			}
		}
	}

////////////////////////////////////////////////////////////

	public function admin_edit($id = null) {
		$this->Blog->id = $id;
		if (!$this->Blog->exists()) {
			throw new NotFoundException(__('Invalid blog'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Blog->save($this->request->data)) {
				$this->Session->setFlash(__('The blog has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The blog could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Blog->read(null, $id);
		}
	}

////////////////////////////////////////////////////////////

	public function admin_delete($id = null) {
		$this->Blog->id = $id;
		if (!$this->Blog->exists()) {
			throw new NotFoundException(__('Invalid blog'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Blog->delete()) {
			$this->Session->setFlash(__('Blog deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Blog was not deleted'));
		$this->redirect(array('action' => 'index'));
	}

////////////////////////////////////////////////////////////

}
