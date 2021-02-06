.. include:: /Includes.rst.txt
.. _ctrl-reference-type:

============
Record types
============

.. confval:: type

   :type: string (field name)
   :Scope: Display / Proc.


   Field name, which defines the "record type".

   The value of this field determines which one of the :ref:`types <types>`
   configurations are used for displaying the fields in the FormEngine. It
   will probably also affect how the record is used in the context where it belongs.

   The most widely known usage of this feature is the case of *Content Elements*
   where the :guilabel:`Type:` selector is defined as the "CType" field and when you
   change that selector you will also get another rendering of the form:

   .. include:: /Includes/Images/Core/Frontend/RstIncludes/CtrlType.rst.txt

   It is used for example by the "doktype" field in the "pages" table.

   On changing the value of the field defined in `type` the user gets prompted
   to reload the record.

   .. include:: /Includes/Images/Styleguide/RstIncludes/CtrlTypeChangeModal.rst.txt

   Only one type field can be defined. If you need to reload the record on
   changing another field, see
   :ref:`property onchange <columns-properties-onChange>`.

   It is also possible to make the type depend on the value of a related record,
   for example to switch using the type field of a
   foreign table. The syntax is :code:`relation_field:foreign_type_field`.
   For example the :sql:`sys_file_metadata` table takes its type from the
   :sql:`sys_file` table.


Examples
========

the type stored in a field
--------------------------

.. include:: /Includes/Images/Styleguide/RstIncludes/CtrlType0.rst.txt

The table :sql:`` table from the "examples" extension defines different types. The field used for differentiating
the types is the "record\_type" field. Hence we have the following in the :code:`['ctrl']` section
of the tx\_examples\_dummy table:

.. include:: /Includes/Snippets/Styleguide/RstIncludes/Manual/CtrlTypeCtrl.rst.txt

The "record\_type" field can take values ranging from 0 to 2. Accordingly we define types for the same values.
Each type defines which fields will be displayed in the BE form:

.. include:: /Includes/Snippets/Styleguide/RstIncludes/Manual/CtrlTypeTypes.rst.txt

See the :ref:`section about types <types>` for more details.


Type in relation to a foreign table's field
-------------------------------------------

.. include:: /Includes/Images/Styleguide/RstIncludes/CtrlTypeForeign.rst.txt

The following table :sql:`tx_styleguide_type_foreign` stores its relation to
the table :sql:`tx_styleguide_type` in the field :php:`foreign_table`.

The type of the table :sql:`tx_styleguide_type_foreign` comes from the content
of the field `tx_styleguide_type:record_type` of the related field.

The type is therefore defined via :php:`type = 'foreign_table:record_type'`.

The control section of the table :sql:`tx_styleguide_type_foreign` looks like
this:

.. include:: /Includes/Snippets/Styleguide/RstIncludes/TypeForeignTableCtrl.rst.txt

The field :php:`foreign_table` in the same table is a normal singleSelect field.
It can be any kind of 1 - 1 or 1 - n relation.

.. include:: /Includes/Snippets/Styleguide/RstIncludes/TypeForeignForeignTable.rst.txt
