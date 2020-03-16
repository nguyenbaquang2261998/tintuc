<?php
$params = array_merge(
    require __DIR__ . '/../../common/config/params.php',
    require __DIR__ . '/../../common/config/params-local.php',
    require __DIR__ . '/params.php',
    require __DIR__ . '/params-local.php'
);

return [
    'id' => 'app-frontend',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'controllerNamespace' => 'frontend\controllers',
    'layout' => 'home',
    'defaultRoute' => 'feeds/index',
    'components' => [
        'request' => [
            // 'csrfParam' => '_csrf-frontend',
            'enableCookieValidation' => true,
            'enableCsrfValidation' => true,
            'cookieValidationKey' => 'some_random_key',
        ],
        'user' => [
            'identityClass' => 'common\models\UserDb',
            'enableAutoLogin' => true,
            'identityCookie' => ['name' => '_identity-frontend', 'httpOnly' => true],
        ],
        'session' => [
            // this is the name of the session cookie used for login on the frontend
            'name' => 'advanced-frontend',
        ],
        'authClientCollection' => [
            'class' => 'yii\authclient\Collection',
            'clients' => [
              'facebook' => [
                'class' => 'yii\authclient\clients\Facebook',
                'authUrl' => 'https://www.facebook.com/dialog/oauth?display=popup',
                'clientId' => '820808905044482',
                'clientSecret' => '8da532aaef5eb1e1ac29971cfb77d876',
                'attributeNames' => ['name', 'email', 'first_name', 'last_name'],
            ],
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
    'errorHandler' => [
        'errorAction' => 'site/error',
    ],
    
        'urlManager' => [
            'enablePrettyUrl' => false,
            'enableStrictParsing' => true,
            'showScriptName' => false,
            'rules' => [
                
            ],
        ],
    
],
'params' => $params,
];
