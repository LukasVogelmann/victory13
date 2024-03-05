<?php

use TYPO3\CMS\Extbase\Utility\ExtensionUtility;

defined('TYPO3') or die();

call_user_func(static function () {
    // Register FE plugin
    ExtensionUtility::configurePlugin(
        'VictoryProducts',
        'List',
        [\Victory\VictoryProducts\Controller\ProductsController::class => 'list'],
        [\Victory\VictoryProducts\Controller\ProductsController::class => 'list'],
        ExtensionUtility::PLUGIN_TYPE_PLUGIN
    );
});
