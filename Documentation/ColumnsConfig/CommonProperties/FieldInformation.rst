.. include:: /Includes.rst.txt
.. _tca_property_fieldInformation:

================
fieldInformation
================

.. confval:: fieldInformation

   :Path: $GLOBALS['TCA'][$table]['columns'][$field]['config']
   :type: array
   :Scope: Display
   :Types: :ref:`check <columns-check>`, :ref:`flex <columns-flex>`,
      :ref:`group <columns-group>`,
      :ref:`imageManipulation <columns-imageManipulation>`,
      :ref:`input <columns-input>`, :ref:`none <columns-none>`,
      :ref:`radio <columns-radio>`

   Show information between an element label and the main element input area. Configuration
   works identical to the "fieldWizard" property, no default configuration in the core exists (yet).
   In contrast to "fieldWizard", HTML returned by fieldInformation is limited, see
   :ref:`FormEngine docs <t3coreapi:FormEngine-Rendering-NodeExpansion>` for more details.

..  hint:: 

    :php:`fieldInformation` is not implemented by default. Use :ref:`columns-properties-description`
    display general information below a fields title.
