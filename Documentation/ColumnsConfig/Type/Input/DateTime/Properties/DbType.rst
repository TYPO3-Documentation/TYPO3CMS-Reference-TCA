.. include:: /Includes.rst.txt
.. _columns-input-properties-dbtype:

======
dbType
======

   :type: string
   :Scope: Proc.

    If set, the date or time will not be stored as timestamp, but as native
    `date`, `time` or `datetime` field in the database. Keep in mind that no
    timezone conversion will happen.

    **Examples**

    Datetime:

    :file:`ext_tables.sql`:

    .. code-block:: sql

       CREATE TABLE tx_example_domain_model_foo (
          synced_at datetime default NULL
       )

    :file:`Configuration/TCA/tx_example_domain_model_foo.php`:

    .. code-block:: php

       'synced_at' => [
          'config' => [
             'type' => 'input',
             'renderType' => 'inputDateTime',
             'dbType' => 'datetime',
             'eval' => 'datetime,null',
          ],
       ],


    Time:

    :file:`ext_tables.sql`:

    .. code-block:: sql

       CREATE TABLE tx_example_domain_model_foo (
          synced_at time default NULL
       )

    :file:`Configuration/TCA/tx_example_domain_model_foo.php`::

       'synced_at' => [
          'config' => [
             'type' => 'input',
             'dbType' => 'time',
             'eval' => 'time,null',
          ],
       ],


    .. note::

       When this property is *not set* you have to add :php:`int` to the :ref:`eval option <columns-input-properties-eval>`.
       (Otherwise the database might complain about invalid values.)
