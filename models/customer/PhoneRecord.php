<?php
/**
 * Created by PhpStorm.
 * User: roman.turchenko
 * Date: 12.01.2016
 * Time: 18:09
 */
namespace app\models\customer;
use yii\db\ActiveRecord;

class PhoneRecord extends ActiveRecord{
    public static function tableName(){
        return 'phone';
    }

    public function rules(){
        return [
            ['customer_id', 'number'],
            ['number','string'],
            [
                ['customer_id', 'number'], 'required'
            ]
        ];
    }
}