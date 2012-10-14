<?php
App::uses('AppModel', 'Model');
class Subsubcategory extends AppModel {

////////////////////////////////////////////////////////////

	public $belongsTo = array(
		'Subcategory' => array(
			'className' => 'Subcategory',
			'foreignKey' => 'subcategory_id',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'counterCache' => true,
		)
	);

////////////////////////////////////////////////////////////

	public $hasMany = array(
		'Product' => array(
			'className' => 'Product',
			'foreignKey' => 'subsubcategory_id',
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

}
