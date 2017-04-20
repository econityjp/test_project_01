<?php

/**
 * MastersController Controller
 * 
 * 名称：マスタ画面用コントローラー
 * 
 * 概要：マスタ画面で共通で使用するコントローラー。
 */
App::uses('AppController', 'Controller');

class MastersController extends AppController {

    /**
     * Components
     *
     * @var array
     */
    public $components = array('Paginator', 'Common');

    /**
     * index method
     *
     * @return void
     */
    public function index() {
        //セッションから画面情報を取得する
        $screenInfo = $this->Session->read('screen_info.data');
        //モデルの設定
        $this->uses[] = $screenInfo['model'];
        //画面名
        $screen_name =$screenInfo['screen_name'];
        //モデル名
        $model =$screenInfo['model'];
        //ページネータ
        $masters =$this->Paginator->paginate($model);
        //ビューから参照できるようにセット
        $this->set(compact('screen_name', 'model', 'masters'));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add() {
        //セッションから画面情報を取得する
        $screenInfo = $this->Session->read('screen_info.data');
        //モデルの設定
        $this->uses[] = $screenInfo['model'];
        //画面名の設定
        $this->set('screen_name', $screenInfo['screen_name']);  
        //画面の設定
        $this->Common->setScreen($screenInfo);
        
        if ($this->request->is('post')) {
            $this->{$screenInfo['model']}->create();
            if ($this->{$screenInfo['model']}->save($this->request->data)) {
                $this->Flash->success(sprintf(I_SUCCESS, $screenInfo['screen_name']));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Flash->error(sprintf(E_FAILED, $screenInfo['screen_name']));
            }
        } else {
            //ビュー表示
            $this->render($screenInfo['view']);
        }
    }

//
//    /**
//     * view method
//     *
//     * @throws NotFoundException
//     * @param string $id
//     * @return void
//     */
//    public function view($id = null) {
//        if (!$this->Maker->exists($id)) {
//            throw new NotFoundException(__('Invalid maker'));
//        }
//        $options = array('conditions' => array('Maker.' . $this->Maker->primaryKey => $id));
//        $this->set('maker', $this->Maker->find('first', $options));
//    }
//    
//    /**
//     * edit method
//     *
//     * @throws NotFoundException
//     * @param string $id
//     * @return void
//     */
//    public function edit($id = null) {
//        if (!$this->Maker->exists($id)) {
//            throw new NotFoundException(__('Invalid maker'));
//        }
//        if ($this->request->is(array('post', 'put'))) {
//            if ($this->Maker->save($this->request->data)) {
//                $this->Flash->success(__('The maker has been saved.'));
//                return $this->redirect(array('action' => 'index'));
//            } else {
//                $this->Flash->error(__('The maker could not be saved. Please, try again.'));
//            }
//        } else {
//            $options = array('conditions' => array('Maker.' . $this->Maker->primaryKey => $id));
//            $this->request->data = $this->Maker->find('first', $options);
//        }
////		$orgs = $this->Maker->Org->find('list');
////		$places = $this->Maker->Place->find('list');
////		$authGroups = $this->Maker->AuthGroup->find('list');
////		$attributes = $this->Maker->Attribute->find('list');
////		$this->set(compact('orgs', 'places', 'authGroups', 'attributes'));
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
//        $this->Maker->id = $id;
//        if (!$this->Maker->exists()) {
//            throw new NotFoundException(__('Invalid maker'));
//        }
//        $this->request->allowMethod('post', 'delete');
//        if ($this->Maker->delete()) {
//            $this->Flash->success(__('The maker has been deleted.'));
//        } else {
//            $this->Flash->error(__('The maker could not be deleted. Please, try again.'));
//        }
//        return $this->redirect(array('action' => 'index'));
//    }
}
