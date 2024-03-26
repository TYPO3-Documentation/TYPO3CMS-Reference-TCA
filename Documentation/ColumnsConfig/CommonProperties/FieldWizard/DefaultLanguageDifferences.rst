..  include:: /Includes.rst.txt
..  _tca_property_fieldWizard_defaultLanguageDifferences:

==========================
defaultLanguageDifferences
==========================

..  confval:: defaultLanguageDifferences
    :name: fieldWizard-defaultLanguageDifferences
    :Path: $GLOBALS['TCA'][$table]['columns'][$field]['config']['fieldWizard']
    :type: array
    :Scope: fieldWizard
    :Types: :ref:`check <columns-check>`, :ref:`flex <columns-flex>`,
        :ref:`group <columns-group>`,
        :ref:`imageManipulation <columns-imageManipulation>`,
        :ref:`input <columns-input>`, :ref:`radio <columns-radio>`

    Show a "diff-view" if the content of the default language record has been changed after the
    translation overlay has been created. The ['ctrl'] section property
    :ref:`transOrigDiffSourceField <ctrl-reference-transorigdiffsourcefield>` has to be specified
    to enable this wizard in a translated record.

    This wizard is important for editors who maintain translated records: They can see what has been
    changed in their localization parent between the last save operation of the overlay.

    ..  include:: /Images/ManualScreenshots/DefaultLanguageDifferences.rst.txt
