<?php

/**
 * 名称：ビュー項目名定義
 *
 * 概要：ビューの項目名をここに定義する。
 * 　　　※画面IDをconst.phpに定義し、その画面についての情報を設定する。
 * 　　　※item_nameは、DB項目名以外を表示したい場合のみ値をセットする。
 */
$config = array();

$config['screens'] = [
    SCR_MASTERS_ADD =>
    [
        'screen_name' => 'メーカー登録',
        'controller' => 'Masters',
        'action' => 'add',
        'model' => 'Maker',
        'view' => '/Masters/add',
        'layout' => 'default',
        'items' => [
            'name' => ['table' => 'Makers', 'field' => 'name', 'item_name' => ''],
            'furigana' => ['table' => 'Makers', 'field' => 'furigana', 'item_name' => ''],
            'remarks' => ['table' => 'Makers', 'field' => 'remarks', 'item_name' => '']
        ]
    ],
    SCR_MASTERS_LIST =>
    [
        'screen_name' => 'メーカー一覧',
        'controller' => 'Masters',
        'action' => 'index',
        'model' => 'Maker',
        'view' => '/Masters/index',
        'layout' => 'default',
        'items' => [
            'name' => ['table' => 'Makers', 'field' => 'name', 'item_name' => ''],
            'furigana' => ['table' => 'Makers', 'field' => 'furigana', 'item_name' => ''],
            'remarks' => ['table' => 'Makers', 'field' => 'remarks', 'item_name' => '']
        ]
    ]
];
