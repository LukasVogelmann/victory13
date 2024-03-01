<?php
defined('TYPO3') or die('Access denied.');

call_user_func(function()
{
    $customColumn = [
        'title' => [
            'exclude' => true,
            'label' => 'LLL:EXT:victory_frontend/Resources/Private/Language/locallang_db.xlf:title',
            'config' => [
                'type' => 'input',
                'behaviour' => [
                    'allowLanguageSynchronization' => true,
                ],
            ],
        ],
        'description' => [
            'label' => 'LLL:EXT:victory_frontend/Resources/Private/Language/locallang_db.xlf:description',
            'description' => 'field description',
            'config' => [
                'type' => 'text',
                'enableRichtext' => true,
            ],
        ],
        'link' => [
            'label' => 'LLL:EXT:victory_frontend/Resources/Private/Language/locallang_db.xlf:link',
            'config' => [
                'type' => 'link',
                'allowedTypes' => ['page', 'url', 'record'],
            ]
        ],
        'link_text' => [
            'exclude' => true,
            'label' => 'LLL:EXT:victory_frontend/Resources/Private/Language/locallang_db.xlf:text',
            'config' => [
                'type' => 'input',
            ],
        ],
        'image' => [
            'label' => 'LLL:EXT:victory_frontend/Resources/Private/Language/locallang_db.xlf:image',
            'config' => [
                'type' => 'file',
                'allowed' => ['common-image-types', 'webp'],
                'appearance' => [
                    'createNewRelationLinkTitle' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:images.addFileReference',
                    'showPossibleLocalizationRecords' => true,
                ],
                // custom configuration for displaying fields in the overlay/reference table
                // to use the imageoverlayPalette instead of the basicoverlayPalette
                'overrideChildTca' => [
                    'types' => [
                        '0' => [
                            'showitem' => '
                                --palette--;;imageoverlayPalette,
                                --palette--;;filePalette',
                        ],
                        \TYPO3\CMS\Core\Resource\File::FILETYPE_TEXT => [
                            'showitem' => '
                                --palette--;;imageoverlayPalette,
                                --palette--;;filePalette',
                        ],
                        \TYPO3\CMS\Core\Resource\File::FILETYPE_IMAGE => [
                            'showitem' => '
                                --palette--;;imageoverlayPalette,
                                --palette--;;filePalette',
                        ],
                        \TYPO3\CMS\Core\Resource\File::FILETYPE_AUDIO => [
                            'showitem' => '
                                --palette--;;audioOverlayPalette,
                                --palette--;;filePalette',
                        ],
                        \TYPO3\CMS\Core\Resource\File::FILETYPE_VIDEO => [
                            'showitem' => '
                                --palette--;;videoOverlayPalette,
                                --palette--;;filePalette',
                        ],
                        \TYPO3\CMS\Core\Resource\File::FILETYPE_APPLICATION => [
                            'showitem' => '
                                --palette--;;imageoverlayPalette,
                                --palette--;;filePalette',
                        ],
                    ],
                    'columns' => [
                        'crop' => [
                            'config' => [
                                'cropVariants' => [
                                    'default' => [
                                        'title' => 'Default',
                                        'allowedAspectRatios' => [
                                            '16:9' => [
                                                'title' => '16:9',
                                                'value' => 16 / 9
                                            ],
                                            'NaN' => [
                                                'title' => 'free',
                                                'value' => 0.0
                                            ],
                                        ],
                                    ],
                                    'tablet' => [
                                        'title' => 'Tablet',
                                        'allowedAspectRatios' => [
                                            '1:2' => [
                                                'title' => '4:3',
                                                'value' => 4 / 3
                                            ],
                                            'NaN' => [
                                                'title' => 'free',
                                                'value' => 0.0
                                            ],
                                        ],
                                    ],
                                    'mobile' => [
                                        'title' => 'Mobile',
                                        'allowedAspectRatios' => [
                                            '1:2' => [
                                                'title' => '3:4',
                                                'value' => 3 / 4
                                            ],
                                            'NaN' => [
                                                'title' => 'free',
                                                'value' => 0.0
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
    ];

    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns(
        'tt_content',
        $customColumn
    );

    // Register palettes
    $GLOBALS['TCA']['tt_content']['palettes']['palette_link'] = [
        'showitem' => '
            link, link_text
        '
    ];
});