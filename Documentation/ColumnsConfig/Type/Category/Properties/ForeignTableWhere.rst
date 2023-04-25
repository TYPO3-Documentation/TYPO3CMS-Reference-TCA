.. include:: /Includes.rst.txt
.. _columns-category-properties-foreign-table-where:

===================
foreign_table_where
===================

.. confval:: foreign_table_where (type => category)

   :Path: $GLOBALS['TCA'][$table]['columns'][$field]['config']
   :type: string (SQL WHERE)
   :Scope: Proc. / Display
   :Default:  :sql:`AND {#sys_category}.{#sys_language_uid} IN (-1, 0)`

   The items from :ref:`foreign_table <columns-select-properties-foreign-table>`
   are selected with this :sql:`WHERE` clause. If set make sure to append the default value
   to your query.
   See also :ref:`property foreign_table_where of select field
   <columns-select-properties-foreign-table-where>`.
