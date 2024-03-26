..  include:: /Includes.rst.txt
..  _tca_property_fieldControl_editPopup:

=========
editPopup
=========

..  confval:: editPopup
    :name: fieldControl-editPopup
    :Path: $GLOBALS['TCA'][$table]['columns'][$field]['config']['fieldControl']
    :type: array
    :Scope: fieldControl
    :Types: :ref:`group <columns-group>`

    The edit popup field control shows a pencil icon to edit an element directly in a popup window.
    When a record is selected and the edit button is clicked, that record opens in a new window for modification.

    ..  note::
        The edit popup control is pre-configured, but disabled by default. Enable it if you need it, the button
        is by default shown below `element browser` and `insert clipboard`.

Options
=======

..  confval:: disabled
    :name: fieldControl-editPopup-disabled
    :Path: $GLOBALS['TCA'][$table]['columns'][$field]['config']['fieldControl']['editPopup']
    :type: boolean
    :Scope: fieldControl -> editPopup
    :Default: true

    Disables the field control. Needs to be set to :php:`false` to enable the
    :guilabel:`Create new` button

..  confval:: options[title]
    :name: fieldControl-editPopup-options-title
    :Path: $GLOBALS['TCA'][$table]['columns'][$field]['config']['fieldControl']['editPopup']
    :type: string
    :Scope: fieldControl -> editPopup
    :Values: string or LLL reference
    :Default: LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:labels.edit

    Allows to set a different 'title' attribute to the popup icon.

..  confval:: options[windowOpenParameters]
    :name: fieldControl-editPopup-options-windowOpenParameters
    :Path: $GLOBALS['TCA'][$table]['columns'][$field]['config']['fieldControl']['editPopup']
    :type: string
    :Scope: fieldControl -> editPopup
    :Values: string or LLL reference
    :Default: height=800,width=600,status=0,menubar=0,scrollbars=1

    Allows to set a different size of the popup, defaults

Examples
========

Select field
------------

..  include:: /Images/Rst/SelectMultiplesidebyside6.rst.txt

..  include:: /CodeSnippets/SelectMultiplesidebyside6.rst.txt

Group field
-----------

..  include:: /Images/Rst/GroupDb1.rst.txt

..  include:: /CodeSnippets/GroupDb1.rst.txt
