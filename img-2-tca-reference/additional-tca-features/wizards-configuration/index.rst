.. include:: images.txt

.. ==================================================
.. FOR YOUR INFORMATION
.. --------------------------------------------------
.. -*- coding: utf-8 -*- with BOM.

.. ==================================================
.. DEFINE SOME TEXTROLES
.. --------------------------------------------------
.. role::   underline
.. role::   typoscript(code)
.. role::   ts(typoscript)
   :class:  typoscript
.. role::   php(code)


Wizards Configuration
^^^^^^^^^^^^^^^^^^^^^

Wizards are configurable for some field types, namely “input”, “text”,
"select" and "group" types. They provide a way to insert helper-
elements, links to wizard scripts etc.

A well known example of a wizard application is the form wizard:

|img-63| The wizard is configured for the text area field and appears as an
icon to the right. Clicking the icon will guide the user to a view
where the "cryptic" form code is presented in a more user-friendly
interface:

|img-64| Another example of wizards are the new / edit / suggest wizards which
are available for "group" or "select" type fields:

|img-65| 
Configuration of wizards
""""""""""""""""""""""""

The value of the “wizards” key in the field config-array is an array.
Each key is yet another array which configures the individual wizards
for a field. The order of the keys determines the order the wizards
are displayed in. The key-values themselves play no important role
(except from a few reserved words listed in a table below).

The configuration for the new / edit / suggest wizards shown above
looks like this:

::

   'basedOn' => array(
           'label' => 'LLL:EXT:cms/locallang_tca.xml:sys_template.basedOn',
           'config' => array(
                   'type' => 'group',
                   'internal_type' => 'db',
                   'allowed' => 'sys_template',
                   'show_thumbs' => '1',
                   'size' => '3',
                   'maxitems' => '50',
                   'autoSizeMax' => 10,
                   'minitems' => '0',
                   'default' => '',
                   'wizards' => array(
                        '_PADDING' => 4,
                        '_VERTICAL' => 1,
                        'suggest' => array(
                                'type' => 'suggest',
                        ),
                        'edit' => array(
                                'type' => 'popup',
                                'title' => 'Edit template',
                                'script' => 'wizard_edit.php',
                                'popup_onlyOpenIfSelected' => 1,
                                'icon' => 'edit2.gif',
                                'JSopenParams' => 'height=350,width=580,status=0,menubar=0,scrollbars=1',
                        ),
                        'add' => array(
                                'type' => 'script',
                                'title' => 'LLL:EXT:cms/locallang_tca.xml:sys_template.basedOn_add',
                                'icon' => 'add.gif',
                                'params' => array(
                                        'table'=>'sys_template',
                                        'pid' => '###CURRENT_PID###',
                                        'setValue' => 'prepend'
                                ),
                                'script' => 'wizard_add.php',
                        )
                   )
           )
   ),

The part specific to the wizards configuration is highlighted in bold.
The first two lines of this configuration make use of two reserved
keywords to define settings for the display of icons.


Reserved keys
"""""""""""""

Each wizard is identified by a key string. However some strings are
reserved for general configuration. These are listed in this table and
as a rule of thumb they are prefixed with an underscore ("\_"):


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
         \_POSITION
   
   Type
         string
   
   Description
         Determines the position of the wizard-icons/titles.
         
         Default is “right”.
         
         Possible values are “left”, “top”, “bottom”.


.. container:: table-row

   Key
         \_ VERTICAL
   
   Type
         boolean
   
   Description
         If set, the wizard icons (if more than one) will be positioned in a
         column (vertically) and not a row (horizontally, which is default)


.. container:: table-row

   Key
         \_ DISTANCE
   
   Type
         int+
   
   Description
         The distance in pixels between wizard icons (if more than one).


.. container:: table-row

   Key
         \_PADDING
   
   Type
         int+
   
   Description
         The cellpadding of the table which keeps the wizard icons together.


.. container:: table-row

   Key
         \_VALIGN
   
   Type
         string
   
   Description
         valign attribute in the table holding things together.


.. container:: table-row

   Key
         \_HIDDENFIELD
   
   Type
         boolean
   
   Description
         If set, the field itself will be a hidden field (and so not
         visible...)


