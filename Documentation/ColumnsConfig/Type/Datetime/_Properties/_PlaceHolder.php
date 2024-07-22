<?php

$temporaryColumns['my-date'] = [
    'title' => 'My datetime field',
    'config' => [
        'type' => 'datetime',
        'placeholder' => gmmktime(0, 0, 0, 1, 1, 2024),
        'mode' => 'useOrOverridePlaceholder',
    ],
];
