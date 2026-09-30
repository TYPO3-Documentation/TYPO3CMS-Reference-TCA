<?php

return [
  'ctrl' => [
    'title' => 'My table',
    'label' => 'title',
  ],
  'columns' => [
    'title' => [
      'label' => 'Title',
      'config' => [
        'type' => 'input',
      ],
    ],

    'related_records' => [
      'label' => 'Related records',
      'config' => [
        'type' => 'group',
        'allowed' => 'pages, tt_content',
        'suggestOptions' => [
          'default' => [
            'pidList' => '6,7',
            'pidDepth' => 4,
            'searchWholePhrase' => true,
          ],
          // Search only for pages with doktype=1
          'pages' => [
            'searchCondition' => 'doktype = 1',
          ],
        ],
      ],
    ],
  ],
  'types' => [
    '0' => [
      'showitem' => 'title, related_records',
    ],
  ],
];