.. container:: table-row

   Key
         [any other key]
   
   Type
         PHP-Array
   
   Description
         Configuration of the wizard types, see below.


.. ###### END~OF~TABLE ######


General configuration options
"""""""""""""""""""""""""""""

This table lists the general configuration options for (almost) all
wizard types. In particular the value of the "type" key is important
because it denotes what additional options are available.


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
         type
   
   Type
         string
   
   Description
         Defines the type of wizard. The options are listed as headlines in the
         table below.
         
         **This setting is required!**


.. container:: table-row

   Key
         title
   
   Type
         string or LLL reference
   
   Description
         This is the title of the wizard. For those wizards which require a
         physical representation – e.g. a link - this will be the link if no
         icon is presented.


.. container:: table-row

   Key
         icon
   
   Type
         fileref
   
   Description
         This is the icon representing the wizard.
         
         If the first 3 chars are NOT “../” then the file is expected to be in
         “t3lib/gfx/”. So to insert custom images, put them in “../typo3conf/”
         or so. You can also prefix icons from extensions with
         "EXT:ext/[extension key]/directory.../". Generally, the format is the
         same as for referring to icons for selector box options.
         
         If the icon is not set, the title will be used for the link.


.. container:: table-row

   Key
         enableByTypeConfig
   
   Type
         boolean
   
   Description
         If set, then the wizard is enabled only if declared in the Special
         Configuration of specific types (using “wizards[ *list of wizard-keys*
         ]”). See wizard section.


.. container:: table-row

   Key
         RTEonly
   
   Type
         boolean
   
   Description
         If set, then this wizard will appear only if the wizard is presented
         for a RTE field.


.. container:: table-row

   Key
         hideParent
   
   Type
         array
   
   Description
         If set, then the real field will not be shown (but rendered as a
         hidden field). In “hideParent” you can configure the non-editable
         display of the content as if it was a field of the “none” type. The
         options are the same as for the “config” key for “none” types.


.. ###### END~OF~TABLE ######


Specific wizard configuration options based on type
"""""""""""""""""""""""""""""""""""""""""""""""""""


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
         ***Type: script***
         
         Creates a link to an external script which can do "context sensitive"
         processing of the field. This is how the Form and Table wizards are
         used.


.. container:: table-row

   Key
         notNewRecords
   
   Type
         boolean
   
   Description
         If set, the link will appear  *only* if the record is not new (that
         is, it has a proper UID)


.. container:: table-row

   Key
         script
   
   Type
         PHP-script filename
   
   Description
         If the first 3 chars are NOT “../” then the file is expected to be in
         “typo3/”. So to link to custom script, put it in “../typo3conf/”. File
         reference can be prefixed "EXT:[extension key]/" to point to a file
         inside an extension.
         
         A lot of parameters are passed to the script as GET-vars in an array,
         P.


.. container:: table-row

   Key
         params
   
   Type
         array
   
   Description
         Here you can put values which are passed to your script in the P
         array.


.. container:: table-row

   Key
         popup\_onlyOpenIfSelected
   
   Type
         boolean
   
   Description
         If set, then an element (one or more) from the list must be selected.
         Otherwise the popup will not appear and you will get a message alert
         instead. This is supposed to be used with the wizard\_edit.php script
         for editing records in "group" type fields.


.. container:: table-row

   Key
         ***Type: popup (+colorbox)***
         
         Creates a link to an external script opened in a pop-up window.


.. container:: table-row

   Key
         notNewRecords
   
   Type
         boolean
   
   Description
         See above, type “script”


.. container:: table-row

   Key
         script
   
   Type
         PHP-script filename
   
   Description
         See above, type “script”


.. container:: table-row

   Key
         params
   
   Type
   
   
   Description
         See above, type “script”


.. container:: table-row

   Key
         JSopenParams
   
   Type
         string
   
   Description
         Parameters to open JS window:
         
         **Example:**
         
         ::
         
            "JSopenParams" => "height=300,width=250,status=0,menubar=0,scrollbars=1",


.. container:: table-row

   Key
         ***Type: userFunc***
         
         Calls a user function/method to produce the wizard or whatever they
         are up to.


