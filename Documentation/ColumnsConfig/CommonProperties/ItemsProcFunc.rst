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

   VENDOR\\Extension\\UserFunction\\YourClass->yourMethod

   The provided method will have an array of parameters passed to it. The items array is passed by reference
   in the key :php:`items`. By modifying the array of items, you alter the list of items. A method may throw an
   exception which will be displayed as a proper error message to the user.

   Passed parameters
     * :php:`items` (passed by reference)
     * :php:`config` (TCA config of the field)
     * :php:`TSconfig`
     * :php:`table` (current table)
     * :php:`row` (current database record)
     * :php:`field` (current field name)

     .. versionadded:: 7.6
     This property only exists if the field has a :ref:`flex parent <columns-flex>`.

     * :php:`flexParentDatabaseRow`

     .. versionadded:: 11.2
     These properties are filled if the current record has an :ref:`inline parent <columns-inline>`.

     * :php:`inlineParentUid`
     * :php:`inlineParentTableName`
     * :php:`inlineParentFieldName`
     * :php:`inlineParentConfig`
     * :php:`inlineTopMostParentUid`
     * :php:`inlineTopMostParentTableName`
     * :php:`inlineTopMostParentFieldName`

   Example
     The configuration for the field `category_field` of the table `tt_content` looks like this:

     .. code-block:: php

        'type' => 'select',
        'renderType' => 'selectSingle',
        'itemsProcFunc' => 'TYPO3\CMS\Core\Category\CategoryRegistry->getCategoryFieldsForTable',
        'itemsProcConfig' => [
           'table' => 'tt_content'
        ],
        'minitems' => 0,
        'maxitems' => 1,
        'size' => 1

     The referenced :php:`itemsProcFunc` should populate the items by filling :php:`$configuration['items']`:

     .. code-block:: php

        /**
         * Returns a list of category fields for a given table for populating selector "category_field"
         * in tt_content table (called as itemsProcFunc).
         *
         * @param array $configuration Current field configuration
         * @throws \UnexpectedValueException
         * @internal
         */
        public function getCategoryFieldsForTable(array &$configuration)
        {
           $table = $configuration['config']['itemsProcConfig']['table'] ?? '';
           // Return early if no table is defined
           if (empty($table)) {
              throw new \UnexpectedValueException('No table is given.', 1381823570);
           }
           // Loop on all registries and find entries for the correct table
           foreach ($this->registry as $tableName => $fields) {
              if ($tableName === $table) {
                 foreach ($fields as $fieldName => $options) {
                    $fieldLabel = $this->getLanguageService()->sL($GLOBALS['TCA'][$tableName]['columns'][$fieldName]['label']);
                    $configuration['items'][] = [$fieldLabel, $fieldName];
                 }
              }
           }
        }

     .. note::
        This example uses a non-existing TCA property :php:`itemsProcConfig` in order to pass an own argument
        through the :php:`config` array. This name is completely arbitrary, but it is recommended to stick
        to something similar to not conflict with existing names.
