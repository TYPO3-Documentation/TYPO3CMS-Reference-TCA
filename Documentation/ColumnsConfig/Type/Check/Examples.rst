..  include:: /Includes.rst.txt
..  _columns-checkbox-examples:

========
Examples
========

..  _columns-checkbox-examples-2:

Example: Default checkboxes with fixed columns
==============================================

..  include:: /Images/Rst/Checkbox2.rst.txt
..  include:: /CodeSnippets/Checkbox2.rst.txt

..  _columns-checkbox-examples-16:

Example: Checkboxes with Inline columns and default value
=========================================================

..  include:: /Images/Rst/Checkbox16.rst.txt

Here "Tu", the second bit, is active by default.

..  include:: /CodeSnippets/Checkbox16.rst.txt

..  _tca_example_checkbox_7:

Example: Checkbox limited to a maximal number of checked records
================================================================

..  include:: /Images/Rst/Checkbox7.rst.txt
..  include:: /CodeSnippets/Checkbox7.rst.txt

..  _columns-checkbox-examples-18:

Example: Toggle checkbox with invertStateDisplay
================================================

..  include:: /Images/Rst/Checkbox18.rst.txt
..  include:: /CodeSnippets/Checkbox18.rst.txt


..  _tca_example_checkbox_3:

Example: Three checkboxes, two with labels, one without
=======================================================

..  include:: /Images/Rst/Checkbox3.rst.txt
..  include:: /CodeSnippets/Checkbox3.rst.txt


..  _tca_example_checkbox_itemsProcFunc:

Example: Checkboxes with itemsProcFunc
======================================

The configuration for a custom field :sql:`select_single_2` could look like this:

..  literalinclude:: _Snippets/_itemProcFunc.php

The referenced :php:`itemsProcFunc` method should populate the items
by filling :php:`$params['items']`:

..  literalinclude:: _Snippets/_MyItemsProcFunc.php

In the real world you would use the other passed parameters to dynamically
generate the items.

..  _tca_example_checkbox_17:

Example: checkboxToggle
=======================

..  include:: /Images/Rst/Checkbox17.rst.txt

..  _tca_example_checkbox_19:

Example: checkboxLabeledToggle
==============================

..  include:: /Images/Rst/Checkbox19.rst.txt


..  _tca_example_checkbox_8:

Example: Only one record can be checked
=======================================

In the example below, only one record from the same table will be allowed
to have that particular box checked.

..  include:: /Images/Rst/Checkbox8.rst.txt

..  include:: /CodeSnippets/Checkbox8.rst.txt
