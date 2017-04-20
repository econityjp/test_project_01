<?php

App::uses('Component', 'Controller');

/**
 * CommonComponent Component
 * 
 * 名称：共通コンポーネントクラス
 * 
 * 概要：コントローラで共通する処理をまとめたクラス。
 */
class CommonComponent extends Component {

    public $components = array('Session');

    /**
     * initialize
     */
    public function initialize(Controller $controller) {
        $this->controller = $controller;
    }

    /**
     * setScreen
     * 
     * 名称：画面情報設定メソッド
     *
     * 概要：画面情報をセットする。
     * 
     * パラメーター $screenInfo 画面情報
     */
    public function setScreen($screenInfo) {
        //レイアウトを指定する
        $screenController = $this->controller;
        $screenController->layout = $screenInfo['layout'];
        //画面項目名
        $screenItems = $screenInfo['items'];
        //モデル名
        $screenModel = $screenController->{$screenInfo['model']};
        //画面項目とラベルの設定
        $items = $this->setItemNames($screenItems);
        //モデルのエラーメッセージを設定する
        $screenModel->setErrorMessages($items);
        //ビューで使用するため項目名をセットする
        $screenController->set('items', $items);
    }

    /**
     * setItemNames
     * 
     * 名称：画面項目ラベル設定メソッド
     *
     * 概要：画面項目のラベルに表示する名称を配列にセットして返す。
     * 
     * パラメータ：$screenItems 画面定義情報
     * 
     * 戻り値：連想配列（キー:画面項目名　値：ラベルに表示する名称）
     */
    public function setItemNames($screenItems) {
        $items = array();
        foreach ($screenItems as $key => $value) {
            if (strlen($value['item_name']) > 0) {
                //表示文字列がセットされている場合
                $items += array($key => $value['item_name']);
            } else {
                //DBの項目名をセットする場合
                $table_item = Configure::read('tables.' . $value['table'] . '.' . $value['field']);
                $items += array($key => $table_item);
            }
        }
        return $items;
    }

}
