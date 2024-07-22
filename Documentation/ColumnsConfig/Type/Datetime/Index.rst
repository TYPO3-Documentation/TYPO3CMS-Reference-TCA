..  include:: /Includes.rst.txt

..  _columns-input-renderType-inputDateTime:
..  _columns-datetime:

========
Datetime
========

..  versionadded:: 12.0
    The TCA type :php:`datetime` has been introduced. It replaces the
    :php:`renderType=inputDateTime` of TCA type :php:`input`.

    When using the `datetime` type, TYPO3 takes care of
    :ref:`generating the according database field <t3coreapi:auto-generated-db-structure>`.
    A developer does not need to define this field in an extension's
    :file:`ext_tables.sql` file.

..  versionchanged:: 13.0
    The database type has changed from :sql:`int signed` to :sql:`bigint signed`
    when the field is auto-generated (with the exception of the columns
    :sql:`tstamp`, :sql:`crdate`, :sql:`starttime`, :sql:`endtime` that
    still use :sql:`int signed`).
    This allows to store dates from some million years ago to far into the
    future.

The TCA type :php:`datetime` should be used to input values representing a
date time or datetime.

..  note::

    TYPO3 does not handle the following dates properly:

    *  Before Christ (negative year)
    *  double-digit years

..  contents:: Table of content

..  _columns-datetime-example:

Example: A simple date field, stored as bigint
==============================================

A simple date field, stored as :sql:`bigint` in the database:

..  literalinclude:: _Snippets/_datefield.php
    :caption: EXT:my_extension/Configuration/TCA/Overrides/some-table.php


..  _columns-datetime-properties:

Properties of the TCA column type `datetime`
============================================

..  confval-menu::
    :display: table
    :type:
    :Scope:

    ..  include:: _Properties/_AllowLanguageSynchronization.rst.txt
        :show-buttons:

    ..  include:: _Properties/_DbType.rst.txt
        :show-buttons:

    ..  include:: _Properties/_Default.rst.txt
        :show-buttons:

    ..  include:: _Properties/_DisableAgeDisplay.rst.txt
        :show-buttons:

    ..  include:: _Properties/_FieldControl.rst.txt
        :show-buttons:

    ..  include:: _Properties/_FieldInformation.rst.txt
        :show-buttons:

    ..  include:: _Properties/_FieldWizard.rst.txt
        :show-buttons:

    ..  include:: _Properties/_Format.rst.txt
        :show-buttons:

    ..  include:: _Properties/_Mode.rst.txt
        :show-buttons:

    ..  include:: _Properties/_Nullable.rst.txt
        :show-buttons:

    ..  include:: _Properties/_Placeholder.rst.txt
        :show-buttons:

    ..  include:: _Properties/_Range.rst.txt
        :show-buttons:

    ..  include:: _Properties/_ReadOnly.rst.txt
        :show-buttons:

    ..  include:: _Properties/_Search.rst.txt
        :show-buttons:

    ..  include:: _Properties/_Softref.rst.txt
        :show-buttons:


..  _columns-datetime-migration:

Migration
=========

A complete migration from :php:`renderType=inputDateTime` to :php:`type=datetime`
looks like the following:

..  literalinclude:: _Snippets/_migration.diff

An automatic TCA migration is performed on the fly, migrating all occurrences
to the new TCA type and triggering a PHP :php:`E_USER_DEPRECATED` error
where code adoption has to take place.
