.. include:: /Includes.rst.txt
.. _columns-text-renderType-textTable:
.. _tca_property_fieldControl_tableWizard:

=========
textTable
=========

This page describes the :ref:`text <columns-text>` type with the :php:`renderType='textTable'`.

.. code-block:: php

   // ...
   'type' => 'text',
   'renderType' => 'textTable',
   // ...

The textTable render type triggers a view called "table wizard" to
manage the frontend table display in the backend. It is used for the "Table"
tt_content content element.

.. include:: /Images/Rst/Text17.rst.txt

.. toctree::

   Examples
   Properties
