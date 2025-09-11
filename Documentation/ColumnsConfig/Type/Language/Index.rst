..  include:: /Includes.rst.txt

..  _columns-language:

===============
Language fields
===============

..  versionadded:: 13.0
    When using the `language` type, TYPO3 takes care of
    :ref:`generating the according database field <t3coreapi:auto-generated-db-structure>`.
    A developer does not need to define this field in an extension's
    :file:`ext_tables.sql` file.

..  versionchanged:: 13.3
    The TCA column `sys_language_uid` will be created automatically if the
    setting :confval:`ctrl-languageField` was made in the original TCA
    definition. See also :ref:`ctrl-auto-created-columns`;

This field type displays all languages available in the current site context.
Outside of the site context it displays all languages available in the
installation.

A special language :guilabel:`All languages` is automatically added.

The :ref:`according database field <t3coreapi:auto-generated-db-structure>`
is generated automatically.

..  toctree::
    :titlesonly:

    Introduction
    Examples
    Properties/Index
    Migration
    History

..  literalinclude:: _languageField.php
    :caption: EXT:myExtension/Configuration/Overrides/someTable.php
