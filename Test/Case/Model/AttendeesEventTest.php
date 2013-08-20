<?php
App::uses('AttendeesEvent', 'Model');

/**
 * AttendeesEvent Test Case
 *
 */
class AttendeesEventTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.attendees_event',
		'app.attendee',
		'app.attendee_bar_number',
		'app.attendee_status_log',
		'app.user',
		'app.attendance_status_state',
		'app.event',
		'app.event_type'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->AttendeesEvent = ClassRegistry::init('AttendeesEvent');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->AttendeesEvent);

		parent::tearDown();
	}

}