.. container:: table-row

   Key
         notNewRecords
   
   Type
         boolean
   
   Description
         See above, type “script”


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
         
         Two parameters are passed to the function/method: 1) An array with
         parameters, much like the ones passed to scripts. One key is special
         though: the “item” key, which is passed by reference. So if you alter
         that value it is reflected  *back* ! 2) $this (reference to the
         TCEform-object).
         
         The content returned from the function call is inserted at the
         position where the the icon/title would normally go.


.. container:: table-row

   Key
         ***Type: colorbox***
         
         Renders a square box (table) with the background color set to the
         value of the field. The id-attribute is set to a md5-hash so you might
         change the color dynamically from pop-up- wizard.
         
         The icon is not used, but the title is given as alt-text inside the
         color-square.


.. container:: table-row

   Key
         dim
   
   Type
         W x H, pixels
   
   Description
         Determines the dimensions of the box. Default is 20 pixels.
         
         ::
         
            "dim" => "50x20",


.. container:: table-row

   Key
         tableStyle
   
   Type
         style-attribute content in table-tag
   
   Description
         Sets the border style of the table, eg:
         
         ::
         
            "tableStyle" => "border:solid 1px black;"


.. container:: table-row

   Key
         exampleImg
   
   Type
         string
   
   Description
         Reference to a sample (relative to PATH\_typo3 directory).
         
         You can prefix with "EXT:" to get image from extension.
         
         An image width of 350 is optimal for display.
         
         **Example:**
         
         'exampleImg' => 'gfx/wizard\_colorpickerex.jpg'


.. container:: table-row

   Key
         ***Type: select***
         
         This renders a selector box. When a value is selected in the box, the
         value is transferred to the field and the field (default) element is
         thereafter selected (this is a blank value and the label is the wizard
         title).
         
         “select” wizards make no use of the icon.
         
         The “select” wizard's select-properties can be manipulated with the
         same number of TSconfig options which are available for “real” select-
         types in TCEFORM.[table].[field]. The position of these properties is
         “TCEFORM.[ *table* ].[ *field* ].wizards.[ *wizard-key* ]”.


.. container:: table-row

   Key
         mode
   
   Type
         append, prepend, [blank]
   
   Description
         Defines how the value is processed: Either added to the front or back
         or (default) substitutes the existing.


.. container:: table-row

   Key
         items,
         
         foreign\_table\_
         
         etc...
   
   Type
         Options related to the selection of elements known from “select” form-
         element type in $TCA.
   
   Description
         **Example:**
         
         ::
         
            'items' => array(
                    array('8 px', '8'),
                    array('10 px', '10'),
                    array('11 px', '11'),
                    array('12 px', '12'),
                    array('14 px', '14'),
                    array('16 px', '16'),
                    array('18 px', '18'),
                    array('20 px', '20')
            )


