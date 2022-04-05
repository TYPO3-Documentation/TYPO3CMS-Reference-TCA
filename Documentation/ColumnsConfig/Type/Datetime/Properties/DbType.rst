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
         'renderType' => 'inputDateTime',
         'dbType' => 'datetime',
         'eval' => 'datetime,null',
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
         'eval' => 'time,null',
      ],
   ],


.. note::

   When this property is *not set* you have to add :php:`int` to the
   :ref:`eval option <columns-input-properties-eval>`.
   (Otherwise the database might complain about invalid values.)
