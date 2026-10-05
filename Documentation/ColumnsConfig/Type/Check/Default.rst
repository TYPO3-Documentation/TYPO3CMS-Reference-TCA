..  include:: /Includes.rst.txt

..  _columns-check-default:

================
Default checkbox
================

The checkbox with :ref:`renderType check <columns-check-properties-rendertype>`
is typically a single checkbox or a group of checkboxes.

Its state can be inverted via `invertStateDisplay`.

..  _columns-check-examples:
..  _columns-check-examples-single:
..  _columns-check-examples-array:

Examples
--------

All examples listed here can be found in the :ref:`extension styleguide
<tca-examples-extension-styleguide>`.

..  _tca-example-checkbox-2:

Example: Simple checkbox with label
-----------------------------------

..  figure:: /Images/Conference/CheckSingle.png
    :alt: A single checkbox with a label
    :class: with-shadow

    A single checkbox with a label

TCA:

..  literalinclude:: /CodeSnippets/my_extension/Configuration/TCA/Overrides/241-tx_myextension_talk-recording_allowed.php
    :caption: EXT:my_extension/Configuration/TCA/Overrides/241-tx_myextension_talk-recording_allowed.php
    :emphasize-lines: 12

If the checkbox is checked, the value for the field will be 1,
if unchecked, it will be 0.

:ref:`FlexForm <t3coreapi:flexforms>`:

..  literalinclude:: /CodeSnippets/my_extension/Configuration/FlexForms/ConferenceList.xml
    :caption: EXT:my_extension/Configuration/FlexForms/ConferenceList.xml
    :visible-lines: 44-65
    :emphasize-lines: 62

..  _tca-example-checkbox-12:

Example: Four checkboxes in three columns
-----------------------------------------

..  figure:: /Images/Conference/CheckColumns.png
    :alt: Four checkboxes in three columns
    :class: with-shadow

    Four checkboxes in three columns

TCA:

..  literalinclude:: /CodeSnippets/my_extension/Configuration/TCA/Overrides/136-tx_myextension_conference-amenities.php
    :caption: EXT:my_extension/Configuration/TCA/Overrides/136-tx_myextension_conference-amenities.php
    :emphasize-lines: 18

If all checkboxes are checked, the value for the field will be 15 (:php:`1 | 2 | 4 | 8`).


..  _tca-example-checkbox-16:

Example: Checkboxes with inline floating
----------------------------------------

..  figure:: /Images/Conference/CheckInline.png
    :alt: The weekdays of a location, Monday to Friday checked by default
    :class: with-shadow

    The weekdays of a location, Monday to Friday checked by default

..  literalinclude:: /CodeSnippets/my_extension/Configuration/TCA/Overrides/430-tx_myextension_location-open_days.php
    :caption: EXT:my_extension/Configuration/TCA/Overrides/430-tx_myextension_location-open_days.php
    :emphasize-lines: 21, 23

This will display as many checkbox items as will fit in one row. Without inline,
each checkbox would be displayed in a separate row.
