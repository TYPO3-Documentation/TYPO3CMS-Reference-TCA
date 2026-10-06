<?php

return [
  'ctrl' => [
    'title' => 'my_extension.db:registration',
    'label' => 'attendee',
    'label_alt' => 'ticket',
    'label_alt_force' => true,
    'hideTable' => true,
    'tstamp' => 'tstamp',
    'crdate' => 'crdate',
    'delete' => 'deleted',
    'versioningWS' => true,
    'iconfile' => 'EXT:my_extension/Resources/Public/Icons/Registration.svg',
  ],
  'columns' => [
    'attendee' => [
      'label' => 'my_extension.db:registration.attendee',
      'config' => [
        'type' => 'group',
        'allowed' => 'fe_users',
        'minitems' => 1,
        'maxitems' => 1,
      ],
    ],
    'ticket' => [
      'label' => 'my_extension.db:registration.ticket',
      'config' => [
        'type' => 'select',
        'renderType' => 'selectSingle',
        'items' => [
          ['label' => 'my_extension.db:registration.ticket.regular', 'value' => 'regular'],
          ['label' => 'my_extension.db:registration.ticket.student', 'value' => 'student'],
          ['label' => 'my_extension.db:registration.ticket.speaker', 'value' => 'speaker'],
        ],
      ],
    ],
  ],
  'types' => [
    '0' => [
      'showitem' => 'attendee, ticket',
    ],
  ],
];
