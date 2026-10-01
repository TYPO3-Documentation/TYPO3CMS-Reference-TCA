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

..  _tca-example-checkbox-7:

Example: Checkbox limited to a maximal number of checked records
================================================================

..  include:: /Images/Rst/Checkbox7.rst.txt
..  include:: /CodeSnippets/Checkbox7.rst.txt

..  _columns-checkbox-examples-18:

Example: Toggle checkbox with invertStateDisplay
================================================

..  include:: /Images/Rst/Checkbox18.rst.txt
..  include:: /CodeSnippets/Checkbox18.rst.txt


..  _tca-example-checkbox-3:

Example: Three checkboxes, two with labels, one without
=======================================================

..  include:: /Images/Rst/Checkbox3.rst.txt
..  include:: /CodeSnippets/Checkbox3.rst.txt


..  _tca-example-checkbox-itemsprocfunc:

Example: Checkboxes with itemsProcFunc
======================================

The configuration for a custom field `checkbox_items_proc_func` could look like
this:

..  literalinclude:: /ColumnsConfig/Type/Check/_Snippets/_Check.php
    :caption: EXT:my_extension/Configuration/TCA/tx_myextension_domain_model_something.php
    :visible-lines: 3, 28-38
    :emphasize-lines: 36

The referenced `itemsProcFunc` method should populate the items
by filling :php:`$params['items']`:

..  literalinclude:: _Snippets/_MyItemsProcFunc.php
    :caption: EXT:my_extension/Classes/UserFunctions/MyItemsProcFunc.php

In the real world you would use the other passed parameters to dynamically
generate the items.

..  _tca-example-checkbox-17:

Example: checkboxToggle
=======================

..  include:: /Images/Rst/Checkbox17.rst.txt

..  _tca-example-checkbox-19:

Example: checkboxLabeledToggle
==============================

..  include:: /Images/Rst/Checkbox19.rst.txt


..  _tca-example-checkbox-8:

Example: Only one record can be checked
=======================================

In the example below, only one record from the same table will be allowed
to have that particular box checked.

..  include:: /Images/Rst/Checkbox8.rst.txt

..  include:: /CodeSnippets/Checkbox8.rst.txt
