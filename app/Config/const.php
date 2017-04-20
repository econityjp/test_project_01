<?php

/**
 * 定数定義
 *
 * システム全体に関わる定数はここに定義する。
 */
$config = array();

//DB関係
define('VARCHAR_SHORT_MAX_LENGTH', 20);//VARCHAR型(20)の最大文字数
define('VARCHAR_MAX_LENGTH', 255);//VARCHAR型(255)の最大文字数
define('TEXT_MAX_LENGTH', 65,535);//TEXT型の最大バイト数

//画面ID
define('SCR_MASTERS_ADD', 1001);//マスター登録画面
define('SCR_MASTERS_LIST', 1003);//マスター一覧画面
define('SCR_USERS_ADD', 1002);//ユーザー登録画面
//
//エラーメッセージ（バリデーション以外）
define('E_USER_INVALID', 'ユーザー名またはパスワードに誤りがあります。');
define('E_FAILED', '%sに失敗しました。');

//メッセージ
define('I_SUCCESS', '%sが正常に完了しました。');

//バリデーションエラーメッセージ
define('E_NOT_EMPTY', '%sを入力してください。');
define('E_MAX_LENGTH', '%sは%s文字以内で入力してください。');
define('E_MAX_LENGTH_BYTE', '%sは%sバイト以内で入力してください。');

