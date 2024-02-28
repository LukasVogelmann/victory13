<?php

/**
 * Extension Manager/Repository config file for ext "frontend".
 */
$EM_CONF[$_EXTKEY] = [
    'title' => 'Victory Frontend',
    'description' => 'Standard Frontend Extension',
    'category' => 'templates',
    'constraints' => [
        'depends' => [
            'typo3' => '^13.0.0',
            'fluid_styled_content' => '^13.0.0',
            'rte_ckeditor' => '^13.0.0',
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'Victory\\VictoryFrontend\\' => 'Classes',
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'Lukas',
    'author_email' => 'l.vogelmann@schommer-media.de',
    'version' => '1.0.0',
];