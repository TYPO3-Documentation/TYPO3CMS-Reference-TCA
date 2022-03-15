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
   is of type :ref:`select <columns-select>` and also has a :code:`foreign_table` defined.

   In most cases you must assign the field `uid_local` to the `foreign_selector`.
   This field name is used as a convention for the child record of the intermediate table.
   The :ref:`automatic generation <tca_property_MM_auto_creation_mm_table>` of MM tables also uses this field name.
   It depends whether `uid_local` of the MM table points to the opposite table (of the perspective of your inline field).
   In case of the opposite direction the field name `uid_foreign` is usually used.
