<?php

defined('TYPO3') or die('Access denied.');


// Allow Custom Records on Standard Pages
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_victory_teaser_item');