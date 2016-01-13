<?php
/**
 * Created by PhpStorm.
 * User: roman.turchenko
 * Date: 11.01.2016
 * Time: 15:01
 */

namespace app\controllers;
use app\models\customer\CustomerRecord;
use app\models\customer\PhoneRecord;
use yii\web\Controller;

class CustomersController extends Controller{

    public function actionIndex(){
        return "Customers index action";
    }

    public function actionAdd(){

        $customer = new CustomerRecord;
        $phone = new PhoneRecord;

        if ($this->load($customer, $phone, $_POST)){
            $this->store($this->makeCustomer($customer, $phone));
            return $this->redirect('/customer');
        }

        return $this->render('add', compact('customer', 'phone'));
    }

    private function store(Customer $customer){
        $customer_record = new CustomerRecord();
        $customer_record->name = $customer->name;
        $customer_record->birth_date = $customer->birth_date->format('Y-m-d');
        $customer_record->notes = $customer->notes;
        $customer_record->save();

        foreach ($customer->phones as $phone){
            $phone_record = new PhoneRecord();
            $phone_record->number = $phone->number;
            $phone_record->customer_id = $customer_record->id;
            $phone_record->save();
        }
    }

    private function makeCustomer(CustomerRecord $customer_record, PhoneRecord $phone_record){
        $name = $customer_record->name;
        $birth_date = new \DateTime($customer_record->birth_date);

        $customer = new Customer($name, $birth_date);
        $customer->notes = $customer_record->notes;
        $customer->phones[] = new Phone($phone_record->number);

        return $customer;
    }


}