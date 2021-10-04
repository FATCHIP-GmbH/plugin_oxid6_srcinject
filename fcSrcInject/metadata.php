<?php

$sMetadataVersion = '2.1';
$sImgUrl = "https://www.fatchip.de/out/flow/img/favicons/favicon_16x16.png";

$aModule = [
    'id' => 'fcSrcInject',
    'title' => '<img src="' . $sImgUrl . '" alt="FC"> FATCHIP Module OXID Sourcecode injection',
    'description' => array (
        'de' => 'OXID Modul für Sourcecode injection.
        Mit diesem Modul können sie zusätzliche inhalte wie 
        CSS Schnipsel oder Tracking Codes, direkt durch die Modul-Einstellungen in den Quellcode einspeißen.',


        'en' => 'OXID module for sourcecode injection.
        With this module you can add additional content such as
        CSS snippets or tracking codes, fed directly into the source code trough the admin page.',
    ),
    'thumbnail' => '',
    'version' => '1.0.0',
    'author' => 'FATCHIP GmbH',
    'email' => 'support@fatchip.de',
    'extend' => [
//        \OxidEsales\Eshop\Core\Controller\BaseController::class => \FATCHIP\fcSrcInject\Extend\Core\Controller\BaseController::class,
//        \OxidEsales\Eshop\Application\Controller\FrontendController::class => \FATCHIP\fcSrcInject\Extend\Application\Controller\FrontendController::class,
          \OxidEsales\Eshop\Core\ViewConfig::class => \FATCHIP\fcSrcInject\Extend\Core\ViewConfig::class,
    ],
    'controllers' => [
       ],
    'events'       => [
        ],
    'blocks' => [
        [
            'template' => 'layout/base.tpl',
            'block'=>'head_css',
            'file'=>'fcInjectHead.tpl'
        ],
        [
            'template' => 'layout/base.tpl',
            'block'=>'base_js',
            'file'=>'fcInjectBody.tpl'
        ],
    ],

    'templates' => [
    ],

    'settings'    => [
        [
            'group'    => 'FCSRCINJECT',
            'name'     => 'fcsrcinject_head',
            'type'     => 'str',
            'value'    => '',
            'position' => 1
        ],
        [
            'group'    => 'FCSRCINJECT',
            'name'     => 'fcsrcinject_body',
            'type'     => 'str',
            'value'    => '',
            'position' => 1
        ],
    ]
];