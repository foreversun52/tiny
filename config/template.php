<?php

/**
 * 模版最终为 $template['theme_namespace'] . '::' . $templateType .'.' . $template['templates'][$templateType]['file_name'];
 * 例如 默认单页模板 最终为 theme::page.file_name
 */
return [

    'theme_namespace' => 'theme',

    'current_theme_path' => resource_path('views/frontend'),

    'templates' => [

        'page' => [
            [
                'file_name' => 'default',
                'title' => '默认单页模板',
                'default' => true
            ]
        ]
        ,
        'list' => [
            [
                'file_name' => 'default',
                'title' => '默认列表模板',
                'default' => true
            ]
        ],
        'content' => [
            [
                'file_name' => 'default',
                'title' => '默认正文模板',
                'default' => true
            ]
        ]
    ]
];
