<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/wamp64/www/grav/grav-skeleton-one/user/plugins/admin/blueprints/config/media.yaml',
    'modified' => 1642914111,
    'data' => [
        'title' => 'PLUGIN_ADMIN.MEDIA',
        'form' => [
            'validation' => 'loose',
            'fields' => [
                'types' => [
                    'name' => 'medias',
                    'type' => 'list',
                    'label' => 'PLUGIN_ADMIN.MEDIA_TYPES',
                    'style' => 'vertical',
                    'key' => 'extension',
                    'controls' => 'both',
                    'collapsed' => true,
                    'fields' => [
                        '.extension' => [
                            'type' => 'key',
                            'label' => 'PLUGIN_ADMIN.FILE_EXTENSION'
                        ],
                        '.type' => [
                            'type' => 'text',
                            'label' => 'PLUGIN_ADMIN.TYPE'
                        ],
                        '.thumb' => [
                            'type' => 'text',
                            'label' => 'PLUGIN_ADMIN.THUMB'
                        ],
                        '.mime' => [
                            'type' => 'text',
                            'label' => 'PLUGIN_ADMIN.MIME_TYPE',
                            'validate' => [
                                'type' => 'lower'
                            ]
                        ],
                        '.image' => [
                            'type' => 'textarea',
                            'yaml' => true,
                            'label' => 'PLUGIN_ADMIN.IMAGE_OPTIONS',
                            'validate' => [
                                'type' => 'yaml'
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
];
