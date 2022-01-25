<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/wamp64/www/grav/grav-skeleton-one/user/localhost/config/backups.yaml',
    'modified' => 1642957962,
    'data' => [
        'purge' => [
            'trigger' => 'space',
            'max_backups_count' => 25,
            'max_backups_space' => 1,
            'max_backups_time' => 365
        ],
        'profiles' => [
            0 => [
                'name' => 'Default Site Backup',
                'root' => '/',
                'exclude_paths' => '/backup
/cache
/images
/logs
/tmp',
                'exclude_files' => '.DS_Store
.git
.svn
.hg
.idea
.vscode
node_modules',
                'schedule' => false,
                'schedule_at' => '0 3 * * *'
            ]
        ]
    ]
];
