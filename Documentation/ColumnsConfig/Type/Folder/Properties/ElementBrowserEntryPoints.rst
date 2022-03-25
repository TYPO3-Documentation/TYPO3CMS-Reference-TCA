.. include:: /Includes.rst.txt
.. _columns-folder-properties-elementBrowserEntryPoints:

==========================
elementBrowserEntryPoints
==========================

.. confval:: elementBrowserEntryPoints

   :Path: $GLOBALS['TCA'][$table]['columns'][$field]['config']
   :type: array
   :Scope: Display

   By default, the last folder is used when opening
   the element browser. Setting this configuration value changes this
   behaviour.

   This configuration value contains an array. For the column type
   :ref:`folder <columns-folder>` only the value with the key `_default` is used.

   When opening the element browser the folder with the `_default` key is
   preselected.

Examples
========

Open the element type on a specific folder
-------------------------------------------

You can also define an entry point with the `_default` key:

.. code-block:: php

    'folder_group' => [
        'label' => 'Folder field',
        'config' => [
            'type' => 'folder',
            'elementBrowserEntryPoints' => [
                '_default' => '1:/styleguide/'
            ]
        ]
    ],

It is also possible to use a special TSconfig key:

.. code-block:: php

    'folder_group' => [
        'label' => 'Folder field',
        'config' => [
            'type' => 'folder',
            'elementBrowserEntryPoints' => [
                '_default' => '###PAGE_TSCONFIG_ID###'
            ]
        ]
    ],

This key has then to be defined on field level:

.. code-block:: typoscript

    TCEFORM.my_table.folder_group.PAGE_TSCONFIG_ID = 1:/styleguide/subfolder

In case an allowed table has no entry point defined, the `_default` is used.
In case `_default` is also not set or `elementBrowserEntryPoints` is not
used at all, the previous behaviour applies.
