<?php
App::uses('AppController', 'Controller');
class ContentsController extends AppController {

////////////////////////////////////////////////////////////

	public $scaffold = 'admin';

////////////////////////////////////////////////////////////

	public function homepage() {

		$contents = $this->Content->find('all', array(
			'conditions' => array(
				'Content.active' => 1,
				'Content.type' => 'slider'
			)
		));
		$this->set(compact('contents'));
		
		$welcome = $this->Content->find('first', array(
			'conditions' => array(
				'Content.type' => 'welcome'
			)
		));
		$this->set(compact('welcome'));
		
		$blocks = ClassRegistry::init('Block')->find('all');	
		$this->set(compact('blocks'));
		
		$this->layout = 'homepage';

	}

////////////////////////////////////////////////////////////

}