.. container:: table-row

   Key
         ***Type: suggest***
         
         This renders an input field next to a select field of type "group"
         (internal\_type=db) or of type "select" (using foreign\_table). After
         the user has typed at least 2 (minimumCharacters) characters in this
         field, a search will start and show a list of records matching the
         search word. The "suggest" wizard's properties can be configured
         directly in TCA or in page TSConfig (TCEFORM.suggest.default,
         TCEFORM.suggest.[queryTable], see TSconfig manual).
         
         The configuration options are applied to each table queried by the
         suggest wizard. There's a general “default” configuration that applies
         to all tables. On top of that, there can be specific configurations
         for each table (use the table's name as a key). See wizard example
         below.


.. container:: table-row

   Key
         pidList
   
   Type
         list of values
   
   Description
         Limit the search to certain pages (and their subpages). When pidList
         is empty all pages will be included in the search (as long as the
         be\_user is allowed to see them).
         
         **Example:**
         
         ::
         
            $TCA['pages']['columns']['storage_pid']['config']['wizards']['suggest'] = array(
                    'type' => 'suggest',
                    'default' => array(
                            'pidList' => '1,2,3,45',
                    ),
            );


.. container:: table-row

   Key
         pidDepth
   
   Type
         integer
   
   Description
         Expand pidList by this number of levels. Has an effect only if pidList
         has a value.
         
         **Example:**
         
         ::
         
            $TCA['pages']['columns']['storage_pid']['config']['wizards']['suggest'] = array(
                    'type' => 'suggest',
                    'default' => array(
                            'pidList' => '6,7',
                            'pidDepth' => 4
                    ),
            );


.. container:: table-row

   Key
         minimumCharacters
   
   Type
         integer
   
   Description
         Minimum number of characters needed to start the search. Works only in
         "default" configuration.


.. container:: table-row

   Key
         maxPathTitleLength
   
   Type
         integer
   
   Description
         Maximum number of characters to display when a path element is too
         long


.. container:: table-row

   Key
         searchWholePhrase
   
   Type
         boolean
   
   Description
         Whether to do a LIKE=%mystring% (searchWholePhrase = 1) or a
         LIKE=mystring% (to do a real find as you type), default: 0
         
         **Example:**
         
         ::
         
            $TCA['pages']['columns']['storage_pid']['config']['wizards']['suggest'] = array(
                    'type' => 'suggest',
                    'default' => array(
                            'searchWholePhrase' => 1,
                    ),
            );


.. container:: table-row

   Key
         searchCondition
   
   Type
         string
   
   Description
         Additional WHERE clause (no AND needed to prepend)
         
         **Example:**
         
         ::
         
            // configures the suggest wizard for the field "storage_pid" in table "pages" to search only for pages with doktype=1
            $TCA['pages']['columns']['storage_pid']['config']['wizards']['suggest'] = array(
                    'type' => 'suggest',
                    'default' => array(
                            'searchCondition' => 'doktype=1',
                    ),
            );


.. container:: table-row

   Key
         cssClass
   
   Type
         string
   
   Description
         Add a CSS class to every list item of the result list.


.. container:: table-row

   Key
         receiverClass
   
   Type
         string
   
   Description
         PHP class alternative receiver class - the file that holds the class
         needs to be included manually before calling the suggest feature
         (default: t3lib\_tceforms\_suggest\_defaultreceiver), should be
         derived from "t3lib\_tceforms\_suggest\_defaultreceiver".


.. container:: table-row

   Key
         renderFunc
   
   Type
         string
   
   Description
         User function to manipulate the displayed records in the results.


.. container:: table-row

   Key
         ***Type: slider***
         
         This renders a slider next to the field. It works for either input-
         type fields or select-type fields. For select-type fields, the wizard
         will "slide" through the items making up the field. For input-type
         fields, it will work only for fields evaluated to integer, float and
         time. It is advised to also define a "range" property, otherwise the
         slider will go from 0 to 10000.
         
         **Note** : the range is properly taken into account only as of TYPO3
         4.6.1.


.. container:: table-row

   Key
         step
   
   Type
         integer/float
   
   Description
         Sets the step size the slider will use. For floating point values this
         can itself be a floating point value.


.. container:: table-row

   Key
         width
   
   Type
         pixels
   
   Description
         Defines the width of the slider


.. ###### END~OF~TABLE ######


In the next section the more complex core wizard scripts are
demonstrated with examples. Before that, here are a few examples of
simpler core wizards.


Example - Selector box of preset values
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

You can add a selector box containing preset values next to a field:

|img-66| When an option from the selector box is selected it will be
transferred to the input field of the element. The mode of transfer
can be either substitution (default) or prepending or appending the
value to the existing value.

This is the corresponding TCA configuration:

::

   'season' => array(
           'exclude' => 0,
           'label' => 'LLL:EXT:examples/locallang_db.xml:tx_examples_haiku.season',
           'config' => array(
                   'type' => 'input',
                   'size' => 20,
                   'eval' => 'trim',
                   'wizards' => array(
                           'season_picker' => array(
                                   'type' => 'select',
                                   'mode' => '',
                                   'items' => array(
   array('LLL:EXT:examples/locallang_db.xml:tx_examples_haiku.season.spring', 'Spring'),
   array('LLL:EXT:examples/locallang_db.xml:tx_examples_haiku.season.summer', 'Summer'),
   array('LLL:EXT:examples/locallang_db.xml:tx_examples_haiku.season.autumn', 'Autumn'),
   array('LLL:EXT:examples/locallang_db.xml:tx_examples_haiku.season.winter', 'Winter'),
                                   )
                           )
                   )
           )
   ),


Example - User defined wizard (processing with PHP function)
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

The "userFunc" type of wizard allows you to render all the wizard code
yourself. Theoretically, you could produce all of the other wizard
kinds ("script", "popup", "colorbox", etc.) with your own user
function if you wanted to alter their behavior.

In this example the wizard provides to JavaScript-powered buttons that
make it possible to increase or decrease the value in the field by 1.
The wizard also highlights the field with a background color. This is
how it looks:

|img-67| The corresponding configuration is:

::

   'weirdness' => array(
           'exclude' => 0,
           'label' => 'LLL:EXT:examples/locallang_db.xml:tx_examples_haiku.weirdness',
           'config' => array(
                   'type' => 'input',
                   'size' => 10,
                   'eval' => 'int',
                   'wizards' => array(
                           'specialWizard' => array(
                                   'type' => 'userFunc',
                                   'userFunc' => 'EXT:examples/class.tx_examples_tca.php:tx_examples_tca->someWizard',
                                   'params' => array(
                                           'color' => 'green'
                                   )
                           )
                   )
           )
   ),

Notice the “params” array, which is passed to the user function that
handles the wizard. And here's the code of the user function (from
file class.tx\_examples\_tca.php of the “examples” extension):

