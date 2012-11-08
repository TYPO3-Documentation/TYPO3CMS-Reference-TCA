.. ==================================================
.. FOR YOUR INFORMATION
.. --------------------------------------------------
.. -*- coding: utf-8 -*- with BOM.

.. include:: ../../Includes.txt
.. include:: Images.txt


['columns'][ *field name* ]['config'] / TYPE: "check"
^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^

This type creates checkbox(es). Such elements might look like this:

|img-16| You can also configure checkboxes to appear in an array:

|img-17| You can have between 1 and 10 checkboxes and the field type in the
database must be an integer. No matter how many checkboxes you have
each check box will correspond to a single bit in the integer value.
Even if there is only one checkbox (which in turn means that you
should theoretically check the bit-0 of values from single-checkbox
fields and not just whether it is true or false!).


.. ### BEGIN~OF~TABLE ###

.. container:: table-row

   Key
         Key

   Datatype
         Datatype

   Description
         Description

   Scope
         Scope


.. container:: table-row

   Key
         type

   Datatype
         string

   Description
         *[Must be set to "check"]*

   Scope
         Display / Proc.


.. container:: table-row

   Key
         items

   Datatype
         array

   Description
         If set, this array will create an array of checkboxes instead of just
         a single "on/off" checkbox.

         **Notice:** You can have a maximum of 10 checkboxes in such an array
         and each element is represented by a single bit in the integer value
         which ultimately goes into the database.

         In this array each entry is itself an array where the first entry is
         the label (string or LLL reference) and the second entry is a blank
         value. The value sent to the database will be an integer where each
         bit represents the state of a checkbox in this array.

         **Example:** ::

            'items' => array(
                array('Green tomatoes', ''),
                array('Red peppers', '')
            ),

   Scope
         Display


.. container:: table-row

   Key
         cols

   Datatype
         integer

   Description
         How many columns the checkbox array are shown in.

         Range is 1-10, 1 being default.

         (Makes sense only if the 'array' key is defining a checkbox array)

   Scope
         Display


.. container:: table-row

   Key
         showIfRTE

   Datatype
         boolean

   Description
         If set, this field will show  *only* if the RTE editor is enabled
         (which includes correct browser version and user-rights altogether.)

   Scope
         Display


.. container:: table-row

   Key
         default

   Datatype
         integer

   Description
         Setting the default value of the checkbox(es).

         **Notice:** Each bit corresponds to a check box (even if only one
         checkbox which maps to bit-0).

   Scope
         Display / Proc.


.. container:: table-row

   Key
         itemsProcFunc

   Datatype
         string

         (function reference)

   Description
         PHP function which is called to fill / manipulate the array with
         elements.

         The function/method will have an array of parameters passed to it
         (where the item-array is passed by reference in the key 'items'). By
         modifying the array of items, you alter the list of items.

         For more information, see how user-functions are specified in the
         section about 'wizards' some pages below here.

   Scope
         Display


.. ###### END~OF~TABLE ######


Now follows some code listings as examples:


((generated))
"""""""""""""

Example: A single checkbox
~~~~~~~~~~~~~~~~~~~~~~~~~~

A plain vanilla checkbox::

   'enforce_date' => array(
           'exclude' => 0,
           'label' => 'LLL:EXT:examples/locallang_db.xml:tx_examples_dummy.enforce_date',
           'config' => array(
                   'type' => 'check',
           )
   ),


Example: A checkbox array
~~~~~~~~~~~~~~~~~~~~~~~~~

This is an example of a checkbox array with two checkboxes in it. The
first checkbox will have bit-0 and the second bit-1::

   'l18n_cfg' => array(
           'exclude' => 1,
           'label' => 'LLL:EXT:cms/locallang_tca.xml:pages.l18n_cfg',
           'config' => array(
                   'type' => 'check',
                   'items' => array(
                           array(
                                   'LLL:EXT:cms/locallang_tca.xml:pages.l18n_cfg.I.1',
                                   '',
                           ),
                           array(
                                   $GLOBALS['TYPO3_CONF_VARS']['FE']['hidePagesIfNotTranslatedByDefault'] ?
                                                   'LLL:EXT:cms/locallang_tca.xml:pages.l18n_cfg.I.2a' :
                                                   'LLL:EXT:cms/locallang_tca.xml:pages.l18n_cfg.I.2',
                                   '',
                           ),
                   ),
           ),
   ),

If we wanted both checkboxes to checked by default, we would set the
"default" property to '3' (since this contains both bit-0 and bit-1).

