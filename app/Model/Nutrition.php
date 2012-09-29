<?php
App::uses('AppModel', 'Model');
class Nutrition extends AppModel {

////////////////////////////////////////////////////////////

	public $belongsTo = array(
		'Product' => array(
			'className' => 'Product',
			'foreignKey' => 'product_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

////////////////////////////////////////////////////////////

}
