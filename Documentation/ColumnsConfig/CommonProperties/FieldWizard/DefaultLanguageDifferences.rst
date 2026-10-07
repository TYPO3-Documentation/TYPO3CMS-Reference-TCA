..  include:: /Includes.rst.txt
..  _tca-property-fieldwizard-defaultlanguagedifferences:

==========================
defaultLanguageDifferences
==========================

..  confval:: defaultLanguageDifferences
    :name: fieldWizard-defaultLanguageDifferences
    :TCA path: $GLOBALS['TCA'][$table]['columns'][$field]['config']['fieldWizard']['defaultLanguageDifferences']
    :type: array
    :Scope: Display
    :Types: :ref:`check <columns-check>`,
        :ref:`color <columns-input-rendertype-colorpicker>`,
        :ref:`country <columns-country>`,
        :ref:`datetime <columns-input-rendertype-inputdatetime>`,
        :ref:`email <columns-email>`, :ref:`folder <columns-folder>`,
        :ref:`group <columns-group>`,
        :ref:`imageManipulation <columns-imagemanipulation>`,
        :ref:`input <columns-input>`, :ref:`json <columns-json>`,
        :ref:`link <columns-input-rendertype-inputlink>`,
        :ref:`number <columns-number>`, :ref:`radio <columns-radio>`,
        :ref:`select <columns-select>`, :ref:`slug <columns-slug>`,
        :ref:`text <columns-text>`

    Show a "diff-view" if the content of the default language record has been changed after the
    translation overlay has been created. The ['ctrl'] section property
    :ref:`transOrigDiffSourceField <ctrl-reference-transorigdiffsourcefield>` has to be specified
    to enable this wizard in a translated record.

    The render type :ref:`selectTree <columns-select-rendertype-selecttree>`
    of the type `select` does not show this wizard.

    This wizard is important for editors who maintain translated records: They can see what has been
    changed in their localization parent between the last save operation of the overlay.

    ..  include:: /Images/ManualScreenshots/DefaultLanguageDifferences.rst.txt
