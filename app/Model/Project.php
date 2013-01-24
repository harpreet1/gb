<?php
App::uses('AppModel', 'Model');
class Project extends AppModel {

////////////////////////////////////////////////////////////

	public $belongsTo = array(
		'Projectcategory' => array(
			'className' => 'Projectcategory',
			'foreignKey' => 'projectcategory_id',
			'conditions' => '',
			'fields' => '',
			'order' => '',
		)
	);
	
////////////////////////////////////////////////////////////

	public function sources() {
		$sources = array(
			'Trade Show' => 'Trade Show',
			'Internet' => 'Internet',
			'Packaged Domestic' => 'Packaged Domestic',
			
		);
		return $sources;
	}

////////////////////////////////////////////////////////////	
	
}