::

   function someWizard($PA, $fObj) {
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
                   // Create the + button
           $onClick = "document." . $PA['formName'] . "['" . $PA['itemName'] . "'].value++; return false;";
           $output .= '<a href="#" onclick="' . htmlspecialchars($onClick) . '" style="padding: 6px; border: 1px solid black; background-color: #999">+</a>';
                   // Create the - button
           $onClick = "document." . $PA['formName'] . "['" . $PA['itemName'] . "'].value--; return false;";
           $output .= '<a href="#" onclick="' . htmlspecialchars($onClick) . '" style="padding: 6px; border: 1px solid black; background-color: #999">-</a>';
           $output .= '</div>';
           return $output;
   }

First the HTML code of the field itself is manipulated, by adding a
div tag around it. Notice how all you need to do is to change the
value of $PA['item'] since that value is passed by reference to the
function and therefore doesn't need a return value - only to be
changed. In that div, we use the color received as parameter.

After that we create the JavaScript and the links for both the “+” and
“-” buttons and we return the resulting HTML code.

Use the debug() function to find more about what is available in the
$PA array.


Example - add a suggest wizard
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

As an example, let's look at the suggest wizard setup for the “General
Record Storage page”. The wizard looks like this:

|img-68| And here's the wizard in action:

|img-69| Here's the corresponding TCA configuration:

::

   $TCA['pages']['columns']['storage_pid']['config']['wizards']['suggest'] = array(
           'type' => 'suggest',
           'default' => array(
                   'searchWholePhrase' => 1,
                   'maxPathTitleLength' => 40,
                   'maxItemsInResultList' => 5
           ),
           'pages' => array(
                   'searchCondition' => 'doktype=1',
           ),
   );

The tables that are queried are the ones used in
$TCA['pages']['columns']['storage\_pid']['config']['allowed'].

The wizard can be configured differently for each of these tables. The
settings in "default" is applied to all tables. In the example above,
there's a special setting for the “pages” table.


Example – Add a slider wizard
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

The "haiku" table in the "examples" extension implements a slider
wizard for the "Angle" field. The field configuration looks like this:

::

   'angle' => array(
           'exclude' => 0,
           'label' => 'LLL:EXT:examples/locallang_db.xml:tx_examples_haiku.angle',
           'config' => array(
                   'type' => 'input',
                   'size' => 5,
                   'eval' => 'trim,int',
                   'range' => array(
                        'lower' => -90,
                        'upper' => 90
                ),
                   'default' => 0,
                   'wizards' => array(
                        'angle' => array(
                                'type' => 'slider',
                                'step' => 10,
                                'width' => 200
                        )
                )
           )
   ),

Note the range which defines the possible values as varying from -90
to 90. With the step property we indicate that we want to progress by
increments of 10. The slider wizard is rendered like this:

