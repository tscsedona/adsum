<?php
App::uses('AppController', 'Controller');
/**
 * Attendees Controller
 *
 * @property Attendee $Attendee
 * @property PaginatorComponent $Paginator
 */
class AttendeesController extends AppController {

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
		$this->Attendee->recursive = 0;
		$this->set('attendees', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Attendee->exists($id)) {
			throw new NotFoundException(__('Invalid attendee'));
		}
		$options = array('conditions' => array('Attendee.' . $this->Attendee->primaryKey => $id));
		$this->set('attendee', $this->Attendee->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Attendee->create();
			if ($this->Attendee->save($this->request->data)) {
				$this->Session->setFlash(__('The attendee has been saved'), 'flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The attendee could not be saved. Please, try again.'), 'flash/error');
			}
		}
		$events = $this->Attendee->Event->find('list');
		$this->set(compact('events'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Attendee->exists($id)) {
			throw new NotFoundException(__('Invalid attendee'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Attendee->save($this->request->data)) {
				$this->Session->setFlash(__('The attendee has been saved'), 'flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The attendee could not be saved. Please, try again.'), 'flash/error');
			}
		} else {
			$options = array('conditions' => array('Attendee.' . $this->Attendee->primaryKey => $id));
			$this->request->data = $this->Attendee->find('first', $options);
		}
		$events = $this->Attendee->Event->find('list');
		$this->set(compact('events'));
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
		$this->Attendee->id = $id;
		if (!$this->Attendee->exists()) {
			throw new NotFoundException(__('Invalid attendee'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Attendee->delete()) {
			$this->Session->setFlash(__('Attendee deleted'), 'flash/success');
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Attendee was not deleted'), 'flash/error');
		$this->redirect(array('action' => 'index'));
	}
    
    
    public function bulk_import() {
        # Bulk import function here
    }
    
}
