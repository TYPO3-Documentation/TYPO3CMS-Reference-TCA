.. include:: /Includes.rst.txt
.. _columns-check-properties-default:

=======
default
=======

.. confval:: default

   :type: integer
   :Scope: Display  / Proc.

   Setting the default value of the checkbox(es). As example, value :php:`5` enabled first and third checkbox.

   Each bit corresponds to a check box. This is true even if there is only one checkbox which which then maps to bit-0.


Examples
========

Multiple checkboxes with a default value
----------------------------------------

.. include:: /Images/Rst/Checkbox16.rst.txt
.. include:: /CodeSnippets/Checkbox16.rst.txt
