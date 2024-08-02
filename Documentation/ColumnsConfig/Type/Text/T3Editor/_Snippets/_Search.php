<?php

$temporaryColumns['my_editor'] = [
    'config' => [
        'type' => 'text',
        'renderType' => 't3editor',
        'search' => [
            'andWhere' => '{#type}=\'type_x\' OR {#type}=\'type_y\'',
        ],
    ],
];
