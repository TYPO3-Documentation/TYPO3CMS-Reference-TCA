<?php

return [
  'ctrl' => [
    'title' => 'My table',
    'label' => 'password_field',
  ],
  'columns' => [
    'password_autocomplete' => [
      'label' => 'Your password',
      'config' => [
        'type' => 'password',
        'size' => 20,
        'autocomplete' => true,
      ],
    ],

    'password_nullable' => [
      'label' => 'A nullable password',
      'config' => [
        'type' => 'password',
        'nullable' => true,
      ],
    ],

    'password_placeholder' => [
      'label' => 'My password field',
      'config' => [
        'type' => 'password',
        'placeholder' => 'At least 8 characters',
      ],
    ],

    'password_policy_default' => [
      'label' => 'Password with the default policy',
      'config' => [
        'type' => 'password',
        'passwordPolicy' => 'default',
      ],
    ],

    'password_policy_fe' => [
      'label' => 'Password with the frontend policy',
      'config' => [
        'type' => 'password',
        'passwordPolicy' =>
          $GLOBALS['TYPO3_CONF_VARS']['FE']['passwordPolicy'] ?? '',
      ],
    ],

    'password_policy_be' => [
      'label' => 'Password with the backend policy',
      'config' => [
        'type' => 'password',
        'passwordPolicy' =>
          $GLOBALS['TYPO3_CONF_VARS']['BE']['passwordPolicy'] ?? '',
      ],
    ],

    'password_field' => [
      'label' => 'Password',
      'config' => [
        'type' => 'password',
        'fieldControl' => [
          'passwordGenerator' => [
            'renderType' => 'passwordGenerator',
          ],
        ],
      ],
    ],
  ],
  'types' => [
    '0' => [
      'showitem' => 'password_field',
    ],
  ],
];
