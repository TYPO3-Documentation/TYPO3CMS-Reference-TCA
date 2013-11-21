.. ==================================================
.. FOR YOUR INFORMATION
.. --------------------------------------------------
.. -*- coding: utf-8 -*- with BOM.

.. include:: ../../Includes.txt
.. include:: Images.txt


.. _core-wizards:

Wizard scripts in the core
^^^^^^^^^^^^^^^^^^^^^^^^^^

The wizard interface allows you to use any PHP-script for your wizards
but there is a useful set of default wizard scripts available in the
core of TYPO3. These are found in PATH\_typo3 and are all prefixed
"wizard\_" (except "browse\_links.php").

Below is a description of each of them including a description of
their special parameters and an example of usage.


.. _core-wizards-add:

wizard\_add.php
"""""""""""""""

This script links to a form which allows you to create a new record in
a given table which may optionally be set as the value on return to
the real form.


.. ### BEGIN~OF~TABLE ###

.. container:: table-row

   Key
         Key

   Type
         Type

   Description
         Description


.. container:: table-row

   Key
         table

   Type
         string

   Description
         Table to add record in.


.. container:: table-row

   Key
         pid

   Type
         int

   Description
         pid of the new record.

         You can use the "markers" (constants) as values instead if you wish::

            ###CURRENT_PID###
            ###THIS_UID###
            ###STORAGE_PID###
            ###SITEROOT###

         (see TCA/select for description)


.. container:: table-row

   Key
         setValue

   Type
         "prepend", "set", "append"

   Description
         "set" = the field will be forced to have the new value on return

         "append"/"prepend" = the field will have the value appended/prepended.

         You must set one of these values.


.. ###### END~OF~TABLE ######


As an example, let's look at BE user records where one can see several
wizards in use:

|img-71| The wizard appears as a "+" icon. When clicked, the user is directed
to a form where a new BE user group can be created:

|img-72| When the new template is saved and the user clicks the close button of
the form the new group is automatically inserted as the list of
selected groups.

The configuration looks like this::

   'usergroup' => array(
           'label' => 'LLL:EXT:lang/locallang_tca.xml:be_users.usergroup',
           'config' => array(
                   'type' => 'select',
                   'foreign_table' => 'be_groups',
                   'foreign_table_where' => 'ORDER BY be_groups.title',
                   'size' => '5',
                   'maxitems' => '20',
                   'iconsInOptionTags' => 1,
                   'wizards' => array(
                           '_PADDING' => 1,
                           '_VERTICAL' => 1,
                           'edit' => array(
                                   'type' => 'popup',
                                   'title' => 'LLL:EXT:lang/locallang_tca.xml:be_users.usergroup_edit_title',
                                   'script' => 'wizard_edit.php',
                                   'popup_onlyOpenIfSelected' => 1,
                                   'icon' => 'edit2.gif',
                                   'JSopenParams' => 'height=350,width=580,status=0,menubar=0,scrollbars=1',
                           ),
                           'add' => array(
                                'type' => 'script',
                                'title' => 'LLL:EXT:lang/locallang_tca.xml:be_users.usergroup_add_title',
                                'icon' => 'add.gif',
                                'params' => array(
                                        'table' => 'be_groups',
                                        'pid' => '0',
                                        'setValue' => 'prepend'
                                ),
                                'script' => 'wizard_add.php',
                        ),
                           'list' => array(
                                   'type' => 'script',
                                   'title' => 'LLL:EXT:lang/locallang_tca.xml:be_users.usergroup_list_title',
                                   'icon' => 'list.gif',
                                   'params' => array(
                                           'table' => 'be_groups',
                                           'pid' => '0',
                                   ),
                                   'script' => 'wizard_list.php',
                           )
                   )
           )
   ),

The part in bold is related to the Add-wizard. Note how it points to
the "wizard\_add.php" script. The "params" array instructs the Add-
wizard how to handle the creation of the new record, i.e. which table,
where to store it, etc.. In particular the "setValue" parameter tells
the wizard script that the uid of the newly created record should be
inserted in the relations field of the original record (the one where
we clicked the Add-wizard's icon).


.. _core-wizards-edit:

wizard\_edit.php
""""""""""""""""

The Edit wizard gives you a shortcut to edit references in "select" or
"group" type form elements. Again let's look at the BE user records:

|img-73| When a record is selected and the Edit-wizard button is clicked, that
record opens in a new window for modification. Let's look again at the
configuration (just the Edit-wizard part)::

   'usergroup' => array(
           'label' => 'LLL:EXT:lang/locallang_tca.xml:be_users.usergroup',
           'config' => array(
                   ...
                   'wizards' => array(
                           ...
                           'edit' => array(
                                'type' => 'popup',
                                'title' => 'LLL:EXT:lang/locallang_tca.xml:be_users.usergroup_edit_title',
                                'script' => 'wizard_edit.php',
                                'popup_onlyOpenIfSelected' => 1,
                                'icon' => 'edit2.gif',
                                'JSopenParams' => 'height=350,width=580,status=0,menubar=0,scrollbars=1',
                        ),
                           ...
                   )
           )
   ),

The wizard is set to type "popup" which makes it so that the selected
record will open in a new window. There are no parameters to pass
along like there were for the Add-wizard.


.. _core-wizards-list:

wizard\_list.php
""""""""""""""""

This links to the Web > List module for only one table and allows the
user to manipulate stuff there. Again, the BE user records have it:

|img-74| By clicking the icon the user gets taken to the Web > List module.
Notice the "Back" link found in the upper left corner, which leads
back to the edit form.

|img-75| This wizard has a few parameters to configure in the "params" array:


.. ### BEGIN~OF~TABLE ###

.. container:: table-row

   Key
         Key

   Type
         Type

   Description
         Description


.. container:: table-row

   Key
         table

   Type
         string

   Description
         Table to manage records for


.. container:: table-row

   Key
         pid

   Type
         int

   Description
         id of the records you wish to list.

         You can use the "markers" (constants) as values instead if you wish::

            ###CURRENT_PID###
            ###THIS_UID###
            ###STORAGE_PID###
            ###SITEROOT###

         (see TCA/select for description)


.. ###### END~OF~TABLE ######


For the BE users table, the configuration look like this (just the
List-wizard part)::

   'usergroup' => array(
           'label' => 'LLL:EXT:lang/locallang_tca.xml:be_users.usergroup',
           'config' => array(
                   ...
                   'wizards' => array(
                           ...
                           'list' => array(
                                'type' => 'script',
                                'title' => 'LLL:EXT:lang/locallang_tca.xml:be_users.usergroup_list_title',
                                'icon' => 'list.gif',
                                'params' => array(
                                        'table' => 'be_groups',
                                        'pid' => '0',
                                ),
                                'script' => 'wizard_list.php',
                        )
                   )
           )
   ),

The type is also the "script" type. In the "params" array the table
and pid passed to the script is set.


.. _core-wizards-colorpicker:

wizard\_colorpicker.php
"""""""""""""""""""""""

The colorpicker wizard allows you to select a HTML color value from a
user-friendly pop-up box. The wizard type is "colorbox" which will
first of all add a colored box next to an input field. Here's how it
looks in a "haiku" record of the "examples" extension:

|img-76| The color of the box is set to the value of the text field. Clicking
the box will open a popup window with the full color picker wizard:

|img-77| Here you can select from the web-color matrix, pick a color from the
sample image or select a HTML-color name from a selector box.

The corresponding TCA configuration looks like this::

   'color' => array(
           'exclude' => 0,
           'label' => 'LLL:EXT:examples/locallang_db.xml:tx_examples_haiku.color',
           'config' => array(
                   'type' => 'input',
                   'size' => 10,
                   'eval' => 'trim',
                   'wizards' => array(
                           'colorChoice' => array(
                                'type' => 'colorbox',
                                'title' => 'LLL:EXT:examples/locallang_db.xml:tx_examples_haiku.colorPick',
                                'script' => 'wizard_colorpicker.php',
                                'dim' => '20x20',
                                'tableStyle' => 'border: solid 1px black; margin-left: 20px;',
                                'JSopenParams' => 'height=600,width=380,status=0,menubar=0,scrollbars=1',
                                'exampleImg' => 'EXT:examples/res/images/japanese_garden.jpg',
                        )
                   )
           )
   ),

Notice the wizard type which is "colorbox".


.. _core-wizards-forms:

wizard\_forms.php
"""""""""""""""""

The forms wizard is used typically with the Content Elements, type
"Mailform". It allows to edit the code-like configuration of the mail
form with a nice editor. This is shown in the introduction to Wizards
above.

This is the available parameters:


.. ### BEGIN~OF~TABLE ###

.. container:: table-row

   Key
         Key

   Type
         Type

   Description
         Description


.. container:: table-row

   Key
         xmlOutput

   Type
         boolean

   Description
         If set, the output from the wizard is XML instead of the strangely
         formatted TypoScript form-configuration code.


.. ###### END~OF~TABLE ######


The configuration used for the editor in Content Elements looks like
this::

   'forms' => array(
           'notNewRecords' => 1,
           'enableByTypeConfig' => 1,
           'type' => 'script',
           'title' => 'Forms wizard',
           'icon' => 'wizard_forms.gif',
           'script' => 'wizard_forms.php?special=formtype_mail',
           'params' => array('xmlOutput' => 0)
   )


.. _core-wizards-table:

wizard\_table.php
"""""""""""""""""

The tables wizard is used typically with the Content Elements, type
"Table". It allows to edit the code-like configuration of the tables
with a visual editor.

|img-78| This is the available parameters:


.. ### BEGIN~OF~TABLE ###

.. container:: table-row

   Key
         Key

   Type
         Type

   Description
         Description


.. container:: table-row

   Key
         xmlOutput

   Type
         boolean

   Description
         If set, the output from the wizard is XML instead of the TypoScript
         table configuration code.


.. container:: table-row

   Key
         numNewRows

   Type
         integer

   Description
         Setting the number of blank rows that will be added in the bottom of
         the table when the plus-icon is pressed. The default is 5, the range
         is 1-50.


.. ###### END~OF~TABLE ######


This is the configuration code used for the table wizard in the
Content Elements::

   'table' => array(
           'notNewRecords' => 1,
           'enableByTypeConfig' => 1,
           'type' => 'script',
           'title' => 'Table wizard',
           'icon' => 'wizard_table.gif',
           'script' => 'wizard_table.php',
           'params' => array('xmlOutput' => 0)
   ),


.. _core-wizards-rte:

wizard\_rte.php
"""""""""""""""

This wizard is used to show a "full-screen" Rich Text Editor field.
The configuration below shows an example taken from the Text field in
Content Elements::

   'RTE' => array(
           'notNewRecords' => 1,
           'RTEonly' => 1,
           'type' => 'script',
           'title' => 'LLL:EXT:cms/locallang_ttc.php:bodytext.W.RTE',
           'icon' => 'wizard_rte2.gif',
           'script' => 'wizard_rte.php',
   ),


.. _core-wizards-tsconfig:

wizard\_tsconfig.php
""""""""""""""""""""

This wizard is used for the TSconfig fields and TypoScript Template
"Setup" fields. It is specialized for that particular situations and
it is not likely you will need it for anything on your own.


.. _core-wizards-browse:

browse\_links.php
"""""""""""""""""

The "Links" wizard is used many places where you want to insert link
references.


.. ### BEGIN~OF~TABLE ###

.. container:: table-row

   Key
         Key

   Type
         Type

   Description
         Description


.. container:: table-row

   Key
         allowedExtensions

   Type
         string

   Description
         Comma separated list of allowed file extensions. By default, all
         extensions are allowed.


.. container:: table-row

   Key
         blindLinkOptions

   Type
         string

   Description
         Comma separated list of link options that should not be displayed.
         Possible values are file, mail, page, spec, and url. By default, all
         link options are displayed.


.. ###### END~OF~TABLE ######


This works not only in the Rich Text Editor but also in "typolink"
fields. Here's an example from tt\_content:

|img-79| Clicking the wizard icons opens the Element Browser window:

|img-80| Such a wizard can be configured like this::

   'image_link' => array(
           'exclude' => 1,
           'label' => 'LLL:EXT:cms/locallang_ttc.php:image_link',
           'config' => array(
                   'type' => 'input',
                   'size' => '15',
                   'max' => '256',
                   'checkbox' => '',
                   'eval' => 'trim',
                   'wizards' => array(
                           '_PADDING' => 2,
                           'link' => array(
                                'type' => 'popup',
                                'title' => 'Link',
                                'icon' => 'link_popup.gif',
                                'script' => 'browse_links.php?mode=wizard',
                                'JSopenParams' => 'height=300,width=500,status=0,menubar=0,scrollbars=1'
                        )
                   ),
                   'softref' => 'typolink[linkList]'
           )
   ),

Notice how the "browse\_links.php" script requires an extra parameter
since it has to return content back to the input field (and not the
RTE for instance which it also supports).

