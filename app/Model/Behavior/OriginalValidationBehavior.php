<?php

/**
 * OriginalValidationBehavior
 * 
 * 名称：独自バリデーション用ビヘイビアクラス
 *
 * 概要：独自バリデーション処理をまとめたクラス。
 */
class OriginalValidationBehavior extends ModelBehavior {

    /**
     * maxLengthByte
     * 
     * 名称：最大バイト数チェックメソッド
     *
     * 概要：$checkのバイト数 > $maxLengthByte の場合falseを返す。
     * 
     * パラメータ：$check チェックする値
     * 　　　　　　$maxLengthByte 最大バイト数
     * 
     * 戻り値：true=OK,false=NG
     */
    public function maxLengthByte($model, $check, $maxLengthByte) {
        $value = array_values($check);
        $value = $value[0];

        if (strlen($value) >= $maxLengthByte) {
            return false;
        }
        return true;
    }

}
