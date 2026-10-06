..  include:: /Includes.rst.txt
..  _tca-property-fieldcontrol:

============
fieldControl
============

..  confval:: fieldControl
    :name: fieldControl
    :TCA path: $GLOBALS['TCA'][$table]['columns'][$field]['config']['fieldControl']
    :type: array
    :Scope: Display
    :Types: :ref:`group <columns-group>`,
        :ref:`imageManipulation <columns-imagemanipulation>`,
        :ref:`input <columns-input>`, :ref:`radio <columns-radio>`

    Show action buttons next to the element. This is used in various type's to
    add control buttons right next to the main element. They can open popups,
    switch the entire view and other things. All must provide a "button" icon
    to click on, see :ref:`FormEngine docs
    <t3coreapi:FormEngine-Rendering-NodeExpansion>` for more details.
    See :ref:`type=group <columns-group-properties-fieldcontrol>` for examples.


    ..  figure:: /Images/Conference/SelectMultipleSideBySideFieldControl.png
        :alt: The speakers of a conference with field controls
        :class: with-shadow

        The speakers of a conference with field controls

..  toctree::
    AddRecord
    EditPopup
    ListModule
    ResetSelection
