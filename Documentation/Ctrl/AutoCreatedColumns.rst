:navigation-title: Auto-created columns

..  include:: /Includes.rst.txt
..  _ctrl-auto-created-columns:

================================
Auto-created columns from 'ctrl'
================================

..  versionadded:: 13.3
    :ref:`columns <columns>` are now added to the `TCA` by default if they are not
    explicitly set in :ref:`ctrl <ctrl>` sections in the base TCA php files. TYPO3 creates
    them automatically, meaning developers no longer have to create lots of
    boilerplate fields definitions.

`ctrl` settings such as the :confval:`ctrl-enablecolumns` and
:confval:`ctrl-languagefield` settings require explicit TCA `columns` definitions.

..  warning::
    Columns in the ctrl section of the TCA that have been auto-created
    still need to be added manually to palettes and types definitions.

    Due to the :ref:`TCA loading order <ctrl-auto-created-columns-loading-order>`
    these columns are only created if the ctrl property has been
    added to the original definition in the base :file:`Configuration/TCA/<tablename>.php` file.
    Setting them in the overrides like :file:`Configuration/TCA/Overrides/something.php`
    has no effect.

..  _ctrl-auto-created-columns-loading-order:

Load order when building TCA
----------------------------

The TCA is loaded in the following steps:

#.  Load php files from extension :file:`Configuration/TCA` files
#.  NEW - Enrich `columns` from `ctrl` settings
#.  Load php files from extension :file:`Configuration/TCA/Overrides` files
#.  Apply TCA migrations
#.  Apply TCA preparations

The loading sequence means that only `columns` fields in the `ctrl`  section of
:file:`Configuration/TCA` files are auto-created, not in :file:`Configuration/TCA/Overrides`.
These fields should be set in the "base" php files only:
adding them at a later point - for example in another extension - is brittle
and there is a risk the main extension can not handle auto-creation properly.

..  _ctrl-auto-created-columns-override:

Overriding definitions from auto-created TCA columns
----------------------------------------------------

In most cases, developers should not need to change `columns` definitions
auto-created by the Core and it isn't recommended. If you do want to change
them, stick to "display" related details only.

There are two options for adding your own definitions. Either by defining
a column in a "base" TCA file (:file:`Configuration/TCA`) - the Core will not override it.
Or, a developer can decide to let the Core auto-create a column, but
then override single properties in :file:`Configuration/TCA/Overrides` files.

For example, the "base" file of the conference table names the field `hidden`
in `enablecolumns` (loading step 1):

..  literalinclude:: /CodeSnippets/my_extension/Configuration/TCA/tx_myextension_conference.php
    :caption: EXT:my_extension/Configuration/TCA/tx_myextension_conference.php
    :visible-lines: 4-29
    :emphasize-lines: 14

The Core creates this `columns` definition (loading step 2):

..  literalinclude:: _CodeSnippets/_AutoCreatedColumns/_autoCreateConference.php
    :caption: Column entry created by the Core

A new conference should stay hidden until its program is complete. An
override file changes the default value of the auto-created column:

..  literalinclude:: /CodeSnippets/my_extension/Configuration/TCA/Overrides/102-tx_myextension_conference-hidden.php
    :caption: EXT:my_extension/Configuration/TCA/Overrides/102-tx_myextension_conference-hidden.php
    :emphasize-lines: 7
