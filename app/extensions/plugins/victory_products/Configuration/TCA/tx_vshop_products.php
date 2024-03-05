<?php

return [
    'ctrl' => [
        'title' => 'LLL:EXT:victory_products/Resources/Private/Language/Backend.xlf:plugin.products.title',
        'label' => 'orderno',
        'sortby' => 'sorting',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'origUid' => 't3_origuid',
        'delete' => 'deleted',
        'enablecolumns' => [
            'fe_group' => 'fe_group',
            'disabled' => 'hidden',
            'starttime' => 'starttime',
            'endtime' => 'endtime',
        ],
        'transOrigPointerField' => 'l18n_parent',
        'transOrigDiffSourceField' => 'l18n_diffsource',
        'languageField' => 'sys_language_uid',
        'translationSource' => 'l10n_source',
        'typeicon_classes' => [
            'default' => 'productsIcon',
        ]
    ],
    'types' => [
        '1' => [
            'showitem' => '
                 --div--;General,
                    orderno,
                    status,
                    price,
                    centprice,
                    qty,
                    labeltext,
                    description,
                    infotext,
                    text2,
                    text3,
                    weight,
                    catalogno,
                    image,
                    category,
                    article,
                    material,
                    catalogsearch,
                 --div--;Language,
                    sys_language_uid,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access,
                    --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.visibility;visibility,
                    --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,
                    fe_group
            '
        ],
    ],
    'palettes' => [
        'access' => [
            'showitem' => '
                starttime;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:starttime_formlabel,
                endtime;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:endtime_formlabel
            '
        ],
        'visibility' => [
            'showitem' => '
                hidden;LLL:EXT:smedia_teasers/Resources/Private/Language/Backend.xlf:teaser_item
            '
        ],
        // hidden but needs to be included all the time, so sys_language_uid is set correctly
        'hiddenLanguagePalette' => [
            'showitem' => 'sys_language_uid, l10n_parent',
            'isHiddenPalette' => true,
        ],
    ],
    'columns' => [
        'starttime' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.starttime',
            'config' => [
                'type' => 'datetime',
                'default' => 0,
            ],
            'l10n_mode' => 'exclude',
            'l10n_display' => 'defaultAsReadonly',
        ],
        'endtime' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.endtime',
            'config' => [
                'type' => 'datetime',
                'default' => 0,
                'range' => [
                    'upper' => mktime(0, 0, 0, 1, 1, 2038),
                ],
            ],
            'l10n_mode' => 'exclude',
            'l10n_display' => 'defaultAsReadonly',
        ],
        'fe_group' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.fe_group',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectMultipleSideBySide',
                'size' => 5,
                'maxitems' => 20,
                'items' => [
                    [
                        'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.hide_at_login',
                        'value' => -1,
                    ],
                    [
                        'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.any_login',
                        'value' => -2,
                    ],
                    [
                        'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.usergroups',
                        'value' => '--div--',
                    ],
                ],
                'exclusiveKeys' => '-1,-2',
                'foreign_table' => 'fe_groups',
            ],
        ],
        'hidden' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.enabled',
            'config' => [
                'type' => 'check',
                'renderType' => 'checkboxToggle',
                'items' => [
                    [
                        'label' => '',
                        'invertStateDisplay' => true
                    ]
                ],
            ]
        ],
        'sys_language_uid' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.language',
            'config' => [
                'type' => 'language',
            ],
        ],
        'l18n_parent' => [
            'displayCond' => 'FIELD:sys_language_uid:>:0',
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.l18n_parent',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [
                    [
                        'label' => '',
                        'value' => 0,
                    ],
                ],
                'foreign_table' => 'tx_vshop_products',
                'foreign_table_where' =>
                    'AND {#tx_vshop_products}.{#pid}=###CURRENT_PID###'
                    . ' AND {#tx_vshop_products}.{#sys_language_uid} IN (-1,0)',
                'default' => 0,
            ],
        ],
        'l10n_source' => [
            'config' => [
                'type' => 'passthrough',
            ],
        ],
        'l18n_diffsource' => [
            'config' => [
                'type' => 'passthrough',
                'default' => '',
            ],
        ],
        'orderno' => [
            'exclude' => true,
            'label' => 'LLL:EXT:victory_products/Resources/Private/Language/Backend.xlf:products.orderno',
            'config' => [
                'type' => 'input',
                'size' =>'10',
                'max' =>'10',
                'eval' =>'required,trim',
            ],
        ],
        'status' => [
            'exclude' => true,
            'label' => 'LLL:EXT:victory_products/Resources/Private/Language/Backend.xlf:products.status',
            'config' => [
                'type' => 'input',
                'size' =>'10',
                'max' =>'10',
                'eval' =>'required,trim',
            ],
        ],
        'price' => [
            'exclude' => true,
            'label' => 'LLL:EXT:victory_products/Resources/Private/Language/Backend.xlf:products.price',
            'config' => [
                'type' => 'input',
                'size' =>'15',
                'max' =>'15',
                'eval' =>'trim',
            ],
        ],
        'centprice' => [
            'exclude' => true,
            'label' => 'LLL:EXT:victory_products/Resources/Private/Language/Backend.xlf:products.centprice',
            'config' => [
                'type' => 'input',
                'size' =>'4',
                'max' =>'4',
                'eval' =>'num',
            ],
        ],
        'qty' => [
            'exclude' => true,
            'label' => 'LLL:EXT:victory_products/Resources/Private/Language/Backend.xlf:products.qty',
            'config' => [
                'type' => 'input',
                'size' =>'4',
                'max' =>'4',
                'eval' =>'num',
            ],
        ],
        'labeltext' => [
            'exclude' => true,
            'label' => 'LLL:EXT:victory_products/Resources/Private/Language/Backend.xlf:products.labeltext',
            'config' => [
                'type' => 'text',
                "cols" => "40",
                "rows" => "3",
            ],
        ],
        'description' => [
            'label' => 'LLL:EXT:victory_products/Resources/Private/Language/Backend.xlf:products.description',
            'config' => [
                'type' => 'text',
                'enableRichtext' => true,
            ],
        ],
        'infotext' => [
            'exclude' => true,
            'label' => 'LLL:EXT:victory_products/Resources/Private/Language/Backend.xlf:products.infotext',
            'config' => [
                'type' => 'text',
                "cols" => "40",
                "rows" => "4",
            ],
        ],
        'text2' => [
            'exclude' => true,
            'label' => 'LLL:EXT:victory_products/Resources/Private/Language/Backend.xlf:products.text2',
            'config' => [
                'type' => 'text',
                "cols" => "40",
                "rows" => "4",
            ],
        ],
        'text3' => [
            'exclude' => true,
            'label' => 'LLL:EXT:victory_products/Resources/Private/Language/Backend.xlf:products.text3',
            'config' => [
                'type' => 'text',
                "cols" => "40",
                "rows" => "4",
            ],
        ],
        'weight' => [
            'exclude' => true,
            'label' => 'LLL:EXT:victory_products/Resources/Private/Language/Backend.xlf:products.weight',
            'config' => [
                'type' => 'input',
                'size' =>'30',
            ],
        ],
        'catalogno' => [
            'exclude' => true,
            'label' => 'LLL:EXT:victory_products/Resources/Private/Language/Backend.xlf:products.catalogno',
            'config' => [
                'type' => 'input',
                'size' =>'15',
                'max' =>'15',
            ],
        ],
        'image' => [
            'label' => 'LLL:EXT:victory_products/Resources/Private/Language/Backend.xlf:products.image',
            'config' => [
                'type' => 'file',
                'allowed' => ['common-image-types', 'webp'],
                "minitems" => 0,
                "maxitems" => 1,
                'appearance' => [
                    'createNewRelationLinkTitle' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:images.addFileReference',
                    'showPossibleLocalizationRecords' => true,
                ],
            ],
        ],
        'category' => [
            'exclude' => true,
            'label' => 'LLL:EXT:victory_products/Resources/Private/Language/Backend.xlf:products.category',
            'config' => [
                'type' => 'input',
                'size' =>'10',
                "max" => "10",
                "eval" => "trim",
            ],
        ],
        'article' => [
            'exclude' => true,
            'label' => 'LLL:EXT:victory_products/Resources/Private/Language/Backend.xlf:products.article',
            'config' => [
                'type' => 'input',
                'size' =>'10',
                "max" => "10",
                "eval" => "trim",
            ],
        ],
        'material' => [
            'exclude' => true,
            'label' => 'LLL:EXT:victory_products/Resources/Private/Language/Backend.xlf:products.material',
            'config' => [
                'type' => 'input',
                'size' =>'5',
                "max" => "3",
                "eval" => "trim",
            ],
        ],
        'catalogsearch' => [
            'exclude' => true,
            'label' => 'LLL:EXT:victory_products/Resources/Private/Language/Backend.xlf:products.catalogsearch',
            'config' => [
                'type' => 'input',
                'size' =>'20',
                "max" => "20",
                "eval" => "trim",
            ],
        ],
    ]
];