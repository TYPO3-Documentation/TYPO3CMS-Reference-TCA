<?php

use MyVendor\MyExtension\Filter\GenderFilter;
use MyVendor\MyExtension\Filter\OtherFilter;

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
    'relatives' => [
      'label' => 'Relatives',
      'config' => [
        'type' => 'group',
        'allowed' => 'tx_myextension_person',
        'filter' => [
          [
            'userFunc' => GenderFilter::class . '->filterByGender',
            'parameters' => [
              // optional parameters for the filter go here
            ],
          ],
          [
            'userFunc' => OtherFilter::class . '->myFilter',
            'parameters' => [
              // optional parameters for the filter go here
            ],
          ],
        ],
      ],
    ],
  ],
  'types' => [
    '0' => [
      'showitem' => 'name, relatives',
    ],
  ],
];
