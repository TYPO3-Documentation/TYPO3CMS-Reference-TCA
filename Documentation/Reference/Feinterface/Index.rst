.. ==================================================
.. FOR YOUR INFORMATION
.. --------------------------------------------------
.. -*- coding: utf-8 -*- with BOM.

.. include:: ../../Includes.txt


.. _feinterface:

['feInterface'] section
^^^^^^^^^^^^^^^^^^^^^^^

The "feInterface" section contains properties related to Front End
Editing of the table, mostly related to the feAdmin\_lib.

It is deprecated in the sense that it will still exist, but will not be
(and should not be) extended further.


.. ### BEGIN~OF~TABLE ###


.. container:: table-row

   Key
         editableRecordFields

   Datatype
         string

         (list of field names)

   Description
         List of fields, example: '\*name, \*type, biography, filmography'.


.. container:: table-row

   Key
         fe\_admin\_fieldList

   Datatype
         string

         (list of field names)

   Description
         List of fields allowed for editing/creation with the fe\_adminLib
         module, see media/scripts/fe\_adminLib, example:
         'pid,name,title,address'


.. ###### END~OF~TABLE ######

