<?php
App::uses('Controller', 'Controller');
class AppController extends Controller {

	public $components = array(
		'Session',
		'Auth',
		'RequestHandler',
		'DebugKit.Toolbar',
	);

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

	public function _getSubDomain() {
		$url = explode('.', $_SERVER['HTTP_HOST']);
		return $url[0];
	}


}
