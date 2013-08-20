<?php
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
 * index method
 *
 * @return void
 */
	public function index() {
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
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The attendee status log could not be saved. Please, try again.'), 'flash/error');
			}
		}
		$users = $this->AttendeeStatusLog->User->find('list');
		$attendees = $this->AttendeeStatusLog->Attendee->find('list');
		$attendanceStatusStates = $this->AttendeeStatusLog->AttendanceStatusState->find('list');
		$events = $this->AttendeeStatusLog->Event->find('list');
		$this->set(compact('users', 'attendees', 'attendanceStatusStates', 'events'));
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
		$users = $this->AttendeeStatusLog->User->find('list');
		$attendees = $this->AttendeeStatusLog->Attendee->find('list');
		$attendanceStatusStates = $this->AttendeeStatusLog->AttendanceStatusState->find('list');
		$events = $this->AttendeeStatusLog->Event->find('list');
		$this->set(compact('users', 'attendees', 'attendanceStatusStates', 'events'));
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
