addRecord
^^^^^^^^^

:aspect:`Datatype`
    array

:aspect:`Scope`
    fieldControl

:aspect:`Description`
    Control button to directly add a related record. Leaves the current view and opens a new form to add
    a new record. On 'Save and close', the record is directly selected as referenced element
    in the `type='group'` field. If muliple tables are :ref:`allowed <columns-group-properties-allowed>`, the
    first table from the allowed list is selected, if not specific `table` option is given.

    .. note::
        The add record control is disabled by default, enable it if needed. It is shown below the `edit popup`
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
      - :code:`###PAGE_TSCONFIG_ID###`
      - :code:`###PAGE_TSCONFIG_IDLIST###`
      - :code:`###PAGE_TSCONFIG_STR###`

    table (string)
      Add a record to this table, falls back to first table from :ref:`allowed <columns-group-properties-allowed>`
      list if not set for `type='group'` fields and to :ref:`foreign_table <columns-select-properties-foreign-table>`
      for `type='select'` fields.

    title (string or LLL reference)
      Allows to set a different 'title' attribute to the popup icon, defaults
      to :code:`LLL:EXT:lang/Resources/Private/Language/locallang_core.xlf:labels.createNew`

    setValue (string, keyword)
      Can be one of 'set', 'prepend' or 'append'. With 'set' the given selection is substituted with the
      new record, 'prepend' adds the new record on top of the list, 'append' adds it at the bottom. Default: 'append'.

    .. figure:: ../../Images/TypeGroupFieldControlAddRecordIcon.png
        :alt: Add a new record icon
        :class: with-shadow

        Add a new record icon

    .. figure:: ../../Images/TypeGroupFieldControlAddRecordView.png
        :alt: Add a new record view
        :class: with-shadow

        Add a new record view
