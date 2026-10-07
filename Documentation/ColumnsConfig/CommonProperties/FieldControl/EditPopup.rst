..  include:: /Includes.rst.txt
..  _tca-property-fieldcontrol-editpopup:

=========
editPopup
=========

..  confval:: editPopup
    :name: fieldControl-editPopup
    :TCA path: $GLOBALS['TCA'][$table]['columns'][$field]['config']['fieldControl']['editPopup']
    :type: array
    :Scope: Display
    :Types: :ref:`group <columns-group>`

    The edit popup field control shows a pencil icon to edit an element directly in a popup window.
    When a record is selected and the edit button is clicked, that record opens in a new window for modification.

    ..  note::
        The edit popup control is pre-configured, but disabled by default. Enable it if you need it, the button
        is by default shown below `element browser` and `insert clipboard`.

..  _tca-property-field-control-edit-popup-options:

Options
=======

..  _tca-property-field-control-edit-popup-options-disabled:

disabled
--------

..  confval:: disabled
    :name: fieldControl-editPopup-disabled
    :TCA path: $GLOBALS['TCA'][$table]['columns'][$field]['config']['fieldControl']['editPopup']['disabled']
    :type: boolean
    :Scope: Display
    :default: true

    Disables the field control. Needs to be set to :php:`false` to enable the
    :guilabel:`Create new` button

..  _tca-property-field-control-edit-popup-options-title:

options[title]
--------------

..  confval:: options[title]
    :name: fieldControl-editPopup-options-title
    :TCA path: $GLOBALS['TCA'][$table]['columns'][$field]['config']['fieldControl']['editPopup']['options']['title']
    :type: string
    :Scope: Display
    :Values: plain text label or `label reference <https://docs.typo3.org/permalink/t3coreapi:label-reference>`_
    :default: `LLL:core.core:labels.edit`

    Allows to set a different 'title' attribute to the popup icon.

..  _tca-property-field-control-edit-popup-options-window-open-parameters:

options[windowOpenParameters]
-----------------------------

..  confval:: options[windowOpenParameters]
    :name: fieldControl-editPopup-options-windowOpenParameters
    :TCA path: $GLOBALS['TCA'][$table]['columns'][$field]['config']['fieldControl']['editPopup']['options']['windowOpenParameters']
    :type: string
    :Scope: Display
    :Values: plain text label or `label reference <https://docs.typo3.org/permalink/t3coreapi:label-reference>`_
    :default: height=800,width=600,status=0,menubar=0,scrollbars=1

    Allows to set a different size of the popup, defaults

..  _tca-property-field-control-edit-popup-examples:

Examples
========

..  _tca-property-field-control-edit-popup-examples-select-field:

Select field
------------

..  figure:: /Images/Conference/SelectMultipleSideBySideFieldControl.png
    :alt: The speakers of a conference with field controls
    :class: with-shadow

    The speakers of a conference with field controls

..  literalinclude:: /CodeSnippets/my_extension/Configuration/TCA/Overrides/125-tx_myextension_conference-speakers.php
    :caption: EXT:my_extension/Configuration/TCA/Overrides/125-tx_myextension_conference-speakers.php
    :emphasize-lines: 20-25

..  _tca-property-field-control-edit-popup-examples-group-field:

Group field
-----------

..  figure:: /Images/Conference/GroupSpeaker.png
    :alt: The speaker of a talk with field controls
    :class: with-shadow

    The speaker of a talk with field controls

..  literalinclude:: /CodeSnippets/my_extension/Configuration/TCA/Overrides/210-tx_myextension_talk-speaker.php
    :caption: EXT:my_extension/Configuration/TCA/Overrides/210-tx_myextension_talk-speaker.php
    :emphasize-lines: 20-22
