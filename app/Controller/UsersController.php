<?php

App::uses('AppController', 'Controller');

/**
 * Users Controller
 *
 * @property User $User
 * @property PaginatorComponent $Paginator
 */
class UsersController extends AppController {

    /**
     * Components
     *
     * @var array
     */
    public $components = array('Paginator', 'Flash');

    /**
     * add method
     *
     * @return void
     */
    public function add() {
        if ($this->request->is('post')) {
            $this->User->create();
            if ($this->User->save($this->request->data)) {
                $this->Flash->success(__('The user has been saved.'));
                return $this->redirect(array('action' => 'login'));
            } else {
                $this->Flash->error(__('The user could not be saved. Please, try again.'));
            }
        }

        $orgs_list = $this->User->Org->find('list', array('fields' => array('id', 'name')));
        $places_list = $this->User->Place->find('list', array('fields' => array('id', 'name')));
        $this->set(compact('orgs_list', 'places_list'));
    }

    /**
     * login
     * 
     * 名称：ログインメソッド
     *
     * 概要：ログイン認証処理を行う。
     */
    public function login() {
        if ($this->request->is('post')) {
            if ($this->Auth->login()) {
                $this->redirect($this->Auth->redirect());
            } else {
                $this->Flash->error(__(E_USER_INVALID));
            }
        }
    }

    /**
     * logout
     * 
     * 名称：ログアウトメソッド
     *
     * 概要：ログアウト処理を行う。
     */
    public function logout() {
        $this->redirect($this->Auth->logout());
    }

//        /**
//     * index method
//     *
//     * @return void
//     */
//    public function index() {
//        //$this->User->recursive = 0;
//        $this->set('users', $this->Paginator->paginate());
//    }
//
//    /**
//     * view method
//     *
//     * @throws NotFoundException
//     * @param string $id
//     * @return void
//     */
//    public function view($id = null) {
//        if (!$this->User->exists($id)) {
//            throw new NotFoundException(__('Invalid user'));
//        }
//        $options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
//        $this->set('user', $this->User->find('first', $options));
//    }
//    /**
//     * edit method
//     *
//     * @throws NotFoundException
//     * @param string $id
//     * @return void
//     */
//    public function edit($id = null) {
//        if (!$this->User->exists($id)) {
//            throw new NotFoundException(__('Invalid user'));
//        }
//        if ($this->request->is(array('post', 'put'))) {
//            if ($this->User->save($this->request->data)) {
//                $this->Flash->success(__('The user has been saved.'));
//                return $this->redirect(array('action' => 'index'));
//            } else {
//                $this->Flash->error(__('The user could not be saved. Please, try again.'));
//            }
//        } else {
//            $options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
//            $this->request->data = $this->User->find('first', $options);
//        }
//        $orgs = $this->User->Org->find('list');
//        $places = $this->User->Place->find('list');
//        $authGroups = $this->User->AuthGroup->find('list');
//        $approvers = $this->User->Approver->find('list');
//        $authUserGroups = $this->User->AuthUserGroup->find('list');
//        $classTree1s = $this->User->ClassTree1->find('list');
//        $classTree2s = $this->User->ClassTree2->find('list');
//        $classTree3s = $this->User->ClassTree3->find('list');
//        $vendors = $this->User->Vendor->find('list');
//        $customers = $this->User->Customer->find('list');
//        $this->set(compact('orgs', 'places', 'authGroups', 'approvers', 'authUserGroups', 'classTree1s', 'classTree2s', 'classTree3s', 'vendors', 'customers'));
//    }
//
//    /**
//     * delete method
//     *
//     * @throws NotFoundException
//     * @param string $id
//     * @return void
//     */
//    public function delete($id = null) {
//        $this->User->id = $id;
//        if (!$this->User->exists()) {
//            throw new NotFoundException(__('Invalid user'));
//        }
//        $this->request->allowMethod('post', 'delete');
//        if ($this->User->delete()) {
//            $this->Flash->success(__('The user has been deleted.'));
//        } else {
//            $this->Flash->error(__('The user could not be deleted. Please, try again.'));
//        }
//        return $this->redirect(array('action' => 'index'));
//    }
}
