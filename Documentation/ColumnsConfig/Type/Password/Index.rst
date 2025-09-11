..  include:: /Includes.rst.txt

..  _columns-password:

========
Password
========

..  versionadded:: 13.0
    When using the `password` type, TYPO3 takes care of
    :ref:`generating the according database field <t3coreapi:auto-generated-db-structure>`.
    A developer does not need to define this field in an extension's
    :file:`ext_tables.sql` file.

The TCA type :php:`password` should be used for input values that represent
passwords.

The :ref:`according database field <t3coreapi:auto-generated-db-structure>`
is generated automatically.

..  contents:: Table of contents:
    :local:
    :depth: 1

..  toctree:: Subpages
    :titlesonly:

    PasswordPolicies
    PasswordGenerator

..  _columns-password-example-basic:

Example: A basic password field:
================================

..  include:: _Snippets/_Password_1.rst.txt

..  _columns-password-example-generator:

Example: A password field with password generator
=================================================

..  figure:: /Images/ManualScreenshots/PasswordGeneratorAllChars.png
    :alt: A password generator using special chars.
    :class: with-shadow

    A password generator using special chars.

..  include:: _Snippets/_Password_6.rst.txt

For more options on generating passwords see
:ref:`Property passwordGenerator <columns-password-properties-passwordGenerator>`
and :ref:`columns-password-properties-passwordGenerator_examples`.

..  _columns-password-properties:

Properties of the TCA column type `password`
============================================

..  confval-menu::
    :name: password
    :display: table
    :type:
    :Scope:

    ..  include:: _Properties/_*.rst.txt
        :show-buttons:
