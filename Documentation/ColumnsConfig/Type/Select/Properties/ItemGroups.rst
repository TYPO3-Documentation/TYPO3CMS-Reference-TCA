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
:file:`Configuration/TCA/tx_mytable.php` for new TCA tables, and in
:file:`Configuration/TCA/Overrides/a_random_core_table.php`
for modifying an existing TCA definition.

For existing select fields additional item groups can be added via the
api method :php:`ExtensionManagementUtility::addTcaSelectItemGroup`.

..  code-block:: php

    ExtensionManagementUtility::addTcaSelectItemGroup(
        'tt_content',
        'CType',
        'sliders',
        'LLL:EXT:my_slider_mixtape/Resources/Private/Language/locallang_tca.xlf:tt_content.group.sliders',
        'after:lists'
    );

When adding a new select field, itemGroups should be added directly in the
original TCA definition without using the API method. Use the API within
:file:`TCA/Configuration/Overrides/` files to extend an existing TCA select
field with grouping.

..  _columns-select-properties-item-groups-api-attach:

Attaching select items to item groups
=====================================

Using the API method :php:`ExtensionManagementUtility::addTcaSelectItem` a
a fourth parameter in the array can be used to specify the id of the item
group.

..  code-block:: php

    ExtensionManagementUtility::addTcaSelectItem(
        'tt_content',
        'CType',
        [
            'LLL:EXT:my_slider_mixtape/Resources/Private/Locallang/locallang_tca.xlf:tt_content.CType.slickslider',
            'slickslider',
            'EXT:my_slider_mixtape/Resources/Public/Icons/slickslider.png',
            'sliders'
        ]
    );


..  _columns-select-properties-item-groups-history:

History
=======

With the introduction of the `itemGroups` the TCA column type ``select`` has a
clean API to group items for dropdowns in FormEngine. This was previously
handled via placeholder ``--div--`` items,
which then rendered as :html:`<optgroup>` HTML elements in a dropdown.

In larger installations or TYPO3 instances with lots of extensions, Plugins
or Content Types (:php:`tt_content.CType`), or custom
Page Types (:php:`pages.doktype`) drop down lists could grow large and
adding item groups caused tedious work for developers or integrators.
Grouping can now be configured on a per-item
basis. Custom groups can be added via an API or when defining TCA for a new
table.
