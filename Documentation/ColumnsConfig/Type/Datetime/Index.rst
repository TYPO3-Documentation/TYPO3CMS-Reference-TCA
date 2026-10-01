..  include:: /Includes.rst.txt

..  _columns-input-renderType-inputDateTime:
..  _columns-datetime:

========
Datetime
========

..  versionchanged:: 14.0
    The TCA configuration config option `type=datetime` can now specify
    the `format=datetimesec` format to offer a date/time picker for entering
    a date (*day, month, year*) with a specific time (*hour, minute, second*).

    Previously, only a datepicker for *hour* and *minute* was available,
    even though the utilized component (Flatpickr) supports entering seconds.

    This  format can either be specified for `dbType=datetime` (native SQL datetime
    columns based on a timestamp that always includes seconds) or
    for the `integer`-based storage without a `dbType` option (UNIX timestamp).


The TCA type `datetime` should be used to input values representing a
date time or datetime.

The :ref:`according database field <t3coreapi:auto-generated-db-structure>`
is generated automatically as :sql:`bigint signed` (with the exception of the columns
`tstamp`, `crdate`, `starttime`, `endtime` that
still use :sql:`int signed`).
This allows to store dates from some million years ago to far into the
future.

..  note::

    TYPO3 does not handle the following dates properly:

    *   Before Christ (negative year)
    *   double-digit years

..  contents:: Table of contents:
    :local:
    :depth: 1

..  _columns-datetime-example:

Example: A simple date field, stored as bigint
==============================================

A simple date field, stored as :sql:`bigint` in the database:

..  literalinclude:: /ColumnsConfig/Type/Datetime/_Snippets/_Datetime.php
    :caption: EXT:my_extension/Configuration/TCA/tx_myextension_mytable.php
    :visible-lines: 9-16
    :emphasize-lines: 13


..  _columns-datetimesec-example:

Example: A simple date field with seconds
==============================================

A simple date field, formated with `datetimesec`.

..  literalinclude:: /ColumnsConfig/Type/Datetime/_Snippets/_Datetime.php
    :caption: EXT:my_extension/Configuration/TCA/tx_myextension_mytable.php
    :visible-lines: 18-28
    :emphasize-lines: 22


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
