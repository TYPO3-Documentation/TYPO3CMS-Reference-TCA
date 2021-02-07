.. include:: /Includes.rst.txt
.. _tca_property_fieldControl:

============
fieldControl
============

.. confval:: fieldControl

   :type: array
   :Scope: Display
   :Types: :ref:`group <columns-group>`,
      :ref:`imageManipulation <columns-imageManipulation>`,
      :ref:`input <columns-input>`, :ref:`radio <columns-radio>`

   Show action buttons next to the element. This is used in various type's to
   add control buttons right next to the main element. They can open popus,
   switch the entire view and other things. All must provide a "button" icon
   to click on, see :ref:`FormEngine docs
   <t3coreapi:FormEngine-Rendering-NodeExpansion>` for more details.
   See :ref:`type=group <columns-group-properties-fieldControl>` for examples.


   .. include:: /Includes/Images/Styleguide/RstIncludes/SelectMultiplesidebyside6.rst.txt

.. toctree::
   FieldControl/AddRecord
   FieldControl/EditPopup
   FieldControl/ListModule
   FieldControl/ResetSelection
