:navigation-title: Auto-created columns

..  include:: /Includes.rst.txt
..  _ctrl-auto-created-columns:

================================
Auto-created columns from 'ctrl'
================================

..  versionadded:: 13.3
    :ref:`columns` are now added to the :php:`TCA` by default if they are not
    explicitly set in :ref:`ctrl` sections in the base TCA php files. TYPO3 creates
    them automatically, meaning developers no longer have to create lots of
    boilerplate fields definitions.

:php:`ctrl` settings such as the :confval:`ctrl-enablecolumns` and
:confval:`ctrl-languagefield` settings require explicit TCA :php:`columns` definitions.

..  warning::
    Columns in the ctrl section of the TCA that have been auto-created
    still need to be added manually to palettes and types definitions.

    Due to the :ref:`TCA loading order <ctrl-auto-created-columns-loading-order>`
    these columns are only created if the ctrl property has been
    added to the original definition in the base :file:`Configuration/TCA/<tablename>.php` file.
    Setting them in the overrides like :file:`Configuration/TCA/Overrides/something.php`
    has no effect.

.. _ctrl-auto-created-columns-loading-order:

Load order when building TCA
----------------------------

The TCA is loaded in the following steps:

#.  Load php files from extension :file:`Configuration/TCA` files
#.  NEW - Enrich :php:`columns` from :php:`ctrl` settings
#.  Load php files from extension :file:`Configuration/TCA/Overrides` files
#.  Apply TCA migrations
#.  Apply TCA preparations

The loading sequence means that only `columns` fields in the :php:`ctrl`  section of
:file:`Configuration/TCA` files are auto-created, not in :file:`Configuration/TCA/Overrides`.
These fields should be set in the "base" php files only:
adding them at a later point - for example in another extension - is brittle
and there is a risk the main extension can not handle auto-creation properly.

..  _ctrl-auto-created-columns-override:

Overriding definitions from auto-created TCA columns
----------------------------------------------------

In most cases, developers should not need to change :php:`columns` definitions
auto-created by the Core and it isn't recommended. If you do want to change
them, stick to "display" related details only.

There are two options for adding your own definitions. Either by defining
a column in a "base" TCA file (:file:`Configuration/TCA`) - the Core will not override it.
Or, a developer can decide to let the Core auto-create a column, but
then override single properties in :file:`Configuration/TCA/Overrides` files.

For example, if this is a :php:`pages` "base" file (loading step 1):

..  literalinclude:: _CodeSnippets/_AutoCreatedColumns/_pages.php
    :caption: EXT:core/Configuration/TCA/pages.php (Excerpt)

the Core creates this :php:`columns` definition (loading step 2):

..  literalinclude:: _CodeSnippets/_AutoCreatedColumns/_autoCreatePages.php
    :caption: Column entries created by the Core

When an editor creates a new page, it should be "disabled" by default
so that the new page does not go online before it is properly set up.
Add the following in the :file:`Configuration/TCA/Overrides/pages.php` file:

..  literalinclude:: _CodeSnippets/_AutoCreatedColumns/_OverrideHiddenDefault.php
    :caption: EXT:my_extension/Configuration/TCA/Overrides/pages.php
