..  include:: /Includes.rst.txt
..  _columns-input-properties-format:
..  _columns-datetime-properties-format:

======
format
======

..  confval:: format (type => datetime)

    :Path: $GLOBALS['TCA'][$table]['columns'][$field]['config']
    :type: string (keyword)
    :Scope: Display

    Sets the output format if the field is set to read-only. Read-only fields
    with :code:`format` set to "date" will be formatted as "date", "datetime"
    as "datetime", "time" as "time" and "timesec" as "timesec".

    ..  note::
        The :php:`format` option defines how the field value will be displayed,
        for example, in FormEngine. The storage format is defined via
        :ref:`dbType <columns-datetime-properties-dbtype>` and falls back to
        `eval=integer`.
