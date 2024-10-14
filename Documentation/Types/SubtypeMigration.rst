:navigation-title: Subtype migration

..  include:: /Includes.rst.txt

..  _types-example-subtypes:
..  _types-example-subtypes-remove:
..  _types-example-subtypes-remove-types:
..  _migration-subtype:

================================
Migration from subtypes to types
================================

..  contents:: Table of contents

..  _migration-subtype-flexform:

Migrate plugins with FlexForms added via `subtypes_addlist`
===========================================================

If you used plugins with the now deprecated subtypes, you probably used
:confval:`types-subtypes-addlist` to display a
:ref:`FlexForm <t3coreapi:flexforms>` for configuration purposes.

Migrate by adding the field :sql:`pi_flexform` with the utility method
:php-short:`\TYPO3\CMS\Core\Utility\ExtensionManagementUtility` method
`addToAllTCAtypes()` instead. You also have to change the parameters used for
method `addPiFlexFormValue()`:

..  literalinclude:: _CodeSnippets/_subtype_plugin_migration.diff
    :caption: EXT:my_extension/Configuration/Overrides/tt_content.php

The fields :sql:`pages` and :sql:`recursive` used to be added
automatically to plugins when using the now outdated subtype "list_type".
Therefore they have to be added manually when doing the migration.

..  _migration-subtype-subtypes-excludelist:

Migrate plugins with fields removed via `subtypes_excludelist`
==============================================================

Many extension author used the now deprecated option
:confval:`types-subtypes-excludelist` to hide these automatically added fields.

The same effect can now be used by simply not adding the fields in the first
place:

..  literalinclude:: _CodeSnippets/_subtype_plugin_exclude_migration.diff
    :caption: EXT:my_extension/Configuration/Overrides/tt_content.php

If any other fields have been removed with this method you can only remove
them by overriding
:confval:`$GLOBALS['TCA']['tt_content']['types'][$pluginSignature]['showitem'] <types-showitem>`
or via page TSconfig.

..  _migration-subtype-custom:

Migrate custom tables using subtypes
====================================

Replace any :confval:`types-subtype-value-field` configuration with dedicated record
types. Please also consider migrating corresponding :confval:`types-subtypes-addlist`
and :confval:`types-subtypes-excludelist` definitions accordingly.

..  literalinclude:: _CodeSnippets/_subtype_plugin_exclude_migration.diff
    :caption: EXT:my_extension/Configuration/TCA/tx_myextension_mytable.php

..  _types-example-previewRenderer-for-subtype:
..  _migration-subtype-previewrenderer:

Migration: PreviewRenderer for subtypes
=======================================

When migrating a plugin with a PreviewRenderer from `list_type` registration to
its own `CType` change the PreviewRenderer configuration to the record type as
well:

..  literalinclude:: _CodeSnippets/_subtype_migration_preview.diff
    :caption: EXT:my_extension/Configuration/Overrides/tt_content.php
