<?php
App::uses('AppModel', 'Model');
/**
 * Project Model
 *
 * @property Projectcategory $Projectcategory
 */
class Project extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Projectcategory' => array(
			'className' => 'Projectcategory',
			'foreignKey' => 'projectcategory_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
