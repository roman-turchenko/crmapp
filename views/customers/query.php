<?php
/**
 * Created by PhpStorm.
 * User: roman
 * Date: 17.01.2016
 * Time: 20:38
 */

use yii\helpers\Html;

echo Html::beginForm(['/customer'], 'get');
echo Html::label('Phone number to search:', 'phone_number');
echo Html::textInput('phone_number');
echo Html::submitButton('Search');
echo Html::endForm();