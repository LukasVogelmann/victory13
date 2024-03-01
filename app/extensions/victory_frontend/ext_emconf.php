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
            'typo3' => '^12.4.0',
            'fluid_styled_content' => '^12.4.0',
            'rte_ckeditor' => '^12.4.0',
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
    'author_email' => 'jayvogelmann@icloud.com',
    'version' => '1.0.0',
];