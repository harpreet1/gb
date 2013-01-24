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
			'TS - NASFT-1/13' => 'TS - NASFT-1/13',
			'Internet' => 'Internet',
			'Farmers Market' => 'Farmers Market',
			'Advertisement' => 'Advertisement',
			'Referral' => 'Referral',
			
		);
		return $sources;
	}

////////////////////////////////////////////////////////////	
	
}
