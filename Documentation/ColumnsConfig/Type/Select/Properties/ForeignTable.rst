.. include:: /Includes.rst.txt
.. _columns-select-properties-foreign-table:

==============
foreign\_table
==============

.. confval:: foreign_table

   :type: string (table name)
   :Scope: Proc. / Display
   :RenderType: all

   The item-array will be filled with records from the table defined here.
   The table must have a TCA definition.

   .. deprecated:: 11.2
      Usage of the `foreign_table` relation with the table `sys_language`
      Has been deprecated. Use TCA field type called
      :ref:`language<columns-language>` instead.

Examples
========

Select singe field with enabled selectIcons
-------------------------------------------

.. include:: /Includes/Images/Styleguide/RstIncludes/SelectSingle12.rst.txt

.. include:: /Includes/Snippets/Styleguide/RstIncludes/SelectSingle12.rst.txt


.. _tca_example_select_single_15:

Select field with foreign table via MM table
--------------------------------------------

.. include:: /Includes/Images/Styleguide/RstIncludes/SelectSingle15.rst.txt

.. include:: /Includes/Snippets/Styleguide/RstIncludes/SelectSingle15.rst.txt
