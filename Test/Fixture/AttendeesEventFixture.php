<?php
/**
 * AttendeesEventFixture
 *
 */
class AttendeesEventFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'attendee_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'event_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'attendee_id' => array('column' => 'attendee_id', 'unique' => 0),
			'event_id' => array('column' => 'event_id', 'unique' => 0)
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
			'event_id' => 1
		),
	);

}
