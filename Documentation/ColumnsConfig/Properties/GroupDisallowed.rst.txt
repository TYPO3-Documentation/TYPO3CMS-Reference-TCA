disallowed
~~~~~~~~~~

:aspect:`Datatype`
    string (list of)

:aspect:`Scope`
    Proc. / Display

:aspect:`Description`
    **Only with internal\_type='file'**

    Default value is '\*' which means that anything file-extension which is not allowed is denied.

    If you set this value (to for example "php,inc") AND the "allowed" key is an empty string all extensions
    are permitted *except* ".php" and ".inc" files (works like the :code:`[BE][fileExtensions]` configuration option).

    In other words:

    - If you want to permit *only certain* file-extensions, use 'allowed' and not disallowed.

    - If you want to permit *all file-extensions* except a few, set 'allowed' to blank ("") and enter the
      list of denied extensions in 'disallowed'.

    - If you wish to *allow all extensions* with no exceptions, set 'allowed' to '\*' and disallowed to ''
