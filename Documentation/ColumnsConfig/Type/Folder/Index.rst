..  include:: /Includes.rst.txt
..  _columns-folder:

======
Folder
======

..  versionadded:: 12.0
    A new TCA type :php:`folder` has been introduced, which replaces the old
    combination of :php:`'type' => 'group'` and :php:`'internal_type' => 'folder'`.

The TCA type :php:`folder` creates a field where folders can be attached to
the record. The values are stored as a combined identifier in a
:ref:`comma-separated list (csv) <columns-group-data-commalist>`.

The :ref:`according database field <t3coreapi:auto-generated-db-structure>`
is generated automatically.

..  contents:: Table of contents:
    :local:
    :depth: 1


..  _columns-folder-examples:
..  _tca_example_group_folder_1:

Example
=======

..  include:: /Images/Rst/GroupFolder1.rst.txt

..  code-block:: php

    'columns' => [
        'aColumn' => [
            'config' => [
                'type' => 'folder',
            ],
        ],
    ],

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
