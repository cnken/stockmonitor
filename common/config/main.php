<?php
return [
    'name' => 'Spotter商户后台',
    'language' => 'zh-CN',
    'timeZone' => 'Asia/Shanghai',
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'authManager' => [
            'class' => 'yii\rbac\DbManager',
            //'defaultRoles' => ['guest'],
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'i18n' => [
            'translations' => [
                '*' => [
                    'class' => 'yii\i18n\PhpMessageSource',
                    //'basePath' => '@app/messages',
                    //'sourceLanguage' => 'en',
                    'fileMap' => [
                        'app' => 'app.php',
                        'app/error' => 'error.php',
                    ],
                ],
                /*'yii' => [
                    'class' => 'yii\i18n\PhpMessageSource',
                    'sourceLanguage' => 'zh-CN',
                    'basePath' => '@app/messages'
                ],*/
            ],
        ],
//        'formatter' => [
//            'dateFormat' => 'yyyy-MM-dd',
//            'datetimeFormat' => 'yyyy-MM-dd HH:mm:ss',
//            'decimalSeparator' => ',',
//            'thousandSeparator' => ' ',
//            'currencyCode' => 'CNY',
//        ],
//        'mongodb' => [
//            'class' => '\yii\mongodb\Connection',
//            'dsn' => 'mongodb://10.0.0.2:19879/lsnlog',
//        ],
//        'redis' => [
//            'class' => 'yii\redis\Connection',
//            'hostname' => '10.0.0.2',
//            'port' => 19889,
//            'database' => 0,
//        ],
    ],
];
