<?php

return [
  'ctrl' => [
    'title' => 'Product',
    'label' => 'tags',
  ],
  'columns' => [
    'tags' => [
      'label' => 'Tags',
      'config' => [
        'type' => 'input',
        'fieldInformation' => [
          'tagInformation' => [
            'renderType' => 'myExtensionTagInformation',
            'options' => [
              'text' => 'my_extension.db:tags.information',
            ],
          ],
        ],
      ],
    ],
  ],
  'types' => [
    '0' => [
      'showitem' => 'tags',
    ],
  ],
];
