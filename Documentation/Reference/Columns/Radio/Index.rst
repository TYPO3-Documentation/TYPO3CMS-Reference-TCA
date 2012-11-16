.. ==================================================
.. FOR YOUR INFORMATION
.. --------------------------------------------------
.. -*- coding: utf-8 -*- with BOM.

.. include:: ../../../Includes.txt
.. include:: Images.txt


.. _columns-radio:

TYPE: "radio"
^^^^^^^^^^^^^

Radio buttons are seldom used, but sometimes they can be more
attractive than their more popular sisters (selector boxes).

Here you see radio buttons in action for the "Filemounts" records:

|img-18|

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
         *[Must be set to "radio"]*

   Scope
         *Display / Proc.*


.. container:: table-row

   Key
         items

   Datatype
         array

   Description
         **Required.**

         An array of the values which can be selected.

         Each entry is in itself an array where the  *first entry* is the
         *title* (string or LLL reference) and the  *second entry* is the
         *value* of the radio button.

         See example below.

   Scope
         Display


.. container:: table-row

   Key
         default

   Datatype
         mixed

   Description
         Default value.

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


.. _columns-radio-examples:

Example
"""""""

An example of radio buttons configuration from "sys\_filemounts" (see
above)::

   'base' => array(
           'label' => 'LLL:EXT:lang/locallang_tca.xml:sys_filemounts.base',
           'config' => array(
                   'type' => 'radio',
                   'items' => array(
                           array('LLL:EXT:lang/locallang_tca.xml:sys_filemounts.base_absolute', 0),
                           array('LLL:EXT:lang/locallang_tca.xml:sys_filemounts.base_relative', 1)
                   ),
                   'default' => 0
           )
   )

