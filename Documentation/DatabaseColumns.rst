:navigation-title: Database columns

..  include:: /Includes.rst.txt
..  _database-columns:

===================================
Database columns generated from TCA
===================================

TYPO3 builds the expected database schema automatically from the TCA
definitions.

Technical fields mentioned in the
`Table properties (ctrl) <https://docs.typo3.org/permalink/t3tca:ctrl>`_
are created automatically.

`Field definitions (columns) <https://docs.typo3.org/permalink/t3tca:columns>`_
of most field types also create their database schema automatically.

If you have to override the default SQL types you can define them in the
:file:`ext_tables.sql`.

For field types that are not supported, a definition in
:file:`ext_tables.sql` is mandatory.

..  contents:: Table of contents
    :depth: 1

..  _database-columns-precedence:

Overriding database schema in `ext_tables.sql`
==============================================

A column defined in :file:`ext_tables.sql` is never overwritten. Define a
column there to change its SQL type, its length, or its default.

Most tables need no column definition at all. The :sql:`CREATE TABLE`
statement can stay empty, or you can leave it out:

..  code-block:: sql
    :caption: EXT:my_extension/ext_tables.sql

    CREATE TABLE tx_myextension_conference (
    );

The missing columns are created in
:guilabel:`System > Maintenance > Analyze Database Structure` and by the
command :bash:`typo3 extension:setup`.

..  _database-columns-ctrl:

Columns created from the `ctrl` section
=======================================

Settings like
`enablecolumns <https://docs.typo3.org/permalink/t3tca:confval-ctrl-enablecolumns>`_,
`languageField <https://docs.typo3.org/permalink/t3tca:confval-ctrl-languagefield>`_,
or `sortby <https://docs.typo3.org/permalink/t3tca:confval-ctrl-sortby>`_
name a technical field. That field is created automatically.

The `uid` and `pid` columns are created automatically as well, together
with the indexes of a language-aware table and the `t3ver_*` columns of a
workspace-aware table.

`Auto-generated structure <https://docs.typo3.org/permalink/t3coreapi:auto-generated-db-structure>`_
in TYPO3 Explained lists all `ctrl` settings that create a column.

..  note::
    A `ctrl` setting also creates the TCA `columns` entry that belongs to
    it. That is a different mechanism with a rule of its own. See
    `Auto-created columns from 'ctrl' <https://docs.typo3.org/permalink/t3tca:ctrl-auto-created-columns>`_.

..  _database-columns-types:

Columns created from the column types
=====================================

Each entry below gives the column as it is created on MySQL and MariaDB,
followed by the Doctrine DBAL type it is declared with. PostgreSQL and
SQLite get a column of that same Doctrine type, written in their own way.

The types `country`, `none`, `passthrough`, and `user` create no column.
Define a field of those types in :file:`ext_tables.sql`.

`nullable` changes most of these columns: they lose their `NOT NULL` and
their default becomes `NULL`, for example
:sql:`varchar(255) DEFAULT NULL` instead of
:sql:`varchar(255) DEFAULT '' NOT NULL`.

`category`
    :sql:`int unsigned DEFAULT 0 NOT NULL`, Doctrine type `integer`. The
    column counts the related records.

    With
    `relationship <https://docs.typo3.org/permalink/t3tca:confval-category-relationship>`_
    set to `oneToMany` it is a :sql:`longtext DEFAULT NULL`, Doctrine type
    `text`, with the list of uids.

`check`
    :sql:`smallint unsigned DEFAULT 0 NOT NULL`, Doctrine type `smallint`.
    The TCA `default` becomes the default of the column.

`color`
    :sql:`varchar(7) DEFAULT '' NOT NULL`, Doctrine type `string`, long
    enough for a value like `#ff8700`.

    With
    `opacity <https://docs.typo3.org/permalink/t3tca:confval-color-opacity>`_
    enabled it is a :sql:`varchar(9)`, which also holds the alpha value.

