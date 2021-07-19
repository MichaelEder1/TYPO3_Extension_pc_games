<?php
defined('TYPO3_MODE') || die();

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'Games',
            'Games',
            [
                \MichaelEder\Games\Controller\GameController::class => 'list, show, genre, publisher, cheapest'
            ],
            // non-cacheable actions
            [
                \MichaelEder\Games\Controller\GameController::class => ''
            ]
        );

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'Games',
            'Genre',
            [
                \MichaelEder\Games\Controller\GameController::class => 'genre'
            ],
            // non-cacheable actions
            [
                \MichaelEder\Games\Controller\GameController::class => ''
            ]
        );

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'Games',
            'Publisher',
            [
                \MichaelEder\Games\Controller\GameController::class => 'publisher'
            ],
            // non-cacheable actions
            [
                \MichaelEder\Games\Controller\GameController::class => ''
            ]
        );

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'Games',
            'Cheapest',
            [
                \MichaelEder\Games\Controller\GameController::class => 'cheapest'
            ],
            // non-cacheable actions
            [
                \MichaelEder\Games\Controller\GameController::class => ''
            ]
        );

        // wizards
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
            'mod {
                wizards.newContentElement.wizardItems.plugins {
                    elements {
                        games {
                            iconIdentifier = games-plugin-games
                            title = LLL:EXT:games/Resources/Private/Language/locallang_db.xlf:tx_games_games.name
                            description = LLL:EXT:games/Resources/Private/Language/locallang_db.xlf:tx_games_games.description
                            tt_content_defValues {
                                CType = list
                                list_type = games_games
                            }
                        }
                        genre {
                            iconIdentifier = games-plugin-genre
                            title = LLL:EXT:games/Resources/Private/Language/locallang_db.xlf:tx_games_genre.name
                            description = LLL:EXT:games/Resources/Private/Language/locallang_db.xlf:tx_games_genre.description
                            tt_content_defValues {
                                CType = list
                                list_type = games_genre
                            }
                        }
                        publisher {
                            iconIdentifier = games-plugin-publisher
                            title = LLL:EXT:games/Resources/Private/Language/locallang_db.xlf:tx_games_publisher.name
                            description = LLL:EXT:games/Resources/Private/Language/locallang_db.xlf:tx_games_publisher.description
                            tt_content_defValues {
                                CType = list
                                list_type = games_publisher
                            }
                        }
                        cheapest {
                            iconIdentifier = games-plugin-cheapest
                            title = LLL:EXT:games/Resources/Private/Language/locallang_db.xlf:tx_games_cheapest.name
                            description = LLL:EXT:games/Resources/Private/Language/locallang_db.xlf:tx_games_cheapest.description
                            tt_content_defValues {
                                CType = list
                                list_type = games_cheapest
                            }
                        }
                    }
                    show = *
                }
           }'
        );
		$iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);
		
			$iconRegistry->registerIcon(
				'games-plugin-games',
				\TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
				['source' => 'EXT:games/Resources/Public/Icons/user_plugin_games.svg']
			);
		
			$iconRegistry->registerIcon(
				'games-plugin-genre',
				\TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
				['source' => 'EXT:games/Resources/Public/Icons/user_plugin_genre.svg']
			);
		
			$iconRegistry->registerIcon(
				'games-plugin-publisher',
				\TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
				['source' => 'EXT:games/Resources/Public/Icons/user_plugin_publisher.svg']
			);
		
			$iconRegistry->registerIcon(
				'games-plugin-cheapest',
				\TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
				['source' => 'EXT:games/Resources/Public/Icons/user_plugin_cheapest.svg']
			);
		
    }
);
