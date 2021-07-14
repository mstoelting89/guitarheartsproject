<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'Ghp',
            'Pi',
            [
                \Mst\Ghp\Controller\GuitarHeartsProjectController::class => 'list, show'
            ],
            // non-cacheable actions
            [
                \Mst\Ghp\Controller\GuitarHeartsProjectController::class => ''
            ]
        );

        // wizards
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
            'mod {
                wizards.newContentElement.wizardItems.plugins {
                    elements {
                        pi {
                            iconIdentifier = ghp-plugin-pi
                            title = LLL:EXT:ghp/Resources/Private/Language/locallang_db.xlf:tx_ghp_pi.name
                            description = LLL:EXT:ghp/Resources/Private/Language/locallang_db.xlf:tx_ghp_pi.description
                            tt_content_defValues {
                                CType = list
                                list_type = ghp_pi
                            }
                        }
                    }
                    show = *
                }
           }'
        );

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
            'mod {
                wizards.newContentElement.wizardItems.common {
                    elements {
                        sideHeaderContent {
                            iconIdentifier = content-text
                            title = LLL:EXT:ghp/Resources/Private/Language/locallang.xlf:sideHeaderContent_title
                            description = LLL:EXT:ghp/Resources/Private/Language/locallang.xlf:sideHeaderContent_description
                            tt_content_defValues {
                                CType = sideHeaderContent
                            }
                        }
                    }
                    show := addToList(sideHeaderContent)
                }
            }'
        );

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
            'mod {
                wizards.newContentElement.wizardItems.common {
                    elements {
                        carousel {
                            iconIdentifier = content-text
                            title = LLL:EXT:ghp/Resources/Private/Language/locallang.xlf:carousel_title
                            description = LLL:EXT:ghp/Resources/Private/Language/locallang.xlf:carousel_description
                            tt_content_defValues {
                                CType = carousel
                            }
                        }
                    }
                    show := addToList(carousel)
                }
            }'
        );

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
            'mod {
                wizards.newContentElement.wizardItems {
                    common {
                        elements {
                            ghp_info_card {
                                iconIdentifier = content-text
                                title = LLL:EXT:ghp/Resources/Private/Language/locallang.xlf:ghp_info_card_title
                                description = LLL:EXT:ghp/Resources/Private/Language/locallang.xlf:ghp_info_card_description
                                tt_content_defValues {
                                    CType = ghp_info_card
                                }
                            }
                        }
                        show := addToList(ghp_info_card)
                    }
                }
            }'
        );

		$iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);

			$iconRegistry->registerIcon(
				'ghp-plugin-pi',
				\TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
				['source' => 'EXT:ghp/Resources/Public/Icons/user_plugin_pi.svg']
			);

    }
);
