.. include:: /Includes.rst.txt
.. _columns-inline-properties-foreign-selector:

=================
foreign\_selector
=================

.. confval:: foreign_selector

   :Path: $GLOBALS['TCA'][$table]['columns'][$field]['config']
   :type: string
   :Scope: Display  / Proc.

   A selector is used to show all possible child records that could be used to create a relation with the parent record.
   It will be rendered as a multi-select-box. On clicking on an item inside the selector a new relation is created.
   The :code:`foreign_selector` points to a field of the :ref:`foreign_table <columns-inline-properties-foreign-table>`
   that is responsible for providing a selector-box – this field on the :code:`foreign_table` usually
   is of type :ref:`select <columns-select>` and also has a :code:`foreign_table` defined. If the foreign table
   is a MM table like `sys_file_reference`, then in most cases you must assign
   the field :code:`uid_local` to the :code:`foreign_selector`. It depends on the condition 
   if the `uid_Local` of the MM table points to the foreign table or to this table.
   In the other case of the opposite direction :code:`uid_foreign` must be used.
