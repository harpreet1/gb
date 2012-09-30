<?php
App::uses('Controller', 'Controller');
class AppController extends Controller {

////////////////////////////////////////////////////////////

	public $components = array(
		'Session',
		'Auth',
		'RequestHandler',
		'DebugKit.Toolbar',
	);

////////////////////////////////////////////////////////////

	public function beforeFilter() {

		$this->Auth->loginAction = array('controller' => 'users', 'action' => 'login', 'admin' => false);
		$this->Auth->loginRedirect = array('controller' => 'products', 'action' => 'index', 'admin' => true);
		$this->Auth->logoutRedirect = array('controller' => 'products', 'action' => 'index', 'admin' => false);

		$this->Auth->authenticate = array(
			AuthComponent::ALL => array(
				'userModel' => 'User',
				'fields' => array(
					'username' => 'username',
					'password' => 'password'
				),
				'scope' => array(
				// 'User.is_active' => 1
				)
			), 'Form'
		);

		if(isset($this->request->params['admin']) && ($this->request->params['prefix'] == 'admin')) {
			$this->layout = 'admin';
		} else {
			$this->Auth->allow();

			$menuvendors = Cache::read('menuvendors');
			if (!$menuvendors) {
				$menuvendors = ClassRegistry::init('User')->getVendors();
				Cache::set(array('duration' => '+10 minutes'));
				Cache::write('menuvendors', $menuvendors);
			}
			$this->set(compact('menuvendors'));
		}

	}

////////////////////////////////////////////////////////////

	public function _getSubDomain() {
		$url = explode('.', $_SERVER['HTTP_HOST']);
		return $url[0];
	}

////////////////////////////////////////////////////////////

	public function admin_switch($field = null, $id = null) {
		$model = $this->modelClass;

		$this->$model->recursive = -1;

		$data = $this->$model->findById($id);
		$value = 0;
		if($data[$model][$field] == 0) {
			$value = 1;
		}
		$this->$model->id = $id;
		$this->$model->saveField($field, $value);
		if(!$this->RequestHandler->isAjax()) {
			$this->redirect($this->referer());
		}
		$this->autoRender = false;
	}

////////////////////////////////////////////////////////////

	public function admin_editable() {

		$model = $this->modelClass;

		$id = $this->request->data['pk'];
		$field = $this->request->data['name'];
		$value = $this->request->data['value'];

		$this->$model->id = $id;
		$this->$model->saveField($field, $value);

		$this->autoRender = false;

	}

////////////////////////////////////////////////////////////

}
