<?php
/**
 * AttendeeBarNumberFixture
 *
 */
class AttendeeBarNumberFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'attendee_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'bar_number' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 150, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'state' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 2, 'collate' => 'utf8_general_ci', 'comment' => 'State postal abbreviation. See ISO 3166-2:US.', 'charset' => 'utf8'),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'attendee_id' => array('column' => 'attendee_id', 'unique' => 0)
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
			'attendee_id' => 1,
			'bar_number' => 'Lorem ipsum dolor sit amet',
			'state' => '',
			'created' => '2013-08-20 20:04:48',
			'modified' => '2013-08-20 20:04:48'
		),
	);

}
