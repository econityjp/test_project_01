<?php

/**
 * ScreenController Controller
 * 
 * 名称：画面リダイレクトクラス
 * 
 * 概要：画面IDを元に情報を取得し、セッションに保存する。
 * 　　　コントローラとアクションを指定してリダイレクトする。
 */
App::uses('AppController', 'Controller');

class ScreenController extends AppController {

    public $uses = array(); //このコントローラはモデルを使用しない

    /**
     * index method
     *
     * $id 画面ID
     */

    public function index($id) {
        //画面定義ファイルが存在するかどうか
        
        //画面IDを元に画面情報を取得
        $screenInfo = Configure::read('screens.' . $id);
        //画面IDをセッションに保存
        $this->Session->write('screen_info.id', $id);
        //画面情報をセッションに保存
        $this->Session->write('screen_info.data', $screenInfo);
        //表示するビューが存在するかチェック
        
        //リダイレクト
        $this->redirect(['controller' => $screenInfo['controller'], 'action' => $screenInfo['action']]);
    }

}