`datetime`
    :sql:`bigint DEFAULT 0 NOT NULL`, Doctrine type `bigint`, holding a
    UNIX timestamp. The column is signed and covers dates before 1970 and
    after 2038.

    With
    `dbType <https://docs.typo3.org/permalink/t3tca:confval-datetime-dbtype>`_
    the column gets the native type of that name: :sql:`date`,
    :sql:`datetime`, or :sql:`time`.

`email`
    :sql:`varchar(255) DEFAULT '' NOT NULL`, Doctrine type `string`.

`file`
    :sql:`int unsigned DEFAULT 0 NOT NULL`, Doctrine type `integer`. The
    column counts the file references. The references themselves are stored
    in `sys_file_reference`.

`flex`
    :sql:`longtext DEFAULT NULL`, Doctrine type `text`, holding the XML of
    the FlexForm.

`folder`
    :sql:`longtext DEFAULT NULL`, Doctrine type `text`.

`group`
    :sql:`longtext DEFAULT NULL`, Doctrine type `text`, with the list of
    references.

    With `MM <https://docs.typo3.org/permalink/t3tca:confval-group-mm>`_
    the column counts the related records instead:
    :sql:`int unsigned DEFAULT 0 NOT NULL`, Doctrine type `integer`.

`imageManipulation`
    :sql:`longtext DEFAULT NULL`, Doctrine type `text`.

`inline`
    :sql:`int unsigned DEFAULT 0 NOT NULL`, Doctrine type `integer`. The
    column counts the children. This applies to every relation with
    `foreign_field` or `MM`.

    A relation that keeps the uids in the parent gets a
    :sql:`varchar(255) DEFAULT '' NOT NULL` with a comma-separated list,
    Doctrine type `string`.

    The child table gets columns too. `foreign_field` becomes an
    :sql:`int unsigned DEFAULT 0 NOT NULL`, `foreign_table_field` a
    :sql:`varchar(255) DEFAULT '' NOT NULL`. Both are created only if the
    TCA of the child does not define the field, or defines it as
    `passthrough`.

`input`
    :sql:`varchar(255) DEFAULT '' NOT NULL`, Doctrine type `string`. A
    `max <https://docs.typo3.org/permalink/t3tca:confval-input-max>`_ of
    its own becomes the length, for example :sql:`varchar(40)`. Above 255
    the column is a :sql:`text DEFAULT '' NOT NULL` instead, Doctrine type
    `text`.

`json`
    :sql:`json DEFAULT NULL`, Doctrine type `json`.

`language`
    :sql:`int DEFAULT 0 NOT NULL`, Doctrine type `integer`. The column is
    signed because `-1` stands for "all languages".

`link`
    :sql:`text DEFAULT '' NOT NULL`, Doctrine type `text`.

`number`
    :sql:`int DEFAULT 0 NOT NULL`, Doctrine type `integer`. The column is
    unsigned if
    `range <https://docs.typo3.org/permalink/t3tca:confval-number-range>`_
    has a `lower` of `0` or higher.

    The
    `format <https://docs.typo3.org/permalink/t3tca:confval-number-format>`_
    `decimal` gives a :sql:`decimal(10,2) DEFAULT 0 NOT NULL`, Doctrine
    type `decimal`, with two decimal places that cannot be changed. SQLite
    stores such a value as a string so that it is not rounded.

`password`
    :sql:`varchar(255) DEFAULT '' NOT NULL`, Doctrine type `string`.

`radio`
    :sql:`varchar(255) DEFAULT '' NOT NULL`, Doctrine type `string`.

    If the values of `items` are all integers the column is a
    :sql:`smallint DEFAULT 0 NOT NULL`, Doctrine type `smallint`. Values
    outside `-32768` to `32767` give an :sql:`int DEFAULT 0 NOT NULL`,
    Doctrine type `integer`.

