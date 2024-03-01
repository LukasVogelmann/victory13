<?php

defined('TYPO3') or die('Access denied.');


(static function () {
    $GLOBALS['TYPO3_CONF_VARS']['RTE']['Presets']['victory_frontend'] = 'EXT:victory_frontend/Configuration/RTE/Default.yaml';

    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('<INCLUDE_TYPOSCRIPT: source="FILE:EXT:victory_frontend/Configuration/TsConfig/Page/All.tsconfig">');

    $GLOBALS['TYPO3_CONF_VARS']['SYS']['fluid']['namespaces']['victory'] = [
        'Victory\VictoryFrontend\ViewHelpers',
    ];
})();
