.. include:: /Includes.rst.txt
.. _columns-category-properties-foreign-table-where::

=============
foreign_table_where
=============

.. confval:: foreign_table_where

   :Path: $GLOBALS['TCA'][$table]['columns'][$field]['config']
   :type: string (SQL WHERE)
   :Scope: Proc. / Display

   The items from :ref:`foreign_table <columns-select-properties-foreign-table>`
   are selected with this WHERE-clause.
   See also :ref:`property foreign_table_where of select field
   <columns-select-properties-foreign-table-where>`.
