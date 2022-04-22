.. include:: /Includes.rst.txt
.. _columns-email-properties-nullable:

========
nullable
========

.. versionchanged:: 12.0
   This option was introduced to replace the TCA :php:`eval` option with
   :php:`null` as value.

.. confval:: nullable (type => email)

   :Path: $GLOBALS['TCA'][$table]['columns'][$field]['config']
   :type: boolean
   :Default: false
   :Scope: Proc

   If set to true an empty email (empty string) is saved as :sql:`NULL` in
   the database.

   When the :confval:`eval ('type' => 'email')` option is set to :php:`unique`
   or :php:`uniqueInPid` multiple :sql:`null` values are still possible.

   The database field should have the according :sql:`NULL` option set.


Example:

.. code-block:: php
   :caption: EXT:some_extension/Configuration/TCA/tx_sometable.php

   'columns' => [
       'nullable_column' => [
           'title' => 'A nullable field',
           'config' => [
               'type' => 'email',
               'nullable' => true,
               'eval' => 'uniqueInPid',
           ],
       ],
   ],
