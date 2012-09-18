<?php
App::uses('AppModel', 'Model');
/**
 * Nutrition Model
 *
 * @property Product $Product
 */
class Nutrition extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'nutrition';

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'nutrition_id';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Product' => array(
			'className' => 'Product',
			'foreignKey' => 'product_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
