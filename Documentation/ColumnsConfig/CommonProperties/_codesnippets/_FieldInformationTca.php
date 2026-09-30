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
              'text' => 'LLL:EXT:my_extension/Resources/Private/Language/locallang_db.xlf:tags.information',
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
