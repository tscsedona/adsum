<?php
App::uses('AppController', 'Controller');
/**
 * AttendeesEvents Controller
 *
 * @property AttendeesEvent $AttendeesEvent
 * @property PaginatorComponent $Paginator
 */
class AttendeesEventsController extends AppController {

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
		$this->AttendeesEvent->recursive = 0;
		$this->set('attendeesEvents', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->AttendeesEvent->exists($id)) {
			throw new NotFoundException(__('Invalid attendees event'));
		}
		$options = array('conditions' => array('AttendeesEvent.' . $this->AttendeesEvent->primaryKey => $id));
		$this->set('attendeesEvent', $this->AttendeesEvent->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->AttendeesEvent->create();
			if ($this->AttendeesEvent->save($this->request->data)) {
				$this->Session->setFlash(__('The attendees event has been saved'), 'flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The attendees event could not be saved. Please, try again.'), 'flash/error');
			}
		}
		$attendees = $this->AttendeesEvent->Attendee->find('list');
		$events = $this->AttendeesEvent->Event->find('list');
		$this->set(compact('attendees', 'events'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->AttendeesEvent->exists($id)) {
			throw new NotFoundException(__('Invalid attendees event'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->AttendeesEvent->save($this->request->data)) {
				$this->Session->setFlash(__('The attendees event has been saved'), 'flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The attendees event could not be saved. Please, try again.'), 'flash/error');
			}
		} else {
			$options = array('conditions' => array('AttendeesEvent.' . $this->AttendeesEvent->primaryKey => $id));
			$this->request->data = $this->AttendeesEvent->find('first', $options);
		}
		$attendees = $this->AttendeesEvent->Attendee->find('list');
		$events = $this->AttendeesEvent->Event->find('list');
		$this->set(compact('attendees', 'events'));
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
		$this->AttendeesEvent->id = $id;
		if (!$this->AttendeesEvent->exists()) {
			throw new NotFoundException(__('Invalid attendees event'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->AttendeesEvent->delete()) {
			$this->Session->setFlash(__('Attendees event deleted'), 'flash/success');
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Attendees event was not deleted'), 'flash/error');
		$this->redirect(array('action' => 'index'));
	}
}
