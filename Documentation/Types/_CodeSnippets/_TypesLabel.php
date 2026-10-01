<?php

return [
  'ctrl' => [
    'title' => 'My table',
    'label' => 'header',
    'type' => 'record_type',
  ],
  'types' => [
    'article' => [
      'showitem' => 'record_type, header, teaser',
      'label_alt' => 'teaser',
    ],
    'event' => [
      'showitem' => 'record_type, header, event_date, location',
      'label_alt' => 'event_date,location',
      'label_alt_force' => true,
    ],
  ],
  'columns' => [
    'record_type' => [
      'label' => 'Type',
      'config' => [
        'type' => 'select',
        'renderType' => 'selectSingle',
        'items' => [
          ['label' => 'Article', 'value' => 'article'],
          ['label' => 'Event', 'value' => 'event'],
        ],
      ],
    ],
    'header' => [
      'label' => 'Header',
      'config' => [
        'type' => 'input',
      ],
    ],
    'teaser' => [
      'label' => 'Teaser',
      'config' => [
        'type' => 'text',
      ],
    ],
    'event_date' => [
      'label' => 'Event date',
      'config' => [
        'type' => 'datetime',
      ],
    ],
    'location' => [
      'label' => 'Location',
      'config' => [
        'type' => 'input',
      ],
    ],
  ],
];
