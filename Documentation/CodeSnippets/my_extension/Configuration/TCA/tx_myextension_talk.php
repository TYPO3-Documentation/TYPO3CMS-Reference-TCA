<?php

return [
  'ctrl' => [
    'title' => 'my_extension.db:talk',
    'label' => 'title',
    'type' => 'talk_type',
    'typeicon_column' => 'talk_type',
    'typeicon_classes' => [
      'default' => 'my-extension-talk',
      'workshop' => 'my-extension-talk-workshop',
      'keynote' => 'my-extension-talk-keynote',
    ],
    'sortby' => 'sorting',
    'useColumnsForDefaultValues' => 'talk_type,room',
    'hideTable' => true,
    'tstamp' => 'tstamp',
    'crdate' => 'crdate',
    'delete' => 'deleted',
    'enablecolumns' => [
      'disabled' => 'hidden',
    ],
    'languageField' => 'sys_language_uid',
    'transOrigPointerField' => 'l10n_parent',
    'versioningWS' => true,
  ],
  'columns' => [
    'talk_type' => [
      'label' => 'my_extension.db:talk.talk_type',
      'config' => [
        'type' => 'select',
        'renderType' => 'selectSingle',
        'items' => [
          [
            'label' => 'my_extension.db:talk.talk_type.talk',
            'value' => 'talk',
          ],
          [
            'label' => 'my_extension.db:talk.talk_type.workshop',
            'value' => 'workshop',
          ],
          [
            'label' => 'my_extension.db:talk.talk_type.keynote',
            'value' => 'keynote',
          ],
        ],
        'default' => 'talk',
      ],
    ],
    'title' => [
      'label' => 'my_extension.db:talk.title',
      'config' => [
        'type' => 'input',
        'required' => true,
      ],
    ],
    'room' => [
      'label' => 'my_extension.db:talk.room',
      'config' => [
        'type' => 'input',
        'valuePicker' => [
          'items' => [
            ['label' => 'Main hall', 'value' => 'Main hall'],
            ['label' => 'Room A', 'value' => 'Room A'],
            ['label' => 'Room B', 'value' => 'Room B'],
          ],
        ],
      ],
    ],
  ],
  'types' => [
    'talk' => [
      'showitem' => '
        talk_type, title, room,
        --div--;core.form.tabs:access, hidden,
      ',
    ],
    'workshop' => [
      'showitem' => '
        talk_type, title, room,
        --div--;core.form.tabs:access, hidden,
      ',
    ],
    'keynote' => [
      'showitem' => '
        talk_type, title, room,
        --div--;core.form.tabs:access, hidden,
      ',
    ],
  ],
];
