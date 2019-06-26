<?php

$config = [
    'id' => 'education-api-console',
    'name' => 'CyberClinic API',
    'basePath' => dirname(__DIR__) . '/',
    'controllerNamespace' => 'app\commands',
    'components' => [
        'authManager' => [
            'class' => 'yii\rbac\DbManager',
            'defaultRoles' => ['guest', 'user'],
        ],
    ],
    'modules' => [
        'rbac' => [
            'class' => 'justcoded\yii2\rbac\Module',
        ],
    ],

    'params' => [

    ],
];


return $config;
