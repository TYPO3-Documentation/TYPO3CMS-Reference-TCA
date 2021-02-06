.. include:: /Includes.rst.txt
.. _tca_property_fieldControl_addRecord:

=========
addRecord
=========

.. confval:: addRecord

   :type: array
   :Scope: fieldControl
   :Types: :ref:`group <columns-group>`

   Control button to directly add a related record. Leaves the current view and opens a new form to add
   a new record. On 'Save and close', the record is directly selected as referenced element
   in the `type='group'` field. If multiple tables are :ref:`allowed <columns-group-properties-allowed>`, the
   first table from the allowed list is selected, if not specific `table` option is given.

   .. note::

      The add record control is disabled by default, enable it if needed. It
      is shown below the `edit popup` control if not changed by `below` or
      `after` settings.

Examples
========

Select field
------------

.. include:: /Includes/Images/Styleguide/RstIncludes/SelectMultiplesidebyside6.rst.txt

.. include:: /Includes/Snippets/Styleguide/RstIncludes/SelectMultiplesidebyside6.rst.txt


Group field
-----------

.. include:: /Includes/Images/Styleguide/RstIncludes/GroupDb1.rst.txt

.. include:: /Includes/Snippets/Styleguide/RstIncludes/GroupDb1.rst.txt


Select field with options
-------------------------

The field controls are also used in the core. The following example is from
the table :sql:`be_groups`:

.. include:: /Includes/Images/Core/Core/RstIncludes/FileMountpoints.rst.txt

.. include:: /Includes/Snippets/Core/Core/RstIncludes/FileMountpoints.rst.txt

Options
=======

.. confval:: disabled

   :type: boolean
   :Scope: fieldControl -> addRecord
   :Default: true

   Disables the field control. Needs to be set to :php:`false` to enable the
   :guilabel:`Create new` button

.. confval:: options[pid]

   :type: string
   :Scope: fieldControl -> addRecord
   :Values: marker or an integer
   :Default: ###CURRENT_PID###

   pid of the new record. Can be an hard pid setting, or one of these markers,
   see :ref:`select foreign_table_where
   <columns-select-properties-foreign-table-where>`.

   Falls back to "current pid" if not set, forces pid=0 if records of this
   table are only allowed on root level.

   -  :code:`###CURRENT_PID###`
   -  :code:`###THIS_UID###`
   -  :code:`###SITEROOT###`

.. confval:: options[table]

   :type: string
   :Scope: fieldControl -> addRecord
   :Values: name of the table
   :Default: First table from property `allowed` / `foreign_table`

   Add a record to this table, falls back to first table from
   :ref:`allowed <columns-group-properties-allowed>` list if not set for
   `type='group'` fields and to :ref:`foreign_table
   <columns-select-properties-foreign-table>` for `type='select'` fields.

.. confval:: options[title]

   :type: string
   :Scope: fieldControl -> addRecord
   :Values: string or LLL reference
   :Default: LLL:EXT:lang/Resources/Private/Language/locallang_core.xlf:labels.createNew

   Allows to set a different 'title' attribute to the popup icon.

.. confval:: options[setValue]

   :type: string
   :Scope: fieldControl -> addRecord
   :Values: string
   :Default: append

   Can be one of 'set', 'prepend' or 'append'. With 'set' the given selection
   is substituted with the new record, 'prepend' adds the new record on top of
   the list, 'append' adds it at the bottom.
