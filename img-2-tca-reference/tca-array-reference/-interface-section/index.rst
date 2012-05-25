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


['interface'] section
^^^^^^^^^^^^^^^^^^^^^

Contains configuration for display and listing in various parts of the
core backend:


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
         showRecordFieldList
   
   Datatype
         string
         
         (list of field names)
   
   Description
         Defines which fields are shown in the show-item dialog. E.g.
         'doktype,title,alias,hidden,....'


.. container:: table-row

   Key
         always\_description
   
   Datatype
         boolean
   
   Description
         If set, the description/helpicons are always shown regardless of the
         configuration of the user. Works only in TCEforms and for tables
         loaded via t3lib\_BEfunc::loadSingleTableDescription()
         
         |img-9|


.. container:: table-row

   Key
         maxDBListItems
   
   Datatype
         integer
   
   Description
         Max number of items shown in the List module


.. container:: table-row

   Key
         maxSingleDBListItems
   
   Datatype
         integer
   
   Description
         Max number of items shown in the List module, if this table is listed
         in Extended mode (listing only a single table)


.. ###### END~OF~TABLE ######


((generated))
"""""""""""""

Example
~~~~~~~

This is how the "pages" table is configured for these settings (in
t3lib/stddb/tables.php):

::

       'interface' => array(
           'showRecordFieldList' => 'doktype,title',
           'maxDBListItems' => 30,
           'maxSingleDBListItems' => 50
       ),

