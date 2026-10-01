<?php

return [
  'ctrl' => [
    'title' => 'My table',
    'label' => 'title',
    'type' => 'record_type',
  ],
  'columns' => [
    'title' => [
      'label' => 'Title',
      'config' => [
        'type' => 'input',
      ],
    ],
    'record_type' => [
      'label' => 'Type',
      'config' => [
        'type' => 'select',
        'renderType' => 'selectSingle',
        'items' => [
          ['label' => 'Default', 'value' => '0'],
          ['label' => 'Gallery', 'value' => 'gallery'],
        ],
      ],
    ],
    'content_elements' => [
      'label' => 'Content elements',
      'config' => [
        'type' => 'inline',
        'foreign_table' => 'tt_content',
        'foreign_field' => 'tx_myextension_parent',
        'overrideChildTca' => [
          'columns' => [
            'CType' => [
              'config' => [
                'default' => 'image',
              ],
            ],
          ],
          'types' => [
            'text' => [
              'showitem' => 'CType, header, bodytext',
            ],
          ],
        ],
      ],
    ],
  ],
  'types' => [
    '0' => [
      'showitem' => 'record_type, title, content_elements',
    ],
    'gallery' => [
      'showitem' => 'record_type, title, content_elements',
      'columnsOverrides' => [
        'content_elements' => [
          'config' => [
            'overrideChildTca' => [
              'columns' => [
                'CType' => [
                  'config' => [
                    'default' => 'textmedia',
                  ],
                ],
              ],
            ],
          ],
        ],
      ],
    ],
  ],
];
