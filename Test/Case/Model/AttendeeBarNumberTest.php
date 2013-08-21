<?php
App::uses('AttendeeBarNumber', 'Model');

/**
 * AttendeeBarNumber Test Case
 *
 */
class AttendeeBarNumberTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.attendee_bar_number',
		'app.attendee',
		'app.attendee_status_log',
		'app.attendance_status_state',
		'app.event',
		'app.event_type',
		'app.attendees_event',
		'app.attendee_metum'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->AttendeeBarNumber = ClassRegistry::init('AttendeeBarNumber');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->AttendeeBarNumber);

		parent::tearDown();
	}

}
