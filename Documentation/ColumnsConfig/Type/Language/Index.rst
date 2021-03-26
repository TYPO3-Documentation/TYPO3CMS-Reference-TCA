.. include:: /Includes.rst.txt

.. _columns-language:

===============
Language fields
===============

.. versionadded:: 11.2
   The TCA field type called `language` has been added to TYPO3 Core.

The main
purpose of the TCA language configuration is to simplify the TCA language
configuration. It therefore supersedes
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
all languages form all site configurations are displayed in the new field.


.. include:: /Includes/Snippets/Styleguide/RstIncludes/Manual/Language1.rst.txt


.. toctree::
   :titlesonly:

   Introduction
   Examples
   Properties/Index
   Migration
