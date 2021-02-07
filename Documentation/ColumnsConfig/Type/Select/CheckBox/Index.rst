.. include:: /Includes.rst.txt

.. _columns-select-rendertype-selectCheckBox:

==============
selectCheckBox
==============

This page describes the :ref:`select <columns-select>` type with
renderType='selectCheckBox'.

.. include:: /Includes/Images/Styleguide/RstIncludes/SelectCheckbox3.rst.txt

The select checkbox stores the values as comma separated values.

.. include:: /Includes/Snippets/Styleguide/RstIncludes/SelectCheckbox3.rst.txt

The field in the database is of type text or varchar.

.. code-block::sql
   CREATE TABLE tx_styleguide_elements_select (
      select_checkbox_3 text,
   );

In opposite

.. toctree::
   :titlesonly:

   Examples
   DifferenceSelectCheckbox
   Properties
