.. include:: /Includes.rst.txt

.. _columns-datetime:

========
Datetime
========

.. versionadded:: 12.0
   The TCA type :php:`datetime` has been introduced. It replaces the
   :php:`renderType=inputDateTime` of TCA type :php:`input`.

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
            'eval' => 'int',
            'default' => 0,
        ]
    ]

An automatic TCA migration is performed on the fly, migrating all occurrences
to the new TCA type and triggering a PHP :php:`E_USER_DEPRECATED` error
where code adoption has to take place.

.. toctree::
   :titlesonly:

   Properties/Index
