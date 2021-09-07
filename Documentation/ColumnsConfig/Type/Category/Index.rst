.. include:: /Includes.rst.txt

.. _columns-category:

========
Category
========

.. versionadded:: 11.4
   The TCA field type called `category` has been added to TYPO3 Core. Its main
   purpose is to simplify the TCA configuration when adding a category
   tree to a record. It therefore supersedes the :php:`CategoryRegistry` as well
   as the :php:`ExtensionManagementUtility->makeCategorizable()`, which required
   creating a "TCA overrides" file.

While using the type :php:`category`, TYPO3 takes care of generating the
necessary TCA configuration and also adds the database column automatically.
Developers only have to configure the TCA column and add it to the
desired record types.

.. include:: /CodeSnippets/Manual/CategorySimple.rst.txt

The following options can be overridden via :ref:`page TSconfig, TCE form
<t3tsconfig:pageTsConfigTceFormConfig>`:

*  `size`
*  `maxitems`
*  `minitems`
*  `readOnly`
*  `treeConfig`


.. note::

   It is still possible to configure a category tree with `type=select`
   and `renderType=selectTree`. This configuration will still work, but
   could in most cases be simplified, using the new :php:`category` TCA type.


.. toctree::
   :titlesonly:

   Examples
   Properties/Index
