<?php

$myLinkField = [
    'label' => 'My favorite web page',
    'config' => [
        'type' => 'link',
        'mode' => 'prepend',
        'valuePicker' => [
            'items' => [
                ['label' => 'TYPO3.org', 'value' => 'https://typo3.org'],
                ['label' => 'TYPO3 Documentation', 'value' => 'https://docs.typo3.org'],
                ['label' => 'TYPO3 Ticket System', 'value' => 'https://forge.typo3.org'],
            ],
        ],
    ],
];
