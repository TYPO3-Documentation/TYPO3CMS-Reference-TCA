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

..  include:: /Images/Rst/GroupFolder1.rst.txt

..  literalinclude:: /ColumnsConfig/Type/Folder/_Snippets/_Folder.php
    :caption: EXT:my_extension/Configuration/TCA/tx_myextension_domain_model_something.php
    :visible-lines: 16-21
    :emphasize-lines: 19

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
