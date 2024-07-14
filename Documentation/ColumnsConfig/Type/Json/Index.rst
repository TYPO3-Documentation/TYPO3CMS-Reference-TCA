..  include:: /Includes.rst.txt

..  _columns-json:

====
Json
====

..  versionadded:: 12.3
    The TCA field type `json` has been added to TYPO3 Core.

When using the `json` type, TYPO3 takes care of
:ref:`generating the according database field <t3coreapi:auto-generated-db-structure>`.
A developer does not need to define this field in an extension's
:file:`ext_tables.sql` file.

..  _columns-json-examples-simple:

Example: Simple JSON field
==========================

The system extension :composer:`typo3/cms-webhooks` uses a TCA field of type
JSON for the input of additional HTTP request header data:

..  figure:: _Images/SimpleJson.png
    :alt: The additional header field with some example input

..  include:: _Examples/SysWebHook.rst.php


..  toctree::
    :titlesonly:

    Properties
