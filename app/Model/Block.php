<?php
App::uses('AppModel', 'Model');
class Block extends AppModel {

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
				'message' => 'Invalid Test',
				'allowEmpty' => false,
				'required' => true,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);


////////////////////////////////////////////////////////////

// Relationship of block has many articles
    public $hasMany = array(
		'Article' => array(
			'className' => 'Article',
			'foreignKey' => 'block_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

////////////////////////////////////////////////////////////
    
// Find number of blocks 
    public function findList() {
        return $blocks = $this->find('list', array(
                'order' => array(
                        'Block.name' => 'ASC'
                )
        ));
    }


////////////////////////////////////////////////////////////


	public function getBlocks() {

		$blocks = $this->find('all', array(
			'fields' => array(
				'Block.id',
				'Block.name',
			),
			'order' => array(
				//'Test.priority' => 'DESC',
				'Block.id' => 'ASC'
			),
		));

		return $blocks;
	}


////////////////////////////////////////////////////////////

}