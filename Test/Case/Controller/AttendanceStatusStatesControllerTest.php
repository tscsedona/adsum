<?php
App::uses('AttendanceStatusStatesController', 'Controller');

/**
 * AttendanceStatusStatesController Test Case
 *
 */
class AttendanceStatusStatesControllerTest extends ControllerTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.attendance_status_state',
		'app.attendee_status_log',
		'app.attendee',
		'app.attendee_metum',
		'app.event',
		'app.event_type',
		'app.attendees_event'
	);

/**
 * testIndex method
 *
 * @return void
 */
	public function testIndex() {
	}

/**
 * testView method
 *
 * @return void
 */
	public function testView() {
	}

/**
 * testAdd method
 *
 * @return void
 */
	public function testAdd() {
	}

/**
 * testEdit method
 *
 * @return void
 */
	public function testEdit() {
	}

/**
 * testDelete method
 *
 * @return void
 */
	public function testDelete() {
	}
    
    public function testTallyAttendeeHoursByEvent() {
        
    }

}
