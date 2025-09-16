..  include:: /Includes.rst.txt

..  _columns-input-renderType-inputLink:
..  _columns-link:

====
Link
====

..  versionadded:: 13.0
    When using the :php:`link` type, TYPO3 takes care of
    :ref:`generating the according database field <t3coreapi:auto-generated-db-structure>`.
    A developer does not need to define this field in an extension's
    :file:`ext_tables.sql` file.

The TCA type :php:`link` should be used to input values representing typolinks.

The :ref:`according database field <t3coreapi:auto-generated-db-structure>`
is generated automatically.

..  contents:: Table of contents:
    :local:
    :depth: 1

..  _columns-link-example:

Example: A basic link field
===========================

..  literalinclude:: _Snippets/_basic.php

..  _columns-link-properties:

Properties of the TCA column type `link`
========================================

..  confval-menu::
    :name: link
    :display: table
    :type:
    :Scope:

    ..  include:: _Properties/_*.rst.txt
        :show-buttons:

..  note::

    The softref definition :php:`softref=typolink` is automatically applied
    to all TCA type :php:`link` columns.

..  _columns-link-create-url:

Create an URL
=============

To create a URL from such a link field in a Fluid template, use the
:html:`<f:link.typolink>` or :html:`<f:uri.typolink>` view helper.

In PHP code, use :php:`LinkFactory::create()` or :php:`LinkFactory::createUri()`:

..  literalinclude:: _Snippets/_SomeService.php
    :caption: EXT:my_extension/Classes/Service/MyService.php
