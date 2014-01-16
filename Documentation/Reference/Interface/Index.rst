.. ==================================================
.. FOR YOUR INFORMATION
.. --------------------------------------------------
.. -*- coding: utf-8 -*- with BOM.

.. include:: ../../Includes.txt


.. _interface:

['interface'] section
^^^^^^^^^^^^^^^^^^^^^

Contains configuration for display and listing in various parts of the
core backend:


.. only:: html

   .. contents::
      :local:
      :depth: 1


.. _interface-properties:

Properties
""""""""""

.. container:: ts-properties

   ======================= =========
   Property                Data Type
   ======================= =========
   `maxDBListItems`_       integer
   `maxSingleDBListItems`_ integer
   `showRecordFieldList`_  string
   ======================= =========

Property details
""""""""""""""""

.. only:: html

   .. contents::
      :local:
      :depth: 1


.. _interface-properties-showrecordfieldlist:

showRecordFieldList
~~~~~~~~~~~~~~~~~~~

.. container:: table-row

   Key
         showRecordFieldList

   Datatype
         string

         (list of field names)

   Description
         Defines which fields are shown in the show-item dialog. E.g.
         'doktype,title,alias,hidden,....'



.. _interface-properties-maxdblistitems:

maxDBListItems
~~~~~~~~~~~~~~

.. container:: table-row

   Key
         maxDBListItems

   Datatype
         integer

   Description
         Max number of items shown in the List module



.. _interface-properties-maxsingledblistitems:

maxSingleDBListItems
~~~~~~~~~~~~~~~~~~~~

.. container:: table-row

   Key
         maxSingleDBListItems

   Datatype
         integer

   Description
         Max number of items shown in the List module, if this table is listed
         in Extended mode (listing only a single table)


.. _interface-examples:

Example
"""""""

This is how the "pages" table is configured for these settings:

.. code-block:: php

	'interface' => array(
		'showRecordFieldList' => 'doktype,title,alias,...,backend_layout,backend_layout_next_level',
		'maxDBListItems' => 30,
		'maxSingleDBListItems' => 50
	),
