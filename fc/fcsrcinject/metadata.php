<?php

$sMetadataVersion = '2.1';
$sImgUrl = "https://www.fatchip.de/out/flow/img/favicons/favicon_16x16.png";

$aModule = [
    'id' => 'fcSrcInject',
    'title' => '<img src="' . $sImgUrl . '" alt="FC"> FATCHIP Module OXID Sourcecode injection',
    'description' => array (
        'de' => 'OXID Modul für Sourcecode injection.
        Mit diesem Modul können sie zusätzliche Inhalte wie CSS Schnipsel oder Tracking Codes,
        direkt durch die Modul-Einstellungen in den Quellcode einspeisen.',


        'en' => 'OXID module for sourcecode injection.
        With this module you can add additional content such as
        CSS snippets or tracking codes, fed directly into the source code through the admin page.',
    ),
    'thumbnail' => 'picture_transparent_small.png',
    'version' => '1.0.0',
    'author' => 'FATCHIP GmbH',
    'email' => 'support@fatchip.de',
    'extend' => [
    ],
    'controllers' => [
    ],
    'events'       => [
        'onActivate'     => '\FATCHIP\fcsrcinject\Core\Events::onActivate',
        'onDeactivate'   => '\FATCHIP\fcsrcinject\Core\Events::onDeactivate',
    ],
    'blocks' => [
        [
            'template' => 'layout/base.tpl',
            'block'=>'head_css',
            'file'=>'Application/views/blocks/fcInjectHead.tpl'
        ],
        [
            'template' => 'layout/base.tpl',
            'block'=>'base_js',
            'file'=>'Application/views/blocks/fcInjectBody.tpl'
        ],
    ],

    'templates' => [
    ],

    'settings'    => [
        [
            'group'    => 'FCSRCINJECT',
            'name'     => 'fcsrcinject_head',
            'type'     => 'arr',
            'value'    => '',
            'position' => 1
        ],
        [
            'group'    => 'FCSRCINJECT',
            'name'     => 'fcsrcinject_body',
            'type'     => 'arr',
            'value'    => '',
            'position' => 1
        ],
    ]
];