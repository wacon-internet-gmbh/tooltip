<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Tooltip',
    'description' => 'Add Tooltip to keywords in content',
    'category' => 'plugin',
    'author' => 'Kerstin Schmitt',
    'author_email' => 'info@wacon.de',
    'author_company' => 'WACON Internet GmbH',
    'state' => 'stable',
    'clearCacheOnLoad' => 0,
    'version' => '1.1.1',
    'constraints' => [
        'depends' => [
            'typo3' => '12.4.0-13.4.99',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];
