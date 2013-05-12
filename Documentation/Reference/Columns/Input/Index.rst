.. ==================================================
.. FOR YOUR INFORMATION
.. --------------------------------------------------
.. -*- coding: utf-8 -*- with BOM.

.. include:: ../../../Includes.txt
.. include:: Images.txt


.. _columns-input:

TYPE: "input"
^^^^^^^^^^^^^

The type "input" generates an <input> field, possibly with additional
features applied.

|img-11|

.. ### BEGIN~OF~TABLE ###


.. container:: table-row

   Key
         type

   Datatype
         string

   Description
         *[Must be set to "input"]*

   Scope
         Display / Proc.


.. container:: table-row

   Key
         size

   Datatype
         integer

   Description
         Abstract value for the width of the <input> field. To set the input
         field to the full width of the form area, use the value 48. Default is
         30.

   Scope
         Display


.. container:: table-row

   Key
         max

   Datatype
         integer

   Description
         Value for the "maxlength" attribute of the <input> field.

         If the form element edits a varchar(40) field in the database you
         should also set this value to 40.

   Scope
         Display


.. container:: table-row

   Key
         default

   Datatype
         string

   Description
         The default value

   Scope
         Display / Proc.


.. container:: table-row

   Key
         eval

   Datatype
         list of keywords

   Description
         Configuration of field evaluation.

         Some of these evaluation keywords will trigger a JavaScript pre-
         evaluation in the form. Other evaluations will be performed in the
         backend.

         The evaluation functions will be executed in the list-order.

         Keywords:

         - **required** : A non-empty value is required in the field (otherwise
           the form cannot be saved).

         - **trim** : The value in the field will have white spaces around it
           trimmed away.

         - **date** : The field will evaluate the input as a date, automatically
           converting the input to a UNIX-time in seconds. The display will be
           like "12-8-2003" while the database value stored will be "1060639200".

         - **datetime** : The field will evaluate the input as a date with time
           (detailed to hours and minutes), automatically converting the input to
           a UNIX-time in seconds. The display will be like "16:32 12-8-2003"
           while the database value will be "1060698720".

         - **time** : The field will evaluate the input as a timestamp in seconds
           for the current day (with a precision of minutes). The display will be
           like "23:45" while the database will be "85500".

         - **timesec** : The field will evaluate the input as a timestamp in
           seconds for the current day (with a precision of seconds). The display
           will be like "23:45:13" while the database will be "85513".

         - **year** : Evaluates the input to a year between 1970 and 2038. If you
           need any year, then use "int" evaluation instead.

         - **int** : Evaluates the input to an integer.

         - **upper** : Converts to uppercase (only A-Z plus a selected set of
           Western European special chars).

         - **lower** : Converts the string to lowercase (only A-Z plus a selected
           set of Western European special chars).

         - **alpha** : Allows only a-zA-Z characters.

         - **num** :Allows only 0-9 characters in the field.

         - **alphanum** : Same as "alpha" but allows also "0-9"

         - **alphanum\_x** : Same as "alphanum" but allows also "\_" and "-"
           chars.

         - **nospace** : Removes all occurrences of space characters (chr(32))

         - **md5** : Will convert the inputted value to the md5-hash of it (The
           JavaScript MD5() function is found in typo3/md5.js)

         - **is\_in** : Will filter out any character in the input string which
           is  *not* found in the string entered in the key "is\_in" (see below).

         - **password** : Will show "\*\*\*\*\*\*\*" in the field after entering
           the value and moving to another field. Thus passwords can be protected
           from display in the field.  **Notice** that the value during
           *entering it* is visible!

         - **double2** : Converts the input to a floating point with 2 decimal
           positions, using the "." (period) as the decimal delimited (accepts
           also "," for the same).

         - **unique** : Requires the field to be unique for the  *whole* table.
           (Evaluated on the server only). NOTICE: When selecting on unique-
           fields, make sure to select using “AND pid>=0” since the field CAN
           contain duplicate values in other versions of records (always having
           PID = -1). This also means that if you are using versioning on a table
           where the unique-feature is used you cannot set the field to be truly
           unique in the database either!

         - **uniqueInPid** : Requires the field to be unique for the current PID
           (among other records on the same page). (Evaluated on the server only)

         - **tx\_\*** : User defined form evaluations. See below.

         All the above evaluations (unless noted) are done by JavaScript with
         the functions found in the script t3lib/jsfunc.evalfield.js

         "(TCE)" means the evaluation is done in the TCE on the server. The
         class used for this is t3lib\_TCEmain.

         **Example:**

         Setting the field to evaluate the input to a date returned to the
         database in UNIX-time (seconds) ::

            'eval' => 'date',

         Trimming the value for white space before storing in the database
         (important for varchar fields!) ::

            'eval' => 'trim',

         By this configuration the field will be stripped for any space
         characters, converted to lowercase, only accepted if filled in and on
         the server the value is required to be unique for all records from
         this table::

            'eval' => 'nospace,lower,unique,required'

         **User-defined form evaluations:**

         You can supply your own form evaluations in an extension by creating a
         class with two functions, one which returns the JavaScript code for
         client side validation called returnFieldJS() and one which does the
         server side validation called evaluateFieldValue().

         **The function evaluateFieldValue() has 3 arguments:**

         - **$value** :The field value to be evaluated.

         - **$is\_in** : The "is\_in" value of the field configuration from TCA
           (see below).

         - **&$set** : Boolean defining if the value is written to the database
           or not. Must be passed by reference and changed if needed.

         **Example:** ::

            class.tx_exampleextraevaluations_extraeval1.php:

            <?php
            class tx_exampleextraevaluations_extraeval1 {
                    function returnFieldJS() {
                            return '
                                    return value + " [added by JS]";
                            ';
                    }
                    function evaluateFieldValue($value, $is_in, &$set) {
                            return $value . ' [added by PHP]';
                    }
            }
            ?>

            ext_localconf.php

            <?php
            // here we register "tx_exampleextraevaluations_extraeval1"
            $TYPO3_CONF_VARS['SC_OPTIONS']['tce']['formevals']['tx_exampleextraevaluations_extraeval1'] = 'EXT:example_extraevaluations/ class.tx_exampleextraevaluations_extraeval1.php';
            ?>

   Scope
         Display / Proc.


