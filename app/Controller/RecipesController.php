<?php
App::uses('AppController', 'Controller');
class RecipesController extends AppController {

////////////////////////////////////////////////////////////

	public function index() {

		$subDomain = $this->_getSubDomain();
		if($subDomain != 'www') {
			$conditions = array(
				'User.short_name' => $subDomain
			);
		}

		$this->loadModel('User');
		$user = $this->User->find('first', array(
			'recursive' => -1,
			'conditions' => array(
				'User.short_name' => $subDomain,
			)
		));
		if(empty($user)) {
			$this->redirect(array('action' => 'all'));
		}
		$this->set(compact('user'));

		$this->paginate = array(
			'recursive' => 0,
			'fields' => array(
				'Recipe.name',
				'Recipe.slug',
				'Recipe.image_1',
				'Recipe.image_caption_1',
				'Recipe.created',
				'User.short_name',
				'User.business_name',
				'Category.name',
			),
			'conditions' => array(
				$conditions
			),
			'order' => array(
				'Category.name' => 'ASC',
				'Recipe.name' => 'ASC'
			),
			'limit' => 20
		);
		$recipes = $this->paginate();
		$this->set(compact('recipes'));
	}

////////////////////////////////////////////////////////////

	public function all() {

		$categories = $this->Recipe->find('list', array(
			'recursive' => 1,
			'fields' => array(
				'Category.slug',
				'Category.name'
			),
			'conditions' => array(
				'Recipe.active' => 1
			),
			'group' => array(
				'Recipe.category_id'
			),
			'order' => array(
				'Category.name'
			)
		));
		$this->set(compact('categories'));


		$vendors = $this->Recipe->find('list', array(
			'recursive' => 1,
			'fields' => array(
				'User.short_name',
				'User.shop_name'
			),
			'conditions' => array(
				'Recipe.active' => 1,
				'User.short_name >' => ''
			),
			'group' => array(
				'User.id'
			),
			'order' => array(
				'User.short_name'
			)
		));

		$this->set(compact('vendors'));

		$conditions[] = array(
			'Recipe.active' => 1,
		);

		if(isset($this->params['named']['category']) ) {

			if (!array_key_exists($this->params['named']['category'], $categories)) {
				$this->redirect(array('action' => 'index'));
			}

			$conditions[] = array('Category.slug' => $this->params['named']['category']);

			$category_selected = $this->params['named']['category'];
		} else {
			$category_selected = '';
		}
		$this->set(compact('category_selected'));


		if(isset($this->params['named']['vendor']) ) {

			if (!array_key_exists($this->params['named']['vendor'], $vendors)) {
				$this->redirect(array('action' => 'index'));
			}

			$conditions[] = array('User.short_name' => $this->params['named']['vendor']);

			$vendor_selected = $this->params['named']['vendor'];
		} else {
			$vendor_selected = '';
		}
		$this->set(compact('vendor_selected'));

		$this->paginate = array(
			'recursive' => 0,
			'fields' => array(
				'Recipe.name',
				'Recipe.slug',
				'Recipe.image_1',
				'Recipe.image_caption_1',
				'Recipe.created',
				'User.short_name',
				'User.business_name',
				'Category.name',
			),
			'conditions' => array(
				$conditions
			),
			'order' => array(
				'Category.name' => 'ASC',
				'Recipe.name' => 'ASC'
			),
			'limit' => 20
		);
		$recipes = $this->paginate();
		$this->set(compact('recipes'));

	}

////////////////////////////////////////////////////////////

	public function view($id = null) {
		$this->Recipe->id = $id;
		if (!$this->Recipe->exists()) {
			throw new NotFoundException(__('Invalid recipe'));
		}
		$this->set('recipe', $this->Recipe->read(null, $id));
	}

////////////////////////////////////////////////////////////

	public function admin_index() {
		$this->Recipe->recursive = 0;
		$this->set('recipes', $this->paginate());
	}

////////////////////////////////////////////////////////////

	public function admin_view($id = null) {
		$this->Recipe->id = $id;
		if (!$this->Recipe->exists()) {
			throw new NotFoundException(__('Invalid recipe'));
		}
		$this->set('recipe', $this->Recipe->read(null, $id));
	}

////////////////////////////////////////////////////////////

	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Recipe->create();
			if ($this->Recipe->save($this->request->data)) {
				$this->Session->setFlash(__('The recipe has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The recipe could not be saved. Please, try again.'));
			}
		}
		$users = $this->Recipe->User->find('list');
		$subCategories = $this->Recipe->SubCategory->find('list');
		$categories = $this->Recipe->Category->find('list');
		$this->set(compact('users', 'subCategories', 'categories'));
	}

////////////////////////////////////////////////////////////

	public function admin_edit($id = null) {
		$this->Recipe->id = $id;
		if (!$this->Recipe->exists()) {
			throw new NotFoundException(__('Invalid recipe'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Recipe->save($this->request->data)) {
				$this->Session->setFlash(__('The recipe has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The recipe could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Recipe->read(null, $id);
		}
		$users = $this->Recipe->User->find('list');
		$subCategories = $this->Recipe->SubCategory->find('list');
		$categories = $this->Recipe->Category->find('list');
		$this->set(compact('users', 'subCategories', 'categories'));
	}

////////////////////////////////////////////////////////////

	public function admin_delete($id = null) {
		$this->Recipe->id = $id;
		if (!$this->Recipe->exists()) {
			throw new NotFoundException(__('Invalid recipe'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Recipe->delete()) {
			$this->Session->setFlash(__('Recipe deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Recipe was not deleted'));
		$this->redirect(array('action' => 'index'));
	}

////////////////////////////////////////////////////////////

}
