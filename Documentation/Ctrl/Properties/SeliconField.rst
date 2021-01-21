.. include:: /Includes.rst.txt
.. _ctrl-reference-selicon-field:

==============
selicon\_field
==============

.. confval:: selicon_field

   :type: string (field name)
   :Scope: Display


   Field name, which contains the thumbnail image used to represent the record visually whenever it is shown
   in FormEngine as a foreign reference selectable from a selector box.
   
   This field must be a :ref:`columns-inline-examples-fal` field where icon files are selected. Since only the
   first icon file will be used, the :ref:`columns-inline-properties-maxitems` option should be used to allow only
   selecting a single icon file.

   You should consider this a feature where you can attach an "icon" to a record which is typically selected as a
   reference in other records, for example a "category". In such a case this field points out the icon image which
   will then be shown. This feature can thus enrich the visual experience of selecting the relation in other forms.

Examples
========

The table :sql:`tx_styleguide_elements_select_single_12_foreign` is defined as
follows::

   [
      'ctrl' => [
         'title' => 'Form engine elements - select foreign single_12',
         'label' => 'fal_1',
         'selicon_field' => 'fal_1',
         // ...
      ],

      'columns' => [
         // ...
         'fal_1' => [
            'label' => 'fal_1 selicon_field',
            'exclude' => 1,
            'config' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::getFileFieldTCAConfig(
               'fal_1',
               [
                  'maxitems' => 1,
               ],
               $GLOBALS['TYPO3_CONF_VARS']['SYS']['mediafile_ext']
            ),
         ],
      ],
      // ...

   ];

It can be used in another table as a foreign relation, for example in a field
with render type :php:`singleSelect`::

   'select_single_12' => [
      'exclude' => 1,
      'label' => 'select_single_12 foreign_table selicon_field',
      'config' => [
         'type' => 'select',
         'renderType' => 'selectSingle',
         'foreign_table' => 'tx_styleguide_elements_select_single_12_foreign',
         'fieldWizard' => [
            'selectIcons' => [
               'disabled' => false,
            ],
         ],
      ],
   ],

.. figure:: /Examples/Images/Styleguide/SelectSingle12.png
    :alt: Select images from a drop-down
    :class: with-shadow

    Select foreign records from a drop-down using selicon

You can find this example in the :ref:`extension styleguide <styleguide>`.
