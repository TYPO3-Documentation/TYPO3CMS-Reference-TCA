..  include:: /Includes.rst.txt

..  _columns-password:

========
Password
========

..  versionadded:: 12.0
    The TCA type :php:`password` has been introduced. It replaces the
    :php:`eval=password` and :php:`eval=saltedPassword` option of
    TCA type :php:`input`.

..  versionadded:: 13.0
    When using the `password` type, TYPO3 takes care of
    :ref:`generating the according database field <t3coreapi:auto-generated-db-structure>`.
    A developer does not need to define this field in an extension's
    :file:`ext_tables.sql` file.

The TCA type :php:`password` should be used for input values that represent
passwords.

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
    :name: password
    :display: table
    :type:
    :Scope:

    ..  include:: _Properties/_*.rst.txt
        :show-buttons:

..  _columns-password-migration:

Migration: From eval='password' to type="password"
==================================================

The migration from :php:`eval='password'` and :php:`eval='saltedPassword'` to
:php:`type=password` is done like following:

..  literalinclude:: _Snippets/_migration_salted.diff
    :caption: Migration of a password field with `saltedPassword`

..  literalinclude:: _Snippets/_migration_non_hashed.diff
    :caption: Migration of a non-hashed password field

An automatic TCA migration is performed on the fly, migrating all occurrences
to the new TCA type and triggering a PHP :php:`E_USER_DEPRECATED` error
where code adoption has to take place.

..  note::

    The value of TCA type :php:`password` column is automatically trimmed before
    being stored (and optionally hashed) in the database. Therefore, the :php:`eval=trim`
    option is no longer needed and should be removed from the TCA configuration.
