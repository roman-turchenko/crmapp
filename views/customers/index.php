<?php
/**
 * Created by PhpStorm.
 * User: roman
 * Date: 17.01.2016
 * Time: 20:26
 */

echo \yii\widgets\ListView::widget(
    [
        'options' => [
            'class' => 'list-view',
            'id' => 'search_results'
        ],
        'itemView' => '_customer',
        'dataProvider' => $records
    ]
);