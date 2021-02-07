.. include:: /Includes.rst.txt

.. _columns-check-examples:
.. _columns-check-examples-single:
.. _columns-check-examples-array:

========
Examples
========

All examples listed here can be found in the :ref:`extension styleguide
<tca_examples_extension_styleguide>`.

.. _tca_example_checkbox_2:

Example: Simple checkbox with label
===================================

.. include:: /Includes/Images/Styleguide/RstIncludes/Checkbox2.rst.txt

TCA:

.. include:: /Includes/Snippets/Styleguide/RstIncludes/Checkbox2.rst.txt

If the checkbox is checked, the value for the field will be 1,
if unchecked, it will be 0.

:ref:`FlexForm <t3coreapi:flexforms>`:

.. include:: /Includes/Snippets/Styleguide/RstIncludes/Manual/FlexformCheckbox2.rst.txt

.. _tca_example_checkbox_12:

Example: Four checkboxes in three columns
=========================================

.. include:: /Includes/Images/Styleguide/RstIncludes/Checkbox12.rst.txt

TCA:

.. include:: /Includes/Snippets/Styleguide/RstIncludes/Checkbox12.rst.txt


If all checkboxes are checked, the value for the field will be 15 (:php:`1 | 2 | 4 | 8`).

:ref:`FlexForm <t3coreapi:flexforms>`:

.. include:: /Includes/Snippets/Styleguide/RstIncludes/Manual/FlexformCheckbox12.rst.txt


.. _tca_example_checkbox_16:

Example: Checkboxes with inline floating
========================================

.. include:: /Includes/Images/Styleguide/RstIncludes/Checkbox16.rst.txt
.. include:: /Includes/Snippets/Styleguide/RstIncludes/Checkbox16.rst.txt

This will display as many checkbox items as will fit in one row. Without inline,
each checkbox would be displayed in a separate row.
