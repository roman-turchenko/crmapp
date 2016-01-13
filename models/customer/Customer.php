<?php
/**
 * Created by PhpStorm.
 * User: roman.turchenko
 * Date: 11.01.2016
 * Time: 15:11
 */

namespace app\models\customer;

class Customer{

    /**  @var string*/
    public $name;

    /** @var \DateTime */
    public $birth_date;

    /** @var string */
    public $notes = '';

    /** @var PhoneRecord[] */
    public $phones = [];

    public function __construct($name, $birth_date){
        $this->name = $name;
        $this->birth_date = $birth_date;
    }
}