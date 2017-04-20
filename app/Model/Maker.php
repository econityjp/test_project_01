<?php

App::uses('AppModel', 'Model');

/**
 * Maker Model
 *
 * @property Orgs $Orgs
 * @property Places $Places
 * @property AuthGroups $AuthGroups
 * @property Attribute $Attribute
 */
class Maker extends AppModel {

    public $actsAs = array('OriginalValidation', 'Common'); //ビヘイビアの設定

    /**
     * Validation rules
     *
     * @var array
     */
    //※エラーメッセージの設定はbeforeValidateで行う！
    public $validate = array(
        'name' => array(
            'rule1' => array(
                'rule' => 'notBlank',
                'last' => 'true'
            ),
            'rule2' => array(
                'rule' => array('maxLength', VARCHAR_MAX_LENGTH),
                'allowEmpty' => false,
                'required' => true,
            )
        ),
        'furigana' => array(
            'rule1' => array(
                'rule' => 'notBlank',
                'last' => 'true'
            ),
            'rule2' => array(
                'rule' => array('maxLength', VARCHAR_MAX_LENGTH),
                'allowEmpty' => false,
                'required' => true,
            )
        ),
        'remarks' => array(
            'rule1' => array(
                'rule' => array('maxLengthByte', TEXT_MAX_LENGTH),
                'allowEmpty' => true,
                'required' => false,
            )
        )
    );

    /**
     * setErrorMessages
     * 
     * 名称：エラーメッセージをセットメソッド
     *
     * 概要：パラメーターの値をセットしたエラーメッセージをセットする。
     * 
     * パラメーター $items 画面項目名と画面ラベルの連想配列
     * 
     * 戻り値：ログインユーザーID
     */
    function setErrorMessages($items) {
        $this->validate['name']['rule1']['message'] = sprintf(E_NOT_EMPTY, $items['name'], VARCHAR_MAX_LENGTH);
        $this->validate['name']['rule2']['message'] = sprintf(E_MAX_LENGTH, $items['name'], VARCHAR_MAX_LENGTH);
        $this->validate['furigana']['rule1']['message'] = sprintf(E_MAX_LENGTH, $items['furigana'], VARCHAR_MAX_LENGTH);
        $this->validate['remarks']['rule1']['message'] = sprintf(E_MAX_LENGTH_BYTE, $items['remarks'], TEXT_MAX_LENGTH);
    }

    /**
     * beforeSave
     */
//    function beforeSave($options = array()) {
//        //データ保存に必要な項目に値をセットする
//        if (empty($this->id)) {
//            //insertの場合
//            $this->data['Maker']['users_id_created'] = $this->getCurrentUser(); //作成ユーザーID
//        }
//        $this->data['Maker']['is_deleted'] = FALSE; //削除フラグ
//        $this->data['Maker']['users_id_modified'] = $this->getCurrentUser(); //更新ユーザーID
//
//        return true;
//    }

    // The Associations below have been created with all possible keys, those that are not needed can be removed

    /**
     * belongsTo associations
     *
     * @var array
     */
//	public $belongsTo = array(
//		'Orgs' => array(
//			'className' => 'Orgs',
//			'foreignKey' => 'orgs_id',
//			'conditions' => '',
//			'fields' => '',
//			'order' => ''
//		),
//		'Places' => array(
//			'className' => 'Places',
//			'foreignKey' => 'places_id',
//			'conditions' => '',
//			'fields' => '',
//			'order' => ''
//		),
//		'AuthGroups' => array(
//			'className' => 'AuthGroups',
//			'foreignKey' => 'auth_groups_id',
//			'conditions' => '',
//			'fields' => '',
//			'order' => ''
//		),
//		'Attribute' => array(
//			'className' => 'Attribute',
//			'foreignKey' => 'attribute_id',
//			'conditions' => '',
//			'fields' => '',
//			'order' => ''
//		)
//	);
}
