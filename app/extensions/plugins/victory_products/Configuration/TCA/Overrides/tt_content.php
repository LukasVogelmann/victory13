<?php

use TYPO3\CMS\Extbase\Utility\ExtensionUtility;
use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

defined('TYPO3') or die();

call_user_func(static function () {
    // Register the plugin
    $pluginSignature = ExtensionUtility::registerPlugin(
        'VictoryProducts',
        'List',
        'Products | Listview',
    );

    $GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist'][$pluginSignature] = 'pi_flexform';

    ExtensionManagementUtility::addPiFlexFormValue(
        $pluginSignature,
        'FILE:EXT:victory_products/Configuration/FlexForms/List.xml'
    );
});
