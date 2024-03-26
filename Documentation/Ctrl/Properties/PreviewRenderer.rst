.. include:: /Includes.rst.txt
.. _ctrl-reference-previewrenderer:

===============
previewRenderer
===============

.. confval:: previewRenderer
   :name: ctrl-previewRenderer
   :Path: $GLOBALS['TCA'][$table]['ctrl']
   :type: string
   :Scope: Display

   Configures a backend preview for a content element.

Examples
========

Have also a look at :ref:`t3coreapi:ConfigureCE-Preview` for more details.

..  note::
    The recommended location of the preview renderer configuration is in the
    :php:`ctrl` array in your extension's :file:`Configuration/TCA/$table.php`
    or :file:`Configuration/TCA/Overrides/$table.php` file. The former is used
    when your extension is the one that creates the table, the latter is used
    when you need to override TCA properties of tables added by the Core or
    other extensions.

Use for any record in a table
-----------------------------

This specifies the preview renderer to be used for any record in
:sql:`tx_myextension_domain_model_mytable`:

..  code-block:: php

    $GLOBALS['TCA']['tx_myextension_domain_model_mytable']['ctrl']['previewRenderer']
        = \MyVendor\MyExtension\Preview\PreviewRenderer::class;


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
