.. include:: ../../Includes.txt

.. _columns-none:

type = 'none'
-------------

.. _columns-none-introduction:

Introduction
============

This type will just show the value of the field in the backend. The field is not editable. In TYPO3 core,
this type is used seldom or not at all. If an existing value should just be displayed as not editable but
formatted field, using a :php:`type = 'input'` with :php:`readOnly=true` is often more useful.

However, :php:`type = 'none'` is the only type that is not persisted by the :php:`DataHandler` to the
database. It can thus be used to render a "virtual" field in FormEngine that is only displayed. Together
with a custom :ref:`renderType <t3coreapi:FormEngine-Rendering-NodeExpansion>`, this can be a powerful solution
to render a meta field from other data. Example: A record has two database coordinate fields `latitude` and
`longitude`, and a third field `map` that is defined as :php:`type = 'none'`, takes the values from the
other two fields and renders a map from it. This field then does not need a database field.


.. _columns-none-examples:

Examples
========

.. figure:: ../../Images/TypeNoneStyleguide1.png
    :alt: Simple none field (none_1)
    :class: with-shadow

    Simple none field

.. code-block:: php

    'none_1' => [
        'label' => 'none_1',
        'config' => [
            'type' => 'none',
        ],
    ],


Properties renderType default
=============================

.. _columns-none-properties:

.. _columns-none-properties-type:

.. _columns-none-properties-cols:
.. include:: ../Properties/NoneCols.rst.txt

.. _columns-none-properties-fieldInformation:
.. include:: ../Properties/CommonFieldInformation.rst.txt

.. _columns-none-properties-format:
.. include:: ../Properties/NoneFormat.rst.txt

.. _columns-none-properties-pass-content:
.. include:: ../Properties/NonePassContent.rst.txt

.. _columns-none-properties-search:
.. include:: ../Properties/CommonSearch.rst.txt

.. _columns-none-properties-size:
.. include:: ../Properties/NoneSize.rst.txt

