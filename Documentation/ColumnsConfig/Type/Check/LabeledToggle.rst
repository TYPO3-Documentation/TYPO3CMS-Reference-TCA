..  include:: /Includes.rst.txt

..  _columns-check-checkboxlabeledtoggle:

=======================
Labeled toggle checkbox
=======================

The checkbox type with the
:ref:`renderType checkboxLabeledToggle <columns-check-properties-rendertype>` is
displayed as a toggle switch where both states can be labelled
(:guilabel:`ON` / :guilabel:`OFF`, :guilabel:`Visible` / :guilabel:`Hidden` or alike).

Its state can be inverted via :ref:`invertStateDisplay
<columns-check-properties-invertstatedisplay>`


..  _columns-check-checkboxlabeledtoggle-example:

Examples
========

..  _columns-check-checkboxlabeledtoggle-example-19:

Single checkbox with labeled toggle
-----------------------------------

..  figure:: /Images/Conference/CheckLabeledToggle.png
    :alt: A toggle with the labels Open and Closed
    :class: with-shadow

    A toggle with the labels Open and Closed

..  literalinclude:: /CodeSnippets/my_extension/Configuration/TCA/Overrides/116-tx_myextension_conference-registration_open.php
    :caption: EXT:my_extension/Configuration/TCA/Overrides/116-tx_myextension_conference-registration_open.php
    :emphasize-lines: 13



..  _tca-example-checkbox-21:

Single checkbox with labeled toggle inverted state display
----------------------------------------------------------

The field stores `1` when the comments on a talk are closed. With
`invertStateDisplay`, the toggle is on while the comments are open. The
labels `labelChecked` and `labelUnchecked` follow the displayed state of the
toggle, not the stored value:

..  figure:: /Images/Conference/CheckLabeledToggleInverted.png
    :alt: A toggle that is switched on and shows the label Open
    :class: with-shadow

    The toggle is on, and the comments are open

..  literalinclude:: /CodeSnippets/my_extension/Configuration/TCA/Overrides/256-tx_myextension_talk-comments_closed.php
    :caption: EXT:my_extension/Configuration/TCA/Overrides/256-tx_myextension_talk-comments_closed.php
    :emphasize-lines: 16-19
