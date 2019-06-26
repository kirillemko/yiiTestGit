<?php

$config = [
    'id' => 'idCertification',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    //'language' => 'en-EN',
    'name' => 'idCertification',
    'defaultRoute' => 'companies/index',
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'components' => [
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => '0pohkPDG-elXOsXYeZqj-drmnt4Qmuqn',
            'parsers' => [
                'application/json' => 'yii\web\JsonParser',
                'application/hal+json' => 'yii\web\JsonParser',
            ]
        ],
        'cache' => [
            'class' => 'yii\caching\DummyCache',
        ],
        'user' => [
            'identityClass' => 'app\models\Users',
            'enableAutoLogin' => true,
        ],
        'errorHandler' => [
            'errorAction' => 'auth/error',
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            'transport' => [
                'class' => 'Swift_SmtpTransport',
                'host' => 'smtp.mail.ru',
                'username' => 'qwerasdfxcv213gfs@mail.ru',
                'password' => 'xDrZmrz4EdNW885W',
                'port' => '465',
                'encryption' => 'ssl',
//                'host' => 'smtp.gmail.com',
//                'username' => 'support@oathello.com',
//                'password' => 'supp0rt-0athello',
//                'port' => '587',
//                'encryption' => 'tls',
            ],
            'messageConfig' => [
                'charset' => 'UTF-8',
//                'from' => ['kirill.emko@mail.ru' => 'ID Certification'],
                'from' => ['oathello@myidea.by' => 'Oathello Team'],
            ],
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'formatter' => [
            //'currencyCode' => 'IDR',
            'decimalSeparator' => '.',
            'locale' => 'en',
            'thousandSeparator' => ' ',
        ],

        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
                'files/download/<name:\w+>' => 'files/download',

                '<controller>/<id:\d+>' => '<controller>/view',
                '<controller>/<action>/<id:\d+>' => '<controller>/<action>',

                'api/<controller>/<action>/<id:\d+>' => 'api/<controller>/<action>',
                'api/<controller>/<id:\d+>' => 'api/<controller>/index',
            ],
        ],

        'authManager' => [
            'class' => 'yii\rbac\DbManager',
            //'defaultRoles' => ['guest', 'user'],
        ],

//        'i18n' => [
//            'translations' => [
//                '*' => [
//                    'class' => 'yii\i18n\PhpMessageSource',
//                    'basePath' => '@app/messages', // if advanced application, set @frontend/messages
//                    'sourceLanguage' => 'en',
//                    'fileMap' => [
//                        //'main' => 'main.php',
//                    ],
//                ],
//            ],
//        ],

    ],


    'modules' => [
        'api' => [
            'class' => 'app\modules\api\Module',
        ],
        'rbac' => [
            'class' => 'justcoded\yii2\rbac\Module',
        ],

    ],

    'params' => [
        'adminEmail' => 'admin@example.com'
    ],
];

if (defined('YII_ENV') && YII_ENV == 'dev') {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = [
        'class' => 'yii\debug\Module',
        // uncomment the following to add your IP if you are not connecting from localhost.
        //'allowedIPs' => ['127.0.0.1', '::1'],
    ];

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
        // uncomment the following to add your IP if you are not connecting from localhost.
        //'allowedIPs' => ['127.0.0.1', '::1'],
        'generators' => [ //here
            'crud' => [
                'class' => 'yii\gii\generators\crud\Generator',
                'templates' => [
                    'adminlte' => '@vendor/dmstr/yii2-adminlte-asset/gii/templates/crud/simple',
                ]
            ]
        ],
    ];
}

return $config;
