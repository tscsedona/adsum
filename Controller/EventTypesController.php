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
 * EventTypes Controller
 *
 * @property EventType $EventType
 * @property PaginatorComponent $Paginator
 */
class EventTypesController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

#    __  __  __  __  __  __  __  __  __  __  __  __  __
#    \//\\//\\//\\//\\//\\//\\//\\//\\//\\//\\//\\//\\//\
#      ""  ""  ""  ""  ""  ""  ""  ""  ""  ""  ""  ""  ""
    
/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->EventType->recursive = 0;
		$this->set('eventTypes', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->EventType->exists($id)) {
			throw new NotFoundException(__('Invalid event type'));
		}
		$options = array('conditions' => array('EventType.' . $this->EventType->primaryKey => $id));
		$this->set('eventType', $this->EventType->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->EventType->create();
			if ($this->EventType->save($this->request->data)) {
				$this->Session->setFlash(__('The event type has been saved'), 'flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The event type could not be saved. Please, try again.'), 'flash/error');
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->EventType->exists($id)) {
			throw new NotFoundException(__('Invalid event type'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->EventType->save($this->request->data)) {
				$this->Session->setFlash(__('The event type has been saved'), 'flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The event type could not be saved. Please, try again.'), 'flash/error');
			}
		} else {
			$options = array('conditions' => array('EventType.' . $this->EventType->primaryKey => $id));
			$this->request->data = $this->EventType->find('first', $options);
		}
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
		$this->EventType->id = $id;
		if (!$this->EventType->exists()) {
			throw new NotFoundException(__('Invalid event type'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->EventType->delete()) {
			$this->Session->setFlash(__('Event type deleted'), 'flash/success');
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Event type was not deleted'), 'flash/error');
		$this->redirect(array('action' => 'index'));
	}
}
