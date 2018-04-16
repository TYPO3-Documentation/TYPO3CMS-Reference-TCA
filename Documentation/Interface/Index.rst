.. include:: ../Includes.txt

.. _interface:

=============
['interface']
=============


Introduction
------------

The ['interface'] section contains configuration for display and listing in various parts of the
backend. Extension authors often ignore these settings and a lot of extensions in the wild don't
use that array part.


.. _interface-examples:

Examples
--------

This is how the "pages" table is configured for these settings:

.. code-block:: php

    'interface' => [
        'showRecordFieldList' => 'doktype,title,alias,...,backend_layout,backend_layout_next_level',
        'maxDBListItems' => 30,
        'maxSingleDBListItems' => 50
    ],


.. _interface-properties:

.. _interface-properties-maxdblistitems:
.. include:: InterfaceMaxDbListItems.rst.txt

.. _interface-properties-maxsingledblistitems:
.. include:: InterfaceMaxSingleDbListItems.rst.txt

.. _interface-properties-showrecordfieldlist:
.. include:: InterfaceShowRecordFieldList.rst.txt
