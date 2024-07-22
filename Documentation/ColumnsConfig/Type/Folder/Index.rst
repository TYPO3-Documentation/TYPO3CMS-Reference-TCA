..  include:: /Includes.rst.txt
..  _columns-folder:

======
Folder
======

..  versionadded:: 12.0
    A new TCA type :php:`folder` has been introduced, which replaces the old
    combination of :php:`'type' => 'group'` and :php:`'internal_type' => 'folder'`.

..  versionadded:: 13.0
    When using the `folder` type, TYPO3 takes care of
    :ref:`generating the according database field <t3coreapi:auto-generated-db-structure>`.
    A developer does not need to define this field in an extension's
    :file:`ext_tables.sql` file.

The TCA type :php:`folder` creates a field where folders can be attached to
the record. The values are stored as a combined identifier in a
:ref:`comma-separated list (csv) <columns-group-data-commalist>`.


..  contents:: Table of contents


..  _columns-folder-examples:
..  _tca_example_group_folder_1:

Examples
========

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
    :display: table
    :type:
    :Scope:

    ..  include:: _Properties/_AllowLanguageSynchronization.rst.txt
        :show-buttons:

    ..  include:: _Properties/_AutoSizeMax.rst.txt
        :show-buttons:

    ..  include:: _Properties/_ElementBrowserEntryPoints.rst.txt
        :show-buttons:

    ..  include:: _Properties/_FieldControl.rst.txt
        :show-buttons:

    ..  include:: _Properties/_FieldInformation.rst.txt
        :show-buttons:

    ..  include:: _Properties/_FieldWizard.rst.txt
        :show-buttons:

    ..  include:: _Properties/_HideMoveIcons.rst.txt
        :show-buttons:

    ..  include:: _Properties/_Maxitems.rst.txt
        :show-buttons:

    ..  include:: _Properties/_Minitems.rst.txt
        :show-buttons:

    ..  include:: _Properties/_Multiple.rst.txt
        :show-buttons:

    ..  include:: _Properties/_ReadOnly.rst.txt
        :show-buttons:

    ..  include:: _Properties/_Size.rst.txt
        :show-buttons:


