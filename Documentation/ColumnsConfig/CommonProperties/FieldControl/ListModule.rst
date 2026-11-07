..  include:: /Includes.rst.txt
..  _tca-property-fieldcontrol-listmodule:

==========
listModule
==========

..  confval:: listModule
    :name: fieldControl-listModule
    :TCA path: $GLOBALS['TCA'][$table]['columns'][$field]['config']['fieldControl']['listModule']
    :type: array
    :Scope: Display
    :Types: :ref:`group <columns-group>`

    The list module control button opens the :guilabel:`Content > Records` module
    for only one table and allows the user to manipulate
    stuff there.

    ..  note::
        The list module control is disabled by default, enable it if needed. It is shown below the `add record`
        control if not changed by `below` or `after` settings.

..  _tca-property-field-control-list-module-options:

Options
=======

..  _tca-property-field-control-list-module-options-disabled:

disabled
--------

..  confval:: disabled
    :name: fieldControl-listModule-disabled
    :TCA path: $GLOBALS['TCA'][$table]['columns'][$field]['config']['fieldControl']['listModule']['disabled']
    :type: boolean
    :Scope: Display
    :default: true

    Disables the field control. Needs to be set to :php:`false` to enable the
    :guilabel:`Create new` button

..  _tca-property-field-control-list-module-options-pid:

options[pid]
------------

..  confval:: options[pid]
    :name: fieldControl-listModule-options-pid
    :TCA path: $GLOBALS['TCA'][$table]['columns'][$field]['config']['fieldControl']['listModule']['options']['pid']
    :type: string
    :Scope: Display
    :Values: marker or an integer
    :default: ###CURRENT_PID###

    The pid of the page whose records the list shows, as a number or as one
    of these markers:

    `###CURRENT_PID###`
        The pid of the record that is edited.

    `###THIS_UID###`
        The uid of the record that is edited.

    `###PAGE_TSCONFIG_ID###`
        The value of
        `TCEFORM.<table>.<field>.PAGE_TSCONFIG_ID <https://docs.typo3.org/permalink/t3tsref:tceform-page-tsconfig-id>`_
        in the page TSconfig.

    The control resolves no other marker, and an unknown marker becomes the
    pid 0. `###SITEROOT###` is one of them: it works in
    `the pid of the addRecord control <https://docs.typo3.org/permalink/t3tca:confval-fieldcontrol-addrecord-options-pid>`_,
    not here. The markers of
    `foreign_table_where <https://docs.typo3.org/permalink/t3tca:confval-select-single-foreign-table-where>`_
    are a different set as well.

    Without this option the list shows the records of the current pid. If
    the table is allowed on the root level only, the list shows the records
    with the pid 0.

..  _tca-property-field-control-list-module-options-table:

options[table]
--------------

..  confval:: options[table]
    :name: fieldControl-listModule-options-table
    :TCA path: $GLOBALS['TCA'][$table]['columns'][$field]['config']['fieldControl']['listModule']['options']['table']
    :type: string
    :Scope: Display
    :Values: name of the table
    :default: First table from property `allowed` / `foreign_table`

    List records of this table only, falls back to first table from
    :ref:`allowed <columns-group-properties-allowed>` list if not set for
    `type='group'` fields and to :ref:`foreign_table
    <columns-select-properties-foreign-table>` for `type='select'` fields.

..  _tca-property-field-control-list-module-options-title:

options[title]
--------------

..  confval:: options[title]
    :name: fieldControl-listModule-options-title
    :TCA path: $GLOBALS['TCA'][$table]['columns'][$field]['config']['fieldControl']['listModule']['options']['title']
    :type: string
    :Scope: Display
    :Values: plain text label or `label reference <https://docs.typo3.org/permalink/t3coreapi:label-reference>`_
    :default: `LLL:core.core:labels.list`

    Allows to set a different 'title' attribute to the popup icon.


..  _tca-property-field-control-list-module-examples:

Examples
========

..  _tca-property-field-control-list-module-examples-select-field:

Select field
------------

..  figure:: /Images/Conference/SelectMultipleSideBySideFieldControl.png
    :alt: The speakers of a conference with field controls
    :class: with-shadow

    The speakers of a conference with field controls

..  literalinclude:: /CodeSnippets/my_extension/Configuration/TCA/Overrides/125-tx_myextension_conference-speakers.php
    :caption: EXT:my_extension/Configuration/TCA/Overrides/125-tx_myextension_conference-speakers.php
    :emphasize-lines: 34-39


..  _tca-property-field-control-list-module-examples-group-field:

Group field
-----------

..  figure:: /Images/Conference/GroupSpeaker.png
    :alt: The speaker of a talk with field controls
    :class: with-shadow

    The speaker of a talk with field controls

..  literalinclude:: /CodeSnippets/my_extension/Configuration/TCA/Overrides/210-tx_myextension_talk-speaker.php
    :caption: EXT:my_extension/Configuration/TCA/Overrides/210-tx_myextension_talk-speaker.php
    :emphasize-lines: 26-28
