.. include:: ../Includes.txt

.. _types:

=========
['types']
=========

.. note::
    :ref:`Click here if you are looking for ['columns']['config']['type']. <columns-types>`


Introduction
------------

The ['types'] section plays a crucial role in TCA to specify which fields from the :ref:`['columns'] section <columns>`
are displayed if editing a table row in FormEngine. At least one type has to be configured before any field
will show up, the default type is :code:`0`.

Multiple types can be configured, which one is selected depends on the value of the field specified in
:ref:`['ctrl']['type'] property <ctrl-reference-type>`. This approach is similar to what is often done with
`Single Table Inheritance <https://en.wikipedia.org/wiki/Single_Table_Inheritance>`__ in Object-orientated
programming.

The ['types'] system is powerful and allows differently shaped editing forms re-using fields, having own fields
for specific forms and arranging fields differently on top of a single database table. The `tt_content` with all
its different content elements is a good example on what can be done with ['types'].

The basic ['types'] structure looks like this:

.. code-block:: php

    'types' => [
        '0' => [
            'showitem' => 'aField, anotherField',
        ],
        'anotherType' => [
            'showitem' => 'aField, aDifferentField',
        ],
    ],

So, the basic array has a key field with type names (here '0', and 'anotherType'), with a series of possible
properties each, most importantly the :ref:`showitem <types-properties-showitem>` property.


Examples
--------

.. _types-required:

Let's take the internal notes (sys\_note) as a basic example. The ['types'] section is configured like this:

.. code-block:: php

    'types' => [
        '0' => [
            'showitem' => '
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general, category, subject, message,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access, personal
            ',
        ],
    ]

It specifies two tabs: First one with four fields "general", "category" "subject" and "message", and second with the
field "personal" on it. Only the default type "0" is specified. Opening such a record looks like this:

.. figure:: ../Images/TypesSysNote.png
   :alt: The internal note input form
   :class: with-shadow


.. _types-optional:

The power of the "types" configuration becomes clear when you want the form composition of a record to depend on a
value from the record. Let's look at the "tx_examples_dummy" table from the "examples" extension. The
"ctrl" section of its TCA contains a "type" property:

.. code-block:: php

    'ctrl' => [
        'type' => 'record_type',
        ...
    ],

This indicates that the field called "record\_type" is to specify the "type" of any given record of
the table. Let's look at how this field is defined in ['columns']:

.. code-block:: php

    'record_type' => [
        'exclude' => 0,
        'label' => 'LLL:EXT:examples/Resources/Private/Language/locallang_db.xlf:tx_examples_dummy.record_type',
        'config' => [
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => [
                [ 'LLL:EXT:examples/Resources/Private/Language/locallang_db.xlf:tx_examples_dummy.record_type.0', 0 ],
                [ 'LLL:EXT:examples/Resources/Private/Language/locallang_db.xlf:tx_examples_dummy.record_type.1', 1 ],
                [ 'LLL:EXT:examples/Resources/Private/Language/locallang_db.xlf:tx_examples_dummy.record_type.2', 2 ],
            ]
        ]
    ],

There's nothing unusual here. It's a pretty straightforward select field, with three options. Finally, in the "types"
section, we defined what fields should appear and in what order for every value of the "type" field:

.. code-block:: php

    'types' => [
        '0' => [
            'showitem' => 'hidden, record_type, title, some_date'
        ],
        '1' => [
            'showitem' => 'record_type, title'
        ],
        '2' => [
            'showitem' => 'title, some_date, hidden, record_type'
        ],
    ],

The result if the following display when type "Normal" is chosen:

.. figure:: ../Images/TypesDummyNormal.png
   :alt: The "normal" layout of dummy records
   :class: with-shadow

   The "normal" layout of dummy records

Changing to type "Short" reloads the form and displays the following:

.. figure:: ../Images/TypesDummyShort.png
   :alt: The "short" layout of dummy records
   :class: with-shadow

   The "short" layout displays less fields

And finally, type "Weird" also shows all fields, but in a different order:

.. figure:: ../Images/TypesDummyWeird.png
   :alt: The "weird" layout of dummy records
   :class: with-shadow

   The "weird" layout displays the fields in a totally different order

.. note::
    It is a good idea to give all "types" speaking names, except the default type "0": In the above
    example, it would have been better to rename "1" to "short" and "2" to "weird", both for the ['types'] array
    keys and the "select" values to give those types some easy to understand meaning if looking at the array.


.. _types-properties-bitmask-excludelist-bits:
.. include:: TypesBitmaskExcludelistBits.rst.txt

.. _types-properties-bitmask-value-field:
.. include:: TypesBitmaskValueField.rst.txt

.. _types-properties-columnsOverrides:
.. include:: TypesColumnsOverrides.rst.txt

.. _types-properties-showitem:
.. include:: TypesShowitem.rst.txt

.. _types-properties-subtype-value-field:
.. include:: TypesSubtypeValueField.rst.txt

.. _types-properties-subtypes-addlist:
.. include:: TypesSubtypesAddlist.rst.txt

.. _types-properties-subtypes-excludelist:
.. include:: TypesSubtypesExcludelist.rst.txt
