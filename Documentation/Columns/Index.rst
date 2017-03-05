.. include:: ../Includes.txt

.. _columns:

===========
['columns']
===========

The ['columns'] section contains configuration for each table  *field* (also called "column") which can
be edited in the backend. This is typically the biggest part of a TCA definition.

The configuration includes both properties for the display in the backend as well as the processing of the
submitted data.

Each field can be configured as a certain "type" (**required!**, eg. checkbox, input field, file or db-relation etc.) and
optional a "renderType". For each combination a separate set of additional properties applies.

The basic structure looks like this:

.. code-block:: php

    'columns' => [
        'aField' => [
            'label' => 'someLabel',
            'config' => [
                'type' => 'aType',
                'renderType' => 'aRenderType',
                ...
            ],
            ...
        ],
    ],

Properties on the level parallel to "label" are valid for all "type" and "renderType" combinations.
They are listed below. The list of properties within the "config" section depend on the specific "type" and "renderType"
combination and are explained in detail in the :ref:`['columns']['config'] <columns-types>` section.

.. _columns-properties:

.. _columns-properties-config:
.. include:: ColumnsConfig.rst

.. _columns-properties-displaycond:
.. include:: ColumnsDisplayCond.rst

.. _columns-properties-exclude:
.. include:: ColumnsExclude.rst

.. _columns-properties-label:
.. include:: ColumnsLabel.rst

.. _columns-properties-l10n-display:
.. include:: ColumnsL10nDisplay.rst

.. _columns-properties-l10n-mode:
.. include:: ColumnsL10nMode.rst
