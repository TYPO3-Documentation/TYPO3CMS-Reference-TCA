..  include:: /Includes.rst.txt

..  _columns-json:

====
Json
====

Renders a text area to enter json data.

The :ref:`according database field <t3coreapi:auto-generated-db-structure>`
is generated automatically.

..  contents:: Table of contents:
    :local:
    :depth: 1

..  _columns-json-examples-simple:

Example: Simple JSON field
==========================

The social links of a speaker are stored as JSON:

..  figure:: /Images/Conference/JsonSocialLinks.png
    :alt: The social links of a speaker
    :class: with-shadow

    The social links of a speaker

..  literalinclude:: /CodeSnippets/my_extension/Configuration/TCA/Overrides/340-tx_myextension_speaker-social_links.php
    :caption: EXT:my_extension/Configuration/TCA/Overrides/340-tx_myextension_speaker-social_links.php
    :emphasize-lines: 11

..  _columns-json-properties:

Properties of the TCA column type `json`
========================================

..  confval-menu::
    :name: json
    :display: table
    :type:
    :Scope:

    ..  include:: _Properties/_*.rst.txt
        :show-buttons:
