..  include:: /Includes.rst.txt

..  _columns-select-properties-item-groups:
..  _columns-select-properties-item-groups-api:

======================
Item group API methods
======================

..  _columns-select-properties-item-groups-api-custom:

Adding custom select item groups
================================

Registration of a select item group takes place in
:file:`Configuration/TCA/tx_myextension_mytable.php` for new TCA tables, and in
:file:`Configuration/TCA/Overrides/a_random_core_table.php`
for modifying an existing TCA definition.

For existing select fields additional item groups can be added via the
api method :php:`ExtensionManagementUtility::addTcaSelectItemGroup`.

..  literalinclude:: /ColumnsConfig/Type/Select/_Snippets/_ItemGroups.php
    :caption: EXT:my_extension/Configuration/TCA/Overrides/tt_content.php
    :visible-lines: 3, 7-13
    :emphasize-lines: 7

When adding a new select field, itemGroups should be added directly in the
original TCA definition without using the API method. Use the API within
:file:`TCA/Configuration/Overrides/` files to extend an existing TCA select
field with grouping.

..  _columns-select-properties-item-groups-api-attach:

Attaching select items to item groups
=====================================

Using the API method :php:`ExtensionManagementUtility::addTcaSelectItem`,
the `group` key of the item specifies the id of the item group.

..  literalinclude:: /ColumnsConfig/Type/Select/_Snippets/_ItemGroups.php
    :caption: EXT:my_extension/Configuration/TCA/Overrides/tt_content.php
    :visible-lines: 3, 15-24
    :emphasize-lines: 22


..  _columns-select-properties-item-groups-history:

History
=======

With the introduction of the `itemGroups` the TCA column type ``select`` has a
clean API to group items for dropdowns in FormEngine. This was previously
handled via placeholder ``--div--`` items,
which then rendered as :html:`<optgroup>` HTML elements in a dropdown.

In larger installations or TYPO3 instances with lots of extensions, Plugins
or Content Types (`tt_content.CType`), or custom
Page Types (`pages.doktype`) drop down lists could grow large and
adding item groups caused tedious work for developers or integrators.
Grouping can now be configured on a per-item
basis. Custom groups can be added via an API or when defining TCA for a new
table.
