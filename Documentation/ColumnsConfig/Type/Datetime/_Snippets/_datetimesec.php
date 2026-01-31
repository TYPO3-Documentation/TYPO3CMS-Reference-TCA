<?php

return [
    // ...
    'columns' => [
        'meteor_impact' => [
            'label' => 'Time of estimated impact',
            'config' => [
                'type' => 'datetime',
                'format' => 'datetimesec',
                'dbType' => 'datetime', // can also be omitted for integer-based storage
                'nullable' => true, // can also be false
            ],
        ],
    ],
    // ...
];
