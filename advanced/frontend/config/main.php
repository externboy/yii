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
        'view' => [
			'class' => 'frontend\base\BaseFrontView',
			'theme' => [
				'pathMap' => [
					'@app/views' => '@app/themes/default',
					'@app/modules' => '@app/themes/default/modules',
					'@app/widgets' => '@app/themes/default/widgets',
				],
			],
		],
		'mailer' => [
			'class' => 'yii\swiftmailer\Mailer',
			'transport' => [
			'class' => 'Swift_SmtpTransport',
			'host' => 'smtp.126.com',
			'username' => 'externboy@126.com',
			'password' => 'noneeveryiwgprh',
			'port' => '25',
			'encryption' => 'tls',
		],
		'messageConfig'=>[
			'charset'=>'UTF-8',
			'from'=>['externboy@126.com'=>'admin']
             ],
		],
    ],
    'params' => $params,
];
