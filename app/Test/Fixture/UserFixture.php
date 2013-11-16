<?php
/**
 * UserFixture
 *
 */
class UserFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'username' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'password' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 40, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'email' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 40, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'firstname' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 30, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'lastname' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 30, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'category' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 16, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'grade' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 1),
		'photo_file_name' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 256, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'gender' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 8, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'school' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 128, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'valid' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 1),
		'phone' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 16, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_unicode_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'username' => 'Lorem ipsum dolor sit amet',
			'password' => 'Lorem ipsum dolor sit amet',
			'email' => 'Lorem ipsum dolor sit amet',
			'firstname' => 'Lorem ipsum dolor sit amet',
			'lastname' => 'Lorem ipsum dolor sit amet',
			'created' => '2013-11-02 20:41:41',
			'category' => 'Lorem ipsum do',
			'grade' => 1,
			'photo_file_name' => 'Lorem ipsum dolor sit amet',
			'gender' => 'Lorem ',
			'school' => 'Lorem ipsum dolor sit amet',
			'valid' => 1,
			'phone' => 'Lorem ipsum do'
		),
	);

}
