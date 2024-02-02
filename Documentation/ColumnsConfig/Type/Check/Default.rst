.. include:: /Includes.rst.txt

.. _columns-check-properties:
.. _columns-check-properties-type:
.. _columns-check-default:

================
Default checkbox
================

The checkbox with :ref:`renderType check <columns-check-properties-renderType>`
is typically a single checkbox or a group of checkboxes.

Its state can be inverted via :php:`invertStateDisplay`.

.. _columns-check-examples:
.. _columns-check-examples-single:
.. _columns-check-examples-array:

Examples
--------

All examples listed here can be found in the :ref:`extension styleguide
<tca_examples_extension_styleguide>`.

.. _tca_example_checkbox_2:

Example: Simple checkbox with label
-----------------------------------

.. include:: /Images/Rst/Checkbox2.rst.txt

TCA:

.. include:: /CodeSnippets/Checkbox2.rst.txt

If the checkbox is checked, the value for the field will be 1,
if unchecked, it will be 0.

:ref:`FlexForm <t3coreapi:flexforms>`:

.. include:: /CodeSnippets/Manual/FlexformCheckbox2.rst.txt

.. _tca_example_checkbox_12:

Example: Four checkboxes in three columns
-----------------------------------------

.. include:: /Images/Rst/Checkbox12.rst.txt

TCA:

.. include:: /CodeSnippets/Checkbox12.rst.txt

If all checkboxes are checked, the value for the field will be 15 (:php:`1 | 2 | 4 | 8`).


.. _tca_example_checkbox_16:

Example: Checkboxes with inline floating
----------------------------------------

.. include:: /Images/Rst/Checkbox16.rst.txt
.. include:: /CodeSnippets/Checkbox16.rst.txt

This will display as many checkbox items as will fit in one row. Without inline,
each checkbox would be displayed in a separate row.
