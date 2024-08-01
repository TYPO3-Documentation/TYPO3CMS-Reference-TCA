..  include:: /Includes.rst.txt

..  _columns-password:

========
Password
========

..  versionadded:: 12.0
    The TCA type :php:`password` has been introduced. It replaces the
    :php:`eval=password` and :php:`eval=saltedPassword` option of
    TCA type :php:`input`.

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
