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

The :ref:`according database field <t3coreapi:auto-generated-db-structure>`
is generated automatically. For short input fields allowing less
than 255 chars :sql:`VARCHAR()` is used, :sql:`TEXT` for larger input fields.

Extension authors who need or want to override default
TCA schema details for whatever reason, can of course
do so by defining something specific in :file:`ext_tables.sql`.

..  versionchanged:: 13.2
    Tables with TCA columns set to `type="input"` do not
    need an :file:`ext_tables.sql` entry anymore. The Core now
    creates this column automatically.

..  contents:: Table of contents:
    :local:
    :depth: 2

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
saving the record.

.. hint::

    See EXT:redirects :php:`\TYPO3\CMS\Redirects\Evaluation\SourceHost` for a
    working example. For more information about adding JavaScript modules
    see :ref:`ES6 in the TYPO3 Backend <t3coreapi:backend-javascript-es6>`.

:file:`EXT:extension/Classes/Evaluation/ExampleEvaluation.php`

..  literalinclude:: _Snippets/_ExampleEvaluation.php
    :caption: EXT:my_extension/Classes/EvaluationExampleEvaluation.php

..  literalinclude:: _Snippets/_ext_localconf.php
    :caption: EXT:my_extension/ext_localconf.php

..  literalinclude:: _Snippets/_tx_example_record.php
    :caption: EXT:extension/Configuration/TCA/tx_example_record.php
