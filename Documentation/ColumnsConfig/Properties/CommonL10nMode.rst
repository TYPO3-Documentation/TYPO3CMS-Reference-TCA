l10n_mode
~~~~~~~~~

:aspect:`Datatype`
    string (keyword)

:aspect:`Scope`
    Display / Proc.

:aspect:`Description`
    Localization mode. Only active if :ref:`['ctrl']['languageField'] <ctrl-reference-languagefield>` property is set.

    The main relevance is when a record is localized by an API call in DataHandler that makes a copy of the default
    language record. You can think of this process as copying all fields from the source record. By default, the given
    value from the default language record is copied to the localization overlay and the field is editable in the
    overlay record. This behaviour can be changed:

    exclude
      Field will not be shown in FormEngine if this record is a localization of the default language. Works basically
      like a display condition. Excluded fields will be copied when a language-copy is made, but are not editable.
      If the field in the default language is changed, the value in all localization overlays is updated.

    prefixLangTitle
      The field value gets copied on creation of a localization overlay and the field is editable in the backend for
      a localized record. On initial creation of the overlay, the field content is prefixed with the title of the
      language. Works only for field types like "text" and "input".
