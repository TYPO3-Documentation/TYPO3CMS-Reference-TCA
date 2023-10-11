.. include:: /Includes.rst.txt

.. _columns-language:

===============
Language fields
===============

.. versionadded:: 11.2
   The TCA field type called `language` has been added to TYPO3 Core.

..  versionadded:: 13.0
    When using the `language` type, TYPO3 takes care of
    :ref:`generating the according database field <t3coreapi:auto-generated-db-structure>`.
    A developer does not need to define this field in an extension's
    :file:`ext_tables.sql` file.

This field type displays all languages available in the current site context.
Outside of the site context it displays all languages available in the
installation.

A special language :guilabel:`All languages` is automatically added.


.. include:: /CodeSnippets/SysLanguageUid.rst.txt


.. toctree::
   :titlesonly:

   Introduction
   Examples
   Properties/Index
   Migration
   History
