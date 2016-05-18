<?php
$params = array_merge(
    require(__DIR__ . '/../../common/config/params.php'),
    require(__DIR__ . '/../../common/config/params-local.php'),
    require(__DIR__ . '/params.php'),
    require(__DIR__ . '/params-local.php')
);

return [
    'id' => 'app-frontend',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'controllerNamespace' => 'frontend\controllers',
    'components' => [
        'user' => [

        	'identityClass' => 'budyaga\users\models\User',
        	'enableAutoLogin' => true,
        	'loginUrl' => ['/login'],

        ],


 	'authClientCollection' => [
          'class' => 'yii\authclient\Collection',
          'clients' => [
            'vkontakte' => [
                'class' => 'budyaga\users\components\oauth\VKontakte',
                'clientId' => 'XXX',
                'clientSecret' => 'XXX',
                'scope' => 'email'
            ],
            'google' => [
                'class' => 'budyaga\users\components\oauth\Google',
                'clientId' => 'XXX',
                'clientSecret' => 'XXX',
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
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [

 		'/signup' => '/user/user/signup',
            	'/login' => '/user/user/login',
            	'/logout' => '/user/user/logout',
            	'/requestPasswordReset' => '/user/user/request-password-reset',
            	'/resetPassword' => '/user/user/reset-password',
            	'/profile' => '/user/user/profile',
            	'/retryConfirmEmail' => '/user/user/retry-confirm-email',
            	'/confirmEmail' => '/user/user/confirm-email',
            	'/unbind/<id:[\w\-]+>' => '/user/auth/unbind',
            	'/oauth/<authclient:[\w\-]+>' => '/user/auth/index'


            ],
        ],


	'authManager' => [
        'class' => 'yii\rbac\DbManager',
    	],

    ],
	'modules' => [
    		'user' => [
        	'class' => 'budyaga\users\Module',
        	'userPhotoUrl' => 'http://boygruv.ru/uploads/user/photo',
        	'userPhotoPath' => '@frontend/web/uploads/user/photo'
    		],
	],

        
//    ],
    'params' => $params,
];

