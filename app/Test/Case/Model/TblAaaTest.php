<?php
App::uses('TblAaa', 'Model');

/**
 * TblAaa Test Case
 */
class TblAaaTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.tbl_aaa'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->TblAaa = ClassRegistry::init('TblAaa');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->TblAaa);

		parent::tearDown();
	}

}
