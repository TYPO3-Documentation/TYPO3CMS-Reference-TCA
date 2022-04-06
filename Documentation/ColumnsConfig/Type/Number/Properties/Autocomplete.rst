.. include:: /Includes.rst.txt
.. _columns-number-properties-autocomplete:

============
autocomplete
============

.. confval:: autocomplete ('type' => 'number')

   :Path: $GLOBALS['TCA'][$table]['columns'][$field]['config']
   :type: boolean
   :Scope: Display

   Controls the `autocomplete` attribute of a given email field. If set to true (default false),
   adds attribute :php:`autocomplete="on"` to the email input field allowing browser auto filling the field:

   .. code-block:: php
      :emphasize-lines: 7

      'email' => [
         'label' => 'number',
         'config' => [
            'type' => 'number',
            'size' => 20,
            'eval' => 'null',
            'autocomplete' => true
         ]
      ],
