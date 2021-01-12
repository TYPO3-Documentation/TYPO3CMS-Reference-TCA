.. include:: /Includes.rst.txt
.. _columns-text-examples:

========
Examples
========

Simple text area
================

.. figure:: ../Images/SysNote.png
    :alt: Message field of system notes, a simple text area (message)
    :class: with-shadow

    Message field of system notes, a simple text area (message)

.. code-block:: php

    'message' => [
        'label' => 'LLL:EXT:sys_note/Resources/Private/Language/locallang_tca.xlf:sys_note.message',
        'config' => [
            'type' => 'text',
            'cols' => 40,
            'rows' => 15
        ]
    ],

Rich text editor field
======================

.. figure:: ../Images/RteStyleguide1.png
    :alt: A Rich Text Editor field (rte_1)
    :class: with-shadow

    A Rich Text Editor field (rte_1)

.. code-block:: php

    'rte_1' => [
        'label' => 'rte_1',
        'config' => [
            'type' => 'text',
            'enableRichtext' => true,
        ],
    ],

