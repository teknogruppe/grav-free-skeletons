<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/wamp64/www/grav-skeleton-timer/user/config/plugins/email.yaml',
    'modified' => 1636262316,
    'data' => [
        'enabled' => true,
        'from' => 'test@test.test',
        'to' => 'test@test.test',
        'mailer' => [
            'engine' => 'smtp',
            'smtp' => [
                'port' => 25,
                'encryption' => 'none'
            ],
            'sendmail' => [
                'bin' => '/usr/sbin/sendmail -bs'
            ]
        ],
        'content_type' => 'text/html',
        'debug' => false
    ]
];
