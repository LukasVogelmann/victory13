<?php
defined('TYPO3') or die('Access denied.');
call_user_func(function()
{
    // Temporary variables
    $extensionKey = 'victory_frontend';

    // Default PageTS for VictoryFrontend
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::registerPageTSConfigFile(
        $extensionKey,
        'Configuration/TsConfig/Page/All.tsconfig',
        'Frontend'
    );
});
