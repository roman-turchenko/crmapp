<?php
/**
 * Created by PhpStorm.
 * User: roman.turchenko
 * Date: 12.01.2016
 * Time: 17:58
 */
namespace app\models\customer;
use yii\db\ActiveRecord;

class CustomerRecord extends ActiveRecord{
    public static function tableName(){
        return 'customer';
    }
    public function rules(){

        return [

            ['id', 'number'],
            ['name', 'required'],
            ['name', 'string', 'max' => 256],
            ['birth_date', 'date', 'format' => 'Y-m-d'],
            ['notes', 'safe']
        ];

    }

}