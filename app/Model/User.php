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
		if (isset($this->data[$this->alias]['password'])) {
			$this->data[$this->alias]['password'] = AuthComponent::password($this->data[$this->alias]['password']);
		}
	    return true;
	}

////////////////////////////////////////////////////////////

	public function getBySubdomain($subDomain) {

		$user = $this->find('first', array(
			'recursive' => -1,
			'fields' => array(
				'User.id',
				'User.name',
				'User.slug',
				'User.shop_quote',
				'User.shop_signature',
				'User.shop_description',
				'User.image',
				'User.image_1',
				'User.image_2',
				'User.image_3',
				'User.image_4',
				'User.image_5',
				'User.image_6',
			),
			'conditions' => array(
				'User.level' => 'vendor',
				'User.active' => 1,
				'User.slug' => $subDomain,
			)
		));
		if(!empty($user)) {
			return $user;
		}
		return false;
	}

////////////////////////////////////////////////////////////

	public function getVendors() {

		$menuvendors = $this->find('all', array(
			'fields' => array(
				'User.id',
				'User.name',
				'User.slug',
			),
			'conditions' => array(
				'User.level' => 'vendor',
				'User.active' => 1,
				'User.product_count >' => 0,
			),
			'order' => array(
				'User.name' => 'ASC'
			),
		));

		return $menuvendors;
	}

////////////////////////////////////////////////////////////

}
