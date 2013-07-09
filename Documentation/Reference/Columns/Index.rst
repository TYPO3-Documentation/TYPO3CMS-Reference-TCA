.. ==================================================
.. FOR YOUR INFORMATION
.. --------------------------------------------------
.. -*- coding: utf-8 -*- with BOM.

.. include:: ../../Includes.txt
.. include:: Images.txt


.. _columns:

['columns'] section
^^^^^^^^^^^^^^^^^^^

The "columns" section contains configuration for each table  *field*
(also called "column") which can be edited by the backend.

The configuration includes both properties for the display in the
backend as well as the processing of the submitted data.

Each field can be configured as a certain "type" (e.g. checkbox,
selector, input field, text area, file or db-relation field, user
defined etc.) and for each type a separate set of additional
properties applies. These properties are clearly explained below for
each type.

This table shows the keys of the ['columns'][ *field name* ] array:


.. ### BEGIN~OF~TABLE ###


.. container:: table-row

   Key
         label

   Datatype
         string or LLL reference

   Description
         **Required!**

         The name of the field as it is shown in the interface:

         |img-10|

   Scope
         Display


.. container:: table-row

   Key
         exclude

   Datatype
         boolean

   Description
         If set, all backend users are prevented from editing the field unless
         they are members of a backend user group with this field added as an
         "Allowed Excludefield" (or "admin" user).

         See "Inside TYPO3" document about permissions.

   Scope
         Proc.


