.. include:: /Includes.rst.txt
.. _columns-group-properties-elementBrowserEntryPoints:

==========================
elementBrowserEntryPoints
==========================

.. confval:: elementBrowserEntryPoints

   :type: array
   :Scope: Display

   By default, the last selected page / folder is used when opening
   the element browser. Setting this configuration value changes this
   behaviour.

   This configuration value is a PHP :php:`array`, containing `table => id`
   pairs. When opening the element browser for a specific table (buttons below
   the group field), the defined page or folder is then always selected by
   default. There is also the special `_default` key, used for the
   general element browser button (on the right side of the group field),
   which is not dedicated to a specific table.

   This configuration value also supports the known
   markers `###SITEROOT###`, `###CURRENT_PID###` and `###PAGE_TSCONFIG_<key>###`.

   Each `table => id` pair can also be overridden via page TSconfig.

Examples
========

Open the element browser on page 123 for tt_content elements
-------------------------------------------------------------

.. code-block:: php

    'simple_group' => [
        'label' => 'Simple group field',
        'config' => [
            'type' => 'group',
            'allowed' => 'tt_content',
            'elementBrowserEntryPoints' => [
                'tt_content' => 123,
            ]
        ]
    ],

This could then be overridden via page TSconfig:

.. code-block:: typoscript

    TCEFORM.my_table.simple_group.config.elementBrowserEntryPoints.tt_content = 321

Since only one table is allowed, the defined entry point is also automatically
used for the general element browser button.

Open the element browser on different pages for tt_content and news records
----------------------------------------------------------------------------
In case the group field allows
more than one table or is of `interna_type=folder`, the `_default` key has
to be set:

.. code-block:: php

    'extended_group' => [
        'label' => 'Extended group field',
        'config' => [
            'type' => 'group',
            'allowed' => 'tt_content,tx_news_domain_model_news',
            'elementBrowserEntryPoints' => [
                '_default' => '###CURRENT_PID###' // E.g. use a special marker
                'tt_content' => 123,
                'tx_news_domain_model_news' => 124,
            ]
        ]
    ],

Of course, the `_default` key can also be overridden via page TSconfig:

.. code-block:: typoscript

    TCEFORM.my_table.extended_group.config.elementBrowserEntryPoints._default = 122

Open the element type on a specific folder
-------------------------------------------


For `internal_type=folder` one can also define a entry point with the `_default` key:

.. code-block:: php

    'folder_group' => [
        'label' => 'Folder group field',
        'config' => [
            'type' => 'group',
            'internal_type' => 'folder',
            'elementBrowserEntryPoints' => [
                '_default' => '1:/styleguide/'
            ]
        ]
    ],

It's also possible to use a special TSconfig key:

.. code-block:: php

    'folder_group' => [
        'label' => 'Folder group field',
        'config' => [
            'type' => 'group',
            'internal_type' => 'folder',
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
