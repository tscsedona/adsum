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
 * Events Controller
 *
 * @property Event $Event
 * @property PaginatorComponent $Paginator
 */
class EventsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Uuid');
    
    /**
     * Attendance method
     * 
     * Provides a list of registered Attendees for the Event
     * and also displays their attendance hours.
     * 
     * @return void
     */
    public function attendance($id = null) {
		if (!$this->Event->exists($id)) {
			throw new NotFoundException(__('Invalid event'));
		}
        
		$options = array('conditions' => array('Event.' . $this->Event->primaryKey => $id));
		$event = $this->Event->find('first', $options);
        $this->Event->Behaviors->load('Containable');
        $this->Event->contain('Attendee');
        $attendees = $this->Event->find('all');
        $a = Set::classicExtract($attendees, '{n}.Attendee');
#        $attendees = $this->Paginator->paginate($a);
        Debugger::dump($a);
        $this->set(compact('event', 'attendees'));
    }
    
    /**
     * assign method
     * 
     * Creates an association between an Attendee
     * and an Event.
     */
    public function assign() {
		if ($this->request->is('post')) {
			if ($this->Event->save($this->request->data)) {
				$this->Session->setFlash(__('The attendee list has been updated.'), 'flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The event could not be saved. Please, try again.'), 'flash/error');
			}
		}
        
        $events = $this->Event->find('list');
        $this->loadModel('Attendee');
        $attendees = $this->Attendee->find('list');
		$this->set(compact('events', 'attendees'));
    }
    
    
    /**
     * unassign method
     * 
     * Deletes an association between an Attendee
     * and an Event.
     * 
     * @param int $attendee_id
     * @param int $event_id
     * @throws InvalidArgumentException
     */
    public function unassign($attendee_id, $event_id) {
        $this->autoRender = false;
        if (empty($attendee_id) || empty($event_id)) {
            throw new InvalidArgumentException('Missing or incorrect data passed to unassign method.');
        }
        # construct the conditions
        $params = array(
            'AttendeesEvent.attendee_id' => $attendee_id,
            'AttendeesEvent.event_id'    => $event_id
        );
        # verify the association exists
        $verification = $this->Event->AttendeesEvent->find('first', array('conditions' => $params));  
        # if not, redirect away and don't continue
        if (empty($verification)) {
            $this->Session->setFlash(__('No association found between the event and attendee.'), 'flash/error');
            $this->redirect($this->referer());
        }
        # else, delete the assocation
        $this->Event->AttendeesEvent->deleteAll($params, false);
        $this->Session->setFlash(__('The attendee has been removed from the event.'), 'flash/success');
        $this->redirect($this->referer());
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
		$this->Event->recursive = 0;
		$this->set('events', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Event->exists($id)) {
			throw new NotFoundException(__('Invalid event'));
		}
		$options = array('conditions' => array('Event.' . $this->Event->primaryKey => $id));
		$event = $this->Event->find('first', $options);
        $this->set('event', $event);
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
            $this->request->data['Event']['start_time'] = date("Y-m-d H:i:s",strtotime($this->request->data['Event']['start_time']));
            $this->request->data['Event']['end_time'] = date("Y-m-d H:i:s",strtotime($this->request->data['Event']['end_time']));
			$this->Event->create();
			if ($this->Event->save($this->request->data)) {
                $this->request->data['Attendee']['uuid'] = $this->Uuid->generateUuid();
				$this->Session->setFlash(__('The event has been saved'), 'flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The event could not be saved. Please, try again.'), 'flash/error');
			}
		}
		$eventTypes = $this->Event->EventType->find('list');
		$attendees = $this->Event->Attendee->find('list');
		$this->set(compact('eventTypes', 'attendees'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Event->exists($id)) {
			throw new NotFoundException(__('Invalid event'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
                $this->request->data['Event']['start_time'] = date("Y-m-d H:i:s",strtotime($this->request->data['Event']['start_time']));
                $this->request->data['Event']['end_time'] = date("Y-m-d H:i:s",strtotime($this->request->data['Event']['end_time']));
			if ($this->Event->save($this->request->data)) {
				$this->Session->setFlash(__('The event has been saved'), 'flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The event could not be saved. Please, try again.'), 'flash/error');
			}
		} else {
			$options = array('conditions' => array('Event.' . $this->Event->primaryKey => $id));
			$this->request->data = $this->Event->find('first', $options);
		}
		$eventTypes = $this->Event->EventType->find('list');
		$attendees = $this->Event->Attendee->find('list');
		$this->set(compact('eventTypes', 'attendees'));
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
		$this->Event->id = $id;
		if (!$this->Event->exists()) {
			throw new NotFoundException(__('Invalid event'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Event->delete()) {
			$this->Session->setFlash(__('Event deleted'), 'flash/success');
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Event was not deleted'), 'flash/error');
		$this->redirect(array('action' => 'index'));
	}
}
