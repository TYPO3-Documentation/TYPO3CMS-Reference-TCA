..  include:: /Includes.rst.txt
..  _columns-select-properties-foreign-table-item-group:

===========================
foreign\_table\_item\_group
===========================

..  versionadded:: 13.0

..  confval:: foreign-table-item-group (type => select)

    :Path: $GLOBALS['TCA'][$table]['columns'][$field]['config']
    :type: string (column name)
    :Scope: Proc. / Display
    :RenderType: all

    This property references a specific field in the
    :ref:`foreign table <columns-select-properties-foreign-table>`, which
    holds an :ref:`item group <columns-select-properties-item-groups>`
    identifier.


Example
=======

..  code-block:: php

    'select_field' => [
        'label' => 'select_field',
        'config' => [
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => [
                [
                    'label' => 'static item 1',
                    'value' => 'static-1',
                    'group' => 'group1'
                ],
            ],
            'itemGroups' => [
                'group1' => 'Group 1 with items',
                'group2' => 'Group 2 from foreign table',
            ],
            'foreign_table' => 'tx_myextension_foreign_table',
            'foreign_table_item_group' => 'itemgroup'
        ],
    ],
