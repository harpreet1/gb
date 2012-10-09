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
			//'counterCache' => true,
		)
	);

////////////////////////////////////////////////////////////

}
