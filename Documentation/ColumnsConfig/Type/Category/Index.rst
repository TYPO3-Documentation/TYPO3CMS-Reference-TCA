:navigation-title: Category
..  include:: /Includes.rst.txt
..  _columns-category:

==========================
TCA column type `category`
==========================

While using the type :php:`category`, TYPO3 takes care of generating the
necessary TCA configuration.
Developers only have to define the TCA column and add :php:`category` as the
desired TCA type in the tables's TCA file (inside or outside of the Overrides folder).

 The :ref:`according database field <t3coreapi:auto-generated-db-structure>`
is generated automatically.

..  literalinclude:: _Snippets/_CategorySimple.php
    :caption: EXT:my_extension/Configuration/TCA/Overrides/someTable.php

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

..  _columns-category-properties:

Properties of the TCA column type `category`
============================================

..  confval-menu::
    :display: table
    :type:
    :Scope:

    ..  include:: _Properties/_Default.rst.txt
        :show-buttons:

    ..  include:: _Properties/_ExclusiveKeys.rst.txt
        :show-buttons:

    ..  include:: _Properties/_ForeignTable.rst.txt
        :show-buttons:

    ..  include:: _Properties/_ForeignTableItemGroup.rst.txt
        :show-buttons:

    ..  include:: _Properties/_ForeignTablePrefix.rst.txt
        :show-buttons:

    ..  include:: _Properties/_ForeignTableWhere.rst.txt
        :show-buttons:

    ..  include:: _Properties/_ItemGroups.rst.txt
        :show-buttons:

    ..  include:: _Properties/_Maxitems.rst.txt
        :show-buttons:

    ..  include:: _Properties/_Minitems.rst.txt
        :show-buttons:

    ..  include:: _Properties/_Mm.rst.txt
        :show-buttons:

    ..  include:: _Properties/_Relationship.rst.txt
        :show-buttons:

    ..  include:: _Properties/_ReadOnly.rst.txt
        :show-buttons:

    ..  include:: _Properties/_Size.rst.txt
        :show-buttons:

    ..  include:: _Properties/_TreeConfig.rst.txt
        :show-buttons:

..  toctree::
    :titlesonly:
    :hidden:

    Examples