.. container:: table-row

   Key
         is\_in

   Datatype
         string

   Description
         If the evaluation type "is\_in" (see above, under key "eval") is used
         for evaluation, then the characters in the input string should be
         found in this string as well. This value is also passed as argument to
         the evaluation function if a user-defined evaluation function is
         registered.

   Scope
         Display / Proc.


.. container:: table-row

   Key
         checkbox

   Datatype
         string

   Description
         **This setting is not used anymore since TYPO3 4.5.** To set a default
         value, use the "default" property.

         If defined (even empty), a checkbox is placed  *before* the input
         field.

         If a value other than the value of 'checkbox' (this value) appears in
         the input-field the checkbox is checked.

         **Example:** ::

            'checkbox' => '123',

         If you set this value then entering "12345" in the field will render
         this:

         |img-12| But if you either uncheck the checkbox or just enter the
         value "123" you will see an empty input field and no checkbox set -
         however the value of the field *will be* "123":

         |img-13| This feature is useful for date-fields for instance. In such
         cases the checkbox will allow people to quickly remove the date
         setting (equal to setting the date to zero which actually means 1-1
         1970 or something like that).

         **Example listing:** ::

            'config' => array(
                    'type' => 'input',
                    'size' => '8',
                    'max' => '20',
                    'eval' => 'date',
                    'checkbox' => '0',
                    'default' => '0'
            )

         Will create a field like this below. Checking the checkbox will insert
         the date of the current day. Unchecking the checkbox will just remove
         the value and silently sent a zero to the server (since the value of
         the key "checkbox" is set to "0").

         |img-14|

   Scope
         Display / Proc.


.. container:: table-row

   Key
         range

   Datatype
         array

   Description
         An array which defines an integer range within which the value must
         be.

         **Keys:**

         "lower": Defines the lower integer value.

         "upper": Defines the upper integer value.

         You can specify both or only one of them.

         **Notice:** This feature is evaluated  *on the server only* so any
         regulation of the value will have happened after saving the form.

         **Example:**

         Limits an integer to be within the range 10 to 1000::

            'eval' => 'int',
            'range' => array(
              'lower' => 10,
              'upper' => 1000
            ),

         In this example the upper limit is set to the last day in year 2020
         while the lowest possible value is set to the date of yesterday. ::

            'range' => array(
              'upper' => mktime(0, 0, 0, 12, 31, 2020),
              'lower' => mktime(0,0,0,date('m'), date('d'), date('Y'))
            )

   Scope
         Proc.


.. container:: table-row

   Key
         wizards

   Datatype
         array

   Description
         [See section later for options]

   Scope
         Display


.. ###### END~OF~TABLE ######


Now follows some code listings as examples:


.. _columns-input-examples:

Examples
""""""""

.. _columns-input-examples-date:

A "date" field
~~~~~~~~~~~~~~

This is the typical configuration for a date field, like "starttime"::

           'starttime' => array(
               'exclude' => 1,
               'label' => 'LLL:EXT:lang/locallang_general.php:LGL.starttime',
               'config' => array(
                   'type' => 'input',
                   'size' => '8',
                   'max' => '20',
                   'eval' => 'date',
                   'default' => '0'
               )
           ),


.. _columns-input-examples-username:

A "username" field
~~~~~~~~~~~~~~~~~~

In this example the field is for entering a username (from
"fe\_users"). A number of requirements are imposed onto the field,
namely that it must be unique within the page where the record is
stored, must be in lowercase and without spaces in it::

           'username' => array(
               'label' => 'LLL:EXT:cms/locallang_tca.php:fe_users.username',
               'config' => array(
                   'type' => 'input',
                   'size' => '20',
                   'max' => '50',
                   'eval' => 'nospace,lower,uniqueInPid,required'
               )
           ),


.. _columns-input-examples-typical:

A typical input field
~~~~~~~~~~~~~~~~~~~~~

This is just a very typical configuration which sets the size and a
character limit to the field. In addition the input value is trimmed
for surrounding whitespace which is a very good idea when you enter
values into varchar fields. ::

           'name' => array(
               'exclude' => 1,
               'label' => 'LLL:EXT:lang/locallang_general.php:LGL.name',
               'config' => array(
                   'type' => 'input',
                   'size' => '40',
                   'eval' => 'trim',
                   'max' => '80'
               )
           ),

.. _columns-input-examples-required:

Required values
~~~~~~~~~~~~~~~

Here the field is required to be filled in::

           'title' => array(
               'label' => 'LLL:EXT:cms/locallang_tca.php:fe_groups.title',
               'config' => array(
                   'type' => 'input',
                   'size' => '20',
                   'max' => '20',
                   'eval' => 'trim,required'
               )
           ),

