..  include:: /Includes.rst.txt
..  _ctrl-reference-languagefield:

=============
languageField
=============

..  confval:: languageField
    :name: ctrl-languageField
    :Path: $GLOBALS['TCA'][$table]['ctrl']
    :type: string (field name of type :ref:`language <columns-language>`)
    :Scope: Proc. / Display

    ..  versionchanged:: 13.3
        The column definition is :ref:`auto-created <ctrl-auto-created-columns>`.

    This property contains the column name of the column which contains the identifier
    language of the record. The column definition is :ref:`auto-created <ctrl-auto-created-columns>`.
    If it is :ref:`overridden <ctrl-auto-created-columns-override>` it must still
    be of type :ref:`columns-language`.

    The column is called :php:`sys_language_uid` by convention.

    Backend users can be limited to have edit access for only certain of
    these languages and if this option is set, edit access for languages
    will be enforced for this table.

    Also see the :ref:`Frontend Localization Guide <t3translate:core-support-tca>`
    for a discussion about the effects of
    this property (and other TCA properties) on the localization process.

    ..  include:: _AutoCreateWarning.rst.txt


..  _ctrl-reference-languagefield-migration:

Migration: Remove language column definitions from TCA
======================================================

On dropping TYPO3 v12.4 support extensions authors can drop the column
definitions of the language fields. They need to keep the :ref:`palettes` and
:ref:`type` definitions, however:

..  literalinclude:: _CodeSnippets/_Language.diff
    :caption: EXT:my_extension/Configuration/TCA/tx_myextension_domain_model_something.php

..  _ctrl-reference-languagefield-example:

Example: A table with localization support
==========================================

.. include:: /Images/Rst/SysLanguageUid.rst.txt

..  literalinclude:: _CodeSnippets/_Language.php
    :caption: EXT:my_extension/Configuration/TCA/tx_myextension_domain_model_something.php
