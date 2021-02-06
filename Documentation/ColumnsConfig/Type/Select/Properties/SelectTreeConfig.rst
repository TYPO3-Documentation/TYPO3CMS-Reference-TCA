.. include:: /Includes.rst.txt
.. _columns-select-properties-treeconfig:

==========
treeConfig
==========

.. confval:: treeConfig

   :type: array
   :Scope: Display
   :RenderType: :ref:`selectTree <columns-select-rendertype-selectTree>`

   Either `childrenField` or `parentField` has to be set - `childrenField` takes precedence. Keywords:

   dataProvider
      Allows to define a custom data provider class for usecases where special data preparation
      is necessary. By default ``\TYPO3\CMS\Core\Tree\TableConfiguration\DatabaseTreeDataProvider`` is used.

   childrenField (string)
      Field name of the foreign\_table that references the uid of the child records.

   parentField (string)
      Field name of the foreign\_table that references the uid of the parent record

   rootUid (integer, optional)
      uid of the record that shall be considered as the root node of the tree. In general this might be
      set by Page TSconfig, see :ref:`pagetsconfigtceformconfigtreeconfig`

   appearance (array, optional)
      showHeader (boolean)
         Whether to show the header of the tree that contains a field to filter the records and allows to expand or
         collapse all nodes

      expandAll (boolean)
         Whether to show the tree with all nodes expanded

      maxLevels (integer)
         The maximal amount of levels to be rendered (can be used to stop possible recursions)

      nonSelectableLevels (list, default "0")
         Comma-separated list of levels that will not be selectable, by default the root
         node (which is "0") cannot be selected

Examples
========

.. _tca_example_select_tree_2:

Tree with non selectable levels
===============================

.. include:: /Includes/Images/Styleguide/RstIncludes/SelectTree2.rst.txt

.. include:: /Includes/Snippets/Styleguide/RstIncludes/SelectTree2.rst.txt
