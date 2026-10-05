<?php

return [
  'ctrl' => [
    'title' => 'my_extension.db:location',
    'label' => 'name',
    'label_alt' => 'city',
    'label_alt_force' => true,
    'selicon_field' => 'image',
    'default_sortby' => 'name',
    'rootLevel' => -1,
    'security' => [
      'ignoreRootLevelRestriction' => true,
    ],
    'tstamp' => 'tstamp',
    'crdate' => 'crdate',
    'delete' => 'deleted',
    'iconfile' => 'EXT:my_extension/Resources/Public/Icons/Location.svg',
  ],
  'columns' => [
    'name' => [
      'label' => 'my_extension.db:location.name',
      'config' => [
        'type' => 'input',
        'required' => true,
      ],
    ],
    'city' => [
      'label' => 'my_extension.db:location.city',
      'config' => [
        'type' => 'input',
      ],
    ],
    'image' => [
      'label' => 'my_extension.db:location.image',
      'config' => [
        'type' => 'file',
        'maxitems' => 1,
        'allowed' => 'common-image-types',
        'relationship' => 'manyToOne',
      ],
    ],
  ],
  'types' => [
    '0' => [
      'showitem' => 'name, city, image',
    ],
  ],
];
