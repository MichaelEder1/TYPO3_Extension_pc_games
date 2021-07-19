<?php
defined('TYPO3_MODE') || die();

call_user_func(static function() {
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_games_domain_model_game', 'EXT:games/Resources/Private/Language/locallang_csh_tx_games_domain_model_game.xlf');
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_games_domain_model_game');

    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_games_domain_model_character', 'EXT:games/Resources/Private/Language/locallang_csh_tx_games_domain_model_character.xlf');
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_games_domain_model_character');

    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_games_domain_model_genre', 'EXT:games/Resources/Private/Language/locallang_csh_tx_games_domain_model_genre.xlf');
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_games_domain_model_genre');

    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_games_domain_model_publisher', 'EXT:games/Resources/Private/Language/locallang_csh_tx_games_domain_model_publisher.xlf');
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_games_domain_model_publisher');

    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_games_domain_model_usk', 'EXT:games/Resources/Private/Language/locallang_csh_tx_games_domain_model_usk.xlf');
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_games_domain_model_usk');
});
