.. ==================================================
.. FOR YOUR INFORMATION
.. --------------------------------------------------
.. -*- coding: utf-8 -*- with BOM.

.. include:: ../../Includes.txt
.. include:: Images.txt


.. _palettes:

['palettes'] section
^^^^^^^^^^^^^^^^^^^^

"Palettes" represent a way to move less frequently used form fields
out of sight. Palettes are groups of field which are associated with
another field in the main form. When this field is activated the
palette fields are displayed. In the backend, “palettes” are known as
"secondary options".

Let's add a palette to the example from the previous section. The
palette itself is defined like this::

   'palettes' => array(
           '1' => array('showitem' => 'enforce_date'),
   ),

Now we change the “types” configuration to link the palette to the
“some\_date” field::

   '0' => array('showitem' => 'hidden, record_type, title, some_date;;1 '),

When a palette exists, an icon appears next to the relevant field:

|img-57| Clicking on this icon, the palette is revealed:

|img-58| |img-59| Palette display can be activated permanently by checking the “Show
secondary options” box at the bottom of any forms screen:

|img-52| **Note**

This checkbox may be hidden per TSConfig, so it may not appear all the
time.


.. ### BEGIN~OF~TABLE ###

.. container:: table-row

   Key
         Key

   Datatype
         Datatype

   Description
         Description


.. container:: table-row

   Key
         showitem

   Datatype
         string

         (list of field names)

   Description
         **Required.**

         Configuration of the displayed order of fields in the palette.
         Remember that a field name must not appear in more than one palette
         and not more than one time!. E.g. 'hidden,starttime,endtime'


.. container:: table-row

   Key
         canNotCollapse

   Datatype
         boolean

   Description
         If set, then this palette is not allowed to 'collapse' in the
         TCEforms-display.

         This basically means that if "Show secondary options" is not on, this
         palette is  *still* displayed in the main form and not linked with an
         icon.


.. container:: table-row

   Key
         isHiddenPalette

   Datatype
         boolean

   Description
         (Since TYPO3 4.7) If set, then this palette will never be shown, but
         the fields of the palette are technically rendered as hidden elements
         in the TCEForm.

         This is sometimes useful when you want to set a field's value by
         JavaScript from another user-defined field. You can also use it along
         with the IRRE (TCA type "inline") foreign\_selector feature if you
         don't want the relation field to be displayed (it must be technically
         present and rendered though, that's why you should put it to a hidden
         palette in that case).


.. ###### END~OF~TABLE ######


All fields in a palette are shown on a single line. Since TYPO3 4.3,
it is possible to place them on several lines by using the
:code:`--linebreak--` keyword.


.. _palette-examples:

Example
"""""""

::

   'palettes' => array(
      '1' => array('showitem' => 'salutation, firstname, lastname, --linebreak--, mobile, phone, fax, --linebreak--, email, email_work),
   )

