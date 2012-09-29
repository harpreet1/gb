<?php
App::uses('AppModel', 'Model');
class User extends AppModel {

////////////////////////////////////////////////////////////

	public $validate = array(
		'username' => array(
			'rule1' => array(
				'rule' => array('between', 3, 50),
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
				'rule' => array('between', 3, 50),
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

	public $hasMany = array(
		'Product'
	);

////////////////////////////////////////////////////////////

	public function beforeSave($options = array()) {
//		$password_unhashed = $this->data[$this->name]['password'];
//		$this->data[$this->name]['password'] = AuthComponent::password($password_unhashed);
//		return true;
	}

////////////////////////////////////////////////////////////

	public function getBySubdomain($subDomain) {

		$user = $this->find('first', array(
			'recursive' => -1,
			'fields' => array(
				'User.id',
				'User.slug',
				'User.shop_name',
				'User.shop_quote',
				'User.shop_description',
				'User.image',
				'User.image1',
				'User.image2',
				'User.image3',
				'User.image4',
				'User.image5',
			),
			'conditions' => array(
				'User.slug' => $subDomain
			)
		));
		return $user;
	}

////////////////////////////////////////////////////////////

	public function getVendors() {

		$menuvendors = $this->find('all', array(
			'fields' => array(
				'User.id',
				'User.slug',
				'User.shop_name',
			),
			'conditions' => array(
				'User.level' => 'vendor'
			),
			'order' => array(
				'User.shop_name' => 'ASC'
			),
		));

		return $menuvendors;
	}

////////////////////////////////////////////////////////////

}
