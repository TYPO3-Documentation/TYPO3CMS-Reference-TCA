.. include:: /Includes.rst.txt

.. _columns-inline-properties-fshowNewRecordLink:

=================
showNewRecordLink
=================

.. confval:: showNewRecordLink

   :Path: $GLOBALS['TCA'][$table]['columns'][$field]['config']['appearance']
   :type: boolean
   :Scope: Display
   :Default: true

   Disables the :guilabel:`New record` link in TCA `inline` elements
   without simultaneously disabling either the
   :guilabel:`+` button in the header of each inline record (using
   :ref:`['appearance']['enabledControls']['new']
   <columns-inline-properties-appearance>`) or all other
   "level links" (using :ref:`['appearance']['levelLinksPosition'] = 'none'
   <columns-inline-properties-appearance>`).

Example
=======

Disable the :guilabel:`New record` button:

.. code-block:: php

    'inlineField' => [
        'label' => 'Inline without New record link',
        'config' => [
            'type' => 'inline',
            'appearance' => [
                'showNewRecordLink' => false,
            ],
        ],
    ],
