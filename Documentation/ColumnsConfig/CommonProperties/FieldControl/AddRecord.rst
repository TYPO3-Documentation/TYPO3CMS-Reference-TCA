..  include:: /Includes.rst.txt
..  _tca_property_fieldControl_addRecord:

=========
addRecord
=========

..  confval:: addRecord
    :name: fieldControl-addRecord
    :Path: $GLOBALS['TCA'][$table]['columns'][$field]['config']['fieldControl']
    :type: array
    :Scope: fieldControl
    :Types: :ref:`group <columns-group>`

    Control button to directly add a related record. Leaves the current view and opens a new form to add
    a new record. On 'Save and close', the record is directly selected as referenced element
    in the `type='group'` field. If multiple tables are :ref:`allowed <columns-group-properties-allowed>`, the
    first table from the allowed list is selected, if no specific `table` option is given.

    ..  note::

        The add record control is disabled by default, enable it if needed. It
        is shown below the `edit popup` control if not changed by `below` or
        `after` settings.

Examples
========

Select field
------------

..  include:: /Images/Rst/SelectMultiplesidebyside6.rst.txt

..  include:: /CodeSnippets/SelectMultiplesidebyside6.rst.txt


Group field
-----------

..  include:: /Images/Rst/GroupDb1.rst.txt

..  include:: /CodeSnippets/GroupDb1.rst.txt


Select field with options
-------------------------

The field controls are also used in the core. The following example is from
the table :sql:`be_groups`:

..  include:: /Images/Rst/FileMountpoints.rst.txt

..  include:: /CodeSnippets/FileMountpoints.rst.txt

Options
=======

..  confval:: disabled
    :name: fieldControl-addRecord-disabled
    :Path: $GLOBALS['TCA'][$table]['columns'][$field]['config']['fieldControl']['addRecord']
    :type: boolean
    :Scope: fieldControl -> addRecord
    :Default: true

    Disables the field control. Needs to be set to :php:`false` to enable the
    :guilabel:`Create new` button

..  confval:: options[pid]
    :name: fieldControl-addRecord-options-pid
    :Path: $GLOBALS['TCA'][$table]['columns'][$field]['config']['fieldControl']['addRecord']
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

..  confval:: options[table]
    :name: fieldControl-addRecord-options-table
    :Path: $GLOBALS['TCA'][$table]['columns'][$field]['config']['fieldControl']['addRecord']['options']
    :type: string
    :Scope: fieldControl -> addRecord
    :Values: name of the table
    :Default: First table from property `allowed` / `foreign_table`

    Add a record to this table, falls back to first table from
    :ref:`allowed <columns-group-properties-allowed>` list if not set for
    `type='group'` fields and to :ref:`foreign_table
    <columns-select-properties-foreign-table>` for `type='select'` fields.

..  confval:: options[title]
    :name: fieldControl-addRecord-options-title
    :Path: $GLOBALS['TCA'][$table]['columns'][$field]['config']['fieldControl']['addRecord']['options']
    :type: string
    :Scope: fieldControl -> addRecord
    :Values: string or LLL reference
    :Default: `LLL:core.core:labels.createNew`

    Allows to set a different 'title' attribute to the popup icon.

..  confval:: options[setValue]
    :name: fieldControl-addRecord-options-setValue
    :Path: $GLOBALS['TCA'][$table]['columns'][$field]['config']['fieldControl']['addRecord']['options']
    :type: string
    :Scope: fieldControl -> addRecord
    :Values: string
    :Default: append

    Can be one of 'set', 'prepend' or 'append'. With 'set' the given selection
    is substituted with the new record, 'prepend' adds the new record on top of
    the list, 'append' adds it at the bottom.
