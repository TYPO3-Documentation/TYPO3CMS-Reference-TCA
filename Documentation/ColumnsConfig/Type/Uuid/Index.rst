..  include:: /Includes.rst.txt

..  _columns-uuid:

====
Uuid
====

The main purpose of the TCA type :php:`uuid` is to simplify the TCA
configuration when working with fields containing a `UUID`_.

The :ref:`according database field <t3coreapi:auto-generated-db-structure>`
is generated automatically.

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
