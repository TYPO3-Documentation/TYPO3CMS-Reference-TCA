<?php

$temporaryColumns['my_editor'] = [
    'config' => [
        'type' => 'text',
        'renderType' => 'textTable',
        'search' => [
            'andWhere' => '{#type}=\'type_x\' OR {#type}=\'type_y\'',
        ],
    ],
];
