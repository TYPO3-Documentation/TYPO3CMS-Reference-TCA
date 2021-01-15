.. include:: /Includes.rst.txt
.. _columns-select-properties-filefolder:

==========
fileFolder
==========

.. confval:: fileFolder

   :type: string
   :Scope: Display  / Proc.
   :RenderType: all

   Specifying a folder from where files are added to the item array.

   Specify the folder relative to the :php:`\TYPO3\CMS\Core\Core\Environment::getPublicPath()`, possibly using the prefix "EXT:" to point to an extension folder.

   Files from the folder is selected recursively to the level specified by
   :ref:`fileFolder_recursions <columns-select-properties-filefolder-recursions>` and only files of the extension
   defined by :ref:`fileFolder_extList <columns-select-properties-filefolder-extlist>` is selected.

   Only the file reference relative to the "fileFolder" is stored.

   If the files are images (gif,png,jpg) they will be configured as icons (third parameter in items array).

   **Example:**

   .. code-block:: php

      'config' => [
         'type' => 'select',
         'items' => [
            ['', 0],
         ],
         'fileFolder' => 'EXT:cms/tslib/media/flags/',
         'fileFolder_extList' => 'png,jpg,jpeg,gif',
         'fileFolder_recursions' => 0,
         'size' => 1,
         'minitems' => 0,
         'maxitems' => 1,
      ],
