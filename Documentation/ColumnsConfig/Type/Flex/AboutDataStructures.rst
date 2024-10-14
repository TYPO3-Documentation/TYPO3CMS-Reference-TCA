..  include:: /Includes.rst.txt
..  _columns-flex-ds-pointer:

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

..  code-block:: php

    'config' => [
        'type' => 'flex',
        'ds' => [
            'default' => 'FILE:EXT:my_extension/Configuration/FlexForms/Main.xml',
        ],
    ],

Straight and simple: Whenever a record is handled that has a column field
definition with this TCA, the data structure defined in
:file:`FILE:EXT:my_extension/Configuration/FlexForms/Main.xml`
is parsed and the flex form defined in there is displayed.


Data structure selection depends on a field value
=================================================

..  code-block:: php

    'config' => [
        'type' => 'flex',
        'ds_pointerField' => 'selector'
        'ds' => [
            'default' => 'FILE:EXT:my_extension/Configuration/FlexForms/Default.xml',
            'foo' => 'FILE:EXT:my_extension/Configuration/FlexForms/Foo.xml',
            'bar' => 'FILE:EXT:my_extension/Configuration/FlexForms/Bar.xml',
        ],
    ],

There are now multiple data structures registered for this "flex" field. It
depends on the **value** of the field "selector" which one is chosen: If
"selector" value is "foo", "Foo.xml" is parsed and displayed, "Bar.xml" is
chosen for the value "bar", and if none of the two matches, it falls back
to "Default.xml".
