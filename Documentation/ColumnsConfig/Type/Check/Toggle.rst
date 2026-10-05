..  include:: /Includes.rst.txt
..  _columns-check-checkboxtoggle:

===============
Toggle checkbox
===============

The checkbox with the
:ref:`renderType checkboxToggle <columns-check-properties-rendertype>` renders
as one or several toggle switches. As opposed to the
:ref:`Labeled toggle checkbox <columns-check-checkboxlabeledtoggle>` no
additional labels for the states can be defined.

..  figure:: /Images/Conference/CheckToggle.png
    :alt: A toggle
    :class: with-shadow

    A toggle

Its state can be inverted via `invertStateDisplay`.

..  _columns-check-checkboxtoggle-examples:

Examples
========

..  _columns-check-checkboxtoggle-examples-17:

Example: Single checkbox with toggle
------------------------------------

..  figure:: /Images/Conference/CheckToggle.png
    :alt: A toggle
    :class: with-shadow

    A toggle

..  literalinclude:: /CodeSnippets/my_extension/Configuration/TCA/Overrides/115-tx_myextension_conference-published.php
    :caption: EXT:my_extension/Configuration/TCA/Overrides/115-tx_myextension_conference-published.php
    :emphasize-lines: 13

`checkboxToggle`: Instead of checkboxes, a toggle item is displayed.


..  _columns-check-checkboxtoggle-examples-18:

Example: Single checkbox with toggle inverted state display
-----------------------------------------------------------

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

`invertedStateDisplay`:  A checkbox is marked checked if the database bit is
not set and vice versa.
