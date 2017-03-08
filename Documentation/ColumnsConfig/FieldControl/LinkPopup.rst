linkPopup
^^^^^^^^^

:aspect:`Datatype`
    array

:aspect:`Scope`
    fieldControl

:aspect:`Description`
    The link browser control is typically used with `type='input'` with `renderType='inputLink'` adding a button
    which opens a popup to select an internal link to a page, an external link or a mail address.

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

    allowedExtensions (string, list)
      Comma separated list of allowed file extensions. By default, all extensions are allowed.

    blindLinkFields (string, list)
      Comma separated list of link fields that should not be displayed. Possible values are
      `class`, `params`, `target` and `title`. By default, all link fields are displayed.

    blindLinkOptions (string, list)
      Comma separated list of link options that should not be displayed. Possible values are
      `file`, `mail`, `page`, `spec`, and `url`. By default, all link options are displayed.

    title (string or LLL reference)
      Allows to set a different 'title' attribute to the popup icon, defaults
      to :code:`LLL:EXT:lang/Resources/Private/Language/locallang_core.xlf:labels.link`

    windowOpenParameters (string)
      Allows to set a different size of the popup, defaults
      to :code:`height=800,width=600,status=0,menubar=0,scrollbars=1`.
