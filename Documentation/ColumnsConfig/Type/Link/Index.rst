..  include:: /Includes.rst.txt

..  _columns-input-rendertype-inputlink:
..  _columns-link:

====
Link
====

..  versionadded:: 13.0
    When using the `link` type, TYPO3 takes care of
    :ref:`generating the according database field <t3coreapi:auto-generated-db-structure>`.
    A developer does not need to define this field in an extension's
    :file:`ext_tables.sql` file.

The TCA type `link` should be used to input values representing typolinks.

The :ref:`according database field <t3coreapi:auto-generated-db-structure>`
is generated automatically.

..  contents:: Table of contents:
    :local:
    :depth: 1

..  _columns-link-example:

Example: A basic link field
===========================

..  figure:: /Images/Conference/LinkTickets.png
    :alt: The link to the tickets of a conference
    :class: with-shadow

    The link to the tickets of a conference

..  literalinclude:: /CodeSnippets/my_extension/Configuration/TCA/Overrides/118-tx_myextension_conference-ticket_link.php
    :caption: EXT:my_extension/Configuration/TCA/Overrides/118-tx_myextension_conference-ticket_link.php
    :emphasize-lines: 18

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
    to all TCA type `link` columns.

..  _columns-link-create-url:

Create an URL
=============

To create a URL from such a link field in a Fluid template, use the
:html:`<f:link.typolink>` or :html:`<f:uri.typolink>` view helper.

In PHP code, inject :php-short:`\TYPO3\CMS\Frontend\Typolink\LinkFactory`
and call :php:`create()` or :php:`createUri()` on it:

..  literalinclude:: _Snippets/_SomeService.php
    :caption: EXT:my_extension/Classes/Service/MyService.php
