<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledMarkdownFile',
    'filename' => 'C:/wamp64/www/grav/grav-skeleton-one/user/pages/01.home/modular.md',
    'modified' => 1643122992,
    'data' => [
        'header' => [
            'title' => 'Agency',
            'menu' => 'Home',
            'onpage_menu' => true,
            'content' => [
                'items' => '@self.modular',
                'order' => [
                    'by' => 'default',
                    'dir' => 'asc',
                    'custom' => [
                        0 => '_header',
                        1 => '_hours',
                        2 => '_bulletin',
                        3 => '_clients'
                    ]
                ]
            ]
        ],
        'frontmatter' => 'title: Agency
menu: Home
onpage_menu: true
content:
    items: \'@self.modular\'
    order:
        by: default
        dir: asc
        custom:
            - _header
            - _hours
            - _bulletin
            - _clients',
        'markdown' => ''
    ]
];
