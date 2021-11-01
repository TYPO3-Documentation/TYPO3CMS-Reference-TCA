.. include:: /Includes.rst.txt
.. _columns-check-properties-default:

=======
default
=======

.. confval:: default

   :type: integer
   :Scope: Display / Proc.

   The default value of the checkbox(es).

   Each bit of the decimal value corresponds to a checkbox. As an example, the
   value `5` enables the first and third checkbox.

   This is true even if there is only one checkbox, which then maps to the first
   bit (reading from right to left).

   +---------------+-----------------------+---------------------+
   | decimal value | binary representation | selected checkboxes |
   +===============+=======================+=====================+
   | 0             | 0000 0000             | none                |
   +---------------+-----------------------+---------------------+
   | 1             | 0000 0001             | first               |
   +---------------+-----------------------+---------------------+
   | 2             | 0000 0010             | second              |
   +---------------+-----------------------+---------------------+
   | 5             | 0000 0101             | first, third        |
   +---------------+-----------------------+---------------------+
   | 127           | 0111 1111             | the first seven     |
   +---------------+-----------------------+---------------------+

   To find out the right default decimal value, first start off by writing down
   the binary representation and set the desired bits at the appropriate
   position to 1. Then convert the binary number to decimal. You can either use
   a calculator with programmer mode or search online for "binary to decimal".

Examples
========

Multiple checkboxes with a default value
----------------------------------------

.. include:: /Images/Rst/Checkbox16.rst.txt

Here "Tu", the second bit, is active by default.

.. include:: /CodeSnippets/Manual/CheckboxDefault.rst.txt
