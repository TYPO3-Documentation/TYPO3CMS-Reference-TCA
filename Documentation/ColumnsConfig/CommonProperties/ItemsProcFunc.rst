.. include:: /Includes.rst.txt
.. _tca_property_itemsProcFunc:

=============
itemsProcFunc
=============

:aspect:`Datatype`
   string (class->method reference)

:aspect:`Scope`
   Display / Proc.

:aspect:`types`
   :ref:`check <columns-check>`, :ref:`flex <columns-flex>`

:aspect:`Description`
   PHP function which is called to fill / manipulate the array with elements.

   [classname]->[methodname]

   The function/method will have an array of parameters passed to it, the items-array is passed by reference
   in the key 'items'. By modifying the array of items, you alter the list of items. A method may throw an
   exception which will be displayed as a proper error message to the user.

   **Example:**

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

   The referenced `itemsProcFunc` should populate the items by filling :php:`$configuration['items']``:

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

   Further examples on different config type's can be found in the extension `styleguide`.

