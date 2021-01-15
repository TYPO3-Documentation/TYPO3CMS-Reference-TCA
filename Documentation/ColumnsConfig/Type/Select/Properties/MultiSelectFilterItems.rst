.. include:: /Includes.rst.txt
.. _columns-select-properties-multiselectfilteritems:

======================
multiSelectFilterItems
======================

.. confval:: multiSelectFilterItems

   :type: array
   :Scope: Display
   :RenderType: :ref:`selectMultipleSideBySide <columns-select-rendertype-selectMultipleSideBySide>`

   Contains predefined elements for the filter field. On selecting
   an item, the list of available items gets automatically filtered.

   Each element in this array is in itself an array where:

   -  First value is the  **filter value of the item** .

   -  Second value is the  **item label** (string or LLL reference)

   **Example configuration:**

   .. code-block:: php

      'related_content' => [
         'label' => 'LLL:EXT:examples/Resources/Private/Language/locallang_db.xlf:tx_examples_haiku.related_content',
         'config' => [
            'type' => 'select',
            'renderType' => 'selectMultipleSideBySide',
            'foreign_table' => 'tt_content',
            'foreign_table_where' => 'ORDER BY header ASC',
            'size' => 5,
            'minitems' => 0,
            'multiSelectFilterItems' => [
               [
                  'image',
                  'LLL:EXT:examples/Resources/Private/Language/locallang_db.xlf:tx_examples_haiku.related_content.image'
               ],
               [
                  'typo3',
                  'LLL:EXT:examples/Resources/Private/Language/locallang_db.xlf:tx_examples_haiku.related_content.typo3'
               ],
            ],
         ],
      ],

   .. figure:: ../Images/TypeSelectItemsFilter.png
      :alt: Filtering available items with both predefined keywords and free input
      :class: with-shadow

      Filtering available items with both predefined keywords and free input
