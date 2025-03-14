<?php
defined('TYPO3') || die();

    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
        'tooltip',
        'Replace',
        [
            \WACON\Tooltip\Controller\TooltipController::class => 'replace'
        ],
        // non-cacheable actions
        [
          
        ]
    );

   