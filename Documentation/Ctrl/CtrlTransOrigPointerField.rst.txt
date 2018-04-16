transOrigPointerField
---------------------

:aspect:`Datatype`
    string (field name)

:aspect:`Scope`
    Proc. / Display

:aspect:`Description`
    Name of the field used by translations to point back to the original record, the record in the default
    language of which they are a translation.

    If this value is found being set together with :ref:`languageField <ctrl-reference-languagefield>` then
    FormEngine will show the default translation value under the fields in the main form. This is very neat
    if translators are to see what they are translating.

    The target field must be configured in :php:`$GLOBALS['TCA'][<table>]['columns']`, at least as a passthrough type,
    in many core tables this property is set to "l10n\_parent".
