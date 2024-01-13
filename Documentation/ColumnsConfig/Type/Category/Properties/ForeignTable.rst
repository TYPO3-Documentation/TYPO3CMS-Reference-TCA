..  include:: /Includes.rst.txt
..  _columns-category-properties-foreign-table:

==============
foreign\_table
==============

..  confval:: foreign_table (type => category)

    :Path: $GLOBALS['TCA'][$table]['columns'][$field]['config']
    :type: string (table name)
    :Scope: Proc. / Display
    :RenderType: all

    The item-array will be filled with records from the table defined here.
    The table must have a TCA definition.

    The uids of the chosen records will be saved in a comma-separated list
    by default.

    Use `property MM <columns-category-properties-mm>` to store the values in an
    intermediate MM table instead.
