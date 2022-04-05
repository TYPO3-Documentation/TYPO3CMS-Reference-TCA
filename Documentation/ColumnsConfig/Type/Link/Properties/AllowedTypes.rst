.. include:: /Includes.rst.txt
.. _columns-link-properties-allowedTypes:

============
allowedTypes
============

.. versionadded:: 12.0
   Instead of exclude lists (:php:`blindLink[Fields|Options]`), the type
   :php:`link` uses include lists.
   Those lists are furthermore no longer comma separated, but PHP arrays,
   with each option as a separate value.

   The replacement for the previously used :php:`blindLinkOptions` option is the
   :php:`allowedTypes` configuration. The :php:`blindLinkFields` option is
   now configured via :php:`appearance[allowedOptions]`. While latter only
   affects the display in the Link Browser, the :php:`allowedTypes` configuration
   is also evaluated in the :php:`Datahandler`, preventing the user from adding
   links of non allowed types.


.. confval:: allowedTypes ('type' => 'link')

   :Path: $GLOBALS['TCA'][$table]['columns'][$field]['config']
   :type: array of keywords
   :Scope: Display  / Proc.

   page
      Links to internal pages

   url
      Links to external pages

   record
      Links to any record that is defined in the LinkHandler API

      .. code-block:: php

         'allowedTypes' => ['page', 'url', 'record']

   <table_name>
      If `record` is not allowed you can define table names to be allowed.

      .. code-block:: php

         'allowedTypes' => ['page', 'url', 'tx_news', 'tt_address']
