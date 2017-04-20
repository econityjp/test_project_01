<?php
/**
 * User Fixture
 */
class UserFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'orgs_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'places_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'auth_groups_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'no_in_org' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'users_id_created' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'users_id_modified' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'modified' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'disp_order' => array('type' => 'integer', 'null' => false, 'default' => '0', 'unsigned' => false),
		'is_deleted' => array('type' => 'text', 'null' => false, 'default' => 'b\'0\'', 'length' => 1),
		'remarks' => array('type' => 'text', 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'username' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'password' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'pwd_last_modified' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'login_user_name' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'login_user_furigana' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'is_login' => array('type' => 'text', 'null' => false, 'default' => 'b\'0\'', 'length' => 1),
		'invalid_flg' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'orgs_admin_flg' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'user_type' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'approvers_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'authentication_level' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'is_data_hide' => array('type' => 'text', 'null' => false, 'default' => 'b\'0\'', 'length' => 1),
		'auth_user_groups_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'section' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'email' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'tel' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 20, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'fax' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 20, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'unit_price' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'class_tree1s_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'class_tree2s_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'class_tree3s_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'vendors_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'customers_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'text1' => array('type' => 'text', 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'text2' => array('type' => 'text', 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'text3' => array('type' => 'text', 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'text4' => array('type' => 'text', 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'text5' => array('type' => 'text', 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
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
			'id' => 1,
			'orgs_id' => 1,
			'places_id' => 1,
			'auth_groups_id' => 1,
			'no_in_org' => 1,
			'users_id_created' => 1,
			'created' => '2017-03-28 06:58:43',
			'users_id_modified' => 1,
			'modified' => '2017-03-28 06:58:43',
			'disp_order' => 1,
			'is_deleted' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'remarks' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'username' => 'Lorem ipsum dolor sit amet',
			'password' => 'Lorem ipsum dolor sit amet',
			'pwd_last_modified' => '2017-03-28 06:58:43',
			'login_user_name' => 'Lorem ipsum dolor sit amet',
			'login_user_furigana' => 'Lorem ipsum dolor sit amet',
			'is_login' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'invalid_flg' => 1,
			'orgs_admin_flg' => 1,
			'user_type' => 1,
			'approvers_id' => 1,
			'authentication_level' => 1,
			'is_data_hide' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'auth_user_groups_id' => 1,
			'section' => 'Lorem ipsum dolor sit amet',
			'email' => 'Lorem ipsum dolor sit amet',
			'tel' => 'Lorem ipsum dolor ',
			'fax' => 'Lorem ipsum dolor ',
			'unit_price' => 1,
			'class_tree1s_id' => 1,
			'class_tree2s_id' => 1,
			'class_tree3s_id' => 1,
			'vendors_id' => 1,
			'customers_id' => 1,
			'text1' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'text2' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'text3' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'text4' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'text5' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.'
		),
	);

}
