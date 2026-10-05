..  include:: /Includes.rst.txt

..  _columns-displaycond:

=================================
Display conditions in TCA columns
=================================

Display conditions (:confval:`$GLOBALS['TCA'][$table]['columns'][$field][displayCond] <columns-displayCond>`)
can be used to only display the affected field if certain other fields are set
to certain values.

Conditions can be grouped and nested using boolean operators `AND` or `OR` as
array keys. See examples below.

..  contents:: Table of contents

..  _columns-displaycond-rules:

Rules in display conditions
===========================

A rule is a string divided into several parts by ":" (colons). The first part is
the rule-type and the subsequent parts depend on the rule type.

The following rules are available:

FIELD
    This evaluates based on another field's value in the record.

    -   Part 1 is the field name

    -   Part 2 is the evaluation type. These are the possible options:

        REQ
            Requires the field to have a "true" value. False values are "" (blank string) and 0 (zero).
            Everything else is true. For the REQ evaluation type Part 3 of the rules string must be the string "true"
            or "false". If "true" then the rule returns "true" if the evaluation is true. If "false" then the rule
            returns "true" if the evaluation is false.

        **> / < / >= / <=**
            Evaluates if the field value is greater than, less than the value in "Part 3"

        **= / !=**
            Evaluates if the field value is equal to value in "Part 3"

        **IN / !IN**
            Evaluates if the field value is in the comma list equal to value in "Part 3"

        **- / !-**
            Evaluates if the field value is in the range specified by value in "Part 3" ([min] - [max])

        **BIT / !BIT**
            Evaluates if the bit specified by the value in "Part 3" is set in the field's value
            (considered as an integer)

    -   Part 3 is a comma separated list of string or numeric values

REC:NEW:true
    This will show the field for new records which have not been saved yet.

REC:NEW:false
    This will show the field for existing records which have already been saved.

HIDE\_FOR\_NON\_ADMINS
    This will hide the field for all non-admin users while admins can see it.
    Useful for FlexForm container fields which are not supposed to be edited directly via the FlexForm but
    rather through some other interface.

USER
    userFunc call with a fully qualified class name.

    Additional parameters can be passed separated by colon:
    `USER:MyVendor\\MyExtension\\User\\MyConditionMatcher->checkHeader:some:more:info`

    The following arguments are passed as array to the userFunc:

    -   `record`: the currently edited record
    -   `flexContext`: details about the FlexForm if the condition is used in one
    -   `flexformValueKey`: `vDEF`
    -   `conditionParameters`: additional parameters

    The called method is expected to return a :php:`bool` value: :php:`true` if the field should be displayed, :php:`false` otherwise.

VERSION:IS
    Evaluate if a record is a "versioned" record from workspaces.

    -   Part 1 is the type:

        IS
            Part 2 is "true" or "false": If true, the field is shown only if the record is a version (pid == -1).
            Example to show a field in "Live" workspace only: :php:`VERSION:IS:false`

In FlexForm, display conditions can be attached to single fields in sheets, to sheets itself, to flex section fields
and to flex section container element fields. `FIELD` references can be prefixed with a sheet name to
reference a field from a neighbor sheet, see examples below.

..  tip::
    Fields used in a condition should have the column option
    :confval:`columns-onChange` set to `reload`.

..  _columns-displaycond-examples:

Examples for display conditions
===============================

..  _columns-displaycond-examples-basic:

Basic display condition
------------------------

The registration deadline of a conference is only shown while the field
`registration_open` is set:

..  literalinclude:: /CodeSnippets/my_extension/Configuration/TCA/Overrides/117-tx_myextension_conference-registration_deadline.php
    :caption: EXT:my_extension/Configuration/TCA/Overrides/117-tx_myextension_conference-registration_deadline.php
    :emphasize-lines: 10

..  _columns-displaycond-examples-combined:

Combining conditions
--------------------

Multiple conditions can be combined. The link to the tickets is only shown
while the registration is open and the conference has seats:

..  literalinclude:: /CodeSnippets/my_extension/Configuration/TCA/Overrides/118-tx_myextension_conference-ticket_link.php
    :caption: EXT:my_extension/Configuration/TCA/Overrides/118-tx_myextension_conference-ticket_link.php
    :emphasize-lines: 11

A condition with several values: the live stream is only shown for
conferences that take place online or hybrid:

..  literalinclude:: /CodeSnippets/my_extension/Configuration/TCA/Overrides/112-tx_myextension_conference-stream_url.php
    :caption: EXT:my_extension/Configuration/TCA/Overrides/112-tx_myextension_conference-stream_url.php
    :emphasize-lines: 10

This is the same as a combination with `OR`:

..  code-block:: diff
    :caption: EXT:my_extension/Configuration/TCA/Overrides/112-tx_myextension_conference-stream_url.php

    -    'displayCond' => 'FIELD:event_format:IN:online,hybrid',
    +    'displayCond' => [
    +      'OR' => [
    +        'FIELD:event_format:=:online',
    +        'FIELD:event_format:=:hybrid',
    +      ],
    +    ],

..  _columns-displaycond-examples-complex:

A complex example
-----------------

Conditions can be nested. The number of seats of a conference is only shown
in the default language, and only if the conference takes place on site or
hybrid:

..  literalinclude:: /CodeSnippets/my_extension/Configuration/TCA/Overrides/145-tx_myextension_conference-seats.php
    :caption: EXT:my_extension/Configuration/TCA/Overrides/145-tx_myextension_conference-seats.php
    :emphasize-lines: 11, 13

..  _columns-displaycond-examples-flexform:

A complex example in a FlexForm
-------------------------------

In a FlexForm, `OR` and `AND` are XML elements. The plugin of the conference
extension only asks for the number of conferences if it lists the upcoming or
the past ones:

..  literalinclude:: /CodeSnippets/my_extension/Configuration/FlexForms/ConferenceList.xml
    :caption: EXT:my_extension/Configuration/FlexForms/ConferenceList.xml
    :visible-lines: 44-56
    :emphasize-lines: 47

..  _columns-displaycond-examples-flexform-value:

Access values in a flexform
---------------------------

Flex form fields can access field values from various different sources.
Each of the following conditions is an alternative for the `displayCond` of
one field:

..  code-block:: xml

    <!-- Hide field if value of record field "header" is not "true" -->
    <displayCond>FIELD:parentRec.header:REQ:true</displayCond>
    <!-- Hide field if value of parent record field "layout" is not "1" -->
    <displayCond>FIELD:parentRec.layout:=:1</displayCond>
    <!-- Hide field if value of neighbour field "settings.mode" on same sheet is not "selected" -->
    <displayCond>FIELD:settings.mode:=:selected</displayCond>
    <!-- Hide field if value of field "settings.mode" from sheet "sDEF" is not "selected" -->
    <displayCond>FIELD:sDEF.settings.mode:=:selected</displayCond>


..  _columns-displaycond-technical:

Technical background
====================

The display conditions are implemented in class
:php:`\TYPO3\CMS\Backend\Form\FormDataProvider\EvaluateDisplayConditions`,
which is a :ref:`FormDataProvider <t3coreapi:FormEngine-DataCompiling>`.
It can be used for fields directly in the record as well as for
FlexForm values.
