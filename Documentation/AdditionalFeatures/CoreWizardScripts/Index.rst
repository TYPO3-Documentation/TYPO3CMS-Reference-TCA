.. include:: ../../Includes.txt


.. _core-wizards:

Wizard scripts in the core
^^^^^^^^^^^^^^^^^^^^^^^^^^

The wizard interface allows you to use any PHP-script for your wizards
but there is a useful set of default wizard scripts available in the
core of TYPO3. These are found mostly in
:file:`typo3/sysext/backend/Classes/Controller/Wizard/`.

Below is a description of each of them including a description of
their special parameters and an example of usage.


.. _core-wizards-browse:

Link browser
""""""""""""

The link browser wizard is used many places where you want to insert link
references.

This works not only in the Rich Text Editor but also in "typolink"
fields.

.. _core-wizards-browse-properties:

Properties
~~~~~~~~~~


.. _core-wizards-browse-properties-allowedextensions:

allowedExtensions
'''''''''''''''''

.. container:: table-row

   Key
         allowedExtensions

   Type
         string

   Description
         Comma separated list of allowed file extensions. By default, all
         extensions are allowed.



.. _core-wizards-browse-properties-blindlinkoptions:

blindLinkOptions
''''''''''''''''

.. container:: table-row

   Key
         blindLinkOptions

   Type
         string

   Description
         Comma separated list of link options that should not be displayed.
         Possible values are file, mail, page, spec, and url. By default, all
         link options are displayed.



.. _core-wizards-browse-properties-blindlinkfields:

blindLinkFields
'''''''''''''''

.. container:: table-row

   Key
         blindLinkFields

   Type
         string

   Description
         Comma separated list of link fields that should not be displayed.
         Possible values are class, params, target and title. By default, all
         link fields are displayed.


.. _core-wizards-browse-example:

Example
~~~~~~~


Here's an example from "tt\_content" for the link that can be placed
on the content element's header:

.. figure:: ../../Images/CoreWizardBrowseIcon.png
   :alt: The browse wizard's icon

   Click on the browse icon wizard to display the link browser

Clicking the wizard icons opens the Element Browser window:

.. figure:: ../../Images/CoreWizardBrowsePopup.png
   :alt: The browse wizard's popup window

   The link browser popup window and all the link possibilities displayed as tabs

Such a wizard can be configured like this:

.. code-block:: php
   :emphasize-lines: 10-18

   'header_link' => [
      'label' => 'LLL:EXT:cms/locallang_ttc.xlf:header_link',
      'exclude' => 1,
      'config' => [
         'type' => 'input',
         'size' => '50',
         'max' => '256',
         'eval' => 'trim',
         'wizards' => [
            'link' => [
               'type' => 'popup',
               'title' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_link_formlabel',
               'icon' => 'actions-wizard-link',
               'module' => [
                  'name' => 'wizard_link',
               ],
               'JSopenParams' => 'height=800,width=600,status=0,menubar=0,scrollbars=1',
               'params' => [
                  'blindLinkOptions' => 'folder',
                  'blindLinkFields' => 'class, target',
                  'allowedExtensions' => 'jpg',
               ],
            ],
         ],
         'softref' => 'typolink',
      ],
   ],

Notice how the wizard requires an extra parameter
(highlighted lines) since it has to return content back to the input field
(and not the RTE, for instance, which it also supports).
