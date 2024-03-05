<?php

defined('TYPO3') or die('Access denied.');

// Add content element PageTSConfig
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::registerPageTSConfigFile(
    'victory_products',
    'Configuration/TsConfig/Page/Plugin/products.tsconfig',
    'Plugin: Products'
);
