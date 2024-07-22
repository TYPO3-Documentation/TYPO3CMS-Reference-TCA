..  include:: /Includes.rst.txt

..  _columns-email:

=====
Email
=====

..  versionadded:: 12.0
    The TCA type :php:`email` has been introduced. It replaces the
    :php:`eval=email` option of TCA type :php:`input`. See also
    :ref:`columns-email-migration`.

..  versionadded:: 13.0
    When using the `email` type, TYPO3 takes care of
    :ref:`generating the according database field <t3coreapi:auto-generated-db-structure>`.
    A developer does not need to define this field in an extension's
    :file:`ext_tables.sql` file.

The TCA type :php:`email` should be used to input values representing email
addresses.

..  contents:: Table of contents

..  _columns-email-properties:


Properties of the TCA column type `email`
=========================================

..  confval-menu::
    :display: table
    :type:
    :Scope:

    ..  include:: _Properties/_AllowLanguageSynchronization.rst.txt
        :show-buttons:

    ..  include:: _Properties/_Autocomplete.rst.txt
        :show-buttons:

    ..  include:: _Properties/_Eval.rst.txt
        :show-buttons:

    ..  include:: _Properties/_FieldInformation.rst.txt
        :show-buttons:

    ..  include:: _Properties/_FieldWizard.rst.txt
        :show-buttons:

    ..  include:: _Properties/_Mode.rst.txt
        :show-buttons:

    ..  include:: _Properties/_Nullable.rst.txt
        :show-buttons:

    ..  include:: _Properties/_Placeholder.rst.txt
        :show-buttons:

    ..  include:: _Properties/_ReadOnly.rst.txt
        :show-buttons:

    ..  include:: _Properties/_Required.rst.txt
        :show-buttons:

    ..  include:: _Properties/_Size.rst.txt
        :show-buttons:

    .. note::

        The softref definition :php:`'softref' => 'email[subst]'` is automatically applied
        to all :php:`email` fields.


..  _columns-email-migration:

Migration
=========

The migration from :php:`eval='email'` to :php:`type=email` is done like following:

..  literalinclude:: _Snippets/_migration.diff

An automatic TCA migration is performed on the fly, migrating all occurrences
to the new TCA type and triggering a PHP :php:`E_USER_DEPRECATED` error
where code adoption has to take place.

..  note::
    The value of TCA type :php:`email` columns is automatically trimmed before
    being stored in the database. Therefore, the :php:`eval=trim` option is no
    longer needed and should be removed from the TCA configuration.
