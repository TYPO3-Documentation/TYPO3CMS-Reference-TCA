..  include:: /Includes.rst.txt
..  _columns-file-properties-fieldInformation:

================
fieldInformation
================

..  confval:: fieldInformation (type => file)

    :Path: $GLOBALS['TCA'][$table]['columns'][$field]['config']
    :type: array
    :Scope: Display

    Show information between an element label and the main element input area. Configuration
    works identical to the "fieldWizard" property, no default configuration in the core exists (yet).
    In contrast to "fieldWizard", HTML returned by fieldInformation is limited, see
    :ref:`FormEngine docs <t3coreapi:FormEngine-Rendering-NodeExpansion>` for more details.
