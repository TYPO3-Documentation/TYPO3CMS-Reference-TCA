<?php

return [
  'ctrl' => [
    'title' => 'my_extension.db:speaker',
    'label' => 'name',
    'label_alt' => 'company',
    'default_sortby' => 'name',
    'tstamp' => 'tstamp',
    'crdate' => 'crdate',
    'delete' => 'deleted',
    'enablecolumns' => [
      'disabled' => 'hidden',
    ],
    'languageField' => 'sys_language_uid',
    'transOrigPointerField' => 'l10n_parent',
    'iconfile' => 'EXT:my_extension/Resources/Public/Icons/Speaker.svg',
  ],
  'columns' => [
    'name' => [
      'label' => 'my_extension.db:speaker.name',
      'config' => [
        'type' => 'input',
        'required' => true,
      ],
    ],
    'company' => [
      'label' => 'my_extension.db:speaker.company',
      'config' => [
        'type' => 'input',
      ],
    ],
  ],
  // The fields of the other tabs are added in Configuration/TCA/Overrides/
  'types' => [
    '0' => [
      'showitem' => '
        name, company,
        --div--;my_extension.db:tab.integration,
        --div--;core.form.tabs:access, hidden,
        --div--;core.form.tabs:language, sys_language_uid, l10n_parent,
      ',
    ],
  ],
];
