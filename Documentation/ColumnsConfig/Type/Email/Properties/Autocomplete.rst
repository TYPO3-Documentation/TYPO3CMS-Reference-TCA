.. include:: /Includes.rst.txt
.. _columns-email-properties-autocomplete:

============
autocomplete
============

.. confval:: autocomplete ('type' => 'email')

   :Path: $GLOBALS['TCA'][$table]['columns'][$field]['config']
   :type: boolean
   :Scope: Display

   Controls the `autocomplete` attribute of a given email field. If set to true (default false),
   adds attribute :php:`autocomplete="on"` to the email input field allowing browser auto filling the field:

   .. code-block:: php
      :emphasize-lines: 7

      'email' => [
         'label' => 'email',
         'config' => [
            'type' => 'email',
            'size' => 20,
            'nullable' => true,
            'autocomplete' => true
         ]
      ],
