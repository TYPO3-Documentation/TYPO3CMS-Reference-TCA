.. include:: /Includes.rst.txt

.. _fields_language:

================
Language fields
================

See also the :ref:`Frontend Localization Guide <t3translate:core-support-tca>`.

.. note::
   It is possible to change the names of the following fields, however this is
   strongly discouraged as it breaks convention and may lead to compatibility
   issues with third party extensions.

All fields mentioned below get added to the database automatically. It is
not recommended to define them in the :file:`ext_tables.sql`. Doing so
with incompatible SQL settings can lead to problems later on.

Language fields in detail
==========================

.. _field-sys_language_uid:

:sql:`sys_language_uid`
   This field gets defined in
   :ref:`ctrl->languageField <ctrl-reference-languagefield>`. If this field is
   defined a record in this table can be translated into another language.

   .. include:: /Images/Rst/SysLanguageUid.rst.txt

.. _field-l10n_parent:

:sql:`l10n_parent`
   This field gets defined in
   :ref:`ctrl->transOrigPointerField <ctrl-reference-transorigpointerfield>`.

   If this value is found being set together with
   :ref:`languageField <ctrl-reference-languagefield>` then
   FormEngine will show the default translation value under the fields in
   the main form.

   .. include:: /Images/ManualScreenshots/OtherLanguageContent.rst.txt

   .. note::
      Sometimes :sql:`l18n_parent` is used for this field in Core tables. This
      is for historic reasons.

.. _field-l10n_source:

:sql:`l10n_source`
   This field gets defined in
   :ref:`ctrl->translationSource <ctrl-reference-translationSource>`.

   This field contains the uid of the record the translation was created from.
   For example if your default language is English and you already translated a
   record into German you can base the Suisse-German translation on the German
   record. In this case :sql:`l10n_parent` would contain the uid of the English
   record while :sql:`l10n_source` contains the uid of the German record.

.. _field-l10n_diffsource:

:sql:`l10n_diffsource`
   This field gets defined in
   :ref:`ctrl->transOrigPointerField <ctrl-reference-transorigpointerfield>`.

   This
   information is used later on to compare the current values of the default
   record with those stored in this field. If they differ, there will
   be a display in the form of the difference visually:

   .. include:: /Images/ManualScreenshots/OtherLanguageContent.rst.txt

   .. note::
      Sometimes :sql:`l18n_diffsource` is used for this field in Core tables. This
      has historic reasons.

Example: enable table for localization and translation:
========================================================

.. include:: /CodeSnippets/Manual/Ctrl/Language.rst.txt
