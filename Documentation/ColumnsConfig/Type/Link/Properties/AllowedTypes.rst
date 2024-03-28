..  include:: /Includes.rst.txt
..  _columns-link-properties-allowedTypes:

============
allowedTypes
============

..  versionadded:: 12.0
    Instead of the former exclude list :php:`blindLinkOptions` of :php:`linkPopup.options`,
    the type :php:`link` uses now include lists. Those lists are furthermore no
    longer comma separated, but PHP arrays, with each option as a separate value.

    The replacement for the previously used :php:`blindLinkOptions` option is the
    :php:`allowedTypes` configuration. The :php:`allowedTypes` configuration is
    also evaluated in the :php:`DataHandler`, preventing the user from adding
    links of non-allowed types.

    To allow all link types, skip the :php:`allowedTypes` configuration or set
    it to :php:`['*']`. It's not possible to deny all types.


..  confval:: allowedTypes
    :name: link-allowedTypes
    :Path: $GLOBALS['TCA'][$table]['columns'][$field]['config']
    :type: array of keywords
    :Scope: Display  / Proc.

    page
        Links to internal pages

    url
        Links to external pages

    file
        Links to a file

    folder
        Links to a folder

    email
        Creates an email link

    telephone
        Creates a phone link

    record
        Enables any record link handler that is defined in the :ref:`LinkHandler API <t3coreapi:linkhandler>`.
        To enable only a specific custom LinkHandler, add the defined identifier instead.

        ..  code-block:: php

            // 'record' will match any custom link handler
            'allowedTypes' => ['page', 'url', 'record']

        ..  code-block:: php

            // 'tx_news' and 'custom_identifier' are both custom link handlers
            'allowedTypes' => ['page', 'url', 'tx_news', 'custom_identifier']

        ..  code-block:: php

            // Allow all types (or skip this option).
            'allowedTypes' => ['*']
