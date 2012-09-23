<?php
App::uses('AppModel', 'Model');
class Order extends AppModel {

//////////////////////////////////////////////////

	public $validate = array(
		'name' => array(
			'notempty' => array(
				'rule' => array('notEmpty'),
				'message' => 'Name is invalid',
				//'allowEmpty' => false,
//				'required' => true,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'email' => array(
			'email' => array(
				'rule' => array('email'),
				'message' => 'Email is invalid',
				//'allowEmpty' => false,
//				'required' => true,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'phone' => array(
			'notempty' => array(
				'rule' => array('phone'),
				'message' => 'Phone is invalid',
//				'allowEmpty' => true,
//				'required' => true,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'billing_address' => array(
			'notempty' => array(
				'rule' => array('notEmpty'),
				'message' => 'Billing Address is invalid',
				//'allowEmpty' => false,
//				'required' => true,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'billing_city' => array(
			'notempty' => array(
				'rule' => array('notEmpty'),
				'message' => 'Billing City is invalid',
				//'allowEmpty' => false,
//				'required' => true,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'billing_state' => array(
			'notempty' => array(
				'rule' => array('notEmpty'),
				'message' => 'Billing State is invalid',
				//'allowEmpty' => false,
//				'required' => true,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'shipping_address' => array(
			'notempty' => array(
				'rule' => array('notEmpty'),
				'message' => 'Shipping Address is invalid',
				//'allowEmpty' => false,
//				'required' => true,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'shipping_city' => array(
			'notempty' => array(
				'rule' => array('notEmpty'),
				'message' => 'Shipping City is invalid',
				//'allowEmpty' => false,
//				'required' => true,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'shipping_state' => array(
			'notempty' => array(
				'rule' => array('notEmpty'),
				'message' => 'Shipping State is invalid',
				//'allowEmpty' => false,
//				'required' => true,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),

		'creditcard_number' => array(
			'notempty' => array(
				'rule' => array('cc'),
				'message' => 'Credit Card Number is invalid',
				//'allowEmpty' => false,
//				'required' => true,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'creditcard_csc' => array(
			'notempty' => array(
				'rule' => array('notEmpty'),
				'message' => 'Credit Card Code is invalid',
				//'allowEmpty' => false,
//				'required' => true,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),

	);

//////////////////////////////////////////////////

	public $hasMany = array(
		'OrderItem' => array(
			'className' => 'OrderItem',
			'foreignKey' => 'order_id',
			'dependent' => true,
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

//////////////////////////////////////////////////

}
