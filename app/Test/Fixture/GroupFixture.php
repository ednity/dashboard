<?php
/**
 * GroupFixture
 *
 */
class GroupFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'groupname' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'groupcode' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 20, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'admin_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'subject' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'grade' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 12, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'lock' => array('type' => 'boolean', 'null' => true, 'default' => '0'),
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
			'id' => '1',
			'groupname' => 'ぼくのクラス',
			'groupcode' => 'acwz1379',
			'admin_id' => '1',
			'subject' => '',
			'grade' => '1',
			'lock' => 0
		),
		array(
			'id' => '2',
			'groupname' => 'DG',
			'groupcode' => 'chps0178',
			'admin_id' => '7',
			'subject' => '',
			'grade' => '3',
			'lock' => 0
		),
		array(
			'id' => '3',
			'groupname' => 'capu',
			'groupcode' => 'betw3789',
			'admin_id' => '11',
			'subject' => '',
			'grade' => '9',
			'lock' => 0
		),
		array(
			'id' => '4',
			'groupname' => '僕のクラス',
			'groupcode' => 'glty2569',
			'admin_id' => '13',
			'subject' => '',
			'grade' => '1',
			'lock' => 0
		),
		array(
			'id' => '5',
			'groupname' => 'ANRI',
			'groupcode' => 'efgl0146',
			'admin_id' => '14',
			'subject' => '',
			'grade' => '12',
			'lock' => 0
		),
		array(
			'id' => '6',
			'groupname' => 'ANRI',
			'groupcode' => 'bilq0569',
			'admin_id' => '14',
			'subject' => '',
			'grade' => '12',
			'lock' => 0
		),
		array(
			'id' => '7',
			'groupname' => 'ANRI',
			'groupcode' => 'afko2459',
			'admin_id' => '14',
			'subject' => '',
			'grade' => '12',
			'lock' => 0
		),
		array(
			'id' => '8',
			'groupname' => 'a',
			'groupcode' => 'bdrs1256',
			'admin_id' => '17',
			'subject' => '',
			'grade' => '1',
			'lock' => 1
		),
		array(
			'id' => '9',
			'groupname' => 'a',
			'groupcode' => 'eosv4569',
			'admin_id' => '18',
			'subject' => '',
			'grade' => '5',
			'lock' => 0
		),
		array(
			'id' => '10',
			'groupname' => '僕のクラス',
			'groupcode' => 'actx1257',
			'admin_id' => '20',
			'subject' => '',
			'grade' => '5',
			'lock' => 0
		),
	);

}
