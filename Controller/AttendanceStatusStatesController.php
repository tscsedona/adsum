<?php
App::uses('AppController', 'Controller');

/**
 * Attendance Status States Controller
 *
 * PHP ≥5.4
 *
 * Adsum : Attendance Management Software (https://github.com/tscsedona/adsum)
 * Copyright (c) 2013 The Sedona Conferencee® (https://thesedonaconference.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE file
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) The Sedona Conference® (https://thesedonaconference.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       CakePHP(tm)
 * @subpackage    Adsum
 * @since         Adsum v 0.1.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
class AttendanceStatusStatesController extends AppController {

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
		$this->AttendanceStatusState->recursive = 0;
		$this->set('attendanceStatusStates', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->AttendanceStatusState->exists($id)) {
			throw new NotFoundException(__('Invalid attendance status state'));
		}
		$options = array('conditions' => array('AttendanceStatusState.' . $this->AttendanceStatusState->primaryKey => $id));
		$this->set('attendanceStatusState', $this->AttendanceStatusState->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->AttendanceStatusState->create();
			if ($this->AttendanceStatusState->save($this->request->data)) {
				$this->Session->setFlash(__('The attendance status state has been saved'), 'flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The attendance status state could not be saved. Please, try again.'), 'flash/error');
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
		if (!$this->AttendanceStatusState->exists($id)) {
			throw new NotFoundException(__('Invalid attendance status state'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->AttendanceStatusState->save($this->request->data)) {
				$this->Session->setFlash(__('The attendance status state has been saved'), 'flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The attendance status state could not be saved. Please, try again.'), 'flash/error');
			}
		} else {
			$options = array('conditions' => array('AttendanceStatusState.' . $this->AttendanceStatusState->primaryKey => $id));
			$this->request->data = $this->AttendanceStatusState->find('first', $options);
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
		$this->AttendanceStatusState->id = $id;
		if (!$this->AttendanceStatusState->exists()) {
			throw new NotFoundException(__('Invalid attendance status state'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->AttendanceStatusState->delete()) {
			$this->Session->setFlash(__('Attendance status state deleted'), 'flash/success');
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Attendance status state was not deleted'), 'flash/error');
		$this->redirect(array('action' => 'index'));
	}
}
