<?php
App::uses('AppController', 'Controller');
/**
 * Orgs Controller
 *
 * @property Org $Org
 * @property PaginatorComponent $Paginator
 */
class OrgsController extends AppController {

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
		$this->Org->recursive = 0;
		$this->set('orgs', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Org->exists($id)) {
			throw new NotFoundException(__('Invalid org'));
		}
		$options = array('conditions' => array('Org.' . $this->Org->primaryKey => $id));
		$this->set('org', $this->Org->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Org->create();
			if ($this->Org->save($this->request->data)) {
				$this->Flash->success(__('The org has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The org could not be saved. Please, try again.'));
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
		if (!$this->Org->exists($id)) {
			throw new NotFoundException(__('Invalid org'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Org->save($this->request->data)) {
				$this->Flash->success(__('The org has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The org could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Org.' . $this->Org->primaryKey => $id));
			$this->request->data = $this->Org->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Org->id = $id;
		if (!$this->Org->exists()) {
			throw new NotFoundException(__('Invalid org'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Org->delete()) {
			$this->Flash->success(__('The org has been deleted.'));
		} else {
			$this->Flash->error(__('The org could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
