.. include:: /Includes.rst.txt
.. _ctrl-reference-type:

====
type
====

.. confval:: type

   :type: string (field name)
   :Scope: Display / Proc.


   Field name, which defines the "record type".

   The value of this field determines which one of the :ref:`types <types>`
   configurations are used for displaying the fields in the FormEngine. It
   will probably also affect how the record is used in the context where it belongs.

   The most widely known usage of this feature is the case of *Content Elements*
   where the "Type:" selector is defined as the "type" field and when you
   change that selector you will also get another rendering of the form:

   .. figure:: ../Images/Type.png
      :alt: The type selector
      :class: with-shadow

      The type selector of content elements

   It is used for example by the "doktype" field in the "pages" table.


   It is also possible to make the type depend on the value of a related record,
   for example to switch using the type field of a
   foreign table. The syntax is :code:`relation_field:foreign_type_field`.


Examples
========

Type stored in a field
======================

The "dummy" table from the "examples" extension defines different types. The field used for differentiating
the types is the "record\_type" field. Hence we have the following in the :code:`['ctrl']` section
of the tx\_examples\_dummy table:

.. code-block:: php

   'ctrl' => [
      'type' => 'record_type',
      ...
   ],

The "record\_type" field can take values ranging from 0 to 2. Accordingly we define types for the same values.
Each type defines which fields will be displayed in the BE form:

.. code-block:: php

   'types' => [
      '0' => ['showitem' => 'hidden, record_type, title, some_date'],
      '1' => ['showitem' => 'record_type, title'],
      '2' => ['showitem' => 'title, some_date, hidden, record_type'],
   ],

See the :ref:`section about types <types>` for more details.


Type in relation to a foreign table
-----------------------------------

The "sys_file_metadata" table takes its type from the "sys_file" table. The relation between the two tables is
stored in the "file" field. Thus the :code:`type` declaration for "sys_file_metadata" looks like:

.. code-block:: php

   'ctrl' => [
      'type' => 'file:type',
      ...
   ],
