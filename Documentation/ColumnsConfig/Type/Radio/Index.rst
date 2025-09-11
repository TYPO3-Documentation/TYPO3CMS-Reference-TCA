..  include:: /Includes.rst.txt
..  _columns-radio:

=============
Radio buttons
=============

..  versionadded:: 13.0
    When using the `radio` type, TYPO3 takes care of
    :ref:`generating the according database field <t3coreapi:auto-generated-db-structure>`.
    A developer does not need to define this field in an extension's
    :file:`ext_tables.sql` file.

This type creates a set of radio buttons. The value is typically
stored as integer value, each radio item has one assigned number,
but it can be a string, too.

The :ref:`according database field <t3coreapi:auto-generated-db-structure>`
is generated automatically.

..  contents:: Table of contents:
    :local:
    :depth: 1

..  _columns-radio-examples:
..  _tca_example_radio_1:

Example: Set of radio buttons field
===================================

..  include:: /Images/Rst/Radio1.rst.txt

..  include:: /CodeSnippets/Radio1.rst.txt

..  _columns-radio-properties:

Properties of the TCA column type `radio`
=========================================

..  confval-menu::
    :name: radio
    :display: table
    :type:
    :Scope:

    ..  include:: _Properties/_*.rst.txt
        :show-buttons:
