.. include:: ../../Includes.txt


.. _wizards:

Wizards Configuration
^^^^^^^^^^^^^^^^^^^^^

Wizards are configurable for some field types, namely "input", "text",
"select" and "group" types. They provide a way to insert helper-
elements, links to wizard scripts etc.

A well known example of a wizard application is the form wizard
(as provided by the "form" system extension):

.. figure:: ../../Images/CoreWizardFormsIcon.png
   :alt: The forms wizard's icon

   Click on the forms icon wizard to display the forms editor

The wizard is configured for the text area field and appears as an
icon to the right. Clicking the icon will guide the user to a view
where the "cryptic" form code is presented in a more user-friendly
interface:

.. figure:: ../../Images/CoreWizardFormsWindow.png
   :alt: The forms visual editor

   The visual forms editor provided by the "form" system extension

Another example of wizards are the new / edit / suggest wizards which
are available for "group" or "select" type fields:

.. figure:: ../../Images/WizardsSample.png
   :alt: Several wizards associated with a field

   New, edit and suggest wizard, associated with a form field


.. _wizards-configuration:

Configuration of wizards
""""""""""""""""""""""""

The value of the "wizards" key in the field config-array is an array.
Each key is yet another array which configures the individual wizards
for a field. The order of the keys determines the order the wizards
are displayed in. The key-values themselves play no important role
(except from a few reserved words listed in a table below).

.. warning::

   Configuration of wizards has changed since TYPO3 CMS 6.2 to provide
   CSRF protection. To see examples for older version of TYPO3 CMS
   please refer to other versions of this manual.

The configuration for the new / edit / suggest wizards shown above
looks like this:

.. code-block:: php

   'basedOn' => array(
      'label' => 'LLL:EXT:cms/locallang_tca.xlf:sys_template.basedOn',
      'config' => array(
         ...
         'wizards' => array(
            '_VERTICAL' => 1,
            'suggest' => array(
               'type' => 'suggest'
            ),
            'edit' => array(
               'type' => 'popup',
               'title' => 'Edit template',
               'module' => array(
                  'name' => 'wizard_edit',
               ),
               'popup_onlyOpenIfSelected' => 1,
               'icon' => 'actions-open',
               'JSopenParams' => 'height=350,width=580,status=0,menubar=0,scrollbars=1'
            ),
            'add' => array(
               'type' => 'script',
               'title' => 'LLL:EXT:cms/locallang_tca.xlf:sys_template.basedOn_add',
               'icon' => 'actions-add',
               'params' => array(
                  'table' => 'sys_template',
                  'pid' => '###CURRENT_PID###',
                  'setValue' => 'prepend'
               ),
               'module' => array(
                  'name' => 'wizard_add'
               )
            )
         )
      )
   ),

The first two lines of the "wizards" configuration make use of two reserved
keywords to define settings for the display of icons.


.. _wizards-reserved:

Reserved keys
"""""""""""""

Each wizard is identified by a key string. However some strings are
reserved for general configuration. These are listed in this table and
as a rule of thumb they are prefixed with an underscore ("\_"):


.. _wizards-reserved-position:

\_POSITION
~~~~~~~~~~

.. container:: table-row

   Key
         \_POSITION

   Type
         string

   Description
         Determines the position of the wizard icons/titles.

         Default is "right".

         Possible values are "left", "top", "bottom".



.. _wizards-reserved-vertical:

\_ VERTICAL
~~~~~~~~~~~

.. container:: table-row

   Key
         \_VERTICAL

   Type
         boolean

   Description
         If set, the wizard icons (if more than one) will be positioned in a
         column (vertically) and not a row (horizontally, which is default)



.. _wizards-reserved-any-other-key:

[any other key]
~~~~~~~~~~~~~~~

.. container:: table-row

   Key
         [any other key]

   Type
         PHP array

   Description
         Configuration of the wizard types, see below.


.. _wizards-configuration-general:

