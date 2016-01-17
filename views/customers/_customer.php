<?php
/**
 * Created by PhpStorm.
 * User: roman
 * Date: 17.01.2016
 * Time: 20:29
 */

echo \yii\widgets\DetailView::widget(
    [
        'model' => $model,
        'attributes' => [
            ['attribute' => 'name'],
            ['attribute' => 'birth_date', 'value' => $model->birth_date->format('Y-m-d')],
            'notes:text',
            ['label' => 'Phone Number', 'attribute' => 'phones.0.number']
        ]
    ]
);