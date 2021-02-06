.. include:: /Includes.rst.txt

.. _columns-text:

================
Text areas & RTE
================

.. contents:: Table of contents:
   :local:
   :depth: 1

.. _columns-text-introduction:

Introduction
============

The type='text' is for multi line text input, in the database :file:`ext_tables.sql` files it is typically
set to a :code:`TEXT` column type. In the Backend, it is rendered in various shapes: It can be rendered as
a simple :code:`<textarea>`, as a Rich Text Editor, as a code block with syntax highlighting, and others.

The following renderTypes are available:

*  :ref:`default <columns-text-renderType-default>`: A simple text area
   or a rich text field is rendered if no renderType is specified.
*  :ref:`belayoutwizard <columns-text-renderType-belayoutwizard>`: The backend layout
   wizard is displayed in order to edit records of table :code:`backend_layout` in the backend.
*  :ref:`t3editor <columns-text-renderType-t3editor>`: The
   :code:`renderType = 't3editor'`triggers a code highlighter if extension
   `t3editor` is loaded, otherwise falls back to "default" renderType.
*  :ref:`textTable <columns-text-renderType-textTable>`: The
   :code:`renderType = 'textTable'` triggers a view to manage frontend table
   display in the backend. It is used for the "Table" tt\_content content element.


Simple text area
================

.. include:: /Includes/Images/Styleguide/RstIncludes/Text4.rst.txt

Rich text editor field
======================

.. include:: /Includes/Images/Styleguide/RstIncludes/Rte1.rst.txt


Backend layout editor
=====================

.. include:: /Includes/Images/Styleguide/RstIncludes/Text20.rst.txt


Text field with renderType textTable
====================================

.. include:: /Includes/Images/Styleguide/RstIncludes/Text17.rst.txt

.. toctree::
   :hidden:

   Properties/Index
   Default/Index
   BeLayoutWizard/Index
   T3Editor/Index
   TextTable/Index
