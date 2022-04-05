.. include:: /Includes.rst.txt
.. _tca_property_fieldControl_listModule:

==========
listModule
==========

.. confval:: listModule

   :Path: $GLOBALS['TCA'][$table]['columns'][$field]['config']['fieldControl']
   :type: array
   :Scope: fieldControl
   :Types: :ref:`group <columns-group>`

   The list module control button opens the Web > List module for only one table and allows the user to manipulate
   stuff there.

   .. note::
      The list module control is disabled by default, enable it if needed. It is shown below the `add record`
      control if not changed by `below` or `after` settings.

Options
=======

.. confval:: listModule disabled

   :Path: $GLOBALS['TCA'][$table]['columns'][$field]['config']['fieldControl']['listModule']
   :type: boolean
   :Scope: fieldControl -> listModule
   :Default: true

   Disables the field control. Needs to be set to :php:`false` to enable the
   :guilabel:`Create new` button

.. confval:: listModule options[pid]

   :Path: $GLOBALS['TCA'][$table]['columns'][$field]['config']['fieldControl']['listModule']
   :type: string
   :Scope: fieldControl -> addRecord
   :Values: marker or an integer
   :Default: ###CURRENT_PID###

   List records from this pid. Can be an hard pid setting, or one of
   these markers, see :ref:`select foreign_table_where
   <columns-select-properties-foreign-table-where>`.

   Falls back to "current pid" if not set, forces pid=0 if records of this
   table are only allowed on root level.

   -  :code:`###CURRENT_PID###`
   -  :code:`###THIS_UID###`
   -  :code:`###SITEROOT###`

.. confval:: listModule options[table]

   :Path: $GLOBALS['TCA'][$table]['columns'][$field]['config']['fieldControl']['listModule']
   :type: string
   :Scope: fieldControl -> listModule
   :Values: name of the table
   :Default: First table from property `allowed` / `foreign_table`

   List records of this table only, falls back to first table from
   :ref:`allowed <columns-group-properties-allowed>` list if not set for
   `type='group'` fields and to :ref:`foreign_table
   <columns-select-properties-foreign-table>` for `type='select'` fields.

.. confval:: listModule options[title]

   :Path: $GLOBALS['TCA'][$table]['columns'][$field]['config']['fieldControl']['listModule']
   :type: string
   :Scope: fieldControl -> listModule
   :Values: string or LLL reference
   :Default: LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:labels.list

   Allows to set a different 'title' attribute to the popup icon.


Examples
========

Select field
------------

.. include:: /Images/Rst/SelectMultiplesidebyside6.rst.txt

.. include:: /CodeSnippets/SelectMultiplesidebyside6.rst.txt


Group field
-----------

.. include:: /Images/Rst/GroupDb1.rst.txt

.. include:: /CodeSnippets/GroupDb1.rst.txt
