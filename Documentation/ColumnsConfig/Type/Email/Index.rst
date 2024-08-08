..  include:: /Includes.rst.txt

..  _columns-email:

=====
Email
=====

..  versionadded:: 13.0
    When using the `email` type, TYPO3 takes care of
    :ref:`generating the according database field <t3coreapi:auto-generated-db-structure>`.
    A developer does not need to define this field in an extension's
    :file:`ext_tables.sql` file.

The TCA type :php:`email` should be used to input values representing email
addresses. The :ref:`according database field <t3coreapi:auto-generated-db-structure>`
is generated automatically.

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
