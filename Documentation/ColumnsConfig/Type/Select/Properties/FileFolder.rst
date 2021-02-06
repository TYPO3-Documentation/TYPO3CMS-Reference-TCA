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

   Specify the folder relative to the
   :php:`\TYPO3\CMS\Core\Core\Environment::getPublicPath()`, possibly using the
   prefix "EXT:" to point to an extension folder.

   Files from the folder is selected recursively to the level specified by
   :ref:`fileFolder_recursions <columns-select-properties-filefolder-recursions>`
   and only files of the extension defined by
   :ref:`fileFolder_extList <columns-select-properties-filefolder-extlist>`
   are selected.

   Only the file reference relative to the "fileFolder" is stored.

   If the files are images (gif,png,jpg) they will be configured as icons
   (third parameter in items array).


.. _columns-select-properties-filefolder-extlist:

.. confval:: fileFolder_extList

   :type: string
   :Scope: Display  / Proc.
   :RenderType: all

   List of extensions to select. If blank, all files are selected.
   Specify list in lowercase.

.. _columns-select-properties-filefolder-recursions:

.. confval:: fileFolder_recursions

   :type: integer
   :Scope: Display  / Proc.
   :RenderType: all

   Depth of directory recursions. Default is 99. Specify in range from 0-99. 0 (zero) means no recursion
   into subdirectories. Only useful in combination with property
   :ref:`fileFolder <columns-select-properties-filefolder>`.


Examples
========

.. _tca_example_select_single_7:

Select SVGs recursively from a folder
=====================================

.. include:: /Includes/Images/Styleguide/RstIncludes/SelectSingle7.rst.txt

.. include:: /Includes/Snippets/Styleguide/RstIncludes/SelectSingle7.rst.txt
