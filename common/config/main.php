<?php
//require_once __DIR__.'/../../common/helpers.php';
//use common\i18n\Formatter;


return [
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'formatter' => [
            'class' => 'yii\i18n\Formatter',
            'datetimeFormat' => 'php:d/m/Y H:i',
            'defaultTimeZone' => 'UTC', // Example timezone setting
            'currencyCode' => '$', ],// Set your default currency code here
            'cache' => [
                'class' => 'yii\caching\FileCache',
            ],
//        'formatter' => [
//            'class' => \common\i18n\Formatter::class,
//            'datetimeFormat' => 'php:d/m/Y H:i',
//        ]
    ],
];
