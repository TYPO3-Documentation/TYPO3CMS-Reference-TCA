.. include:: /Includes.rst.txt
.. _tca_property_fieldControl_listModule:

==========
listModule
==========

:aspect:`Datatype`
   array

:aspect:`Scope`
   fieldControl

:aspect:`types`
   :ref:`group <columns-group>`

:aspect:`Description`
   The list module control button opens the Web > List module for only one table and allows the user to manipulate
   stuff there.

   .. note::
      The list module control is disabled by default, enable it if needed. It is shown below the `add record`
      control if not changed by `below` or `after` settings.

   **Options:**

   pid (string)
     pid of the new record. Can be an hard pid setting, or one of these markers, see
     :ref:`select foreign_table_where <columns-select-properties-foreign-table-where>`.
     Falls back to "current pid" if not set, forces pid=0 if records of this table are only
     allowed on root level.

     - :code:`###CURRENT_PID###`
     - :code:`###THIS_UID###`
     - :code:`###SITEROOT###`

   table (string)
     List records of this table only, falls back to first table from :ref:`allowed <columns-group-properties-allowed>`
     list if not set for `type='group'` fields and to :ref:`foreign_table <columns-select-properties-foreign-table>`
     for `type='select'` fields.

   title (string or LLL reference)
     Allows to set a different 'title' attribute to the popup icon, defaults
     to :code:`LLL:EXT:lang/Resources/Private/Language/locallang_core.xlf:labels.list`
