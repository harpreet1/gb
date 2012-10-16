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

	public function view($slug = null) {

		$category = $this->Category->find('first', array(
			'recursive' => -1,
			'fields' => array(
				'Category.*',
			),
			'conditions' => array(
				'Category.slug' => $slug
			)
		));

		if(empty($category)) {
			die('invalid category');
		}

		$this->set(compact('category'));

		$subcategories = $this->Category->Subcategory->find('all', array(
			'recursive' => -1,
			'contain' => array(
//				'User',
				'Subsubcategory'
			),
			'conditions' => array(
//				'User.active' => 1,
//				'User.level' => 'vendor',
				'Subcategory.category_id' => $category['Category']['id']
			)
		));
		//debug($subcategories);
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
				'Product.category_id' => $category['Category']['id']
			)
		));
//		debug($products);
		$this->set(compact('products'));

	}

////////////////////////////////////////////////////////////

	public function admin_index() {

		$this->paginate = array(
			'recursive' => -1,
			'fields' => array(
				'Category.*',
			),
			'order' => array(
				'Category.name' => 'ASC'
			),
			'limit' => 100,
			'paramType' => 'querystring',
		);
		$categories = $this->paginate('Category');
		$this->set(compact('categories'));

	}

////////////////////////////////////////////////////////////

	public function admin_view($id = null) {

		if (isset($this->request->data['Category']['image_type'])) {

			$slug = $this->request->data['Category']['slug'];
			$image = $this->request->data['Category']['slug'] . '.jpg';

			$type = $this->request->data['Category']['image_type'];

			$targetdir = IMAGES . 'categories/' . $type . '/';

			$this->Image = $this->Components->load('Image');

			$upload = $this->Image->upload($this->request->data['Category']['image']['tmp_name'], $targetdir, $image);

			if($upload == 'Success') {
				$this->Category->id = $this->request->data['Category']['id'];
				$this->Category->saveField($type, $image);
				$uploadedfile = $targetdir . '/' . $image;
				//$this->Image->resample($uploadedfile, IMAGES . '/categories/' . $slug . '/', $image, 900, 600, 1, 0);
				//$this->Image->resample($uploadedfile, IMAGES . '/categories/', $image, 200, 200, 1, 0);
			}

			$this->Session->setFlash($upload);
			$this->redirect($this->referer());
		}

		if (!$this->Category->exists($id)) {
			throw new NotFoundException(__('Invalid category'));
		}
		$options = array('conditions' => array('Category.' . $this->Category->primaryKey => $id));
		$this->set('category', $this->Category->find('first', $options));
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
	}

////////////////////////////////////////////////////////////

	public function admin_edit($id = null) {
		if (!$this->Category->exists($id)) {
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
			$options = array('conditions' => array('Category.id' => $id));
			$this->request->data = $this->Category->find('first', $options);
		}
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
