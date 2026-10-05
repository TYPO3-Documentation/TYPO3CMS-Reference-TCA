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

Example: Three checkboxes, two with labels, one without
=======================================================

..  code-block:: php

    'items' => [
      ['label' => 'Recorded', 'iconIdentifierChecked' => 'actions-check'],
      ['label' => ''],
    ],


..  _tca-example-checkbox-itemsprocfunc:

Example: Checkboxes with itemsProcFunc
======================================

The days of a workshop could be added by an `itemsProcFunc`:

..  code-block:: php

    'itemsProcFunc' => ConferenceDays::class . '->addDays',

The referenced `itemsProcFunc` method should populate the items
by filling :php:`$params['items']`:

..  code-block:: php

    public function addDays(array &$params): void
    {
      $params['items'][] = ['label' => 'Wed, 12 May'];
    }

The conference extension adds the days with the newer
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

Example: Only one record can be checked
=======================================

In the example below, only one record from the same table will be allowed
to have that particular box checked.


..  code-block:: php

    'eval' => 'maximumRecordsCheckedInPid',
    'validation' => [
      'maximumRecordsCheckedInPid' => 1,
    ],
