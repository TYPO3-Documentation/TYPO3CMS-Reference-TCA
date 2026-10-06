..  include:: /Includes.rst.txt

..  _columns-input:
..  _columns-input-introduction:
..  _columns-input-rendertype-default:

=====
Input
=====

`type='input'` generates a html :html:`<input>` field with the :html:`type`
attribute set to :html:`text`. It is possible to apply additional features such
as the :ref:`valuePicker <columns-input-properties-valuepicker>`.

The :ref:`according database field <t3coreapi:auto-generated-db-structure>`
is generated automatically. For short input fields allowing less
than 255 chars :sql:`VARCHAR()` is used, :sql:`TEXT` for larger input fields.

Extension authors who need or want to override default
TCA schema details for whatever reason, can
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

..  _tca-example-input-1:

Simple input field
------------------

..  figure:: /Images/Conference/ColumnsBasicField.png
    :alt: The title of a conference
    :class: with-shadow

    The title of a conference

..  literalinclude:: /CodeSnippets/my_extension/Configuration/TCA/tx_myextension_conference.php
    :caption: EXT:my_extension/Configuration/TCA/tx_myextension_conference.php
    :visible-lines: 31-39

..  _columns-input-examples-input-placeholder-null:

Input with placeholder and null handling
----------------------------------------

The short title of a conference shows the title as placeholder. If the editor
sets no short title, the field stays :sql:`NULL`:

..  figure:: /Images/Conference/InputPlaceholder.png
    :alt: The short title of a conference, with the title as placeholder
    :class: with-shadow

    The short title of a conference, with the title as placeholder

..  literalinclude:: /CodeSnippets/my_extension/Configuration/TCA/Overrides/106-tx_myextension_conference-short_title.php
    :caption: EXT:my_extension/Configuration/TCA/Overrides/106-tx_myextension_conference-short_title.php
    :emphasize-lines: 13-16

..  _tca-example-input-33:

Value picker
------------

The room of a talk offers the rooms of the venue to choose from:

..  figure:: /Images/Conference/InputValuePicker.png
    :alt: The room of a talk with its value picker opened
    :class: with-shadow

    The room of a talk with its value picker opened

..  literalinclude:: /CodeSnippets/my_extension/Configuration/TCA/tx_myextension_talk.php
    :caption: EXT:my_extension/Configuration/TCA/tx_myextension_talk.php
    :visible-lines: 57-69
    :emphasize-lines: 61

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

..  literalinclude:: /CodeSnippets/my_extension/Configuration/TCA/tx_myextension_conference.php
    :caption: EXT:my_extension/Configuration/TCA/tx_myextension_conference.php
    :visible-lines: 31-39
    :emphasize-lines: 37

..  _columns-input-eval-combined:

Combine eval rules
------------------

TYPO3 removes all space characters from the hashtag of a conference and
converts it to lowercase. On the server, TYPO3 also checks that no other
conference uses the same hashtag:

..  literalinclude:: /CodeSnippets/my_extension/Configuration/TCA/Overrides/107-tx_myextension_conference-hashtag.php
    :caption: EXT:my_extension/Configuration/TCA/Overrides/107-tx_myextension_conference-hashtag.php
    :emphasize-lines: 15

..  _columns-input-eval-custom:

Custom eval rules
-----------------

You can supply own form evaluations in an extension by creating a class with three functions, one which returns
the JavaScript code for client side validation called `returnFieldJS()` and two for the server side:
`deevaluateFieldValue()` called when opening the record and `evaluateFieldValue()` called for validation when
saving the record.

..  hint::

    See EXT:redirects :php:`\TYPO3\CMS\Redirects\Evaluation\SourceHost` for a
    working example. For more information about adding JavaScript modules
    see :ref:`ES6 in the TYPO3 Backend <t3coreapi:backend-javascript-es6>`.

The hashtag of a conference uses a class which removes a leading `#` that
editors often type:

..  literalinclude:: /CodeSnippets/my_extension/Classes/Evaluation/HashtagEvaluation.php
    :caption: EXT:my_extension/Classes/Evaluation/HashtagEvaluation.php

Register the class in :file:`ext_localconf.php`:

..  literalinclude:: /CodeSnippets/my_extension/ext_localconf.php
    :caption: EXT:my_extension/ext_localconf.php
    :emphasize-lines: 20

`returnFieldJS()` names a JavaScript module, which removes the `#` already
while the editor types:

..  literalinclude:: /CodeSnippets/my_extension/Resources/Public/JavaScript/hashtag-evaluation.js
    :caption: EXT:my_extension/Resources/Public/JavaScript/hashtag-evaluation.js

Make the module available in :file:`Configuration/JavaScriptModules.php`:

..  literalinclude:: /CodeSnippets/my_extension/Configuration/JavaScriptModules.php
    :caption: EXT:my_extension/Configuration/JavaScriptModules.php

The field names the class in `eval`:

..  literalinclude:: /CodeSnippets/my_extension/Configuration/TCA/Overrides/107-tx_myextension_conference-hashtag.php
    :caption: EXT:my_extension/Configuration/TCA/Overrides/107-tx_myextension_conference-hashtag.php
    :emphasize-lines: 15

