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

..  contents::

..  note::

    It is possible to configure a category tree with `type=select`
    and `renderType=selectTree` when you want to override specific fields,
    but in most cases the simplified :php:`category` TCA type is sufficient.

..  _columns-category-tsconfig:

Influencing category trees with page TSconfig
=============================================

The following options can be overridden via :ref:`page TSconfig, TCEform
<t3tsref:pageTsConfigTceFormConfig>`:

*   `size`
*   `maxitems`
*   `minitems`
*   `readOnly`
*   `treeConfig`

..  _columns-category-record-objects:

Category properties in record objects
=====================================

..  versionadded:: 13.3

If option `relationship <https://docs.typo3.org/permalink/t3tca:confval-category-relationship>`_
is set to `manyToMany` (default) the `record object <https://docs.typo3.org/permalink/t3coreapi:record-objects>`_
provides a collection (:php-short:`\TYPO3\CMS\Core\Collection\LazyRecordCollection`)
of :php-short:`\TYPO3\CMS\Core\Domain\Record` objects, where each represents a
category record.

The categories can then be displayed like this in Fluid:

..  code-block:: html
    :caption: Displaying a `manyToMany` relationship to categories in Fluid

    <ul>
        <f:for each="{myRecord.categories}" as="category">
            <li>{category.title}</li>
        </f:for>
    </ul>


..  _columns-category-record-objects-one:

Records that allow a single category (one to one or one to many)
----------------------------------------------------------------

If option `relationship <https://docs.typo3.org/permalink/t3tca:confval-category-relationship>`_
is set `oneToMany` or `oneToOne`, the property represents a
:php-short:`\TYPO3\CMS\Core\Domain\Record` object directly, so it can be output
like

..  code-block:: html
    :caption: Displaying a `oneToMany` relationship to categories in Fluid

    My category: {myRecord.category.title}

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

..  toctree::
    :titlesonly:
    :hidden:

    Examples
