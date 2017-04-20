<?php
App::uses('Org', 'Model');

/**
 * Org Test Case
 */
class OrgTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.org'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Org = ClassRegistry::init('Org');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Org);

		parent::tearDown();
	}

}
