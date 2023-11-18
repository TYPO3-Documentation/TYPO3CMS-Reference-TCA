.. include:: /Includes.rst.txt

.. _columns-number:

======
Number
======

.. versionadded:: 12.0
   The TCA type :php:`number` has been introduced. It replaces the
   :php:`eval=int` and :php:`eval=double2` options of TCA type :php:`input`.

..  versionadded:: 13.0
    When using the `number` type, TYPO3 takes care of
    :ref:`generating the according database field <t3coreapi:auto-generated-db-structure>`.
    A developer does not need to define this field in an extension's
    :file:`ext_tables.sql` file.


The TCA type :php:`number` should be used to input values representing numbers.


.. note::

   The :ref:`slider <columns-number-properties-slider>` option allows to define
   a visual slider element, next to the input field. The steps can be
   defined with the :ref:`slider[step] <columns-number-properties-slider>`
   option. The minimum and maximum value can be configured with the
   :ref:`range[lower] <columns-number-properties-range>` and
   :ref:`range[upper] <columns-number-properties-range>` options.

Migration
=========

Migration from eval='int'
-------------------------

The migration from :php:`eval='int'` to :php:`type=number`
is done like following:

.. code-block:: php

    // Before

    'int_field' => [
        'label' => 'Int field',
        'config' => [
            'type' => 'input',
            'eval' => 'int',
        ]
    ]

    // After

    'int_field' => [
        'label' => 'Int field',
        'config' => [
            'type' => 'number',
        ]
    ]

Migration from eval='double2'
-----------------------------

The migration from :php:`eval=double2` to :php:`type=number`
is done like following:

.. code-block:: php

    // Before

    'double2_field' => [
        'label' => 'double2 field',
        'config' => [
            'type' => 'input',
            'eval' => 'double2',
        ]
    ]

    // After

    'double2_field' => [
        'label' => 'double2 field',
        'config' => [
            'type' => 'number',
            'format' => 'decimal'
        ]
    ]

An automatic TCA migration is performed on the fly, migrating all occurrences
to the new TCA type and triggering a PHP :php:`E_USER_DEPRECATED` error
where code adoption has to take place.

.. toctree::
   :titlesonly:

   Properties/Index
