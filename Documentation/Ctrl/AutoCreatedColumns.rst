..  include:: /Includes.rst.txt
..  _ctrl-auto-created-columns:

================================
Auto-created columns from 'ctrl'
================================

..  versionadded:: 13.3
    Default definitions of :ref:`columns` required by :ref:`ctrl` settings are
    now automatically added to :php:`TCA` if not manually
    configured. Extension developers can now remove and avoid a significant amount
    of boilerplate field definitions in :ref:`columns` and rely on TYPO3 core to create
    them automatically when dropping TYPO3 v12.4 support.

Certain :php:`ctrl` settings, such as the :confval:`ctrl-enablecolumns` and
:confval:`ctrl-languagefield` settings require TCA :php:`columns` definitions.

..  warning::
    Columns created automatically by being defined in the ctrl section of the TCA
    still need to be added manually to the palettes and types definition.

    Due to the :ref:`TCA loading order <ctrl-auto-created-columns-loading-order>`
    these columns are only created if the according ctrl property was added in
    the original definition in :file:`Configuration/TCA/<tablename>.php`, not
    if they were defined in the overrides like :file:`Configuration/TCA/Overrides/something.php`.

.. _ctrl-auto-created-columns-loading-order:

Load order when building TCA
----------------------------

To understand if and when TCA column auto-creation from :php:`ctrl` definitions
kicks in, it is important to have an overview of the order of the single loading
steps:

#.  Load single files from extension :file:`Configuration/TCA` files
#.  NEW - Enrich :php:`columns` from :php:`ctrl` settings
#.  Load single files from extension :file:`Configuration/TCA/Overrides` files
#.  Apply TCA migrations
#.  Apply TCA preparations

As a result of this strategy, :php:`columns` fields are *not* auto-created, when
a :php:`ctrl` capability is added in a :file:`Configuration/TCA/Overrides`
file, and *not* in a :file:`Configuration/TCA` "base" file. In general, such
capabilities should be set in base files only: Adding them at a later point - for
example in a different extension - is brittle and there is a risk the main
extension can not deal with such an added capability properly.

..  _ctrl-auto-created-columns-override:

Overriding definitions from auto-created TCA columns
----------------------------------------------------

In most cases, developers do not need to change definitions of :php:`columns`
auto-created by the Core. In general, it is advisable to not actively do this.
Developers who still want to change detail properties of such columns should
generally stick to "display" related details only.

There are two options to have own definitions: When a column is already defined
in a "base" TCA file (:file:`Configuration/TCA`), the Core will not override it.
Alternatively, a developer can decide to let the Core auto-create a column, to
then override single properties in :file:`Configuration/TCA/Overrides` files.

As example, "base" :php:`pages` file defines this (step 1 above):

..  literalinclude:: _AutoCreatedColumns/_pages.php
    :caption: EXT:core/Configuration/TCA/pages.php (Excerpt)

The Core thus creates this :php:`columns` definition (step 2 above):

..  literalinclude:: _AutoCreatedColumns/_autoCreatePages.php
    :caption: Column entries created by the Core

When an editor creates a new page, it should be "disabled" by default to
avoid having a new page online in the website before it is set up completely.
A :file:`Configuration/TCA/Overrides/pages.php` file does this:

..  literalinclude:: _AutoCreatedColumns/_OverrideHiddenDefault.php
    :caption: EXT:my_extension/Configuration/TCA/Overrides/pages.php
