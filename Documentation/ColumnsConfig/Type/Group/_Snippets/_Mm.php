<?php

return [
  'ctrl' => [
    'title' => 'My model 1',
    'label' => 'title',
  ],
  'columns' => [
    'title' => [
      'label' => 'Title',
      'config' => [
        'type' => 'input',
      ],
    ],

    'relation_table1_table2' => [
      'label' => 'Some relation from table 1 to table 2',
      'config' => [
        'type' => 'group',
        'allowed' => 'tx_myextension_domain_model_mymodel2',
        'MM' => 'tx_myextension_domain_model_mymodel1_mymodel2_mm',
      ],
    ],
  ],
  'types' => [
    '0' => [
      'showitem' => 'title, relation_table1_table2',
    ],
  ],
];
