<?php
defined('TYPO3_MODE') || die();

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
    'Games',
    'Games',
    'Games'
);

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
    'Games',
    'Genre',
    'Games genre'
);

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
    'Games',
    'Publisher',
    'Games publisher'
);

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
    'Games',
    'Cheapest',
    'Games cheapest'
);
