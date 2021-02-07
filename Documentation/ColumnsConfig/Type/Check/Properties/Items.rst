.. include:: /Includes.rst.txt
.. _columns-check-properties-items:

=====
items
=====

.. confval:: items

   :type: array
   :Scope: Display

   If set, this array will create an array of checkboxes instead of just a single "on/off" checkbox.

   .. note::
      You can have a maximum of 31 checkboxes in such an array and each element is represented by a single bit
      in the integer value which ultimately goes into the database.

   In this array each entry is itself an array where the first entry is the label (string or LLL reference) and the
   second entry is a blank value. The value sent to the database will be an integer where each bit represents the
   state of a checkbox in this array.

   A basic item looks like this:

   .. code-block:: php

      'items' => [
         ['Green tomatoes', ''], // Note these should be LLL references
         ['Red peppers', ''],
      ],

   Further properties can be set per item, but not all of them apply to all renderTypes:

   invertStateDisplay (boolean)
      All renderTypes. If set to true, checked / unchecked state are swapped in view: A checkbox is marked checked if
      the database bit is *not* set and vice versa.

   iconIdentifierChecked (string)
      Only if renderType is not set (default): An optional icon shown is selected / on. If not set, a check mark
      icon is used.

   iconIdentifierUnchecked (string)
      Only if renderType is not set (default): An optional icon shown selected / on. If not set, no icon is
      show (check mark icon not displayed).

   labelChecked (string)
      Mandatory property for renderType `checkboxLabeledToggle`: Text shown if element is selected / on.

   labelUnchecked (string)
      Mandatory property for renderType `checkboxLabeledToggle`: Text shown if element is not selected.

.. _tca_example_checkbox_3:

Examples
========

.. include:: /Includes/Images/Styleguide/RstIncludes/Checkbox3.rst.txt
.. include:: /Includes/Snippets/Styleguide/RstIncludes/Checkbox3.rst.txt
