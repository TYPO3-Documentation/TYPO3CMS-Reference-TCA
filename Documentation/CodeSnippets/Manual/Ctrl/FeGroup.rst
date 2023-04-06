.. code-block:: php
   :caption: EXT:my_extension/Configuration/TCA/tx_myextension_domain_model_something.php

   <?php

   return [
       'ctrl' => [
           'enablecolumns' => [
               'fe_group' => 'fe_group',
           ],
           // ...
       ],
       'columns' => [
           'fe_group' => [
               'exclude' => true,
               'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.fe_group',
               'config' => [
                   'type' => 'select',
                   'renderType' => 'selectMultipleSideBySide',
                   'size' => 5,
                   'maxitems' => 20,
                   'items' => [
                       [
                           'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.hide_at_login',
                           'value' => -1,
                       ],
                       [
                           'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.any_login',
                           'value' => -2,
                       ],
                       [
                           'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.usergroups',
                           'value' => '--div--',
                       ],
                   ],
                   'exclusiveKeys' => '-1,-2',
                   'foreign_table' => 'fe_groups',
               ],
           ],
           // ...
       ],
   ];
