.. include:: /Includes.rst.txt
.. _columns-select-properties-treeconfig:

==========
treeConfig
==========

.. confval:: treeConfig

   :Path: $GLOBALS['TCA'][$table]['columns'][$field]['config']
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
      Deprecated, use startingPoints (see below);
      uid of the record that shall be considered as the root node of the tree.

   startingPoints (string, comma separated values)
      allows to set multiple records as roots for tree records.

      The setting takes a CSV value, e.g. `2,3,4711`, which takes records of the pids
      `2`, `3` and `4711` into account and creates a tree of these records.

      Additionally, each value used in `startingPoints` may be fed from a site
      configuration by using the `###SITE:###` syntax.

      This property can also be set by page TSconfig, see
      :ref:`t3tsconfig:pagetsconfigtceformconfigtreeconfig`

      Example:

      .. code-block:: yaml

         # Site config
         base: /
         rootPageId: 1
         categories:
            root: 123


      .. code-block:: php

         // Example TCA config
         'config' => [
             'treeConfig' => [
                 'startingPoints' => '1,2,###SITE:categories.root###',
             ],
         ],

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

.. include:: /Images/Rst/SelectTree2.rst.txt

.. include:: /CodeSnippets/SelectTree2.rst.txt
