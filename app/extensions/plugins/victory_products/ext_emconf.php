<?php

/**
 * Extension Manager/Repository config file for ext "shop".
 */
$EM_CONF[$_EXTKEY] = [
    'title' => 'Victory Products',
    'description' => 'Plugin to display Products',
    'category' => 'templates',
    'constraints' => [
        'depends' => [
            'typo3' => '^12.4.0',
            'fluid_styled_content' => '^12.4.0',
            'rte_ckeditor' => '^12.4.0',
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'Victory\\VictoryProducts\\' => 'Classes',
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'Lukas',
    'author_email' => 'jayvogelmann@icloud.com',
    'version' => '1.0.0',
];