<?php
defined('TYPO3') || die();
use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;
use TYPO3\CMS\Extbase\Utility\ExtensionUtility;

$ctypeKey = ExtensionUtility::registerPlugin(
    'tooltip',
    'Replace',
    'LLL:EXT:tooltip/Resources/Private/Language/locallang_db.xlf:plugin.replace.title'
);

$ctypeKey =  ExtensionUtility::registerPlugin(
    'tooltip',
    'Glossar',
    'LLL:EXT:tooltip/Resources/Private/Language/locallang_db.xlf:plugin.glossar.title'
);
ExtensionManagementUtility::addToAllTCAtypes(
  'tt_content',
  '--div--;Configuration,pi_flexform,',
  $ctypeKey,
  'after:subheader',
);

ExtensionManagementUtility::addPiFlexFormValue(
  '*',
  'FILE:EXT:tooltip/Configuration/FlexForms/Glossar.xml',
  $ctypeKey,
);

