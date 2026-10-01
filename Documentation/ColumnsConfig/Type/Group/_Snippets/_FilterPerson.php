<?php

use MyVendor\MyExtension\Filter\GenderFilter;

return [
  'ctrl' => [
    'title' => 'Person',
    'label' => 'name',
  ],
  'columns' => [
    'name' => [
      'label' => 'Name',
      'config' => [
        'type' => 'input',
      ],
    ],
    'gender' => [
      'label' => 'Gender',
      'config' => [
        'type' => 'radio',
        'items' => [
          ['label' => 'Female', 'value' => 'female'],
          ['label' => 'Male', 'value' => 'male'],
        ],
      ],
    ],
    'mother' => [
      'label' => 'Mother',
      'config' => [
        'type' => 'group',
        'allowed' => 'tx_myextension_person',
        'maxitems' => 1,
        'filter' => [
          [
            'userFunc' => GenderFilter::class . '->filterByGender',
            'parameters' => [
              'evaluateGender' => 'female',
            ],
          ],
        ],
      ],
    ],
    'father' => [
      'label' => 'Father',
      'config' => [
        'type' => 'group',
        'allowed' => 'tx_myextension_person',
        'maxitems' => 1,
        'filter' => [
          [
            'userFunc' => GenderFilter::class . '->filterByGender',
            'parameters' => [
              'evaluateGender' => 'male',
            ],
          ],
        ],
      ],
    ],
  ],
  'types' => [
    '0' => [
      'showitem' => 'name, gender, mother, father',
    ],
  ],
];
