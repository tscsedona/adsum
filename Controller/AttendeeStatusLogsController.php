<?php
/**
 * Adsum : Attendance Management Software (https://github.com/tscsedona/adsum)
 * Copyright (c) 2013 The Sedona Conferencee® (https://thesedonaconference.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE file
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) The Sedona Conference® (https://thesedonaconference.org)
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
App::uses('AppController', 'Controller');

/**
 * AttendeeStatusLogs Controller
 *
 * @property AttendeeStatusLog $AttendeeStatusLog
 * @property PaginatorComponent $Paginator
 */
class AttendeeStatusLogsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');
    
/**
 * Helpers
 *
 * @var array
 */    
    public $helpers = array('Js' => array('Jquery'));

    /**
     * Determine whether the user, if an admin,
     * may edit the status `Logged By` value
     * 
     * @todo this is incomplete
     */
    protected function determineLoggedByState() {
        if ($this->Auth->user('is_admin')) {
            $this->set('loggedByState', false);
        } else {
            $this->set('loggedByState', true);
        }
    }
    
    public function tallyAttendeeHoursByEvent() {
        $user_id = 1;
        $checkinState = 1;
        $checkoutState = 2;

        $attendeeStatusLogs = $this->AttendeeStatusLog->find('all', array(
            'conditions' => array(
                'AttendeeStatusLog.attendee_id' => $user_id,
            ),
            'fields' => array(
                'AttendeeStatusLog.id',
                'AttendeeStatusLog.attendance_status_state_id',
                'AttendeeStatusLog.created',
                'AttendeeStatusLog.event_id'
            )
        ));
        $attendeeStatusLogs = Set::extract($attendeeStatusLogs, '{n}.AttendeeStatusLog');
        
        # Debugger::dump($attendeeStatusLogs);
    }
    
#    __  __  __  __  __  __  __  __  __  __  __  __  __
#    \//\\//\\//\\//\\//\\//\\//\\//\\//\\//\\//\\//\\//\
#      ""  ""  ""  ""  ""  ""  ""  ""  ""  ""  ""  ""  ""
    
/**
 * index method
 *
 * @return void
 */
	public function index() {
        $this->tallyAttendeeHoursByEvent();
		$this->AttendeeStatusLog->recursive = 0;
		$this->set('attendeeStatusLogs', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->AttendeeStatusLog->exists($id)) {
			throw new NotFoundException(__('Invalid attendee status log'));
		}
		$options = array('conditions' => array('AttendeeStatusLog.' . $this->AttendeeStatusLog->primaryKey => $id));
		$this->set('attendeeStatusLog', $this->AttendeeStatusLog->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->AttendeeStatusLog->create();
			if ($this->AttendeeStatusLog->save($this->request->data)) {
				$this->Session->setFlash(__('The attendee status log has been saved'), 'flash/success');
                
                if ($this->request->data['submit'] === 'Save & Add Another') {
                    $this->redirect(array('action' => 'add'));
                } else {
    				$this->redirect(array('action' => 'index'));
                }
                
			} else {
				$this->Session->setFlash(__('The attendee status log could not be saved. Please, try again.'), 'flash/error');
			}
		}
        # highlighted attendee...
        $attendeeInputOptions = array('class' => 'span12');
        if ($this->request->query) {
            $defaultAttendee = $this->AttendeeStatusLog->Attendee->findByExtid($this->request->query['attendee'], 'id');
            $attendeeInputOptions['default'] = $defaultAttendee['Attendee']['id'];
        }
        # logged by...
        $this->determineLoggedByState();
		$attendees = $this->AttendeeStatusLog->Attendee->find(
                'list', array(
                    'order' => array('Attendee.last_name ASC')
                ));
        # prep data...
		$attendanceStatusStates = $this->AttendeeStatusLog->AttendanceStatusState->find('list');
		$events = $this->AttendeeStatusLog->Event->find('list');
		$users = $this->AttendeeStatusLog->User->find('list');
		$this->set(compact('attendees', 'attendanceStatusStates', 'attendeeInputOptions', 'events', 'users'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->AttendeeStatusLog->exists($id)) {
			throw new NotFoundException(__('Invalid attendee status log'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->AttendeeStatusLog->save($this->request->data)) {
				$this->Session->setFlash(__('The attendee status log has been saved'), 'flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The attendee status log could not be saved. Please, try again.'), 'flash/error');
			}
		} else {
			$options = array('conditions' => array('AttendeeStatusLog.' . $this->AttendeeStatusLog->primaryKey => $id));
			$this->request->data = $this->AttendeeStatusLog->find('first', $options);
		}
        $this->determineLoggedByState();
		$attendees = $this->AttendeeStatusLog->Attendee->find('list');
		$attendanceStatusStates = $this->AttendeeStatusLog->AttendanceStatusState->find('list');
		$events = $this->AttendeeStatusLog->Event->find('list');
		$users = $this->AttendeeStatusLog->User->find('list');
		$this->set(compact('attendees', 'attendanceStatusStates', 'events', 'users'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @throws MethodNotAllowedException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->AttendeeStatusLog->id = $id;
		if (!$this->AttendeeStatusLog->exists()) {
			throw new NotFoundException(__('Invalid attendee status log'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->AttendeeStatusLog->delete()) {
			$this->Session->setFlash(__('Attendee status log deleted'), 'flash/success');
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Attendee status log was not deleted'), 'flash/error');
		$this->redirect(array('action' => 'index'));
	}
    
}
