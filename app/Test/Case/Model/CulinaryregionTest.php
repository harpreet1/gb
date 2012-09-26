<?php
App::uses('Culinaryregion', 'Model');

/**
 * Culinaryregion Test Case
 *
 */
class CulinaryregionTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.culinaryregion'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Culinaryregion = ClassRegistry::init('Culinaryregion');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Culinaryregion);

		parent::tearDown();
	}

}
