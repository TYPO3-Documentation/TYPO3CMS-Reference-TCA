..  include:: /Includes.rst.txt
..  _columns-category-properties-foreign-table-item-group:

===========================
foreign\_table\_item\_group
===========================

..  versionadded:: 13.0

..  confval:: foreign_table_item_group
    :name: category-foreign-table-item-group
    :Path: $GLOBALS['TCA'][$table]['columns'][$field]['config']
    :type: string (column name)
    :Scope: Proc. / Display

    This property references a specific field in the
    :ref:`foreign table <columns-category-properties-foreign-table>`, which
    holds an :ref:`item group <columns-category-properties-item-groups>`
    identifier.

    See also :ref:`property foreign_table_item_group of select field
    <columns-select-properties-foreign-table-item-group>`.
