.. include:: ../../Includes.txt


.. _columns-passthrough:

TYPE: "passthrough"
^^^^^^^^^^^^^^^^^^^

Can be saved/updated through TCE but the value is not evaluated in any
way and the field has no rendering in the TCEforms.

You can use this to send values directly to the database fields
without any automatic evaluation. But still the update gets logged and
the history/undo function will work with such values.

Since there is no rendering mode for this field type it is
specifically fitted for direct API usage with the TCEmain class.


.. only:: html

   .. contents::
      :local:
      :depth: 1


.. _columns-passthrough-properties:

Properties
""""""""""

.. container:: ts-properties

   ======== =========
   Property Data Type
   ======== =========
   `type`_  string
   ======== =========


Property details
""""""""""""""""

.. only:: html

   .. contents::
      :local:
      :depth: 1


.. _columns-passthrough-properties-type:

type
~~~~

.. container:: table-row

   Key
         type

   Datatype
         string

   Description
         *[Must be set to "passthrough"]*


.. _columns-passthrough-examples:

Example
"""""""

This field is found in a number of table, e.g. the "pages" table. It
is used by the system extension "impexp" to store some information.

.. code-block:: php

   'tx_impexp_origuid' => array('config' => array('type' => 'passthrough'))

