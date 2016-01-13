<?php
/**
 * Created by PhpStorm.
 * User: roman.turchenko
 * Date: 12.01.2016
 * Time: 18:21
 */

namespace app\models\customer;

class Phone{
    /** @var string */
    public $number;

    public function __construct($number){
        $this->number = $number;
    }
}