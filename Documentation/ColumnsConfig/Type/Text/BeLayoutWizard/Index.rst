..  include:: /Includes.rst.txt

..  _columns-text-rendertype-belayoutwizard:

==============
belayoutwizard
==============

This page describes the :ref:`text <columns-text>` type with
`renderType='belayoutwizard'`.

The :ref:`according database field <t3coreapi:auto-generated-db-structure>`
is generated automatically.

The `renderType = 'belayoutwizard'` is a special renderType to
display the backend layout wizard when editing records of table
`backend_layout` in the backend. It is stored a custom
syntax representing the page layout in the database.

..  contents:: Table of contents:
    :local:
    :depth: 1

..  _tca-example-backend-layout:
..  _tca-example-text-20:

Example: Backend layout editor
==============================

..  figure:: /Images/Conference/TextBackendLayoutWizard.png
    :alt: The backend layout wizard
    :class: with-shadow

    The backend layout wizard

..  literalinclude:: /ColumnsConfig/Type/Text/_Snippets/_backend_layout.php
    :caption: EXT:frontend/Configuration/TCA/backend_layout.php
    :visible-lines: 35-41
    :emphasize-lines: 39

..  _columns-text-rendertype-belayoutwizard-properties:

Properties of the TCA column type `text`, render type `belayoutwizard`
======================================================================

..  confval-menu::
    :name: belayoutwizard
    :display: table
    :type:
    :Scope:

    ..  include:: _Properties/_*.rst.txt
        :show-buttons:
