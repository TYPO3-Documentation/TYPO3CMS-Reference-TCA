multiSelectFilterItems
~~~~~~~~~~~~~~~~~~~~~~

:aspect:`Datatype`
    array

:aspect:`Scope`
    Display

:aspect:`Description`
    Contains predefined elements for the filter field enabled by
    :ref:`enableMultiSelectFilterTextfield <columns-select-properties-enablemultiselectfiltertextfield>`. On selecting
    an item, the list of available items gets automatically filtered.

    Each element in this array is in itself an array where:

    - First value is the  **filter value of the item** .

    - Second value is the  **item label** (string or LLL reference)

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
                'enableMultiSelectFilterTextfield' => TRUE,
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

    .. figure:: ../../Images/TypeSelectItemsFilter.png
        :alt: Filtering available items with both predefined keywords and free input

        Filtering available items with both predefined keywords and free input
