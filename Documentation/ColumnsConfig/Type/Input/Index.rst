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


.. include:: /Images/Rst/Input1.rst.txt
.. include:: /Images/Rst/Input28.rst.txt
.. include:: /Images/Rst/Input30.rst.txt
.. include:: /Images/Rst/Input33.rst.txt
.. include:: /Images/Rst/Input34.rst.txt

.. deprecated:: 12.0
   The :php:`renderType=inputDateTime` of TCA type :php:`input` has been
   deprecated. Use the TCA type :ref:`datetime <columns-datetime>` instead.


.. toctree::
   :hidden:

   Default/Index
   ColorPicker/Index
   Properties/Index
