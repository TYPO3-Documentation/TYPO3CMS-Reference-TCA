<?php

return [
  'ctrl' => [
    'title' => 'Event',
    'label' => 'title',
    'delete' => 'deleted',
  ],
  'columns' => [
    'title' => [
      'label' => 'Title',
      'config' => [
        'type' => 'input',
        'required' => true,
      ],
    ],
    'speakers' => [
      'label' => 'Speakers',
      'config' => [
        'type' => 'inline',
        'foreign_table' => 'tx_myextension_event_speaker',
        'foreign_field' => 'event',
        'foreign_sortby' => 'sorting',
        'foreign_selector' => 'speaker',
        'foreign_unique' => 'speaker',
      ],
    ],
  ],
  'types' => [
    '0' => [
      'showitem' => 'title, speakers',
    ],
  ],
];
