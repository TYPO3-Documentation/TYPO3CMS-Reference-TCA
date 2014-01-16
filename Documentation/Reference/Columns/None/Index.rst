.. ==================================================
.. FOR YOUR INFORMATION
.. --------------------------------------------------
.. -*- coding: utf-8 -*- with BOM.

.. include:: ../../../Includes.txt


.. _columns-none:

TYPE: "none"
^^^^^^^^^^^^

This type will just show the value of the field in the backend. The
field is not editable.

.. only:: html

   .. contents::
      :local:
      :depth: 1


.. _columns-none-properties:

Properties
""""""""""

.. container:: ts-properties

   ================ =========
   Property         Data Type
   ================ =========
   `cols`_          integer
   `fixedRows`_     boolean
   `pass\_content`_ boolean
   `rows`_          integer
   `size`_          integer
   `type`_          string
   ================ =========

Property details
""""""""""""""""

.. only:: html

   .. contents::
      :local:
      :depth: 1


.. _columns-none-properties-type:

type
~~~~

.. container:: table-row

   Key
         type

   Datatype
         string

   Description
         *[Must be set to "none"]*



.. _columns-none-properties-pass-content:

pass\_content
~~~~~~~~~~~~~

.. container:: table-row

   Key
         pass\_content

   Datatype
         boolean

   Description
         If set, then content from the field is directly outputted in the :code:`<div>`
         section. Otherwise the content will be passed through
         :code:`htmlspecialchars()` and possibly :code:`nl2br()`
         if there is configuration for rows.

         Be careful to set this flag since it allows HTML from the field to be
         outputted on the page, thereby creating the possibility of XSS
         security holes.



.. _columns-none-properties-rows:

rows
~~~~

.. container:: table-row

   Key
         rows

   Datatype
         integer

   Description
         If this value is greater than 1 the display of the non-editable
         content will be shown in a :code:`<div>` area trying to simulate the
         rows/columns known from a :ref:`text-type element <columns-text>`.



.. _columns-none-properties-cols:

cols
~~~~

.. container:: table-row

   Key
         cols

   Datatype
         integer

   Description
         See :ref:`rows <columns-none-properties-rows>` and :ref:`size <columns-none-properties-size>`.



.. _columns-none-properties-fixedrows:

fixedRows
~~~~~~~~~

.. container:: table-row

   Key
         fixedRows

   Datatype
         boolean

   Description
         If this is set the :code:`<div>` element will not automatically try to fit the
         content length but rather respect the size selected by the value of
         the :ref:`rows <columns-none-properties-rows>` key.



.. _columns-none-properties-size:

size
~~~~

.. container:: table-row

   Key
         size

   Datatype
         integer

   Description
         If rows is less than one, the :ref:`cols <columns-none-properties-cols>` value is used to set the width of
         the field and if :code:`cols` is not found, then :ref:`size <columns-none-properties-size>`
         is used to set the width.

         The measurements corresponds to those of :ref:`input <columns-input>` and :ref:`text <columns-text>` type fields.
