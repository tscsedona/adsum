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
 * AttendeeMeta Controller
 *
 * @property AttendeeMetum $AttendeeMetum
 * @property PaginatorComponent $Paginator
 */
class AttendeeMetaController extends AppController {

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
		$this->AttendeeMetum->recursive = 0;
		$this->set('attendeeMeta', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->AttendeeMetum->exists($id)) {
			throw new NotFoundException(__('Invalid attendee metum'));
		}
		$options = array('conditions' => array('AttendeeMetum.' . $this->AttendeeMetum->primaryKey => $id));
		$this->set('attendeeMetum', $this->AttendeeMetum->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->AttendeeMetum->create();
			if ($this->AttendeeMetum->save($this->request->data)) {
				$this->Session->setFlash(__('The attendee metum has been saved'), 'flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The attendee metum could not be saved. Please, try again.'), 'flash/error');
			}
		}
		$attendees = $this->AttendeeMetum->Attendee->find('list');
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
		if (!$this->AttendeeMetum->exists($id)) {
			throw new NotFoundException(__('Invalid attendee metum'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->AttendeeMetum->save($this->request->data)) {
				$this->Session->setFlash(__('The attendee metum has been saved'), 'flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The attendee metum could not be saved. Please, try again.'), 'flash/error');
			}
		} else {
			$options = array('conditions' => array('AttendeeMetum.' . $this->AttendeeMetum->primaryKey => $id));
			$this->request->data = $this->AttendeeMetum->find('first', $options);
		}
		$attendees = $this->AttendeeMetum->Attendee->find('list');
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
		$this->AttendeeMetum->id = $id;
		if (!$this->AttendeeMetum->exists()) {
			throw new NotFoundException(__('Invalid attendee metum'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->AttendeeMetum->delete()) {
			$this->Session->setFlash(__('Attendee metum deleted'), 'flash/success');
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Attendee metum was not deleted'), 'flash/error');
		$this->redirect(array('action' => 'index'));
	}
}