General configuration options
"""""""""""""""""""""""""""""

This table lists the general configuration options for (almost) all
wizard types. In particular the value of the "type" key is important
because it denotes what additional options are available.


.. _wizards-configuration-general-type:

type
~~~~

.. container:: table-row

   Key
         type

   Type
         string

   Description
         Defines the type of wizard. The options are listed as headlines in the
         table below.

         **This setting is required!**



.. _wizards-configuration-general-title:

title
~~~~~

.. container:: table-row

   Key
         title

   Type
         string or LLL reference

   Description
         This is the title of the wizard. For those wizards which require a
         physical representation – e.g. a link - this will be the link if no
         icon is presented.



.. _wizards-configuration-general-icon:

icon
~~~~

.. container:: table-row

   Key
         icon

   Type
         fileref

   Description
         This is the icon representing the wizard.

         If the first 3 chars are **not** "../" then the file is expected to be in
         :file:`typo3/sysext/t3skin/icons/gfx/`. To insert custom images,
         put them into an extension and use an icon path like
         :file:`EXT:ext/[extension key]/directory/...`. Generally, the format is the
         same as for referring to icons for selector box options.

         If the icon is not set, the title will be used for the link.



.. _wizards-configuration-general-enablebytypeconfig:

enableByTypeConfig
~~~~~~~~~~~~~~~~~~

.. container:: table-row

   Key
         enableByTypeConfig

   Type
         boolean

   Description
         If set, then the wizard is enabled only if declared in the
         Special Configuration of specific types
         (using :code:`wizards[list of wizard-keys]`).



.. _wizards-configuration-general-rteonly:

RTEonly
~~~~~~~

.. container:: table-row

   Key
         RTEonly

   Type
         boolean

   Description
         If set, then this wizard will appear only if the wizard is presented
         for a RTE field.



.. _wizards-configuration-specific:

Specific wizard configuration options based on type
"""""""""""""""""""""""""""""""""""""""""""""""""""


.. _wizards-configuration-script:

Script wizard
~~~~~~~~~~~~~


.. _wizards-configuration-script-type:

type
''''

.. container:: table-row

   Key
         type

   Type
         string

   Description
         *[Must be set to "script"]*

         Creates a link to an external script which can do "context sensitive"
         processing of the field. This is how the Form and Table wizards are
         used.



.. _wizards-configuration-script-notnewrecords:

notNewRecords
'''''''''''''

.. container:: table-row

   Key
         notNewRecords

   Type
         boolean

   Description
         If set, the link will appear *only* if the record is not new (that
         is, it has a proper UID)



.. _wizards-configuration-script-module:

module
''''''

.. container:: table-row

   Key
         module

   Type
         array

   Description
         *(Since TYPO3 CMS 6.2)*

         This array contains configuration matching a declared wizard.
         For example, the "Add record" wizard is declared that way in
         :file:`typo3/sysext/backend/ext_tables.php`::

            // Register add wizard
            \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addModulePath(
               'wizard_add',
               \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'Modules/Wizards/AddWizard/'
            );

         Note the key named :code:`wizard_add`. This key is used when
         configuring a wizard, as in::

            'module' => array(
               'name' => 'wizard_add'
            )


.. _wizards-configuration-script-params:

params
''''''

.. container:: table-row

   Key
         params

   Type
         array

   Description
         Here you can put values which are passed to your script in the :code:`P` array.



.. _wizards-configuration-script-popup-onlyopenifselected:

popup\_onlyOpenIfSelected
'''''''''''''''''''''''''

.. container:: table-row

   Key
         popup\_onlyOpenIfSelected

   Type
         boolean

   Description
         If set, then an element (one or more) from the list must be selected.
         Otherwise the popup will not appear and you will get a message alert
         instead. This is supposed to be used with the :code:`wizard_edit` wizard
         for editing records in "group" type fields.


.. _wizards-configuration-popup:

Popup and colorbox wizards
~~~~~~~~~~~~~~~~~~~~~~~~~~


.. _wizards-configuration-popup-type:

type
''''

.. container:: table-row

   Key
         type

   Type
         string

   Description
         *[Must be set to "popup" or "colorbox"]*

         Creates a link to an external script opened in a pop-up window.



.. _wizards-configuration-popup-notnewrecords:

notNewRecords
'''''''''''''

.. container:: table-row

   Key
         notNewRecords

   Type
         boolean

   Description
         :ref:`See above, type "script" <wizards-configuration-script-notnewrecords>`.



.. _wizards-configuration-popup-module:

module
''''''

.. container:: table-row

   Key
         module

   Type
         array

   Description
         :ref:`See above, type "module" <wizards-configuration-script-module>`.



.. _wizards-configuration-popup-params:

params
''''''

.. container:: table-row

   Key
         params

   Type
         array

   Description
         :ref:`See above, type "script" <wizards-configuration-script-params>`.



.. _wizards-configuration-popup-jsopenparams:

JSopenParams
''''''''''''

.. container:: table-row

   Key
         JSopenParams

   Type
         string

   Description
         Parameters to open JS window:

         **Example**

         .. code-block:: php

            "JSopenParams" => "height=300,width=250,status=0,menubar=0,scrollbars=1",


.. _wizards-configuration-user:

User-defined wizards
~~~~~~~~~~~~~~~~~~~~


.. _wizards-configuration-user-type:

