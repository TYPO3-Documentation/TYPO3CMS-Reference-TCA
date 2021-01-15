.. include:: /Includes.rst.txt
.. _columns-input-properties-slider:

======
slider
======

.. confval:: slider

   :type: array
   :Scope: Display
   :RenderTypes: default, inputLink

   Render a value slider next to the field. Only works for fields :ref:`evaluated <columns-input-properties-eval>`
   to integer and float. It is advised to also define a :ref:`range <columns-input-properties-range>` property,
   otherwise the slider will go from 0 to 10000. Note the range can be negative if needed. Available keys:

   step (integer / float)
      Set the step size the slider will use. For floating point values this can itself be a floating point value.

   width (integer, pixels)
      Define the width of the slider.
