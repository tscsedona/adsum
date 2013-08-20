<?php
App::uses('AppController', 'Controller');
/**
 * AttendeeBarNumbers Controller
 *
 * @property AttendeeBarNumber $AttendeeBarNumber
 * @property PaginatorComponent $Paginator
 */
class AttendeeBarNumbersController extends AppController {

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
		$this->AttendeeBarNumber->recursive = 0;
		$this->set('attendeeBarNumbers', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->AttendeeBarNumber->exists($id)) {
			throw new NotFoundException(__('Invalid attendee bar number'));
		}
		$options = array('conditions' => array('AttendeeBarNumber.' . $this->AttendeeBarNumber->primaryKey => $id));
		$this->set('attendeeBarNumber', $this->AttendeeBarNumber->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->AttendeeBarNumber->create();
			if ($this->AttendeeBarNumber->save($this->request->data)) {
				$this->Session->setFlash(__('The attendee bar number has been saved'), 'flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The attendee bar number could not be saved. Please, try again.'), 'flash/error');
			}
		}
		$attendees = $this->AttendeeBarNumber->Attendee->find('list');
		$this->set(compact('attendees'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->AttendeeBarNumber->exists($id)) {
			throw new NotFoundException(__('Invalid attendee bar number'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->AttendeeBarNumber->save($this->request->data)) {
				$this->Session->setFlash(__('The attendee bar number has been saved'), 'flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The attendee bar number could not be saved. Please, try again.'), 'flash/error');
			}
		} else {
			$options = array('conditions' => array('AttendeeBarNumber.' . $this->AttendeeBarNumber->primaryKey => $id));
			$this->request->data = $this->AttendeeBarNumber->find('first', $options);
		}
		$attendees = $this->AttendeeBarNumber->Attendee->find('list');
		$this->set(compact('attendees'));
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
		$this->AttendeeBarNumber->id = $id;
		if (!$this->AttendeeBarNumber->exists()) {
			throw new NotFoundException(__('Invalid attendee bar number'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->AttendeeBarNumber->delete()) {
			$this->Session->setFlash(__('Attendee bar number deleted'), 'flash/success');
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Attendee bar number was not deleted'), 'flash/error');
		$this->redirect(array('action' => 'index'));
	}
}
