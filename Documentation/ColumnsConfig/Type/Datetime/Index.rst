.. include:: /Includes.rst.txt

.. _columns-input-renderType-inputDateTime:
.. _columns-datetime:

========
Datetime
========

..  versionadded:: 12.0
    The TCA type :php:`datetime` has been introduced. It replaces the
    :php:`renderType=inputDateTime` of TCA type :php:`input`.

    When using the `datetime` type, TYPO3 takes care of
    :ref:`generating the according database field <t3coreapi:auto-generated-db-structure>`.
    A developer does not need to define this field in an extension's
    :file:`ext_tables.sql` file.

..  versionchanged:: 13.0
    The database type has changed from :sql:`int unsigned` to :sql:`bigint unsigned`
    when the field auto-generated. This allows to store dates until 2106.


The TCA type :php:`datetime` should be used to input values representing a
date time or datetime.

Example
=======

A simple date field, stored as :sql:`int` in the database:

.. code-block:: php

    'a_datetime_field' => [
        'label' => 'Datetime field',
        'config' => [
            'type' => 'datetime',
            'format' => 'date',
            'eval' => 'int',
            'default' => 0,
        ]
    ]

Migration
=========

A complete migration from :php:`renderType=inputDateTime` to :php:`type=datetime`
looks like the following:

.. code-block:: php

    // Before

    'a_datetime_field' => [
        'label' => 'Datetime field',
        'config' => [
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'required' => true,
            'size' => 20,
            'max' => 1024,
            'eval' => 'date,int',
            'default' => 0,
        ],
    ],

   // After

    'a_datetime_field' => [
        'label' => 'Datetime field',
        'config' => [
            'type' => 'datetime',
            'format' => 'date',
            'required' => true,
            'size' => 20,
            'default' => 0,
        ]
    ]

An automatic TCA migration is performed on the fly, migrating all occurrences
to the new TCA type and triggering a PHP :php:`E_USER_DEPRECATED` error
where code adoption has to take place.

Notes
=====

.. note::

    .. versionadded:: 12.0

    TYPO3 automatically creates database fields for all TCA type
    :php:`datetime` columns, if those are not already manually
    defined in the corresponding extensions' :file:`ext_tables.sql` file.

.. note::

   TYPO3 does not handle the following dates properly:

   *  Before Christ (negative year)
   *  double-digit years


.. toctree::
   :titlesonly:

   Properties/Index
