.. include:: /Includes.rst.txt
.. _columns-properties-l10n-mode:

=============================
Localization mode (l10n_mode)
=============================

.. confval:: l10n_mode

   :Required: false
   :type: string (keyword)
   :Scope: Display / Proc.

   Only active if the :ref:`['ctrl']['languageField'] <ctrl-reference-languagefield>` property is set.

   The main relevance is when a record is localized by an API call in DataHandler that makes a copy of the default
   language record. You can think of this process as copying all fields from the source record. By default, the given
   value from the default language record is copied to the localization overlay and the field is editable in the
   overlay record. This behaviour can be changed:

   exclude
      Field will not be shown in FormEngine if this record is a localization of the default language. Works basically
      like a display condition. Internally, the field value of the default language record is copied over to the
      field of the localized record. The DataHandler keeps the values of localized records in sync and actively copies
      a changed value from the default language record into the localized overlays if changed.
      You can force the field to be displayed as readonly (with default language value)
      by setting  :ref:`"l10n_display" <columns-properties-l10n-display>` to `defaultAsReadonly`.

   prefixLangTitle
      The field value from the default language record gets copied when an localization overlay is created, but the
      content is prefixed with the title of the target language. The field stays editable in the localized record.
      Works only for field types like "text" and "input".

   If this property is not set for a given field, the value of the default language record is copied over to the
   localized record on creation, the field value is then distinct from the default language record, can be edited
   at will and will never be overwritten by the DataHandler if the value of the default language record changes.

Examples
========

.. _tca_example_translated_text_2:

prefixLangTitle
---------------

The following example can be found in the :ref:`extension styleguide
<styleguide>`. On translating a record in a new language the content of the
field gets copied to the target languge. It get prefixed with
:text:`[Translate to <language name>:]`.

.. include:: /Includes/Images/Styleguide/RstIncludes/TranslatedText2.rst.txt


The language mode is defined as follows::

.. include:: /Includes/Snippets/Styleguide/RstIncludes/TranslatedText2.rst.txt
