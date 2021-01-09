.. include:: /Includes.rst.txt

.. _columns-input:
.. _columns-input-introduction:

==============
type = 'input'
==============

type='input' generates an `<input>` field, possibly with additional features applied. There are a number of
variants to this type and it is used in various different ways, for instance with some additional wizards
or modals. Keep an eye on the different available renderTypes.

In the database, this field is typically set to a `VARCHAR` or `CHAR` field with appropriate length.

The following renderTypes are available:

* :ref:`default <columns-input-renderType-default>`: Can be a simple input field,
  a field with a value picker of predefined items or a value slider.
* :ref:`colorpicker <columns-input-renderType-colorpicker>`: An input
  field with a JavaScript color picker.
* :ref:`inputDateTime <columns-input-renderType-inputDateTime>`: Renders
  an input field with date or time pickers.
* :ref:`inputLink <columns-input-renderType-inputLink>`: An input field
  used to handle links and mail addresses in the backend.
* :ref:`rsaInput <columns-input-renderType-rsaInput>`: If extension `rsaauth`
  is loaded, this renderType overrides the TCA configuration of table `be_users`
  and `fe_users` and adds itself as renderType for the `password` fields.

.. toctree::
   :hidden:

   Input/Default
   Input/ColorPicker
   Input/DateTime
   Input/Link
   Input/RsaInput
