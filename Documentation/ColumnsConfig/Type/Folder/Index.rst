.. include:: /Includes.rst.txt
.. _columns-folder:

======
Folder
======

.. versionadded:: 12.0
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

.. _columns-folder-examples:
.. _tca_example_group_folder_1:

Examples
========

.. include:: /Images/Rst/GroupFolder1.rst.txt

.. code-block:: php

    'columns' => [
        'aColumn' => [
            'config' => [
                'type' => 'folder',
            ],
        ],
    ],


.. toctree::
   :titlesonly:

   Properties/Index

