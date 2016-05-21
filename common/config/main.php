<?php
return [
    'language' => 'ru-RU',
    'name' => 'Бизнес MLM',
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
    ],

    'modules' => [
        'debug' => [
            'class' => 'yii\debug\Module',
            'allowedIPs' => ['127.0.0.1', '::1', '89.110.62.*', '95.140.92.*'],
        ],
    ],
     
];
