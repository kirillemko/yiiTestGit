<?php

if (!defined('APP_NAME')) {
    define('APP_NAME', 'backend');
} elseif (!defined('APP_TYPE')) {
    throw new Exception('Unable init configuration APP_TYPE.');
}

$environment = require __DIR__ . '/environments.php';

switch (APP_TYPE) {
    case 'yii\web\Application':
        $identity = str_replace('www.', '', $_SERVER['SERVER_NAME']);
        $setting['type'] = 'web';
        break;
    case 'yii\console\Application':
        $identity = php_uname('n') . ':/' . realpath(__DIR__ . '/../');
        $setting['type'] = 'console';
        break;
    default:
        $identity = null;
        $setting['type'] = null;
}

$env = !empty($environment[$setting['type']][$identity]) ? $environment[$setting['type']][$identity] : null;

if (!$env) {
    throw new InvalidArgumentException("Cannot detect ENV for identity '" . $identity . "'");
}


if (!defined('YII_ENV')) {
    define('YII_ENV', $env);
}
if (!defined('YII_DEBUG')) {
    define('YII_DEBUG', true);
//    define('YII_DEBUG', $env === 'dev' || false);
}

$config = require_once(__DIR__ . '/' . $setting['type'] . '.php');

$env_file = __DIR__ . '/env/' . $env . '.php';
if (is_file($env_file) && is_readable($env_file)) {
    $config = array_merge_recursive($config, require_once($env_file));
}

return $config;
