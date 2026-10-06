..  include:: /Includes.rst.txt

..  _fields-language:

===============
Language fields
===============

See also the :ref:`Frontend Localization Guide <t3translate:core-support-tca>`.

..  note::
    It is possible to change the names of the following fields, however this is
    strongly discouraged as it breaks convention and may lead to compatibility
    issues with third party extensions.

All columns mentioned below get :ref:`auto-created <ctrl-auto-created-columns>`
in the TCA and added to the database automatically. It is
not recommended to define them in the TCA overrides or :file:`ext_tables.sql`. Doing so
with incompatible settings can lead to problems later on.

..  _fields-language-fields:

Language fields in detail
=========================

..  _field-sys-language-uid:

`sys_language_uid`
    This field gets defined in
    :ref:`ctrl->languageField <ctrl-reference-languagefield>`. If this field is
    defined a record in this table can be translated into another language.

    ..  figure:: /Images/Conference/CtrlLanguageField.png
        :alt: The language of a conference
        :class: with-shadow

        The language of a conference

..  _field-l10n-parent:

`l10n_parent`
    This field gets defined in
    :ref:`ctrl->transOrigPointerField <ctrl-reference-transorigpointerfield>`.

    If this value is found being set together with
    :ref:`languageField <ctrl-reference-languagefield>` then
    FormEngine will show the default translation value under the fields in
    the main form.

    ..  figure:: /Images/Conference/FieldWizardLocalizationState.png
        :alt: The contact email of a translated conference with the value of the default language
        :class: with-shadow

        The contact email of a translated conference with the value of the default language

    ..  note::
        Sometimes `l18n_parent` is used for this field in Core tables. This
        is for historic reasons.

..  _field-l10n-source:

`l10n_source`
    This field gets defined in
    :ref:`ctrl->translationSource <ctrl-reference-translationsource>`.

    This field contains the uid of the record the translation was created from.
    For example if your default language is English and you already translated a
    record into German you can base the Suisse-German translation on the German
    record. In this case `l10n_parent` would contain the uid of the English
    record while `l10n_source` contains the uid of the German record.

..  _field-l10n-diffsource:

`l10n_diffsource`
    This field gets defined in
    :ref:`ctrl->transOrigPointerField <ctrl-reference-transorigpointerfield>`.

    This
    information is used later on to compare the current values of the default
    record with those stored in this field. If they differ, there will
    be a display in the form of the difference visually:

    ..  note::
        Sometimes `l18n_diffsource` is used for this field in Core tables. This
        has historic reasons.

..  _fields-language-example:

Example: Enable table for localization and translation:
=======================================================

..  literalinclude:: /CodeSnippets/my_extension/Configuration/TCA/tx_myextension_conference.php
    :caption: EXT:my_extension/Configuration/TCA/tx_myextension_conference.php
    :visible-lines: 4-29, 57-83
    :emphasize-lines: 19-22, 66-67, 79-81
