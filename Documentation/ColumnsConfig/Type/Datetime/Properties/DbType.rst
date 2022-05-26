.. include:: /Includes.rst.txt
.. _columns-input-properties-dbtype:
.. _columns-datetime-properties-dbtype:

======
dbType
======

.. confval:: dbType

   :Path: $GLOBALS['TCA'][$table]['columns'][$field]['config']
   :type: string
   :Scope: Proc.

   If set, the date or time will not be stored as timestamp, but as native
   `date`, `time` or `datetime` field in the database. Keep in mind that no
   timezone conversion will happen.

Examples
========

Date and time picker stored in a datetime field
-----------------------------------------------

.. code-block:: sql
   :caption: :file:`ext_tables.sql`

   CREATE TABLE tx_example_domain_model_foo (
      synced_at datetime default NULL
   )

.. code-block:: sql
   :caption: :file:`Configuration/TCA/tx_example_domain_model_foo.php`

   'synced_at' => [
      'config' => [
         'type' => 'datetime',
         'dbType' => 'datetime',
         'nullable' => true,
      ],
   ],


Time picker stored in a datetime field
-----------------------------------------------

.. code-block:: sql
   :caption: :file:`ext_tables.sql`

   CREATE TABLE tx_example_domain_model_foo (
      synced_at time default NULL
   )

.. code-block:: sql
   :caption: :file:`Configuration/TCA/tx_example_domain_model_foo.php`

   'synced_at' => [
      'config' => [
         'type' => 'datetime',
         'dbType' => 'time',
         'format' => 'time',
         'nullable' => true,
      ],
   ],


.. note::

   .. versionadded:: 12.0

   When this property is *not set* the datetime value is automatically
   converted to an :php:`int`.
