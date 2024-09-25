<?php

$GLOBALS['TCA']['tx_myextension_mytable'] = array_merge_recursive(
    $GLOBALS['TCA']['tx_myextension_mytable'],
    [
        'interface' => [
            'maxDBListItems' => 30,
            'maxSingleDBListItems' => 50,
        ],
    ]
);
