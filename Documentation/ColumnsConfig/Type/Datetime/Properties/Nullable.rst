.. include:: /Includes.rst.txt
.. _columns-datetime-properties-nullable:

========
nullable
========

.. versionchanged:: 12.0
   This option was introduced to replace the TCA :php:`eval` option with
   :php:`null` as value.

.. confval:: nullable (type => datetime)

   :Path: $GLOBALS['TCA'][$table]['columns'][$field]['config']
   :type: boolean
   :Default: false
   :Scope: Proc

   If set to true an empty date (empty string) is saved as :sql:`NULL` in
   the database.

   The database field should have the according :sql:`NULL` option set.


Example:

.. code-block:: php
   :caption: EXT:some_extension/Configuration/TCA/tx_sometable.php

   'columns' => [
       'nullable_column' => [
           'title' => 'A nullable field',
           'config' => [
               'type' => 'datetime',
               'nullable' => true,
           ],
       ],
   ],
