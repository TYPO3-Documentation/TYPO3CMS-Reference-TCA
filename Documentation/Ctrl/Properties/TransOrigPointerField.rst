..  include:: /Includes.rst.txt
..  _ctrl-reference-transorigpointerfield:

=====================
transOrigPointerField
=====================

..  confval:: transOrigPointerField
    :name: ctrl-transOrigPointerField
    :Path: $GLOBALS['TCA'][$table]['ctrl']
    :type: string (field name)
    :Scope: Proc. / Display

    ..  versionchanged:: 13.3
        The column definition is :ref:`auto-created <ctrl-auto-created-columns>`.

    Name of the column, by convention :ref:`l10n_parent <field-l10n_parent>`, used by
    translations to point back to the original record, the record in the default
    language of which they are a translation.

    If this value is found being set together with the
    :ref:`languageField <ctrl-reference-languagefield>` then the
    FormEngine will show the default translation value under the fields in
    the main form. This is very neat if translators are to see what they are
    translating.

    The column definition is :ref:`auto-created <ctrl-auto-created-columns>`. If
    it is :ref:`overridden <ctrl-auto-created-columns-override>` it must still
    be of type :ref:`columns-passthrough`.

    ..  note::
        Sometimes :sql:`l18n_parent` is used for this field in Core tables. This
        is for historic reasons.

    ..  include:: _AutoCreateWarning.rst.txt

..  _ctrl-reference-transorigpointerfield-example:

Example: Define a translation origin
====================================

.. include:: /Images/Rst/TranslatedText2.rst.txt

..  literalinclude:: _CodeSnippets/_Language.php
    :caption: EXT:my_extension/Configuration/TCA/tx_myextension_domain_model_something.php
