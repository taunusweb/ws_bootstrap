<?php
defined('TYPO3_MODE') or die();

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::registerPageTSConfigFile(
    'wsbootstrap',
    'Configuration/PageTS/BackendLayoutConfiguration.t3s',
    'Backend Layouts'
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::registerPageTSConfigFile(
    'wsbootstrap',
    'Configuration/PageTS/BackendConfiguration.t3s',
    'Website configuration'
);
