<?php
App::uses('User', 'Model');

/**
 * User Test Case
 */
class UserTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.user',
		'app.orgs',
		'app.places',
		'app.auth_groups',
		'app.approvers',
		'app.auth_user_groups',
		'app.class_tree1s',
		'app.class_tree2s',
		'app.class_tree3s',
		'app.vendors',
		'app.customers'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->User = ClassRegistry::init('User');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->User);

		parent::tearDown();
	}

}
