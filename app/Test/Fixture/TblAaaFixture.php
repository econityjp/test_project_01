<?php
/**
 * TblAaa Fixture
 */
class TblAaaFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'tbl_aaa';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'a' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'b' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'c' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'd' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'indexes' => array(
			
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'a' => 1,
			'b' => 1,
			'c' => 1,
			'd' => 1
		),
	);

}
