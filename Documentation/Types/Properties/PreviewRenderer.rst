..  include:: /Includes.rst.txt

===============
previewRenderer
===============

..  confval:: previewRenderer
    :name: types-previewRenderer
    :Path: $GLOBALS['TCA'][$table]['ctrl']['previewRenderer']
    :type: string
    :Scope: Display

    Configures a backend preview for a content element.

    Have also a look at :ref:`t3coreapi:ConfigureCE-Preview` for more details.

    Use :confval:`property previewRenderer of section ctrl <ctrl-previewRenderer>`
    to configure the preview globally for the whole table.

Table has a :php:`type` field/attribute
---------------------------------------

This specifies the preview renderer only for records of type :php:`$type` as
determined by the :ref:`type field <types>` of your table.

..  code-block:: php

    $GLOBALS['TCA']['tx_myextension_domain_model_mytable']['types'][$type]['previewRenderer']
        = \MyVendor\MyExtension\Preview\PreviewRenderer::class;

Table has a :php:`subtype_value_field` setting
----------------------------------------------

If your table and field have a
:ref:`subtype_value_field <types-properties-subtype-value-field>` TCA setting
(like :sql:`tt_content.list_type`) and you want to register a preview renderer
that applies only when that value is selected (for example, when a certain
plugin type is selected and you can not match it with the type of the record
alone):

..  code-block:: php

    $GLOBALS['TCA'][tx_myextension_domain_model_mytable]['types'][$type]['previewRenderer'][$subType]
        = \MyVendor\MyExtension\Preview\PreviewRenderer::class;

Where :php:`$type` is for example :php:`list` (indicating a plugin) and
:php:`$subType` is the value of the :php:`list_type` field when the
type of plugin you want to target is selected as plugin type.