type
''''

.. container:: table-row

   Key
         type

   Type
         string

   Description
         *[Must be set to "userFunc"]*

         Calls a user function/method to produce the wizard or whatever they
         are up to.



.. _wizards-configuration-user-notnewrecords:

notNewRecords
'''''''''''''

.. container:: table-row

   Key
         notNewRecords

   Type
         boolean

   Description
         :ref:`See above, type "script" <wizards-configuration-script-notnewrecords>`.



.. _REPLACE-ME-userfunc:

userFunc
''''''''

.. container:: table-row

   Key
         userFunc

   Type
         string

   Description
         Calls a function or a method in a class.

         **Methods:** [classname]->[methodname]

         **Functions:** [functionname]

         The function/class must be included on beforehand. This is advised to
         be done within the localconf.php file.

         Two parameters are passed to the function/method:

         #. an array with parameters, much like the ones passed to scripts.
            One key is special though: the "item" key, which is passed by reference.
            So if you alter that value it is reflected *back*!
         #. a back-reference to the calling TCEform-object.

         The content returned from the function call is inserted at the
         position where the the icon/title would normally go.

         :ref:`See full example below <wizards-configuration-examples-user>`.



.. _wizards-configuration-examples-user:

User defined wizard (processing with PHP function)
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

The "userFunc" type of wizard allows you to render all the wizard code
yourself. Theoretically, you could produce all of the other wizard
kinds ("script", "popup", "colorbox", etc.) with your own user
function if you wanted to alter their behavior.

In this example the wizard provides to JavaScript-powered buttons that
make it possible to increase or decrease the value in the field by 1.
The wizard also highlights the field with a background color. This is
how it looks:

.. figure:: ../../Images/WizardsExamplesUserfunc.png
   :alt: User-defined wizard

   The input field with its custom wizard

The corresponding configuration is:

.. code-block:: php

   'weirdness' => array(
      'exclude' => 0,
      'label' => 'LLL:EXT:examples/Resources/Private/Language/locallang_db.xlf:tx_examples_haiku.weirdness',
      'config' => array(
         'type' => 'input',
         'size' => 10,
         'eval' => 'int',
         'wizards' => array(
            'specialWizard' => array(
               'type' => 'userFunc',
               'userFunc' => 'Documentation\\Examples\\Userfuncs\\Tca->someWizard',
               'params' => array(
                  'color' => 'green'
               )
            )
         )
      )
   ),

Notice the :code:`params` array, which is passed to the user function that
handles the wizard. And here's the code of the user function (from
file :file:`EXT:examples/Classes/Userfuncs/Tca.php`):

.. code-block:: php

   public function someWizard($PA, $fObj) {
      // Note that the information is passed by reference,
      // so it's possible to manipulate the field directly
      // Here we highlight the field with the color passed as parameter
      $backgroundColor = 'white';
      if (!empty($PA['params']['color'])) {
         $backgroundColor = $PA['params']['color'];
      }
      $PA['item'] = '<div style="background-color: ' . $backgroundColor . '; padding: 4px;">' . $PA['item'] . '</div>';

      // Assemble the wizard itself
      $output = '<div style="margin-top: 8px; margin-left: 4px;">';

      $commonJavascriptCalls = $PA['fieldChangeFunc']['TBE_EDITOR_fieldChanged'] . $PA['fieldChangeFunc']['typo3form.fieldGet'] . ' return false;';
      // Create the + button
      $onClick = "document." . $PA['formName'] . "['" . $PA['itemName'] . "'].value++; " . $commonJavascriptCalls;
      $output .= '<a href="#" onclick="' . htmlspecialchars($onClick) . '" style="padding: 6px; border: 1px solid black; background-color: #999">+</a>';
      // Create the - button
      $onClick = "document." . $PA['formName'] . "['" . $PA['itemName'] . "'].value--; " . $commonJavascriptCalls;
      $output .= '<a href="#" onclick="' . htmlspecialchars($onClick) . '" style="padding: 6px; border: 1px solid black; background-color: #999">-</a>';
      $output .= '</div>';
      return $output;
   }

First the HTML code of the field itself is manipulated, by adding a
div tag around it. Notice how all you need to do is to change the
value of :code:`$PA['item']` since that value is passed by reference to the
function and therefore doesn't need a return value - only to be
changed. In that div, we use the color received as parameter.

After that we create the JavaScript and the links for both the "+" and
"-" buttons and we return the resulting HTML code. Note that the :code:`$PA`
contains important JavaScript code to use. This code marks the field
on which the wizard acted as changed and updates the value in the
corresponding hidden field.

Use the :code:`debug()` function to find more about what is available in the
:code:`$PA` array.
