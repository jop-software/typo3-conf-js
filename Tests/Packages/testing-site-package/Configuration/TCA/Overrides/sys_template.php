<?php

if (!defined('TYPO3')) {
    die('Access denied.');
}

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
    "testing_site_package",
    "Configuration/TypoScript/",
    "testing_site_package Template"
);
