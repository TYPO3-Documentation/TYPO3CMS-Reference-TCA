..  include:: /Includes.rst.txt
..  _columns-checkbox-examples:

========
Examples
========

..  _columns-checkbox-examples-2:

Example: Default checkboxes with fixed columns
==============================================

..  figure:: /Images/Conference/CheckSingle.png
    :alt: A single checkbox with a label
    :class: with-shadow

    A single checkbox with a label

..  literalinclude:: /CodeSnippets/my_extension/Configuration/TCA/Overrides/241-tx_myextension_talk-recording_allowed.php
    :caption: EXT:my_extension/Configuration/TCA/Overrides/241-tx_myextension_talk-recording_allowed.php
    :emphasize-lines: 12

..  _columns-checkbox-examples-16:

Example: Checkboxes with Inline columns and default value
=========================================================

..  figure:: /Images/Conference/CheckInline.png
    :alt: The weekdays of a location, Monday to Friday checked by default
    :class: with-shadow

    The weekdays of a location, Monday to Friday checked by default

Monday to Friday, the first five bits, are active by default.

..  literalinclude:: /CodeSnippets/my_extension/Configuration/TCA/Overrides/430-tx_myextension_location-open_days.php
    :caption: EXT:my_extension/Configuration/TCA/Overrides/430-tx_myextension_location-open_days.php
    :emphasize-lines: 21, 23

..  _tca-example-checkbox-7:

Example: Checkbox limited to a maximal number of checked records
================================================================

..  figure:: /Images/Conference/CheckMaximumRecordsChecked.png
    :alt: Only one location can be the main venue
    :class: with-shadow

    Only one location can be the main venue

..  literalinclude:: /CodeSnippets/my_extension/Configuration/TCA/Overrides/435-tx_myextension_location-main_venue.php
    :caption: EXT:my_extension/Configuration/TCA/Overrides/435-tx_myextension_location-main_venue.php
    :emphasize-lines: 15

..  note::
    The check counts the translations of a record as well. In a table with
    translations, translating a record with the checkbox set therefore
    fails. The locations of the conference extension have no translations.

..  _columns-checkbox-examples-18:

Example: Toggle checkbox with invertStateDisplay
================================================

..  code-block:: php
    :caption: The field hidden that TYPO3 adds for ctrl > enablecolumns > disabled

    'hidden' => [
      'label' => 'core.db.general:enabled',
      'exclude' => true,
      'config' => [
        'type' => 'check',
        'renderType' => 'checkboxToggle',
        'default' => 0,
        'items' => [
          [
            'label' => '',
            'invertStateDisplay' => true,
          ],
        ],
      ],
    ],


..  _tca-example-checkbox-3:

Example: Checkboxes with icons
==============================

..  figure:: /Images/Conference/CheckIcons.png
    :alt: Three tasks of a talk, two with a tick and one with a clock
    :class: with-shadow

    Two tasks are finished, one is still open

Each checkbox of the preparation of a talk shows a tick in a circle when it
is checked, and a clock when it is not:

..  literalinclude:: /CodeSnippets/my_extension/Configuration/TCA/Overrides/295-tx_myextension_talk-checklist.php
    :caption: EXT:my_extension/Configuration/TCA/Overrides/295-tx_myextension_talk-checklist.php
    :emphasize-lines: 16-17,21-22,26-27


..  _tca-example-checkbox-itemsprocfunc:

Example: Checkboxes with itemsProcFunc
======================================

An `itemsProcFunc` adds items to the checkboxes. See the
`example of itemsProcFunc <https://docs.typo3.org/permalink/t3tca:tca-property-items-proc-func-example>`_,
which adds the tracks of a conference to a select field.

The conference extension adds the days of a talk with the newer
:confval:`itemsProcessors <check-itemsProcessors>` instead, which read the
dates of the conference.

..  _tca-example-checkbox-17:

Example: checkboxToggle
=======================

..  figure:: /Images/Conference/CheckToggle.png
    :alt: A toggle
    :class: with-shadow

    A toggle

..  _tca-example-checkbox-19:

Example: checkboxLabeledToggle
==============================

..  figure:: /Images/Conference/CheckLabeledToggle.png
    :alt: A toggle with the labels Open and Closed
    :class: with-shadow

    A toggle with the labels Open and Closed


..  _tca-example-checkbox-8:

Example: Only one record on a page can be checked
=================================================

Each conference keeps its hotels in a folder of its own. Only one hotel in
a folder can be the recommended hotel:

..  literalinclude:: /CodeSnippets/my_extension/Configuration/TCA/Overrides/955-tx_myextension_hotel-recommended.php
    :caption: EXT:my_extension/Configuration/TCA/Overrides/955-tx_myextension_hotel-recommended.php
    :emphasize-lines: 17-20
