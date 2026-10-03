<?php

return [
  'ctrl' => [
    'title' => 'my_extension.db:conference',
    'label' => 'title',
    'descriptionColumn' => 'internal_notes',
    'default_sortby' => 'conference_date DESC',
    'tstamp' => 'tstamp',
    'crdate' => 'crdate',
    'delete' => 'deleted',
    'editlock' => 'editlock',
    'enablecolumns' => [
      'disabled' => 'hidden',
      'starttime' => 'starttime',
      'endtime' => 'endtime',
      'fe_group' => 'fe_group',
    ],
    'languageField' => 'sys_language_uid',
    'transOrigPointerField' => 'l10n_parent',
    'transOrigDiffSourceField' => 'l10n_diffsource',
    'translationSource' => 'l10n_source',
    'versioningWS' => true,
    'origUid' => 't3_origuid',
    'iconfile' => 'EXT:my_extension/Resources/Public/Icons/Conference.svg',
    'security' => [
      'ignorePageTypeRestriction' => true,
    ],
  ],
  'columns' => [
    'title' => [
      'label' => 'my_extension.db:conference.title',
      'config' => [
        'type' => 'input',
        'required' => true,
        'max' => 255,
        'eval' => 'trim',
      ],
    ],
    'conference_date' => [
      'label' => 'my_extension.db:conference.conference_date',
      'config' => [
        'type' => 'datetime',
        'format' => 'date',
        'required' => true,
      ],
    ],
    'internal_notes' => [
      'label' => 'my_extension.db:conference.internal_notes',
      'config' => [
        'type' => 'text',
        'rows' => 3,
      ],
    ],
  ],
  // The fields of the other tabs are added in Configuration/TCA/Overrides/
  'types' => [
    '0' => [
      'showitem' => '
        title, conference_date,
        --div--;my_extension.db:tab.program,
        --div--;my_extension.db:tab.details,
        --div--;core.form.tabs:categories,
        --div--;core.form.tabs:access,
          hidden, --palette--;;access, fe_group, editlock,
        --div--;core.form.tabs:language,
          --palette--;;language,
        --div--;my_extension.db:tab.comments,
        --div--;core.form.tabs:notes,
          internal_notes,
      ',
    ],
  ],
  'palettes' => [
    'access' => [
      'label' => 'core.form.palettes:access',
      'showitem' => 'starttime, endtime',
    ],
    'language' => [
      'showitem' => 'sys_language_uid, l10n_parent',
    ],
  ],
];
