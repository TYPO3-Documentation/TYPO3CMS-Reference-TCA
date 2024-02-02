.. include:: /Includes.rst.txt
.. _columns-check-properties-renderType:

==========
renderType
==========

.. confval:: renderType

   :Path: $GLOBALS['TCA'][$table]['columns'][$field]['config']
   :type: boolean
   :Scope: Display
   :Default: check

   Three different render types are currently available for the check box field:

   *  :ref:`check <columns-check-default>`
   *  :ref:`checkboxToggle <columns-check-checkboxToggle>`
   *  :ref:`checkboxLabeledToggle <columns-check-checkboxLabeledToggle>`

Examples
========

default
-------

.. include:: /Images/Rst/Checkbox2.rst.txt

checkboxToggle
--------------

.. include:: /Images/Rst/Checkbox17.rst.txt


checkboxLabeledToggle
---------------------

.. include:: /Images/Rst/Checkbox19.rst.txt
