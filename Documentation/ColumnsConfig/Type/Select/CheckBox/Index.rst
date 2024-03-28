..  include:: /Includes.rst.txt

..  _columns-select-rendertype-selectCheckBox:

==============
selectCheckBox
==============

This page describes the :ref:`select <columns-select>` type with
renderType='selectCheckBox'.

..  include:: /Images/Rst/SelectCheckbox7.rst.txt

The select checkbox stores the values as comma separated values.

..  include:: /CodeSnippets/SelectCheckbox7.rst.txt

The field in the database is of type text or varchar.

..  code-block::sql
    CREATE TABLE tx_styleguide_elements_select (
        select_checkbox_7 text,
    );

..  toctree::
    :titlesonly:

    Examples
    DifferenceSelectCheckbox
    Properties
