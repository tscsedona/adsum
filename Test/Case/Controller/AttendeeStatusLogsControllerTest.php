<?php
App::uses('AttendeeStatusLogsController', 'Controller');

/**
 * AttendeeStatusLogsController Test Case
 *
 */
class AttendeeStatusLogsControllerTest extends ControllerTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.attendee_status_log',
		'app.attendee',
		'app.event',
		'app.attendees_event',
		'app.attendance_status_state'
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
#	public function testView() {
#	}

/**
 * testAdd method
 *
 * @return void
 */
#	public function testAdd() {
#	}

/**
 * testEdit method
 *
 * @return void
 */
#	public function testEdit() {
#	}

/**
 * testDelete method
 *
 * @return void
 */
#	public function testDelete() {
#	}
    
    public function testTallyAttendeeHoursByEvent() {
        $result = $this->testAction('/AttendeeStatusLogs/tallyAttendeeHoursByEvent');
        
    }
    
}
