.. include:: /Includes.rst.txt
.. _columns-imageManipulation-examples:

========
Examples
========

.. figure:: Images/Button.png
    :alt: Image manipulation button in FAL
    :class: with-shadow

    Image manipulation button in FAL

.. figure:: Images/Cropper.png
    :alt: Image manipulation cropper modal
    :class: with-shadow

    Image manipulation cropper modal

.. code-block:: php

    'crop' => [
        'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.crop',
        'config' => [
            'type' => 'imageManipulation',
        ],
    ],
