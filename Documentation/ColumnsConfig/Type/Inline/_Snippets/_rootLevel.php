<?php

return [
  'ctrl' => [
    'title' => 'My metadata',
    'label' => 'title',
    // Can only be created at root level
    'rootLevel' => 1,
    'security' => [
      'ignoreRootLevelRestriction' => true,
    ],
  ],
  'columns' => [
    'title' => [
      'label' => 'Title',
      'config' => [
        'type' => 'input',
      ],
    ],
  ],
  'types' => [
    '0' => [
      'showitem' => 'title',
    ],
  ],
];
