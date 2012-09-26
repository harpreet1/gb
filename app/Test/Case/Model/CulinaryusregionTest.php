<?php
App::uses('Culinaryusregion', 'Model');

/**
 * Culinaryusregion Test Case
 *
 */
class CulinaryusregionTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.culinaryusregion'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Culinaryusregion = ClassRegistry::init('Culinaryusregion');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Culinaryusregion);

		parent::tearDown();
	}

}
