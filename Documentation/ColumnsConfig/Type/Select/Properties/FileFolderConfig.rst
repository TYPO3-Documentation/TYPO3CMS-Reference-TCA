.. include:: /Includes.rst.txt
.. _columns-select-properties-filefolder:
.. _columns-select-properties-fileFolderConfig:

================
fileFolderConfig
================


.. _columns-select-properties-fileFolderConfig.folder:

.. confval:: fileFolderConfig.folder

   :type: string
   :Scope: Display  / Proc.
   :RenderType: all

   Specifying a folder from where files are added to the item array.

   Specify the folder relative to the
   :php:`\TYPO3\CMS\Core\Core\Environment::getPublicPath()`, possibly using the
   prefix "EXT:" to point to an extension folder.

   Files from the folder is selected recursively to the level specified by
   :ref:`fileFolder_recursions <columns-select-properties-filefolder-recursions>`
   and only files of the extension defined by
   :ref:`fileFolder_extList <columns-select-properties-filefolder-extlist>`
   are selected.

   Only the file reference relative to the "fileFolderConfig.folder" is stored.

   If the files are images (gif,png,jpg) they will be configured as icons
   (third parameter in items array).

   This configuration can be overridden by :ref:`Page
   TSconfig<t3tsconfig:fileFolderConfig>`.


.. _columns-select-properties-filefolder-extlist:
.. _columns-select-properties-fileFolderConfig-allowedExtensions:

.. confval:: fileFolderConfig.allowedExtensions

   :type: string
   :Scope: Display  / Proc.
   :RenderType: all

   List of file extensions to select. If blank, all files are selected.
   Specify list in lowercase.

   This configuration can be overridden by :ref:`Page
   TSconfig<t3tsconfig:fileFolderConfig>`.

.. _columns-select-properties-filefolder-recursions:
.. _columns-select-properties-fileFolderConfig-depth:

.. confval:: fileFolderConfig.depth

   :type: integer
   :Scope: Display  / Proc.
   :RenderType: all

   Depth of directory recursions. Default is 99. Specify in range from 0-99. 0
   (zero) means no recursion into subdirectories. Only useful in combination
   with property
   :ref:`fileFolderConfig.folder <columns-select-properties-fileFolderConfig.folder>`.

   This configuration can be overridden by :ref:`Page
   TSconfig<t3tsconfig:fileFolderConfig>`.


Examples
========

.. _tca_example_select_single_7:

Select SVGs recursively from a folder
-------------------------------------

.. include:: /Images/Rst/SelectSingle7.rst.txt

.. include:: /CodeSnippets/SelectSingle7.rst.txt
