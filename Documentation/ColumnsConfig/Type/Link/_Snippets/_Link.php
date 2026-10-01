<?php

return [
  'ctrl' => [
    'title' => 'My table',
    'label' => 'a_link_field',
  ],
  'columns' => [
    'a_link_field' => [
      'label' => 'Link',
      'config' => [
        'type' => 'link',
        'allowedTypes' => ['page', 'url', 'record'],
      ],
    ],

    'link_custom_handlers' => [
      'label' => 'Link to products',
      'config' => [
        'type' => 'link',
        'allowedTypes' => [
          'page',
          'url',
          // Both are custom link handlers
          'tx_myextension_product',
          'custom_identifier',
        ],
      ],
    ],

    'link_all_types' => [
      'label' => 'Link of any type',
      'config' => [
        'type' => 'link',
        // Allow all types (or skip this option)
        'allowedTypes' => ['*'],
      ],
    ],

    'link_some_options' => [
      'label' => 'Link with class and parameters',
      'config' => [
        'type' => 'link',
        'appearance' => [
          // Display only 'class' and 'params'
          'allowedOptions' => ['class', 'params'],
        ],
      ],
    ],

    'link_all_options' => [
      'label' => 'Link with all options',
      'config' => [
        'type' => 'link',
        'appearance' => [
          // Allow all options (or skip this option)
          'allowedOptions' => ['*'],
        ],
      ],
    ],

    'link_no_options' => [
      'label' => 'Link without options',
      'config' => [
        'type' => 'link',
        'appearance' => [
          // Deny all options
          'allowedOptions' => [],
        ],
      ],
    ],

    'link_email' => [
      'label' => 'Email link',
      'config' => [
        'type' => 'link',
        'allowedTypes' => ['email'],
        'appearance' => [
          'allowedOptions' => ['body', 'cc'],
        ],
      ],
    ],

    'link_images' => [
      'label' => 'Link to an image',
      'config' => [
        'type' => 'link',
        'appearance' => [
          // Allow only jpg and png file extensions
          'allowedFileExtensions' => ['jpg', 'png'],
        ],
      ],
    ],

    'link_files' => [
      'label' => 'Link to a file',
      'config' => [
        'type' => 'link',
        'appearance' => [
          // Allow all file extensions (or skip this option)
          'allowedFileExtensions' => ['*'],
        ],
      ],
    ],

    'link_title_label' => [
      'label' => 'Link with a translated browser title',
      'config' => [
        'type' => 'link',
        'appearance' => [
          // Either provide a label reference (recommended)
          'browserTitle' => 'LLL:EXT:my_extension/Resources/Private/Language/locallang_db.xlf:my_custom_title',
        ],
      ],
    ],

    'link_title_string' => [
      'label' => 'Link with a browser title',
      'config' => [
        'type' => 'link',
        'appearance' => [
          // Or a simple string value
          'browserTitle' => 'My custom title',
        ],
      ],
    ],

    'link_no_browser' => [
      'label' => 'Link without link browser',
      'config' => [
        'type' => 'link',
        'appearance' => [
          // Disable the link browser
          'enableBrowser' => false,
        ],
      ],
    ],

    'link_autocomplete' => [
      'label' => 'A link with autocomplete',
      'config' => [
        'type' => 'link',
        'size' => 20,
        'nullable' => true,
        'autocomplete' => true,
      ],
    ],

    'link_nullable' => [
      'label' => 'A nullable link',
      'config' => [
        'type' => 'link',
        'nullable' => true,
      ],
    ],

    'link_placeholder' => [
      'label' => 'A link with a placeholder',
      'config' => [
        'type' => 'link',
        'placeholder' => 'https://typo3.org',
        'mode' => 'useOrOverridePlaceholder',
      ],
    ],

    'link_value_picker' => [
      'label' => 'My favorite web page',
      'config' => [
        'type' => 'link',
        'mode' => 'prepend',
        'valuePicker' => [
          'items' => [
            ['label' => 'TYPO3.org', 'value' => 'https://typo3.org'],
            [
              'label' => 'TYPO3 Documentation',
              'value' => 'https://docs.typo3.org',
            ],
            [
              'label' => 'TYPO3 Ticket System',
              'value' => 'https://forge.typo3.org',
            ],
          ],
        ],
      ],
    ],
  ],
  'types' => [
    '0' => [
      'showitem' => 'a_link_field',
    ],
  ],
];
