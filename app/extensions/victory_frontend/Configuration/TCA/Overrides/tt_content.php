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
            'label' => 'LLL:EXT:victory_frontend/Resources/Private/Language/locallang_db.xlf:ink',
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