`select`
    :sql:`varchar(255) DEFAULT ''`, Doctrine type `string`, with a
    comma-separated list of the selected values. A
    `dbFieldLength <https://docs.typo3.org/permalink/t3tca:confval-select-single-dbfieldlength>`_
    of its own replaces the length of 255.

    A field that stores a single value, which is the `renderType`
    `selectSingle` or a `maxitems` of `1`, gets an
    :sql:`int DEFAULT 0 NOT NULL` for integer values and a
    :sql:`varchar(255) DEFAULT '' NOT NULL` for other values. The column is
    unsigned if no value is negative.

    With `MM` the column counts the related records:
    :sql:`int unsigned DEFAULT 0 NOT NULL`, Doctrine type `integer`.

    In all other cases the column is a :sql:`longtext DEFAULT NULL`,
    Doctrine type `text`.

`slug`
    :sql:`text DEFAULT NULL`, Doctrine type `text`.

`text`
    :sql:`longtext DEFAULT NULL`, Doctrine type `text`.

`uuid`
    :sql:`varchar(36) DEFAULT '' NOT NULL`, Doctrine type `string`. A UUID
    in its usual notation has 36 characters.

..  _database-columns-mm:

The intermediate table of an MM relation
========================================

A `MM <https://docs.typo3.org/permalink/t3tca:confval-mm>`_ setting on a
field of the type `category`, `group`, `inline`, or `select` also creates
the intermediate table. That table has no TCA and no
:file:`ext_tables.sql` entry of its own.
`Auto creation of intermediate MM tables from TCA <https://docs.typo3.org/permalink/t3tca:tca-property-mm-auto-creation-mm-table>`_
describes when it is created and what it is for.

Its columns are:

`uid_local` and `uid_foreign`
    :sql:`int unsigned DEFAULT 0 NOT NULL`, each with an index. The first
    points at the record that holds the field, the second at the related
    record.

`sorting` and `sorting_foreign`
    :sql:`int unsigned DEFAULT 0 NOT NULL`, the order of the records on
    each side of the relation. Both are always created.

`tablenames` and `fieldname`
    :sql:`varchar(64) DEFAULT '' NOT NULL` each. They are created together
    if one intermediate table serves several tables or fields: with
    `MM_oppositeUsage <https://docs.typo3.org/permalink/t3tca:confval-mm-oppositeusage>`_,
    and for a `group` field whose
    `allowed <https://docs.typo3.org/permalink/t3tca:confval-group-allowed>`_
    names more than one table or is `*`.

`uid`
    :sql:`int unsigned AUTO_INCREMENT NOT NULL`, created only with
    `multiple <https://docs.typo3.org/permalink/t3tca:confval-select-single-multiple>`_.
    That setting lets the same record take part in the relation twice,
    which the usual primary key forbids.

The primary key is `uid_local` and `uid_foreign`, extended by `tablenames`
and `fieldname` if both exist. With `multiple` the `uid` column is the
primary key instead.

..  _database-columns-pitfalls:

What to watch out for
=====================

..  _database-columns-pitfalls-overrides:

A `ctrl` setting in an override file creates nothing
----------------------------------------------------

A setting that creates a column is read from the base file
:file:`Configuration/TCA/<table>.php` only. The same setting in
:file:`Configuration/TCA/Overrides/` comes too late and leaves you without
the column. See
`Load order when building TCA <https://docs.typo3.org/permalink/t3tca:ctrl-auto-created-columns-loading-order>`_.

..  _database-columns-pitfalls-upgrade:

An old definition keeps its old column
--------------------------------------

A column defined in :file:`ext_tables.sql` stays as it is defined. An
extension written before TYPO3 created these columns therefore keeps every
column it defined, also those that no longer match. Delete the definition
to get the automatic column. Read the statements of
:guilabel:`System > Maintenance > Analyze Database Structure` before you
apply them: a change from one type to another can cut values short.

..  _database-columns-pitfalls-type-change:

A changed TCA type changes the column
-------------------------------------

The automatic column follows the TCA. A `select` field that stored integer
values and now stores strings turns from an :sql:`int` into a
:sql:`varchar`. The database converts the stored values, not TYPO3. Check
what that conversion does to the existing rows before you apply it.
