<?php
App::uses('AppController', 'Controller');
class UsersController extends AppController {

////////////////////////////////////////////////////////////

	public function beforeFilter() {
		parent::beforeFilter();
		$this->Auth->allow('login');
	}

////////////////////////////////////////////////////////////

	public function vendors() {
		$users = $this->User->find('all', array(
			'recursive' => -1,
			'fields' => array(
				'User.id',
				'User.name',
				'User.slug',
				'User.image',
			),
			'conditions' => array(
				'User.active' => 1,
				'User.level' => 'vendor'
			),
			'order' => array(
				'User.name' => 'ASC'
			),
		));

//		foreach($users as $user) {
//			if(strstr($user['User']['image'], '.jpg')) {
//				rename(IMAGES . 'logos/' . $user['User']['logo'], IMAGES . 'logo/' . $user['User']['short_name'] . '.jpg');
//				$data['User']['id'] = $user['User']['id'];
//				$data['User']['image'] = $user['User']['slug'] . '.jpg';
//				print_r($data);
//				$this->User->save($data, false);
//			}
//		}

		$this->set(compact('users'));
	}

////////////////////////////////////////////////////////////

	public function login() {
		if ($this->request->is('post')) {
			if($this->Auth->login()) {

				if ($this->Auth->user('level') == 'vendor') {
					return $this->redirect(array(
						'controller' => 'users',
						'action' => 'dashboard',
						'vendor' => true
					));
				} elseif ($this->Auth->user('level') == 'admin') {
					return $this->redirect(array(
						'controller' => 'users',
						'action' => 'dashboard',
						'admin' => true
					));
				} else {
					$this->Session->setFlash('Login is incorrect');
				}
			} else {
				$this->Session->setFlash('Login is incorrect');
			}
		}
	}

////////////////////////////////////////////////////////////

	public function logout() {
		$this->Session->setFlash('Good-Bye');
		$this->redirect($this->Auth->logout());
	}

////////////////////////////////////////////////////////////

	public function admin_dashboard() {
	}

////////////////////////////////////////////////////////////

	public function vendor_dashboard() {
	}

////////////////////////////////////////////////////////////

	public function admin_index() {
		$this->User->recursive = 0;
		$this->set('users', $this->paginate());
	}

////////////////////////////////////////////////////////////

	public function admin_images() {
		$users = $this->User->find('all', array(
			'recursive' => -1,
			'fields' => array(
				'User.id',
				'User.username',
				'User.name',
				'User.image',
				'User.image_1',
				'User.image_2',
				'User.image_3',
				'User.image_4',
				'User.image_5',
				'User.image_6',
			),
			'conditions' => array(
				'User.active' => 1,
				'User.level' => 'vendor'
			),
			'order' => array(
				'User.name' => 'ASC'
			),
		));

		$this->set(compact('users'));

		$this->layout = 'admin_simple';
	}

////////////////////////////////////////////////////////////

	public function admin_view($id = null) {

		if (isset($this->request->data['User']['image_type'])) {

			$slug = $this->request->data['User']['slug'];
			$image = $this->request->data['User']['slug'] . '.jpg';

			$type = $this->request->data['User']['image_type'];

			$targetdir = IMAGES . 'users/' . $type . '/';

			$this->Image = $this->Components->load('Image');

			$upload = $this->Image->upload($this->request->data['User']['image']['tmp_name'], $targetdir, $image);

			if($upload == 'Success') {
				$this->User->id = $this->request->data['User']['id'];
				$this->User->saveField($type, $image);
				$uploadedfile = $targetdir . '/' . $image;
				//$this->Image->resample($uploadedfile, IMAGES . '/user_image/' . $slug . '/', $image, 900, 600, 1, 0);
				//$this->Image->resample($uploadedfile, IMAGES . '/user_image/', $image, 200, 200, 1, 0);
			}

			$this->Session->setFlash($upload);
			$this->redirect($this->referer());
		}

		$this->User->id = $id;
		if (!$this->User->exists()) {
			throw new NotFoundException('Invalid user');
		}
		$this->set('user', $this->User->read(null, $id));
	}

////////////////////////////////////////////////////////////

	public function admin_add() {
		if ($this->request->is('post')) {
			$this->User->create();
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash('The user has been saved');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('The user could not be saved. Please, try again.');
			}
		}
	}

////////////////////////////////////////////////////////////

	public function admin_edit($id = null) {

		$this->User->id = $id;
		if (!$this->User->exists()) {
			throw new NotFoundException(__('Invalid user'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash('The user has been saved');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('The user could not be saved. Please, try again.');
			}
		} else {
			$this->request->data = $this->User->read(null, $id);
			$this->set('user', $this->User->read(null, $id));
		}
	}

////////////////////////////////////////////////////////////

	public function admin_delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->User->id = $id;
		if (!$this->User->exists()) {
			throw new NotFoundException('Invalid user');
		}
		if ($this->User->delete()) {
			$this->Session->setFlash('User deleted');
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash('User was not deleted');
		$this->redirect(array('action' => 'index'));
	}

////////////////////////////////////////////////////////////

}
