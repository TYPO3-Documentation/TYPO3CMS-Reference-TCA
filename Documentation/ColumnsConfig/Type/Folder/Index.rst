..  include:: /Includes.rst.txt
..  _columns-folder:

======
Folder
======

..  versionadded:: 13.0
    When using the `folder` type, TYPO3 takes care of
    :ref:`generating the according database field <t3coreapi:auto-generated-db-structure>`.
    A developer does not need to define this field in an extension's
    :file:`ext_tables.sql` file.

The TCA type `folder` creates a field where folders can be attached to
the record. The values are stored as a combined identifier in a
:ref:`comma-separated list (csv) <columns-group-data-commalist>`.

The :ref:`according database field <t3coreapi:auto-generated-db-structure>`
is generated automatically.

..  contents:: Table of contents:
    :local:
    :depth: 1

..  _columns-folder-examples:
..  _tca-example-group-folder-1:

Example
=======

A workshop refers to the folder with its materials:

..  figure:: /Images/Conference/FolderMaterials.png
    :alt: The folder with the materials of a workshop
    :class: with-shadow

    The folder with the materials of a workshop

..  literalinclude:: /CodeSnippets/my_extension/Configuration/TCA/Overrides/280-tx_myextension_talk-materials.php
    :caption: EXT:my_extension/Configuration/TCA/Overrides/280-tx_myextension_talk-materials.php
    :emphasize-lines: 11

..  _columns-folder-properties:

Properties of the TCA column type `folder`
==========================================

..  confval-menu::
    :name: folder
    :display: table
    :type:
    :Scope:

    ..  include:: _Properties/_*.rst.txt
        :show-buttons:
