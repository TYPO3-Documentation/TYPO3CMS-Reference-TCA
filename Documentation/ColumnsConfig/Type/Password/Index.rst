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

..  contents:: Table of Contents

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
    :display: table
    :type:
    :Scope:

    ..  include:: _Properties/_AllowLanguageSynchronization.rst.txt
        :show-buttons:

    ..  include:: _Properties/_Autocomplete.rst.txt
        :show-buttons:

    ..  include:: _Properties/_Default.rst.txt
        :show-buttons:

    ..  include:: _Properties/_FieldControl.rst.txt
        :show-buttons:

    ..  include:: _Properties/_FieldInformation.rst.txt
        :show-buttons:

    ..  include:: _Properties/_FieldWizard.rst.txt
        :show-buttons:

    ..  include:: _Properties/_Hashed.rst.txt
        :show-buttons:

    ..  include:: _Properties/_Mode.rst.txt
        :show-buttons:

    ..  include:: _Properties/_Nullable.rst.txt
        :show-buttons:

    ..  include:: _Properties/_PasswordGenerator.rst.txt
        :show-buttons:

    ..  include:: _Properties/_PasswordPolicy.rst.txt
        :show-buttons:

    ..  include:: _Properties/_Placeholder.rst.txt
        :show-buttons:

    ..  include:: _Properties/_ReadOnly.rst.txt
        :show-buttons:

    ..  include:: _Properties/_Required.rst.txt
        :show-buttons:

    ..  include:: _Properties/_Size.rst.txt
        :show-buttons:
