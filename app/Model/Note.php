<?php
App::uses('AppModel', 'Model');
class Note extends AppModel {

////////////////////////////////////////////////////////////

	public $validate = array(
		'name' => array(
			'between' => array(
				'rule' => array('between', 3, 50),
				'message' => 'Invalid Name',
				'allowEmpty' => false,
				'required' => true,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'note' => array(
			'between' => array(
				'rule' => array('between', 3, 1500),
				'message' => 'Invalid Note',
				'allowEmpty' => false,
				'required' => true,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

////////////////////////////////////////////////////////////


	public function getNotes() {

		$notes = $this->find('all', array(
			'fields' => array(
				'Note.id',
				'Note.name',
				'Note.slug',
			),
			'order' => array(
				'Note.id' => 'DESC'
			),
		));

		return $notes;
	}



}
