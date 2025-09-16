..  include:: /Includes.rst.txt

..  _columns-input-renderType-inputLink:
..  _columns-link:

====
Link
====

..  versionadded:: 12.0
    The TCA type :php:`link` has been introduced. It replaces the
    :php:`renderType=inputLink` option of TCA type :php:`input`. See also
    :ref:`columns-link-migration`

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


..  _columns-link-migration:

Migration
=========

The previously configured :php:`linkPopup` field control is now integrated
into the new TCA type directly. Additionally, instead of exclude lists
(:php:`blindLink[Fields|Options]`), does the new type now use include lists.
Those lists are furthermore no longer comma separated, but PHP :php:`array`'s,
with each option as a separate value.

The migration from :php:`renderType=inputLink` to :php:`type=link` is done like following:

..  literalinclude:: _Snippets/_migration.diff

An automatic TCA migration is performed on the fly, migrating all occurrences
to the new TCA type and triggering a PHP :php:`E_USER_DEPRECATED` error
where code adoption has to take place.

..  note::

    The value of TCA type :php:`link` columns is automatically trimmed before
    being stored in the database. Therefore, the :php:`eval=trim` option is no
    longer needed and should be removed from the TCA configuration.

.. note::

    The prior softref definition :php:`softref=>typolink` is now automatically applied
    to all :php:`link` fields.


..  _columns-link-create-url:

Create an URL
=============

To create a URL from such a link field in a Fluid template, use the
:html:`<f:link.typolink>` or :html:`<f:uri.typolink>` view helper.

In PHP code, use :php:`LinkFactory::create()` or :php:`LinkFactory::createUri()`:

..  literalinclude:: _Snippets/_SomeService.php
    :caption: EXT:my_extension/Classes/Service/MyService.php
