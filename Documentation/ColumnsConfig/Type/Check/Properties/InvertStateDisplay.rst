.. include:: /Includes.rst.txt
.. _columns-check-properties-invertStateDisplay:

==================
invertStateDisplay
==================

   :type: boolean   :Scope: Display

:aspect:`Default`
    false
      The state of a checkbox can be displayed inverted when this property is
      set to true.

:aspect:`Example`
   The field :sql:`hidden` is set to 1 if the record is hidden and to 0 if the
   record is visibile. However the field usually carries a label like
   :guilabel:`Enabled`. It is then displayed as "on", when the underlying
   field is set to 0. The following examples is from the core, table 
   :sql:`tt_content`::

      'hidden' => [
         'exclude' => true,
         'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.visible',
         'config' => [
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'items' => [
               [
                  0 => '',
                  1 => '',
                  'invertStateDisplay' => true
               ],
            ],
         ],
      ],
