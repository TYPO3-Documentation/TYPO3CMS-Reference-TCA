<?php

return [
  'ctrl' => [
    'title' => 'my_extension.db:hotel',
    'label' => 'name',
    'label_alt' => 'city',
    'label_alt_force' => true,
    'default_sortby' => 'name',
    'tstamp' => 'tstamp',
    'crdate' => 'crdate',
    'delete' => 'deleted',
    // Required, as the hotels are inline children of the conferences
    'versioningWS' => true,
    'iconfile' => 'EXT:my_extension/Resources/Public/Icons/Hotel.svg',
  ],
  'columns' => [
    'name' => [
      'label' => 'my_extension.db:hotel.name',
      'config' => [
        'type' => 'input',
        'required' => true,
      ],
    ],
    'city' => [
      'label' => 'my_extension.db:hotel.city',
      'config' => [
        'type' => 'input',
      ],
    ],
  ],
  'types' => [
    '0' => [
      'showitem' => 'name, city',
    ],
  ],
];
