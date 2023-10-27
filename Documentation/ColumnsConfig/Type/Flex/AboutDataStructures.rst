.. include:: /Includes.rst.txt
.. _columns-flex-ds-pointer:

========================
About the data structure
========================

Basically, the configuration for a FlexForm field is all about pointing
to the data structure which contains form rendering information.

For general information about the backbone of a Data Structure, please
refer to the "<T3DataStructure>" chapter in the
:ref:`Core API manual <t3coreapi:t3ds>`.

The mixture of the different "ds" properties can be puzzling at first,
but they allow powerful combinations to specify which data structure should be
used in different scenarios.


One data structure only
=======================

.. code-block:: php

    'config' => [
        'type' => 'flex',
        'ds' => [
            'default' => 'FILE:EXT:myextension/Configuration/FlexForms/Main.xml',
        ],
    ],

Straight and simple: Whenever a record is handled that has a column field
definition with this TCA, the data structure defined in
:file:`FILE:EXT:myextension/Configuration/FlexForms/Main.xml`
is parsed and the flex form defined in there is displayed.


Data structure selection depends on a field value
=================================================

.. code-block:: php

    'config' => [
        'type' => 'flex',
        'ds_pointerField' => 'selector'
        'ds' => [
            'default' => 'FILE:EXT:myextension/Configuration/FlexForms/Default.xml',
            'foo' => 'FILE:EXT:myextension/Configuration/FlexForms/Foo.xml',
            'bar' => 'FILE:EXT:myextension/Configuration/FlexForms/Bar.xml',
        ],
    ],

There are now multiple data structures registered for this "flex" field. It
depends on the **value** of the field "selector" which one is chosen: If
"selector" value is "foo", "Foo.xml" is parsed and displayed, "Bar.xml" is
chosen for the value "bar", and if none of the two matches, it falls back
to "Default.xml".


Data structure selection depends on a combination of two field values
=====================================================================

.. code-block:: php

    'config' => [
        'type' => 'flex',
        'ds_pointerField' => 'list_type,CType',
        'ds' => [
            'default' => 'FILE:...',
            'tt_address_pi1,list' => 'FILE:EXT:tt_address/pi1/flexform.xml',
            '*,table' => 'FILE:EXT:css_styled_content/flexform_ds.xml',
            'tx_myext_pi1' => 'FILE:EXT:myext/flexform.xml',
        ],
    ],

The data structure selection now depends on the values of two different fields. First, there is a general "default"
fallback if nothing else matches. Next, if field "list_type" has the value "tt_address_pi1" and "CType" has the value
"list", then the data structure defined in sub array "tt_address_pi1,list" is chosen. If "list_type" is anything, but
"CType" is "table", then the data structure defined in "\*,table" is selected. And last, if "list_type" is "tx_myext_pi1"
and "CType" is whatever else, then data structure "tx_myext_pi1" is used.

This lookup mechanism is pretty powerful and used for instance in core for data structure selection depending
on a selected "tt_content" element plugin.
