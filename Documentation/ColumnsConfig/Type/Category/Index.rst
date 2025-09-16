:navigation-title: Category
..  include:: /Includes.rst.txt
..  _columns-category:

==========================
TCA column type `category`
==========================

The TCA type :php:`category` can be used to render a category tree.

While using the type :php:`category`, TYPO3 takes care of generating the
necessary TCA configuration.
Developers only have to define the TCA column and add :php:`category` as the
desired TCA type in the tables's TCA file (inside or outside of the Overrides folder).

The :ref:`according database field <t3coreapi:auto-generated-db-structure>`
is generated automatically.

..  contents:: Table of contents:
    :local:
    :depth: 1

..  toctree::
    :titlesonly:

    Examples

Example: Simple category field
==============================

..  literalinclude:: _Snippets/_CategorySimple.php
    :caption: EXT:my_extension/Configuration/TCA/Overrides/someTable.php

The following options can be overridden via :ref:`page TSconfig, TCE form
<t3tsref:pageTsConfigTceFormConfig>`:

*   `size`
*   `maxitems`
*   `minitems`
*   `readOnly`
*   `treeConfig`

..  note::

    It is still possible to configure a category tree with `type=select`
    and `renderType=selectTree` when you want to override specific fields,
    but in most cases the simplified :php:`category` TCA type is sufficient.

..  _columns-category-properties:

Properties of the TCA column type `category`
============================================

..  confval-menu::
    :name: category
    :display: table
    :type:
    :Scope:

    ..  include:: _Properties/_*.rst.txt
        :show-buttons:
