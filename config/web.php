<?php
/**
 * Created by PhpStorm.
 * User: roman.turchenko
 * Date: 11.01.2016
 * Time: 14:28
 */
return [
    'id' => 'crmapp',
    'basePath' => realpath(__DIR__.'/../'),
    'components' => [
        'request' => [
            'cookieValidationKey' => 'you secret key here'
        ],
    ],
];