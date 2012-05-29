.. include:: Images.txt

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


['columns'][ *field name* ]['config'] / TYPE: "none"
^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^

This type will just show the value of the field in the backend. The
field is not editable.


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
         type
   
   Datatype
         string
   
   Description
         *[Must be set to "none"]*


.. container:: table-row

   Key
         pass\_content
   
   Datatype
         boolean
   
   Description
         If set, then content from the field is directly outputted in the <div>
         section. Otherwise the content will be passed through
         htmlspecialchars() and possibly nl2br() if there is configuration for
         rows.
         
         Be careful to set this flag since it allows HTML from the field to be
         outputted on the page, thereby creating the possibility of XSS
         security holes.


.. container:: table-row

   Key
         rows
   
   Datatype
         integer
   
   Description
         If this value is greater than 1 the display of the non-editable
         content will be shown in a <div> area trying to simulate the
         rows/columns known from a "text" type element.


.. container:: table-row

   Key
         cols
   
   Datatype
         integer
   
   Description
         See "rows" and "size"


.. container:: table-row

   Key
         fixedRows
   
   Datatype
         boolean
   
   Description
         If this is set the <div> element will not automatically try to fit the
         content length but rather respect the size selected by the value of
         the "rows" key.


.. container:: table-row

   Key
         size
   
   Datatype
         integer
   
   Description
         If rows is less than one, the "cols" value is used to set the width of
         the field and if "cols" is not found, then "size" is used to set the
         width.
         
         The measurements corresponds to those of "input" and "text" type
         fields.


.. ###### END~OF~TABLE ######

