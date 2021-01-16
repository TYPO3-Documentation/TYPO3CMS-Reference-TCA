.. include:: /Includes.rst.txt
.. _tca_property_autoSizeMax:

===========
autoSizeMax
===========

.. confval:: autoSizeMax

   :type: integer
   :Scope: Display
   :Types: :ref:`group <columns-group>`

   If set, then the height of element listing selector box will automatically be adjusted to the number of selected
   elements, however never less than "size" and never larger than the integer value of "autoSizeMax" itself
   (takes precedence over "size"). So "autoSizeMax" is the maximum height the selector can ever reach.
