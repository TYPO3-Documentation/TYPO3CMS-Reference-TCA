<?php // Example from extension "styleguide", table "tx_styleguide_inline_mm_child"

return [
   'ctrl' => [ 
      'title' => 'LLL:EXT:styleguide/Resources/Private/Language/locallang.xlf:minimalTableTitle',
      'label' => 'title',
      'iconfile' => 'EXT:styleguide/Resources/Public/Icons/tx_styleguide.svg',
   ],
   'columns' => [ 
      'title' => [ 
         'label' => 'LLL:EXT:styleguide/Resources/Private/Language/locallang.xlf:minimalTableTitleField',
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