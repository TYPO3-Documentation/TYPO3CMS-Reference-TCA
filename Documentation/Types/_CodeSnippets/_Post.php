<?php

return [
  'ctrl' => [
    'title' => 'LLL:my_extension.db:tx_myextension_domain_model_post',
    'label' => 'title',
    'type' => 'record_type',
    'typeicon_classes' => [
      '0' => 'tx-blog-post',
      'link' => 'tx-blog-post-link',
      'special' => 'tx-blog-post-special',
    ],
    'enablecolumns' => [
      'disabled' => 'hidden',
      'starttime' => 'starttime',
      'endtime' => 'endtime',
      'fe_group' => 'fe_group',
    ],
    'languageField' => 'sys_language_uid',
    'transOrigPointerField' => 'l10n_parent',
  ],
  'types' => [
    '0' => [
      'showitem' => '
        record_type, blog, title, date, author, content,
        --div--;core.form.tabs:access,
          hidden,
          --palette--;;paletteStartStop,
          fe_group,
        --div--;core.form.tabs:language,
          --palette--;;paletteLanguage,
      ',
    ],
    'link' => [
      'title' => 'LLL:my_extension.db:link.title',
      'showitem' => 'record_type, blog, title, date, author, link',
      'creationOptions' => [
        'defaultValues' => [
          'author' => 'External Author',
        ],
      ],
    ],
    'special' => [
      'title' => 'LLL:my_extension.db:special.title',
      'showitem' => 'record_type, blog, title, date, author, content, tags',
      'columnsOverrides' => [
        'author' => [
          'config' => [
            'required' => true,
          ],
        ],
        'content' => [
          'description' => 'You can use Markdown syntax for the content.',
          'config' => [
            'renderType' => 'codeEditor',
          ],
        ],
      ],
    ],
  ],
  'palettes' => [
    'paletteStartStop' => [
      'showitem' => 'starttime, endtime',
    ],
    'paletteLanguage' => [
      'showitem' => 'sys_language_uid, l10n_parent',
    ],
  ],
  'columns' => [
    'record_type' => [
      'label' => 'LLL:my_extension.labels:post_types',
      'config' => [
        'type' => 'select',
        'renderType' => 'selectSingle',
        'items' => [
          ['label' => 'Blog Post', 'value' => '0'],
          ['label' => 'Link to External Blog Post', 'value' => 'link'],
          ['label' => 'Special Blog Post', 'value' => 'special'],
        ],
        'default' => '0',
      ],
    ],
    'blog' => [
      'label' => 'Blog',
      'config' => [
        'type' => 'select',
        'renderType' => 'selectSingle',
        'foreign_table' => 'tx_myextension_domain_model_blog',
      ],
    ],
    'title' => [
      'label' => 'Title',
      'config' => [
        'type' => 'input',
      ],
    ],
    'date' => [
      'label' => 'Date',
      'config' => [
        'type' => 'datetime',
      ],
    ],
    'author' => [
      'label' => 'Author',
      'config' => [
        'type' => 'input',
      ],
    ],
    'content' => [
      'label' => 'Content',
      'config' => [
        'type' => 'text',
      ],
    ],
    'link' => [
      'label' => 'Link',
      'config' => [
        'type' => 'link',
      ],
    ],
    'tags' => [
      'label' => 'Tags',
      'config' => [
        'type' => 'input',
      ],
    ],
  ],
];
