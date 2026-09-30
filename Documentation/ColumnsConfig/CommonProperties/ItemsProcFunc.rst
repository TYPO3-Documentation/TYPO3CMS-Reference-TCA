..  include:: /Includes.rst.txt
..  _tca_property_itemsProcFunc:

=============
itemsProcFunc
=============

..  confval:: itemsProcFunc
    :name: itemsProcFunc
    :TCA path: $GLOBALS['TCA'][$table]['columns'][$field]['config']['itemsProcFunc']
    :type: string (class->method reference)
    :Scope: Display / Proc.
    :Types: :ref:`check <columns-check>`, :ref:`select <columns-select>`, :ref:`radio <columns-radio>`

    PHP method which is called to fill or manipulate the items array.
    It is recommended to use the actual FQCN with :php:`class` and then concatenate the method:

    :php:`\MyVendor\MyExtension\UserFunction\FormEngine\YourClass::class . '->yourMethod'`

    This becomes handy when using an IDE and doing operations like renaming classes.

    The provided method will have an array of parameters passed to it. The items array is passed by reference
    in the key `items`. By modifying the array of items, you alter the list of items. A method may throw an
    exception which will be displayed as a proper error message to the user.

..  _tca-property-items-proc-func-passed-parameters:

Passed parameters
=================

*   `items` (passed by reference)
*   `config` (TCA config of the field)
*   `TSconfig` (The matching :ref:`itemsProcFunc TSconfig <t3tsref:itemsProcFunc>`)
*   `table` (current table)
*   `row` (current database record)
*   `field` (current field name)
*   `effectivePid` (correct page ID)
*   `site` (current site)

The following parameter only exists if the field has a :ref:`flex parent <columns-flex>`.

*   `flexParentDatabaseRow`

The following parameters are filled if the current record has an
:ref:`inline parent <columns-inline>`.

*   `inlineParentUid`
*   `inlineParentTableName`
*   `inlineParentFieldName`
*   `inlineParentConfig`
*   `inlineTopMostParentUid`
*   `inlineTopMostParentTableName`
*   `inlineTopMostParentFieldName`

..  _tca-property-items-proc-func-example:

Example
=======

The configuration for a custom field `my_select` could look like this:

..  literalinclude:: /ColumnsConfig/CommonProperties/_codesnippets/_ItemsProcFuncTca.php
    :caption: EXT:my_extension/Configuration/TCA/tx_myextension_domain_model_something.php
    :visible-lines: 3, 11-22
    :emphasize-lines: 20

The referenced `itemsProcFunc` method should populate the items by filling
:php:`$params['items']`:

..  literalinclude:: /ColumnsConfig/CommonProperties/_codesnippets/_ItemsProcFuncClass.php
    :caption: EXT:my_extension/Classes/UserFunctions/FormEngine/ItemsProcFunc.php

This results in the rendered select dropdown having four items. This is a really simple example. In the real world
you would use the other passed parameters to dynamically generate the items.
