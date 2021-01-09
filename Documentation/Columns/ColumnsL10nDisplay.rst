.. include:: /Includes.rst.txt
.. _columns-properties-l10n-display:

=============
l10n\_display
=============

:aspect:`Datatype`
    string (list of keywords)

:aspect:`Scope`
    Display

:aspect:`Description`
    Localization display, see :ref:`l10n\_mode <columns-properties-l10n-mode>`.

    This option can be used to define the language related field
    rendering. This has nothing to do with the processing of language
    overlays and data storage but the display of form fields.

    Keywords are:

    hideDiff
        The differences to the default language field will not be displayed.

    defaultAsReadonly
        This renders the field as read only field with the content of the default language record.
        The field will be rendered even if `l10n_mode` is set to `exclude`. While `exclude` define the
        field not to be translatable, this option activate display of the default data.
