displayCond
-----------

:aspect:`Datatype`
    string / array

:aspect:`Scope`
    Display

:aspect:`Description`
    Contains one or more condition rules for whether to display the field or not.

    Conditions can be grouped and nested using boolean operators :code:`AND` or :code:`OR` as
    array keys. See examples below.

    A rule is a string divided into several parts by ":" (colons). The first part is the rule-type and the subsequent
    parts depend on the rule type.

    The following rules are available:

    - **FIELD**
        This evaluates based on another field's value in the record.

        - Part 1 is the field name

        - Part 2 is the evaluation type. These are the possible options:

            - **REQ**
                Requires the field to have a "true" value. False values are "" (blank string) and 0 (zero).
                Everything else is true. For the REQ evaluation type Part3 of the rules string must be the string "true"
                or "false". If "true" then the rule returns "true" if the evaluation is true. If "false" then the rule
                returns "true" if the evaluation is false.

            - **> / < / >= / <=**
                Evaluates if the field value is greater than, less than the value in "Part 3"

            - **= / !=**
                Evaluates if the field value is equal to value in "Part 3"

            - **IN / !IN**
                Evaluates if the field value is in the comma list equal to value in "Part 3"

            - **- / !-**
                Evaluates if the field value is in the range specified by value in "Part 3" ([min] - [max])

            - **BIT / !BIT**
                Evaluates if the bit specified by the value in "Part 3" is set in the field's value
                (considered as an integer)

    - **REC**
        This evaluates based on the current record (doesn't make sense for flexform fields)

        - Part 1 is the type.

            - **NEW**
                Requires the record to be new if Part2 is "true" and reversed if Part2 is "false".

    - **HIDE\_FOR\_NON\_ADMINS**
        This will hide the field for all non-admin users while admins can see it.
        Useful for FlexForm container fields which are not supposed to be edited directly via the FlexForm but
        rather through some other interface (TemplaVoilà's Page module for instance).

    - **USER**
        userFunc call with a fully qualified class name. Additional parameters can be passed separated
        by colon. :php:`USER:Evoweb\\Example\\User\\MyConditionMatcher->checkHeader:some:more:info`

    - **VERSION**
        Evaluate if a record is a "versioned" record from workspaces.

        - Part 1 is the type:

            - **IS**
                Part 2 is "true" or "false": If true, the field is shown only if the record is a version (pid == -1).
                Example to show a field in "Live" workspace only: :php:`VERSION:IS:false`

    In FlexForm, display conditions can be attached to single fields in sheets, to sheets itself, to flex section fields
    and to flex section container element fields. :code:`FIELD` references can be prefixed with a sheet name to
    reference a field from a neighbor sheet, see examples below.

    **Examples:**

    This example will require the field named "tx\_templavoila\_ds" to be true, otherwise the field for which this rule
    is set will not be displayed:

    .. code-block:: php

        'displayCond' => 'FIELD:tx_templavoila_ds:REQ:true',

    Multiple conditions can be combined:

    .. code-block:: php

        'displayCond' => [
            'AND' => [
                'FIELD:tx_templavoila_ds:REQ:true',
                'FIELD:header:=:Headline',
            ],
        ],

    Going further the next example defines the following conditions: for the "spaceAfter" field to be displayed,
    the content element must be in the default or "All" language. Furthermore it must either be a text-type element
    or have some "spaceBefore" defined:

    .. code-block:: php

        'displayCond' => [
            'AND' => [
                'FIELD:sys_language_uid:<=:0',
                'OR' => [
                    'FIELD:CType:=:text',
                    'FIELD:spaceBefore:>:0'
                ]
            ]
        ];

    Using :code:`OR` and :code:`AND` within FlexForms works like this:
	 
    .. code-block:: xml

        <displayCond>
            <and>
                <value1>FIELD:sys_language_uid:<=:0</value1>
                <or>
                    <value1>FIELD:CType:=:text</value1>
                    <value2>FIELD:spaceBefore:>:0</value2>
                </or>
            </and>
        </displayCond>

    Flex form fields can access field values from various different sources:

    .. code-block:: xml

        <!-- Hide field if value of record field "header" is not "true" -->
        <displayCond>FIELD:parentRec.header:REQ:true</displayCond>
        <!-- Hide field if value of parent record field "field_1" is not "foo" -->
        <displayCond>FIELD:parentRec.field_1:!=:foo</displayCond>
        <!-- Hide field if value of neighbour field "flexField_1 on same sheet is not "foo" -->
        <displayCond>FIELD:flexField_1:!=:foo</displayCond>
        <!-- Hide field if value of field "flexField_1" from sheet "sheet_1" is not "foo" -->
        <displayCond>FIELD:sheet_1.flexField_1:!=:foo</displayCond>

    .. note::
        The display condition parser has been rewritten with TYPO3 core version 8. It is now "strict" and throws
        exceptions if the syntax of a display condition is bogus. The exception message reveals details on what
        exactly is broken. This helps with finding bugs in a display condition configuration and reduces headaches
        with "Why is my field shown or not shown?".
