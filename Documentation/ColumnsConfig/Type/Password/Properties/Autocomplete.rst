.. include:: /Includes.rst.txt
.. _columns-password-properties-autocomplete:

============
autocomplete
============

.. confval:: autocomplete (type => password)

   :Path: $GLOBALS['TCA'][$table]['columns'][$field]['config']
   :type: boolean
   :Scope: Display

   Controls the `autocomplete` attribute of a given input field. If set to true (default false),
   adds attribute :php:`autocomplete="on"` to the input field allowing browser auto filling the field:

   .. code-block:: php
      :emphasize-lines: 7

      'title' => [
         'label' => 'LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.title',
         'config' => [
            'type' => 'password',
            'size' => 20,
            'autocomplete' => true
         ]
      ],
