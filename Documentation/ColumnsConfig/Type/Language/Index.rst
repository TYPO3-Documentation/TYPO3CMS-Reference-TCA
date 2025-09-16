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

..  literalinclude:: _languageField.php
    :caption: EXT:myExtension/Configuration/Overrides/someTable.php

..  toctree::
    :titlesonly:

    Migration
    History

..  _columns-languge-introduction:
..  _columns-language-introduction:

Introduction
============

The main purpose of the TCA language configuration is to simplify the TCA
language configuration. It therefore supersedes
the `special=languages` option of TCA columns with `type=select`.

Formerly `foreign_table` relations to the table `sys_language` had also
been used. This became deprecated with the introduction of site
configurations with TYPO3 v9.

This field type decouples the actually available site
languages from the `sys_language` table.

This TCA type automatically displays all available languages for the
current context (the corresponding site configuration) and also automatically
adds the special `-1` language (meaning `all languages`) for all record
types, except `pages`.

In records on root level (`pid=0`) or on a page, outside of a site context,
all languages from all site configurations are displayed in the new field.

..  _columns-language-examples:
..  _columns-language-simple-example:

Example: Simple language field
==============================

..  literalinclude:: _languageField.php
    :caption: EXT:myExtension/Configuration/Overrides/someTable.php

..  _columns-language-properties:

Language field properties
=========================

Since the TCA type `language` is mostly based on the `type=select` internally, most
of the associated TCA and TSconfig options can still be applied. This includes
for example the `selectIcons` field wizard, as well as the :typoscript:`keepItems`
and :typoscript:`removeItems` page TSconfig options.

..  todo: add a list of properties here.
