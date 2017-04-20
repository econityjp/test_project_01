<?php

/**
 * CommonBehavior
 * 
 * 名称：モデル共通処理ビヘイビアクラス
 *
 * 概要：モデル共通処理をまとめたクラス。
 */
class CommonBehavior extends ModelBehavior {

    /**
     * getCurrentUser
     * 
     * 名称：ログインユーザー情報取得メソッド
     *
     * 概要：ログインユーザー情報を返す。
     * 
     * 戻り値：ログインユーザー情報
     */
    public function getCurrentUser($model) {
        App::uses('CakeSession', 'Model/Datasource');
        $Session = new CakeSession();

        $userInfo = $Session->read('Auth.User');
        return $userInfo;
    }

    /**
     * getNoInOrg
     * 
     * 名称：組織内固有番号取得メソッド
     *
     * 概要：組織内固有番号のMAX番号を返す。
     * 
     * 戻り値：組織内固有番号のMAX番号
     */
    public function getNoInOrg($model, $orgsId) {
        $newNoInOrg = 0;
        $maxNoInOrg = $model->find('first', array(
            'conditions' => array('orgs_id' => $orgsId),
            'group' => array('orgs_id'),
            'fields' => 'MAX(no_in_org) as max_no_in_org',
        ));
        if (!empty($maxNoInOrg)) {
            $newNoInOrg = $maxNoInOrg[0]['max_no_in_org'] + 1;
        }
        return $newNoInOrg;
    }

    /**
     * beforeSave
     */
    function beforeSave(Model $model, $options = array()) {
        //ログインユーザーIDの取得
        $userInfo = $this->getCurrentUser($model);
        $userId = $userInfo['id'];
        //テーブル名称取得
        $tableName = $model->name;

        //データ保存に必要な項目に値をセットする
        if (empty($this->id)) {
            //insertの場合
            //削除フラグ
            $model->data[$tableName]['is_deleted'] = FALSE;
            //作成ユーザーID
            $model->data[$tableName]['users_id_created'] = $userId;
            //組織ID
            if (empty($this->orgs_id)) {
                $model->data[$tableName]['orgs_id'] = $userInfo['orgs_id'];
            }
            //拠点ID
            if (empty($this->places_id)) {
                $model->data[$tableName]['places_id'] = $userInfo['places_id'];
            }
            //組織内固有番号（no_in_org）
            $noInOrg = $this->getNoInOrg($model, $userInfo['orgs_id']);
            $model->data[$tableName]['no_in_org'] = $noInOrg;
        }
        //更新ユーザーID
        $model->data[$tableName]['users_id_modified'] = $userId;

        return true;
    }

}
