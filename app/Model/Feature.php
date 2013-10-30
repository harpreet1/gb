<?php
App::uses('AppModel', 'Model');
class Feature extends AppModel {

////////////////////////////////////////////////////////////

	// Find number of features
	public function findList() {
		return $features = $this->find('list', array(
				'order' => array(
						'Feature.name' => 'ASC'
				)
		));
	}

////////////////////////////////////////////////////////////

}
