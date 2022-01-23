.. include:: /Includes.rst.txt
.. _tca_property_readOnly:

========
readOnly
========

.. confval:: readOnly

   :Path: $GLOBALS['TCA'][$table]['columns'][$field]['config']
   :type: boolean
   :Scope: Display
   :Types: :ref:`check <columns-check>`, :ref:`flex <columns-flex>`,
      :ref:`group <columns-group>`,
      :ref:`imageManipulation <columns-imageManipulation>`,
      :ref:`input <columns-input>`

   Renders the field in a way that the user can see the values but cannot edit them. The rendering is as similar
   as possible to the normal rendering but may differ in layout and size.

   .. warning::
      This property affects only the display. It is still possible to write to those fields when using
      the :ref:`DataHandler <t3coreapi:tce>`.
