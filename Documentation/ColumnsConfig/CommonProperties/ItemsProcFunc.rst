.. include:: /Includes.rst.txt
.. _tca_property_itemsProcFunc:

=============
itemsProcFunc
=============

.. confval:: itemsProcFunc

   :type: string (class->method reference)
   :Scope: Display / Proc.
   :Types: :ref:`check <columns-check>`, :ref:`select <columns-select>`, :ref:`radio <columns-radio>`

   PHP method which is called to fill or manipulate the items array.
   It is recommended to use the actual FQCN with :php:`class` and then concatenate the method:

   :php:`\VENDOR\Extension\UserFunction\FormEngine\YourClass::class . '->yourMethod'`

   This becomes handy when using an IDE and doing operations like renaming classes.

   The provided method will have an array of parameters passed to it. The items array is passed by reference
   in the key :php:`items`. By modifying the array of items, you alter the list of items. A method may throw an
   exception which will be displayed as a proper error message to the user.

Passed parameters
=================

*  :php:`items` (passed by reference)
*  :php:`config` (TCA config of the field)
*  :php:`TSconfig` (The matching :ref:`itemsProcFunc TSconfig <t3tsconfig:itemsProcFunc>`)
*  :php:`table` (current table)
*  :php:`row` (current database record)
*  :php:`field` (current field name)

The following parameter only exists if the field has a :ref:`flex parent <columns-flex>`.

* :php:`flexParentDatabaseRow`

.. versionadded:: 11.2
   The following parameters are filled if the current record has an
   :ref:`inline parent <columns-inline>`.

* :php:`inlineParentUid`
* :php:`inlineParentTableName`
* :php:`inlineParentFieldName`
* :php:`inlineParentConfig`
* :php:`inlineTopMostParentUid`
* :php:`inlineTopMostParentTableName`
* :php:`inlineTopMostParentFieldName`

Example
=======

The configuration for a custom field :sql:`select_single_2` could look like this:

.. code-block:: php

   'select_single_2' => [
       'exclude' => 1,
       'label' => 'select_single_2 itemsProcFunc',
       'config' => [
           'type' => 'select',
           'renderType' => 'selectSingle',
           'items' => [
               ['foo', 1],
               ['bar', 'bar'],
           ],
           'itemsProcFunc' => TYPO3\CMS\Styleguide\UserFunctions\FormEngine\TypeSelect2ItemsProcFunc::class . '->itemsProcFunc',
       ],
   ]

The referenced :php:`itemsProcFunc` method should populate the items by filling :php:`$params['items']`:

.. code-block:: php

    /**
     * A user function used in select_2
     */
    class TypeSelect2ItemsProcFunc
    {
        /**
         * Add two items to existing ones
         *
         * @param array $params
         */
        public function itemsProcFunc(&$params): void
        {
            $params['items'][] = ['item 1 from itemProcFunc()', 'val1'];
            $params['items'][] = ['item 2 from itemProcFunc()', 'val2'];
        }
    }

This results in the rendered select dropdown having four items. This is a really simple example. In the real world
you would use the other passed parameters to dynamically generate the items.
