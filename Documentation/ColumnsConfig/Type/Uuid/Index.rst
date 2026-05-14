..  include:: /Includes.rst.txt

..  _columns-uuid:

====
Uuid
====

The main purpose of the TCA type :php:`uuid` is to simplify the TCA
configuration when working with fields containing a `UUID`_.

The :ref:`matching database field <t3coreapi:auto-generated-db-structure>`
is generated automatically.

..  versionchanged:: 14.0
    The TYPO3 Doctrine implementation can now handle the proper matching
    database type for UUIDs.

    PostgreSQL natively supports the UUID data type and is a lot faster
    than the previous `VARCHAR(36)` generated from the string type.

    The Doctrine DBAL GUID type uses a fixed field column size of `CHAR(36)`
    for non-PostgreSQL databases, which is compatible as long
    as valid UUID values have been persisted in the configured database
    table.

..  _UUID: https://en.wikipedia.org/wiki/Universally_unique_identifier

..  contents:: Table of contents:
    :local:
    :depth: 1

..  _columns-uuid-example:

Example
=======

An example configuration looks like the following:

..  literalinclude:: _Snippets/_basic.php

..  _columns-uuid-properties:

Properties of the TCA column type `uuid`
========================================

..  confval-menu::
    :name: uuid
    :display: table
    :type:
    :Scope:

    ..  include:: _Properties/_*.rst.txt
        :show-buttons:
