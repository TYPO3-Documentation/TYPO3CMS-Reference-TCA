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

A simple date field, stored as :sql:`int` in the database:

..  literalinclude:: _Snippets/_datefield.php
    :caption: EXT:my_extension/Configuration/TCA/Overrides/some-table.php


..  _columns-datetime-properties:

Properties of the TCA column type `datetime`
============================================

..  confval-menu::
    :name: datetime
    :display: table
    :type:
    :Scope:

    ..  include:: _Properties/_*.rst.txt
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
