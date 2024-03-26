..  include:: /Includes.rst.txt

..  _columns-category:

========
Category
========

..  versionadded:: 11.4
    The TCA field type called `category` has been added to TYPO3 Core. Its main
    purpose is to simplify the TCA configuration when adding a category
    tree to a record. It therefore supersedes the :php:`CategoryRegistry` as well
    as the :php:`ExtensionManagementUtility->makeCategorizable()`, which has required
    creating a "TCA overrides" file.

While using the type :php:`category`, TYPO3 takes care of generating the
necessary TCA configuration.
Developers only have to define the TCA column and add :php:`category` as the
desired TCA type in the tables's TCA file (inside or outside of the Overrides folder).

..  include:: /CodeSnippets/Manual/CategorySimple.rst.txt

The following options can be overridden via :ref:`page TSconfig, TCE form
<t3tsconfig:pageTsConfigTceFormConfig>`:

*   `size`
*   `maxitems`
*   `minitems`
*   `readOnly`
*   `treeConfig`

..  note::

    It is still possible to configure a category tree with `type=select`
    and `renderType=selectTree` when you want to override specific fields,
    but in most cases the simplified :php:`category` TCA type is sufficient.


..  toctree::
    :titlesonly:

    Examples
    Properties/Index
