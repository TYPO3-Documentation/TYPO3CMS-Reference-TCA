.. include:: /Includes.rst.txt
.. _columns-category-properties-relationship:

============
relationship
============

.. confval:: relationship

   :Path: $GLOBALS['TCA'][$table]['columns'][$field]['config']
   :type: string
   :Scope: Display  / Proc.
   :RenderType: all
   :Default: manyToMany

   All possible values are:

   `oneToOne`
      Stores the uid of the selected category. When using this
      relationship, `maxitems=1` will automatically be added to
      the column configuration. While one record can only have a
      relation to one category, each category can
      still have a relationship to more then one record.

   `oneToMany`
      Stores the uids of selected categories in a comma-separated list.

   `manyToMany` (default):
      Uses the intermediate table :sql:`sys_category_record_mm`
      and only stores the categories count on the local side. This is the use
      case, which was previously accomplished using
      :php:`ExtensionManagementUtility->makeCategorizable()`.

   In the following example a category tree is displayed, but only one
   category can be selected. It is

   .. code-block:: php

      $GLOBALS['TCA'][$myTable]['columns']['mainCategory'] = [
         'config' => [
            'type' => 'category',
            'relationship' => 'oneToOne'
         ]
      ];

   All other relevant options, for example `maxitems=1`, are being set
   automatically.
