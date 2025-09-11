..  include:: /Includes.rst.txt

..  _columns-language:

===============
Language fields
===============

..  versionadded:: 11.2
    The TCA field type called `language` has been added to TYPO3 Core.

This field type displays all languages available in the current site context.
Outside of the site context it displays all languages available in the
installation.

A special language :guilabel:`All languages` is automatically added.


..  include:: /CodeSnippets/SysLanguageUid.rst.txt


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

..  include:: /CodeSnippets/SysLanguageUid.rst.txt

..  _columns-language-properties:

Language field properties
=========================

Since the TCA type `language` is mostly based on the `type=select` internally, most
of the associated TCA and TSconfig options can still be applied. This includes
for example the `selectIcons` field wizard, as well as the :typoscript:`keepItems`
and :typoscript:`removeItems` page TSconfig options.

..  todo: add a list of properties here.
