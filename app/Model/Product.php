<?php
App::uses('AppModel', 'Model');
class Product extends AppModel {

////////////////////////////////////////////////////////////

	public $validate = array(
		'name' => array(
			'rule1' => array(
				'rule' => array('between', 3, 100),
				'message' => 'invalid name',
				'allowEmpty' => false,
				'required' => true,
			),
			'rule2' => array(
				'rule' => array('isUnique'),
				'message' => 'name already exists',
				'allowEmpty' => false,
				'required' => true,
			),
		),
		'slug' => array(
			'rule1' => array(
				'rule' => array('between', 3, 100),
				'message' => 'invalid slug',
				'allowEmpty' => false,
				'required' => true,
			),
			'rule2' => array(
				'rule' => array('isUnique'),
				'message' => 'slug already exists',
				'allowEmpty' => false,
				'required' => true,
			),
			'rule3' => array(
				'rule' => '/^[a-z0-9-]{3,}$/',
				'message' => 'Only letters and integers, min 3 characters'
			)
		),
	);

////////////////////////////////////////////////////////////

	public $belongsTo = array(
		'User' => array(
			'className' => 'User',
			'foreignKey' => 'user_id',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'counterCache' => true,
			'counterScope' => array('Product.active' => 1)
		),
		'Category' => array(
			'className' => 'Category',
			'foreignKey' => 'category_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Subcategory' => array(
			'className' => 'Subcategory',
			'foreignKey' => 'subcategory_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Subsubcategory' => array(
			'className' => 'Subsubcategory',
			'foreignKey' => 'subsubcategory_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Ustradition' => array(
			'className' => 'Ustradition',
			'foreignKey' => 'ustradition_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
	);

////////////////////////////////////////////////////////////

	public $hasMany = array(
		'Nutrition' => array(
			'className' => 'Nutrition',
			'foreignKey' => 'product_id',
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

	public $hasAndBelongsToMany = array(
		'Tag' => array(
			'className' => 'Tag',
			'joinTable' => 'products_tags',
			'foreignKey' => 'product_id',
			'associationForeignKey' => 'tag_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
			'deleteQuery' => '',
			'insertQuery' => ''
		)
	);

////////////////////////////////////////////////////////////

}
