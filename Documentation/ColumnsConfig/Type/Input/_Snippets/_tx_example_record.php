<?php

return [
    // ...
    'columns' => [
        'example_field' => [
            'config' => [
                'type' => 'text',
                'required' => true,
                'eval' => 'trim,' . \MyVendor\MyExtension\Evaluation\ExampleEvaluation::class,
            ],
        ],
    ],
];
