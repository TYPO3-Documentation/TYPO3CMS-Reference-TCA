.. include:: /Includes.rst.txt

========
Examples
========

Some examples from extension styleguide to get an idea on what the
field definition is capable of: An input field
with slider, a select drop-down for images, an inline relation spanning multiple tables.


The following examples all can be found in the
:ref:`extension styleguide <styleguide>`.

.. index::
   Styleguide; input_30
   Input; With slider

Input field with slider
=======================

.. include:: /Includes/Images/Styleguide/RstIncludes/Input30.rst.txt

Input field with a slider, allowing integer values between -90 and 90:

.. include:: /Includes/Snippets/Styleguide/RstIncludes/Input30.rst.txt


.. index::
   Styleguide; select_single_12
   pair: selectSingle; Images

Select drop-down for records represented by images
==================================================

.. include:: /Includes/Images/Styleguide/RstIncludes/SelectSingle12.rst.txt

Select field with foreign table relation and field wizard:

.. include:: /Includes/Snippets/Styleguide/RstIncludes/SelectSingle12.rst.txt

The table :sql:`tx_styleguide_elements_select_single_12_foreign` is defined as
follows:

.. include:: /Includes/Snippets/Styleguide/RstIncludes/Manual/SelectSingle12ForeignPart.rst.txt

.. _tca_example_inline_1n1n_inline_1:

Inline relation (IRRE) spanning multiple tables
===============================================

.. include:: /Includes/Images/Styleguide/RstIncludes/Inline1n1nInline1.rst.txt

Inline relation to a foreign table:

.. include:: /Includes/Snippets/Styleguide/RstIncludes/Inline1n1nInline1.rst.txt
