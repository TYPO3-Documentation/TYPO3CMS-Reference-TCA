..  include:: /Includes.rst.txt
..  _columns-select-properties-foreign-table-prefix:

====================
foreign_table_prefix
====================

..  confval:: foreign_table_prefix (type => select)

    :Path: $GLOBALS['TCA'][$table]['columns'][$field]['config']
    :type: string or LLL reference
    :Scope: Display
    :RenderType: all

    Label prefix to the title of the records from the foreign-table.


Examples
========

Select single field with foreign_prefix and foreign_where
---------------------------------------------------------

..  include:: /Images/Rst/SelectSingle3.rst.txt

..  include:: /CodeSnippets/SelectSingle3.rst.txt
