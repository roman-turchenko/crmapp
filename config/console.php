<?php
/**
 * Created by PhpStorm.
 * User: roman.turchenko
 * Date: 11.01.2016
 * Time: 15:51
 */
return [
    'id' => 'crmapp-console',
    'basePath' => dirname(__DIR__),
    'components' => [
        'db' => require(__DIR__.'/db.php'),
    ],
];