<?php
App::uses('AppController', 'Controller');
class ArticlesController extends AppController {

	public function index() {
		$this->paginate = array(
			'recursive' => -1,
			'limit' => 40,
			'conditions' => array(
				'Article.active' => 1
			),
			'order' => array(
				'Article.created' => 'DESC'
			),
			'paramType' => 'querystring',
		);
		$articles = $this->paginate('Article');
		$this->set(compact('articles'));
	}

	public function view($slug = null) {
		$article = $this->Article->find('first', array(
			'conditions' => array(
				'Article.slug' => $slug
			)
		));
		if (empty($article)) {
			$this->Session->setFlash('Invalid Article');
			$this->redirect(array('action' => 'index'));
		}
		$this->set(compact('article'));
	}

	public function admin_index() {
		$this->Article->recursive = 0;
		$this->set('articles', $this->paginate());
	}

	public function admin_view($id = null) {
		if (!$this->Article->exists($id)) {
			throw new NotFoundException(__('Invalid article'));
		}
		$options = array('conditions' => array('Article.' . $this->Article->primaryKey => $id));
		$this->set('article', $this->Article->find('first', $options));
	}

	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Article->create();
			if ($this->Article->save($this->request->data)) {
				$this->Session->setFlash(__('The article has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The article could not be saved. Please, try again.'));
			}
		}
	}

	public function admin_edit($id = null) {
		if (!$this->Article->exists($id)) {
			throw new NotFoundException(__('Invalid article'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Article->save($this->request->data)) {
				$this->Session->setFlash(__('The article has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The article could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Article.' . $this->Article->primaryKey => $id));
			$this->request->data = $this->Article->find('first', $options);
		}
	}

	public function admin_delete($id = null) {
		$this->Article->id = $id;
		if (!$this->Article->exists()) {
			throw new NotFoundException(__('Invalid article'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Article->delete()) {
			$this->Session->setFlash(__('Article deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Article was not deleted'));
		$this->redirect(array('action' => 'index'));
	}

}
