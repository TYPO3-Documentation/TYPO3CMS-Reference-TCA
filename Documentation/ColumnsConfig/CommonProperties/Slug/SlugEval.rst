:aspect:`Datatype`
    string (list of keywords)

:aspect:`Scope`
    Proc. / Display

:aspect:`Description`
    Configuration of field evaluation.

    Keywords:

    unique
        Evaluate if a record is unique in the whole TYPO3 installation (specific to a language).
        This option is recommended as it allows to show any record stored inside other sites.
        The only downside is that it is not possible to have the same slug on multiple sites.

    uniqueInSite
        Evaluate if a record is unique in a site (specific to a language).

        .. warning::
              Be aware that using this option makes it impossible to show records stored inside other sites.
              If this is required, :php:`unique` should be used instead.

    uniqueInPid
        Requires the field to be unique for the current PID among other records on the same page.

    No other eval setting is checked for. It is possible to set different eval options, however it is
    recommended not to do so.
