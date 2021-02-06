.. include:: /Includes.rst.txt
.. _columns-check-properties-invertStateDisplay:

==================
invertStateDisplay
==================

.. confval:: invertStateDisplay

   :type: boolean
   :Scope: Display
   :Default: false

   The state of a checkbox can be displayed inverted when this property is
   set to true.

Example
=======

Toggle checkbox with invertStateDisplay
---------------------------------------

.. include:: /Includes/Images/Styleguide/RstIncludes/Checkbox18.rst.txt
.. include:: /Includes/Snippets/Styleguide/RstIncludes/Checkbox18.rst.txt

Field hidden/visible in table tt_content
----------------------------------------

The field :sql:`hidden` is set to 1 if the record is hidden and to 0 if the
record is visibile. However the field usually carries a label like
:guilabel:`Enabled`. It is then displayed as "on", when the underlying
field is set to 0. The following examples is from the core, table
:sql:`tt_content`:

.. include:: /Includes/Snippets/Core/Includes/TtContentHidden.rst.txt
