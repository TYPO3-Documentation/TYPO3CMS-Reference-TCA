..  include:: /Includes.rst.txt
..  _columns-category-properties-item-groups:

==========
itemGroups
==========

..  confval:: itemGroups (type => category)

    :Path: $GLOBALS['TCA'][$table]['columns'][$field]['config']
    :type: array
    :Scope: Display  / Proc.
    :RenderType: all

    Contains an array of key-value pairs. The key contains the id of the item
    group, the value contains the label of the item group or its language
    reference.

    Only groups containing items will be displayed. In the select field first all
    items with no group defined are listed then the item groups in the order of
    their definition, each group with the corresponding items.

    See also :ref:`property itemGroups of select field
    <columns-select-properties-item-groups>`.
