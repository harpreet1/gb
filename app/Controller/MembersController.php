<?php
App::uses('AppController', 'Controller');
/**
 * Members Controller
 * Generated by Petit Four the online baking tool for CakePHP: http://patisserie.keensoftware.com
 * @property Member $Member
 */
class MembersController extends AppController {
	
	
 	public $components = array('SignMeUp.SignMeUp');

    public function beforeFilter() {
        $this->Auth->allow(array('login', 'forgotten_password', 'register', 'activate'));
        parent::beforeFilter();
        
    }
	
////////////////////////////////////////////////////////////


	public function register() {
		$this->SignMeUp->register();
	}

////////////////////////////////////////////////////////////

	public function activate() {
		$this->SignMeUp->activate();
	}
	
////////////////////////////////////////////////////////////

	public function forgotten_password() {
		$this->SignMeUp->forgottenPassword();
}

////////////////////////////////////////////////////////////


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Member->recursive = 0;
		$this->set('members', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Member->exists($id)) {
			throw new NotFoundException(__('Invalid member'));
		}
		$options = array('conditions' => array('Member.' . $this->Member->primaryKey => $id));
		$this->set('member', $this->Member->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Member->create();
			if ($this->Member->save($this->request->data)) {
				$this->Session->setFlash(__('The member has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The member could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Member->exists($id)) {
			throw new NotFoundException(__('Invalid member'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Member->save($this->request->data)) {
				$this->Session->setFlash(__('The member has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The member could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Member.' . $this->Member->primaryKey => $id));
			$this->request->data = $this->Member->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @throws MethodNotAllowedException
 * @param string id
 * @return void
 */
	public function delete($id = null) {
		$this->Member->id = $id;
		if (!$this->Member->exists()) {
			throw new NotFoundException(__('Invalid member'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Member->delete()) {
			$this->Session->setFlash(__('Member deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Member was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
	
	
////////////////////////////////////////////////////////////

	public function admin_index() {

		if ($this->request->is('post')) {

			if($this->request->data['Member']['active'] == '1' || $this->request->data['Member']['active'] == '0') {
				$conditions[] = array(
					'Member.active' => $this->request->data['Member']['active']
				);
				$this->Session->write('Member.active', $this->request->data['Member']['active']);
			} else {
				$this->Session->write('Member.active', '');
			}


			if(!empty($this->request->data['Member']['name'])) {
				$filter = $this->request->data['Member']['filter'];
				$this->Session->write('Member.filter', $filter);
				$name = $this->request->data['Member']['name'];
				$this->Session->write('Member.name', $name);
				$conditions[] = array(
					'Member.' . $filter . ' LIKE' => '%' . $name . '%'
				);
			} else {
				$this->Session->write('Member.filter', '');
				$this->Session->write('Member.name', '');
			}

			$this->Session->write('Member.conditions', $conditions);
			$this->redirect(array('action' => 'index'));

		}

		$all = array(
			'active' => '',
			'name' => '',
			'filter' => '',
			'conditions' => ''
		);

		if($this->Session->check('Member')) {
			$all = $this->Session->read('Member');
		}

		$this->set(compact('all'));


		$this->paginate = array(
			'recursive' => -1,
			'order' => array(
				'Member.active' => 'DESC',
				'Member.Membername' => 'ASC',
			),
			'conditions' => $all['conditions'],
			'limit' => 100,
		);
		$Members = $this->paginate('Member');
		$this->set(compact('Members'));
	}

	
	
	
	
	
	
	
	
	
	
	
}
