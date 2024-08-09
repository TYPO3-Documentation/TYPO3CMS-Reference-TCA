..  include:: /Includes.rst.txt

..  _columns-input:
..  _columns-input-introduction:
..  _columns-input-renderType-default:

=====
Input
=====

:php:`type='input'` generates a html :html:`<input>` field with the :html:`type`
attribute set to :html:`text`. It is possible to apply additional features such
as the :ref:`valuePicker <columns-input-properties-valuePicker>`.

In the database, this field is typically set to a `VARCHAR` or `CHAR` field with
appropriate length.

..  deprecated:: 12.0
    The following render types have been deprecated:

    *   :php:`renderType=inputDateTime`: Use the TCA type
        :ref:`datetime <columns-datetime>` instead.
    *   :php:`renderType=colorpicker`: Use the TCA type
        :ref:`color <columns-color>` instead.
    *   :php:`renderType=inputLink`: Use the TCA type :ref:`link <columns-link>`
        instead.

..  _columns-input-examples:

Examples
========

..  _tca_example_input_1:

Simple input field
------------------

..  include:: /Images/Rst/Input1.rst.txt

..  include:: /CodeSnippets/Input1.rst.txt

Input with placeholder and null handling
----------------------------------------

..  include:: /Images/Rst/Input28.rst.txt

..  include:: /CodeSnippets/Input28.rst.txt

..  _tca_example_input_33:

Value picker
------------

..  include:: /Images/Rst/Input33.rst.txt

..  include:: /CodeSnippets/Input33.rst.txt

..  _columns-input-properties:

Properties of the TCA column type `input`
============================================

..  confval-menu::
    :name: input
    :display: table
    :type:
    :Scope:

    ..  include:: _Properties/_*.rst.txt
        :show-buttons:

..  _columns-input-eval:

Input fields with eval
======================

..  _columns-input-eval-trim:

Trim white space
----------------

Trimming the value for white space before storing in the database:

..  literalinclude:: _Snippets/_trimmedField.php

..  _columns-input-eval-combined:

Combine eval rules
------------------

By this configuration the field will be stripped for any space characters, converted to lowercase, only accepted
if filled in and on the server the value is required to be unique for all records from this table:

..  code-block:: php

    'eval' => 'nospace,lower,unique'

..  _columns-input-eval-custom:

Custom eval rules
-----------------

You can supply own form evaluations in an extension by creating a class with three functions, one which returns
the JavaScript code for client side validation called `returnFieldJS()` and two for the server side:
`deevaluateFieldValue()` called when opening the record and `evaluateFieldValue()` called for validation when
saving the record:

:file:`EXT:extension/Classes/Evaluation/ExampleEvaluation.php`

..  literalinclude:: _Snippets/_ExampleEvaluation.php
    :caption: EXT:my_extension/Classes/EvaluationExampleEvaluation.php

..  literalinclude:: _Snippets/_ext_localconf.php
    :caption: EXT:my_extension/ext_localconf.php

..  literalinclude:: _Snippets/_tx_example_record.php
    :caption: EXT:extension/Configuration/TCA/tx_example_record.php
