.. include:: /Includes.rst.txt
.. _columns-inline-properties-autosizemax:

===========
autoSizeMax
===========

   :type: integer   :Scope: Display
    Only useful in combination with :ref:`foreign\_selector <columns-inline-properties-foreign-selector>`.

    If set, then the height of multiple-item selector boxes (maxitem > 1) will automatically be adjusted to the number
    of selected elements, however never less than "size" and never larger than the integer value of "autoSizeMax"
    itself (takes precedence over "size"). So "autoSizeMax" is the maximum height the selector can ever reach.
