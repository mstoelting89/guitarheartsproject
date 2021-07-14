<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'Ghp',
            'Pi',
            'GuitarHearsProject'
        );

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('ghp', 'Configuration/TypoScript', 'Guitarheartsproject');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_ghp_domain_model_guitarheartsproject', 'EXT:ghp/Resources/Private/Language/locallang_csh_tx_ghp_domain_model_guitarheartsproject.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_ghp_domain_model_guitarheartsproject');

    }
);
