.. include:: /Includes.rst.txt

.. _columns-input:
.. _columns-input-introduction:

=====
Input
=====

:php:`type='input'` generates an :html:`<input>` field, possibly with additional
features applied. There are a number of variants to this type and it is used in
various different ways, for instance with some additional wizards or modals.
Keep an eye on the different available renderTypes.

In the database, this field is typically set to a `VARCHAR` or `CHAR` field with
appropriate length.

Most input fields share :ref:`common properties <columns-input-properties>`.
Some properties only apply to certain render types. The render type
:ref:`inputDateTime <columns-input-renderType-inputDateTime>` has several
unique properties listed separately.

The following renderTypes are available:

*  :ref:`default <columns-input-renderType-default>`: Can be a simple input
   field, a field with a value picker of predefined items or a value slider.
*  :ref:`colorpicker <columns-input-renderType-colorpicker>`: An input
   field with a JavaScript color picker.
*  :ref:`inputDateTime <columns-input-renderType-inputDateTime>`: Renders
   an input field with date or time pickers.
*  :ref:`inputLink <columns-input-renderType-inputLink>`: An input field
   used to handle links and mail addresses in the backend.


.. include:: /Includes/Images/Styleguide/RstIncludes/Input1.rst.txt
.. include:: /Includes/Images/Styleguide/RstIncludes/Input28.rst.txt
.. include:: /Includes/Images/Styleguide/RstIncludes/Input30.rst.txt
.. include:: /Includes/Images/Styleguide/RstIncludes/Input33.rst.txt
.. include:: /Includes/Images/Styleguide/RstIncludes/Input34.rst.txt
.. include:: /Includes/Images/Styleguide/RstIncludes/Inputdatetime3.rst.txt
.. include:: /Includes/Images/Styleguide/RstIncludes/Input29.rst.txt


.. toctree::
   :hidden:

   Default/Index
   ColorPicker/Index
   DateTime/Index
   Link/Index
   Properties/Index
