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

   If set to true, a checkbox will appear, which by default deactivates the
   field. In the deactivated state the field is saved as :sql:`NULL` in the
   database. By activating the checkbox it is possible to set a value.
   If nothing is entered into the field, then an empty string will be saved and not a :sql:`NULL`.

   When the :ref:`eval <columns-email-properties-eval>` option is set to :php:`unique`
   or :php:`uniqueInPid` multiple :sql:`null` values are still possible.

   The database field must allow the :sql:`NULL` value.


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
