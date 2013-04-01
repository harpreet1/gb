<?php
App::uses('AppController', 'Controller');
class ArticlesController extends AppController {

	public $uses = array('Article','Block');
	
////////////////////////////////////////////////////////////

	public function index($block = null, $slug = null) {
		if(empty($slug) && empty($block)){
			$article = $this->Article->find('first', array(
				'conditions' => array(
					'Article.active' => 1,
				),
				'order' => array(
					'Article.created' => 'DESC'
				)
			));
			}
		elseif(empty($slug) && $block != null){
			$article = $this->Block->find('first', array(
				'recursive' => -1,
				'conditions' => array(
					'Block.slug' => $block
				),
				'fields' => array(
					'Block.id',
					'Block.name',
					'Block.image',
					'Block.subtitle',
					'Block.writeup',
					'Block.slug'
				)
			));
		}
		else{
			$article = $this->Article->find('first', array(
				'conditions' => array(
					'Article.active' => 1,
					'Article.slug' => $slug,
				)
			));
		}
		
		$this->set(compact('article'));
		//pr($article); exit;
		
		$blocks = $this->Block->find('all', array(
			'recursive' => 2,
		));
		$this->set(compact('blocks'));
	}

////////////////////////////////////////////////////////////

	public function view($slug = null) {
		$article = $this->Article->find('first', array(
			'conditions' => array(
				'Article.slug' => $slug
			)
		));
		
		// Get article list find by block
		$articlelist = $this->Article->find('all', array(
			'recursive' => 0,
			'fields' => array(
				'Article.name',
				'Article.slug',
				'Block.name',
				'Block.slug'
			),
			//'conditions' => array(
//				'User.slug' => $subDomain
//			)
		));
		
		
		if (empty($article)) {
			$this->Session->setFlash('Invalid Article');
			$this->redirect(array('action' => 'index'));
		}
		$this->set(compact('article'));
	}

////////////////////////////////////////////////////////////

	public function admin_index() {
		$this->Article->recursive = 0;
		$this->set('articles', $this->paginate());
	}

////////////////////////////////////////////////////////////

	public function admin_view($id = null) {

		if (isset($this->request->data['Article']['image_type'])) {

			$slug = $this->request->data['Article']['slug'];
			$image = $this->request->data['Article']['slug'] . '.jpg';

			$type = $this->request->data['Article']['image_type'];

			$targetdir = IMAGES . 'articles/' . $type;

			$this->Image = $this->Components->load('Image');

			$upload = $this->Image->upload($this->request->data['Article']['image']['tmp_name'], $targetdir, $image);

			if($upload == 'Success') {
				$this->Article->id = $this->request->data['Article']['id'];
				$this->Article->saveField($type, $image);
				$uploadedfile = $targetdir . '/' . $image;
				$this->Image->resample($uploadedfile, IMAGES . '/articles/' . $type . '/', $image, 400, 400, 1, 0);
				//$this->Image->resample($uploadedfile, IMAGES . '/user_image/', $image, 200, 200, 1, 0);
			}

			$this->Session->setFlash($upload);
			$this->redirect($this->referer());
		}

		if (!$this->Article->exists($id)) {
			throw new NotFoundException(__('Invalid article'));
		}
		// For particular block on article views
		$subcategory = $this->Article->find('first', array(
			'contain' => array('Block'),
			'conditions' => array(
				'Article.id' => $id
			)
		));
		$this->set(compact('article'));
		$options = array('conditions' => array('Article.id' => $id));
		$this->set('article', $this->Article->find('first', $options));

	}

////////////////////////////////////////////////////////////

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
		// Getting records of articles
		$blocks = $this->Article->Block->find('list');
		$this->set(compact('blocks'));
	}

////////////////////////////////////////////////////////////

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
			$options = array('conditions' => array('Article.id' => $id));
			$this->request->data = $this->Article->find('first', $options);
		}
		// Getting records of articles
		$blocks = $this->Article->Block->find('list');
		$this->set(compact('blocks'));
	}

////////////////////////////////////////////////////////////

	public function admin_delete($id = null) {
		$this->Article->id = $id;
		if (!$this->Article->exists()) {
			throw new NotFoundException('Invalid article');
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Article->delete()) {
			$this->Session->setFlash('Article deleted');
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash('Article was not deleted');
		$this->redirect(array('action' => 'index'));
	}

////////////////////////////////////////////////////////////

}