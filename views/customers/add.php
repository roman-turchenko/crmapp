<?php
/**
 * Created by PhpStorm.
 * User: roman.turchenko
 * Date: 13.01.2016
 * Time: 14:32
 */
use app\models\customer\CustomerRecord;
use app\models\customer\PhoneRecord;

use yii\web\View;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/**
 * Add Customer UI
 *
 * @var View $this
 * @var CustomerRecord $customer
 * @var PhoneRecord $phone
 */

$form = ActiveForm::begin(['id' => 'add-customer-form']);

echo $form->field($customer, 'name');
echo $form->field($customer, 'birth_date');
echo $form->field($customer, 'notes');

echo $form->field($phone, 'number');

echo Html::submitButton('Submit', ['class' => 'btn btn-primary']);

ActiveForm::end();