<?php
App::uses('AppModel', 'Model');
class Note extends AppModel {

////////////////////////////////////////////////////////////

	public $validate = array(
		'name' => array(
			'between' => array(
				'rule' => array('between', 3, 50),
				'message' => 'Invalid Title',
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

}
