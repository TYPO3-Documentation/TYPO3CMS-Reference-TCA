..  include:: /Includes.rst.txt

..  _columns-input-renderType-inputDateTime:
..  _columns-datetime:

========
Datetime
========

..  versionchanged:: 13.0
    The database type has changed from :sql:`int signed` to :sql:`bigint signed`
    when the field is auto-generated (with the exception of the columns
    :sql:`tstamp`, :sql:`crdate`, :sql:`starttime`, :sql:`endtime` that
    still use :sql:`int signed`).
    This allows to store dates from some million years ago to far into the
    future.

The TCA type :php:`datetime` should be used to input values representing a
date time or datetime.

The :ref:`according database field <t3coreapi:auto-generated-db-structure>`
is generated automatically as :sql:`bigint signed`.

..  note::

    TYPO3 does not handle the following dates properly:

    *  Before Christ (negative year)
    *  double-digit years

..  contents:: Table of contents:
    :local:
    :depth: 1

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
    :name: datetime
    :display: table
    :type:
    :Scope:

    ..  include:: _Properties/_*.rst.txt
        :show-buttons:
