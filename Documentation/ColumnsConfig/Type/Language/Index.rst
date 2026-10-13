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
    definition. See also :ref:`auto-created columns <ctrl-auto-created-columns>`;

This field type displays all languages available in the current site context.
Outside of the site context it displays all languages available in the
installation.

A special language :guilabel:`All languages` is automatically added.

The :ref:`according database field <t3coreapi:auto-generated-db-structure>`
is generated automatically.

..  contents:: Table of contents:
    :local:
    :depth: 1

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

..  versionchanged:: 14.2
    Fields of type `language` are now hidden by default if only one language is
    available.

`language` fields are hidden by default if only one language is
available. If they should be displayed, set
`showIfEmpty <https://docs.typo3.org/permalink/t3tca:confval-select-single-showIfEmpty>`_.

Reasons why only one language is available include:

*   Only one language has been configured in :doc:`Site Management <t3translate:SettingUpLanguages/Index#site-management>`


..  _columns-language-examples:
..  _columns-language-simple-example:

Example: Simple language field
==============================

The conferences have a language field. TYPO3 creates the column
`sys_language_uid` of type `language` from the `languageField` in the `ctrl`
section, and the palette shows it:

..  figure:: /Images/Conference/CtrlLanguageField.png
    :alt: The language of a conference
    :class: with-shadow

    The language of a conference

..  literalinclude:: /CodeSnippets/my_extension/Configuration/TCA/tx_myextension_conference.php
    :caption: EXT:my_extension/Configuration/TCA/tx_myextension_conference.php
    :visible-lines: 4-29, 74-87
    :emphasize-lines: 19, 84

..  _columns-language-example-subtitles:

Example: Language of the subtitles
==================================

A field of type `language` can also hold other information about a
language. The recording of a talk has subtitles in one language of the
site:

..  figure:: /Images/Conference/LanguageSubtitles.png
    :alt: The field "Subtitles of the recording" with the language
        "Deutsch [1]" selected
    :class: with-shadow

    The language of the subtitles of a talk

..  literalinclude:: /CodeSnippets/my_extension/Configuration/TCA/Overrides/242-tx_myextension_talk-subtitles.php
    :caption: EXT:my_extension/Configuration/TCA/Overrides/242-tx_myextension_talk-subtitles.php
    :emphasize-lines: 15

TYPO3 treats such a field differently from the language of the record:

*   The field lists all languages of the site. On a translated page, the
    language of the record lists only the default language and the
    languages of the page translations.
*   TYPO3 does not check whether the editor has access to the selected
    language.
*   The field also offers the item :guilabel:`[All]` with the value `-1`.
    For the subtitles, this item means that the recording has subtitles in
    every language of the site.

..  _columns-language-properties:

Language field properties
=========================

Since the TCA type `language` is mostly based on the `type=select` internally, most
of the associated TCA and TSconfig options can still be applied. This includes
for example the `selectIcons` field wizard, as well as the :typoscript:`keepItems`
and :typoscript:`removeItems` page TSconfig options.

..  todo: add a list of properties here.