.. container:: table-row

   Key
         l10n\_mode

   Datatype
         string (keyword)

   Description
         Localization mode.

         Only active if the ctrl-directive "languageField" is set.

         The main relevance is when a record is localized by an API call in
         TCEmain that makes a copy of the default language record. You can
         think of this process as copying all fields from the source record,
         except if a special mode applies as defined below:

         Keywords are:

         - **exclude** – Field will not be shown in TCEforms if this record is a
           localization of the default language. (Works basically like a display
           condition.) Excluded fields will not be copied when a language-copy is
           made. May have frontend implications similar to "mergeIfNotBlank".

         - **mergeIfNotBlank** – Field will be editable but if the field value is
           blank the value from the default translation is used (this can be very
           useful for images shared from the default record). Requires frontend
           support. In the backend the effect is that the field content is not
           copied when a new "localization copy" is made.

         - **noCopy** – Like mergeIfNotBlank but without the implications for the
           frontend; The field is just not copied.

         - **prefixLangTitle** – The field will get copied, but the content is
           prefixed with the title of the language. Works only for field types
           like "text" and "input"

         As mentioned above if "l10n\_mode" is not set for a given field, that
         field is just copied as is to the translated record.

         (Doesn't apply to flexform fields.)

   Scope
         Display / Proc.


.. container:: table-row

   Key
         l10n\_display

   Datatype
         list of keywords

   Description
         Localization display.

         see:  *l10n\_mode*

         This option can be used to define the language related field
         rendering. This has nothing to do with the processing of language
         overlays and data storage but the display of form fields.

         Keywords are:

         - **hideDiff** – The differences to the default language field will not
           be displayed.

         - **defaultAsReadonly** – This renders the field as read only field with
           the content of the default language record. The field will be rendered
           even if 'l10n\_mode' is set to 'exclude'. While 'exclude' define the
           field not to be translated this option activate display of the default
           data.

   Scope
         Display


.. container:: table-row

   Key
         l10n\_cat

   Datatype
         string

         (keyword)

   Description
         Localization category.

         **Keywords:** text,media

         When localization mode is set for a TCEforms, it must be either of
         these values. Only the fields that have l10n\_cat set to the
         localization mode is shown. Used to limit display so only most
         relevant fields are shown to translators. It doesn't prevent editing
         of other fields if records are edited outside localization mode, it
         merely works as a display condition.

         It is also used in localization export (pending at this moment).

   Scope
         Display


.. container:: table-row

   Key
         config

   Datatype
         array

   Description
         Contains the actual configuration properties of the fields display and
         processing behavior.

         The possibilities for this array depend on the value of the array key
         "type" within the array. Each valid value for "type" is shown below in
         a separate table.

         Furthermore there are some properties common to all field types,
         described in the next chapter "['columns'][field name]['config'] /
         Common properties".

   Scope
         -


.. container:: table-row

   Key
         displayCond

   Datatype
         string/array

   Description
         Contains one or more condition rules for whether to display the field or not.
         Conditions can be grouped and nested using boolean operators :code:`AND`
         or :code:`OR` as array keys. See examples below.

         .. note::

            Multiple conditions are possible only since TYPO3 CMS 6.1.

         A rule is a string divided into several parts by ":" (colons).

         The first part is the rule-type and the subsequent parts will depend
         on the rule type.

         Currently these rule values can be used:

         - **FIELD** : This evaluates based on another fields value in the
           record.

           - Part 1 is the field name

           - Part 2 is the evaluation type. These are the possible options:

             - **REQ** : Requires the field to have a "true" value. False values are
               "" (blank string) and 0 (zero) or if the field does not exist at all.
               All else is true. For the REQ evaluation type Part3 of the rules string
               must be the string "true" or "false". If "true" then the rules returns
               "true" if the evaluation is true. If "false" then the rules returns
               "true" if the evaluation is false.

             - **> / < / >= / <=** : Evaluates if the field value is greater than,
               less than the value in "Part 3"

             - **= / !=** : Evaluates if the field value is equal to value in "Part
               3" (or not, if the negation flag, "!" is prefixed)

             - **IN / !IN** : Evaluates if the field value is in the comma list equal
               to value in "Part 3" (or not, if the negation flag, "!" is prefixed)

             - **- / !-** : Evaluates if the field value is in the range specified by
               value in "Part 3" ([min] - [max]) (or not, if the negation flag, "!"
               is prefixed)

         - **EXT** : This evaluates based on current status of extensions.

           - Part 1 is the extension key

           - Part 2 is the evaluation type:

             - **LOADED** : Requires the extension to be loaded if Part3 is "true"
               and reversed if Part3 is "false".

         - **REC** : This evaluates based on the current record (doesn't make
           sense for flexform fields)

           - Part 1 is the type.

             - **NEW** : Requires the record to be new if Part2 is "true" and
               reversed if Part2 is "false".

         - **HIDE\_L10N\_SIBLINGS** : (FlexForms only) This evaluates based on
           whether the field is a value for the default language or an
           alternative language. Works only for <langChildren>=1, otherwise it
           has no effect.

           - Part 1: Keywords: "except\_admin" = will still show field to admin
             users

         - **HIDE\_FOR\_NON\_ADMINS:** This will hide the field for all non-admin
           users while admins can see it. Useful for FlexForm container fields
           which are not supposed to be edited directly via the FlexForm but
           rather through some other interface (TemplaVoilà's Page module for
           instance).

         - **VERSION:**

           - Part 1 is the type:

             - **IS** : Part 2 is "true" or "false": If true, the field is shown only
               if the record is a version (pid == -1)

         For FlexForm elements the fields are tags on same level. If
         <langChildren> is enabled, then the value of other fields on same
         level is taken from the same language.

         The field-values of the FlexForm-parent record are prefixed with
         "parentRec.". These fields can be used like every other field.

         **Examples:**

         This example will require the field named "tx\_templavoila\_ds" to be
         true, otherwise the field for which this rule is set will not be
         displayed::

            'displayCond' => 'FIELD:tx_templavoila_ds:REQ:true',

         This example requires the extension "static\_info\_tables" to be
         loaded, otherwise the field is not displayed (this is useful if the
         field makes a look-up on a table coming from another extension!)::

            'displayCond' => 'EXT:static_info_tables:LOADED:true',

         The two above conditions could be combined to be both required::

            'displayCond' => array(
            	AND => array(
            		'FIELD:tx_templavoila_ds:REQ:true',
            		'EXT:static_info_tables:LOADED:true',
            	)
            )

         This last example would require the header-field of the FlexForm-parent
         record to be true, otherwise the FlexForm field is not displayed
         (works only within FlexForm datastructure definitions):

         .. code-block:: xml

            <displayCond>FIELD:parentRec.header:REQ:true</displayCond>

   Scope
         Display


.. container:: table-row

   Key
         defaultExtras

   Datatype
         string

   Description
         In the "types" configuration of a field you can specify on position 4
         a string of "extra configuration". This string will be the default
         string of extra options for a field regardless of types configuration.
         For instance this can be used to create an RTE field without having to
         worry about special configuration in "types" config.

         This is also the way by which you can enable the RTE for FlexForm
         fields.

         **Example value:**

         richtext[cut\|copy\|paste\|formatblock\|textcolor\|bold\|italic\|under
         line\|left\|center\|right\|orderedlist\|unorderedlist\|outdent\|indent
         \|link\|table\|image\|line\|chMode]:rte\_transform[mode=ts\_css\|imgpa
         th=uploads/tx\_mininews/rte/]

   Scope
         Display


.. ###### END~OF~TABLE ######


.. _columns-types:

Column types
""""""""""""

.. toctree::
   :maxdepth: 5
   :titlesonly:
   :glob:

   Common/Index
   Input/Index
   Text/Index
   Check/Index
   Radio/Index
   Select/Index
   Group/Index
   None/Index
   Passthrough/Index
   User/Index
   Flex/Index
   Inline/Index
