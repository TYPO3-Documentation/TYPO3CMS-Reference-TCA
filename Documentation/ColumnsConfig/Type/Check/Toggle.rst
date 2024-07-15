..  include:: /Includes.rst.txt
..  _columns-check-checkboxToggle:

===============
Toggle checkbox
===============

The checkbox with the
:ref:`renderType checkboxToggle <columns-check-properties-renderType>` renders
as one or several toggle switches. As opposed to the
:ref:`Labeled toggle checkbox <columns-check-checkboxLabeledToggle>` no
additional labels for the states can be defined.

..  include:: /Images/Rst/Checkbox17.rst.txt
..  include:: /Images/Rst/Checkbox18.rst.txt

Its state can be inverted via :code:`invertStateDisplay`.

..  _columns-check-checkboxToggle-examples:

Examples
========

..  _columns-check-checkboxToggle-examples-17:

Example: Single checkbox with toggle
------------------------------------

..  include:: /Images/Rst/Checkbox17.rst.txt
..  include:: /CodeSnippets/Checkbox17.rst.txt

`checkboxToggle`: Instead of checkboxes, a toggle item is displayed.


..  _columns-check-checkboxToggle-examples-18:

Example: Single checkbox with toggle inverted state display
-----------------------------------------------------------

..  include:: /Images/Rst/Checkbox18.rst.txt
..  include:: /CodeSnippets/Checkbox18.rst.txt

`invertedStateDisplay`:  A checkbox is marked checked if the database bit is
not set and vice versa.
