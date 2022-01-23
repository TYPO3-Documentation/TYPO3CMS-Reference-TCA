.. include:: /Includes.rst.txt
.. _columns-select-properties-foreign-table:

==============
foreign\_table
==============

.. confval:: foreign_table

   :Path: $GLOBALS['TCA'][$table]['columns'][$field]['config']
   :type: string (table name)
   :Scope: Proc. / Display
   :RenderType: all

   The item-array will be filled with records from the table defined here.
   The table must have a TCA definition.

   The uids of the chosen records will be saved in a comma separated list
   by default.

   Use `property MM <columns-select-properties-mm>` to store the values in an
   intermediate MM table instead.

   .. deprecated:: 11.2
      Usage of the `foreign_table` relation with the table `sys_language`
      Has been deprecated. Use TCA field type called
      :ref:`language<columns-language>` instead.

Examples
========

Select singe field with enabled selectIcons
-------------------------------------------

.. include:: /Images/Rst/SelectSingle12.rst.txt

.. include:: /CodeSnippets/SelectSingle12.rst.txt


Select field with foreign table via MM table
--------------------------------------------

.. include:: /Images/Rst/SelectSingle15.rst.txt

.. include:: /CodeSnippets/SelectSingle15.rst.txt
