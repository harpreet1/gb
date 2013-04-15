<?php
App::uses('AppModel', 'Model');

class Member extends AppModel {


	public $components = array('SignMeUp.SignMeUp');

    public function beforeFilter() {
        $this->Auth->allow(array('login', 'forgotten_password', 'register', 'activate'));
        parent::beforeFilter();
    }
	
}
