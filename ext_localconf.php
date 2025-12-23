<?php
defined('TYPO3') || die();

use \TYPO3\CMS\Extbase\Utility\ExtensionUtility;

   ExtensionUtility::configurePlugin(
        'tooltip',
        'Replace',
        [
            \WACON\Tooltip\Controller\TooltipController::class => 'replace'
        ],
        // non-cacheable actions
        [
          
        ],
         ExtensionUtility::PLUGIN_TYPE_CONTENT_ELEMENT,
    );

   