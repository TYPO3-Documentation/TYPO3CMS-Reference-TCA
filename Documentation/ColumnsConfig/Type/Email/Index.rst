..  include:: /Includes.rst.txt

..  _columns-email:

=====
Email
=====

..  versionadded:: 12.0
    The TCA type :php:`email` has been introduced. It replaces the
    :php:`eval=email` option of TCA type :php:`input`. See also
    :ref:`columns-email-migration`.

The TCA type :php:`email` should be used to input values representing email
addresses.

..  contents:: Table of contents

..  _columns-email-properties:


Properties of the TCA column type `email`
=========================================

..  confval-menu::
    :name: email
    :display: table
    :type:
    :Scope:

    ..  include:: _Properties/_*.rst.txt
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
