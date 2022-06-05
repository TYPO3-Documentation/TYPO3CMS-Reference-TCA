.. include:: /Includes.rst.txt

.. _fields_language:

================
Language fields
================

See also the :ref:`Frontend Localization Guide <t3l10n:core-support-tca>`.

.. warning::
   Though it is possible to change the name of the following fields it is
   highly recommended not to do as it is confusing to most developers and
   might break third party extensions.

   All fields mentioned below get added to the database automatically. It is
   not recommended to define them in the :file:`ext_tables.sql`. Doing so
   with incompatible SQL settings can lead to problems.

Language fields in detail
==========================

.. _field-sys_language_uid:

:sql:`sys_language_uid`

   This field get defined in
   :ref:`ctrl->languageField <ctrl-reference-languagefield>`. If this field is
   defined a record of this table can be translated into another language.

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
      has historic reasons.

.. _field-l10n_source:

:sql:`l10n_source`

   This field gets defined in
   :ref:`ctrl->translationSource <ctrl-reference-translationSource>`.

   This field contains the uid of the record the translation was created from.
   For example if your default language is english and you already translated a
   record into German you can base the Suisse-German translation on the German
   record. In this case :sql:`l10n_parent` would contain the uid of the English
   record while :sql:`l10n_source` contains the uid of the German record.

.. _field-l10n_diffsource:

:sql:`l10n_diffsource`

   This field gets defined in
   :ref:`ctrl->transOrigPointerField <ctrl-reference-transorigpointerfield>`.

   This
   information is later used to compare the current values of the default
   record with those stored in this field. If they differ, there will
   be a display in the form of the difference visually:

   .. include:: /Images/ManualScreenshots/OtherLanguageContent.rst.txt

   .. note::
      Sometimes :sql:`l18n_diffsource` is used for this field in Core tables. This
      has historic reasons.

Example: enable table for localization and translation:
========================================================

.. include:: /CodeSnippets/Manual/Ctrl/Language.rst.txt
