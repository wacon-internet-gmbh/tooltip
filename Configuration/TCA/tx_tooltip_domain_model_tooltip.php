<?php
return [
    'ctrl' => [
        'title' => 'LLL:EXT:tooltip/Resources/Private/Language/locallang_db.xlf:tx_tooltip_domain_model_tooltip',
        'label' => 'tipid',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'delete' => 'deleted',
        'enablecolumns' => [
            'disabled' => 'hidden',
            'starttime' => 'starttime',
            'endtime' => 'endtime',
        ],
        'searchFields' => [
            'ignorePageTypeRestriction' => true
        ],
        'security' => 'secret',
        'iconfile' => 'EXT:tooltip/Resources/Public/Icons/Extension.png'
    ],
    'types' => [
        '1' => ['showitem' => 'tipid, tiptext,description, --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language, sys_language_uid, l10n_parent, l10n_diffsource, --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access, hidden, starttime, endtime'],
    ],
    'columns' => [
        'tipid' => [
            'exclude' => false,
            'label' => 'LLL:EXT:tooltip/Resources/Private/Language/locallang_db.xlf:tx_tooltip_domain_model_tooltip.tipid',
            'config' => [
                'type' => 'input',
            ]
        ],
        'tiptext' => [
            'exclude' => false,
            'label' => 'LLL:EXT:tooltip/Resources/Private/Language/locallang_db.xlf:tx_tooltip_domain_model_tooltip.tiptext',
            'config' => [
                'type' => 'input',
            ]
        ],
        'description' => [
            'exclude' => false,
            'label' => 'LLL:EXT:tooltip/Resources/Private/Language/locallang_db.xlf:tx_tooltip_domain_model_tooltip.description',
            'config' => [
                'type' => 'input',
            ]
        ],
    
    ],
];
