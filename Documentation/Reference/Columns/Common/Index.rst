.. include:: ../../../Includes.txt


.. _columns-common:

Common column properties
^^^^^^^^^^^^^^^^^^^^^^^^

There are a number of properties which are common to all field types.
They are described below.


.. _columns-common-properties:

Properties
""""""""""

.. container:: ts-properties

   ============= =========
   Property      Data Type
   ============= =========
   `dbType`_     string
   `default`_    mixed
   `type`_       string
   `readOnly`_   boolean
   `search`_     array
   `softref`_    string
   ============= =========


Property details
""""""""""""""""

.. _columns-common-properties-type:

type
~~~~

.. container:: table-row

   Key
         type

   Datatype
         string

   Description
         This defines the type of the field. It has to be one of the values
         described in the following chapters.

   Scope
         Display

         / Proc.



.. _columns-common-properties-dbtype:

dbType
~~~~~~

.. container:: table-row

   Key
         dbType

   Datatype
         string

   Description
         This defines a specific database field type for the given field.

         This is currently only supported for "date" or "datetime" fields
         (i.e. :ref:`input-type fields <columns-input>` with the "eval" property set to "date" or "datetime")
         and the :code:`dbType` can be set only to "date" or "datetime".

   Scope
         Database



.. _columns-common-properties-default:

default
~~~~~~~

.. container:: table-row

   Key
         default

   Datatype
         -

   Description
         This property can be used to set a default value for the field. Its
         data type is whatever is appropriate for the given field.

         Since TYPO3 CMS 6.2, :code:`NULL` is a valid default value.

   Scope
         Display

         / Proc.



.. _columns-common-properties-softref:

softref
~~~~~~~

.. container:: table-row

   Key
         softref

   Datatype
         string

   Description
         Used to attach "soft reference parsers". See under "Additional TCA
         features" for information about softref keys. The syntax for this
         value is key1,key2[parameter1;parameter2;...],...

   Scope
         Proc.



.. _columns-common-properties-readonly:

readOnly
~~~~~~~~

.. container:: table-row

   Key
         readOnly

   Datatype
         boolean

   Description
         Renders the form in a way that the user can see the values but cannot
         edit them. The rendering is as similar as possible to the normal
         rendering but may differ in layout and size.

         .. note::

            Read-only is not implemented automatically for user-defined form items.
            It is up to each developer to implement read-only rendering for its own
            types.

         .. warning::

            This property affects only the display. It is still possible to write
            to those fields when using the :ref:`TYPO3 Core Engine <t3coreapi:tce>`.

   Scope
         Display



.. _columns-common-properties-search:

search
~~~~~~

.. container:: table-row

   Key
         search

   Datatype
         array

   Description
         Defines additional search-related options for a given field.

         - **pidonly (boolean)** : searches in the column only if search happens
           on the single page (does not search the field if searching in the
           whole table)

         - **case (boolean)** : makes the search case-sensitive. This requires a
           proper database collation for the field (see your database
           documentation)

         - **andWhere (string)** : additional SQL WHERE statement without 'AND'.
           With this it is possible to place an additional condition on the field
           when it is searched (see example below).

         **Example:**

         The "tt\_content" table has the following definition::

            $TCA['tt_content'] = array(
               // ...
               'columns' => array(
                  // ...
                  'bodytext' => array(
                     // ...
                     'config' => array(
                        // ...
                        'search' => array(
                           'andWhere' => 'CType=\'text\' OR CType=\'textpic\'',
                        ),
                        // ...
                     ),
                  ),
                  // ...
               ),
               // ...
            );

         This means that the "bodytext" field of the "tt\_content" table will
         be searched in only for elements of type Text and Text & Images.
         This helps make any search more relevant.

   Scope
         Search
