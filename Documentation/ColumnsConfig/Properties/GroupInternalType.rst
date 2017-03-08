internal\_type
~~~~~~~~~~~~~~

:aspect:`Datatype`
    string

:aspect:`Scope`
    Display / Proc.

:aspect:`Description`
    **Required!**

    Configures the internal type of the "group" type of element.
    There are four possible options to choose from:

    file
      This will create a field where files can be attached to the record.

    file\_reference
      This will create a field where files can be referenced. In contrast to "file", referenced files (usually from
      fileadmin/) will not be copied to the upload folder. **Warning:** use this carefully. *Your references will be
      broken if you delete referenced files in the filesystem!*

    folder
      This will create a field where folders can be attached to the record.

    db
      This will create a field where database records can be attached as references.

    The default value is none of them - you must specify one of the values correctly!

    .. important::
        Types "file" and "file\_reference" should not be used anymore. Use FAL references instead.
