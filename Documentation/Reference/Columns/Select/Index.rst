.. ==================================================
.. FOR YOUR INFORMATION
.. --------------------------------------------------
.. -*- coding: utf-8 -*- with BOM.

.. include:: ../../../Includes.txt
.. include:: Images.txt


.. _columns-select:

TYPE: "select"
^^^^^^^^^^^^^^

Selectors boxes are very common elements in forms. By the "select"
type you can create selector boxes. In the most simple form this is a
list of values among which you can chose only one. In that way it is
similar to the "radio" type above.

|img-19| It is also possible to configure more complex types where the values
from from a look up in another database table and you can even have a
type where more than one value can be selected in any given order you
like.

|img-20|

.. ### BEGIN~OF~TABLE ###

.. container:: table-row

   Key
         Key

   Datatype
         Datatype

   Description
         Description

   Scope
         Scope


.. container:: table-row

   Key
         type

   Datatype
         string

   Description
         *[Must be set to "select"]*

   Scope
         Display / Proc.


.. container:: table-row

   Key
         items

   Datatype
         array

   Description
         Contains the elements for the selector box unless the property
         "foreign\_table" or "special" has been set in which case automated
         values are set in addition to any values listed in this array.

         Each element in this array is in itself an array where:

         - First value is the  **item label** (string or LLL reference)

         - Second value is the  **value of the item** .

         - The special value "--div--" is used to insert a non-selectable value
           that appears as a divider label in the selector box (only for maxitems
           <=1)

         - Values must not contain "," (comma) and "\|" (vertical bar). If you
           want to use “authMode” you should also refrain from using “:” (colon).

         - Third value is an optional icon.Default from "t3lib/gfx/" but if
           prepended with "../" it will be taken from any PATH\_site directory.
           You can also prepend the files "ext/" and "sysext/" if they are in
           global extension directories. And finally - taking precedence over any
           other value - files prepended with "EXT:" will be found in the
           respective extension.

         - Fourth value is an optional description text. This is only shown when
           the list is shown by renderMode "checkbox".

         - Fifth value is reserved as keyword “EXPL\_ALLOW” or “EXPL\_DENY”. See
           option “authMode” / “individual” for more details.

         **Example:**

         A configuration could look like this::

                'type' => 'select',
                'items' => array(
                    array('English', ''),
                    array('Danish', 'dk'),
                    array('German', 'de'),
                )

         A more complex example could be this (includes icons)::

            'type' => 'select',
            'items' => array(
                array('LLL:EXT:cms/locallang_ttc.php:k1', 0, 'selicons/k1.gif'),
                array('LLL:EXT:cms/locallang_ttc.php:k2', 1, 'selicons/k2.gif'),
                array('LLL:EXT:cms/locallang_ttc.php:k3', 2, 'selicons/k3.gif'),
            )

   Scope
         Display


.. container:: table-row

   Key
         itemsProcFunc

   Datatype
         string

         (function reference)

   Description
         PHP function which is called to fill / manipulate the array with
         elements.

         The function/method will have an array of parameters passed to it
         (where the item-array is passed by reference in the key 'items'). By
         modifying the array of items, you alter the list of items.

         For more information, see how user-functions are specified in the
         section about 'wizards' some pages below here.

   Scope
         Display


.. container:: table-row

   Key
         selicon\_cols

   Datatype
         integer (>0)

   Description
         The number of rows in which to position the icons for the selector
         box. Default is to render as many columns as icons.

   Scope
         Display


.. container:: table-row

   Key
         suppress\_icons

   Datatype
         string

   Description
         Lets you disable display of icons. Can be nice to do if icons are
         coming from foreign database records and you don't want them.

         Set it to "IF\_VALUE\_FALSE" if you  *only* want to see icons when a
         value (non-blank, non-zero) is selected. Otherwise no icons are shown.

         Set it to "ONLY\_SELECTED" if you  *only* want to see an icon for the
         selected item.

         Set to "1" (true) if you never want any icons.

   Scope
         Display


.. container:: table-row

   Key
         iconsInOptionTags

   Datatype
         boolean

   Description
         If set, icons will appear in the <option> tags of the selector box.
         This feature seems only to work in Mozilla.

   Scope
         Display


.. container:: table-row

   Key
         noIconsBelowSelect

   Datatype
         boolean

   Description
         Disables the rendering of the icons after the select even when icons
         for the <select>s <option> tags were supplied and iconsInOptionTags
         was set.

   Scope
         Display


.. container:: table-row

   Key
         foreign\_table

   Datatype
         string

         (table name)

   Description
         The item-array will be filled with records from the table defined
         here. The table must be configured in $TCA.

         See the other related options below.

   Scope
         Proc. / Display


.. container:: table-row

   Key
         foreign\_table\_where

   Datatype
         string

         (SQL WHERE clause)

   Description
         The items from "foreign\_table" are selected with this WHERE-clause.

         The table is joined with the "pages"-table and items are selected only
         from pages where the user has read access! (Not checking DB mount
         limitations!)

         **Example:** ::

            AND [foreign_table].pid=0 ORDER BY [foreign_table].sorting

         **Markers:**

         You can use markers in the WHERE clause:

         - ###REC\_FIELD\_[ *field name* ]###

         - ###THIS\_UID### - is current element uid (zero if new).

         - ###CURRENT\_PID### - is the current page id (pid of the record).

         - ###STORAGE\_PID###

         - ###SITEROOT###

         - ###PAGE\_TSCONFIG\_ID### - a value you can set from Page TSconfig
           dynamically.

         - ###PAGE\_TSCONFIG\_IDLIST### - a value you can set from Page TSconfig
           dynamically.

         - ###PAGE\_TSCONFIG\_STR### - a value you can set from Page TSconfig
           dynamically.

         The markers are preprocessed so that the value of CURRENT\_PID and
         PAGE\_TSCONFIG\_ID are always integers (default is zero),
         PAGE\_TSCONFIG\_IDLIST will always be a comma-separated list of
         integers (default is zero) and PAGE\_TSCONFIG\_STR will be
         addslashes'ed before substitution (default is blank string).

         See example below "Simple selector box with TSconfig markers".

   Scope
         Proc. / Display


.. container:: table-row

   Key
         foreign\_table\_prefix

   Datatype
         string or LLL reference

   Description
         Label prefix to the title of the records from the foreign-table.

   Scope
         Display


.. container:: table-row

   Key
         foreign\_table\_loadIcons

   Datatype
         boolean

   Description
         If set, then the icons for the records of the foreign table are loaded
         and presented in the form.

         This depends on the 'selicon\_field' of the foreign tables [ctrl]
         section being configured.

   Scope
         Display


.. container:: table-row

   Key
         neg\_foreign\_table

         neg\_foreign\_table\_where

         neg\_foreign\_table\_prefix

         neg\_foreign\_table\_loadIcons

         neg\_foreign\_table\_imposeValueField

   Datatype
         [mixed]

   Description
         Four options corresponding to the 'foreign\_table'-keys but records
         from this table will be referenced by  *negative* uid-numbers (unless
         if MM is configured in which case it works like the group-type).

         'neg\_foreign\_table' is active only if 'foreign\_table' is defined
         also.

   Scope
         Display / Proc.


.. container:: table-row

   Key
         fileFolder

   Datatype
         string

   Description
         Specifying a folder from where files are added to the item array.

         Specify the folder relative to the PATH\_site, possibly using the
         prefix "EXT:" to point to an extension folder.

         Files from the folder is selected recursively to the level specified
         by "fileFolder\_recursions" (see below) and only files of the
         extension defined by "fileFolder\_extList" is selected (see below).

         Only the file reference relative to the "fileFolder" is stored.

         If the files are images (gif,png,jpg) they will be configured as icons
         (third parameter in items array).

         **Example:** ::

            'config' => array (
                'type' => 'select',
                'items' => array (
                    array('', 0),
                ),
                'fileFolder' => 'EXT:cms/tslib/media/flags/',
                'fileFolder_extList' => 'png,jpg,jpeg,gif',
                'fileFolder_recursions' => 0,
                'selicon_cols' => 8,
                'size' => 1,
                'minitems' => 0,
                'maxitems' => 1,
            )

   Scope
         Display / Proc


.. container:: table-row

   Key
         fileFolder\_extList

   Datatype
         string

   Description
         List of extensions to select. If blank, all files are selected.
         Specify list in lowercase.

         See "t3lib\_div::getAllFilesAndFoldersInPath()"

   Scope
         Display / Proc


.. container:: table-row

   Key
         fileFolder\_recursions

   Datatype
         integer

   Description
         Depth of directory recursions. Default is 99. Specify in range from
         0-99.

         0 (zero) means no recursion into subdirectories.

         See "t3lib\_div::getAllFilesAndFoldersInPath()"

   Scope
         Display / Proc


.. container:: table-row

   Key
         allowNonIdValues

   Datatype
         boolean

   Description
         **If "foreign\_table" is enabled:**

         If set, then values which are not integer ids will be allowed. May be
         needed if you use itemsProcFunc or just enter additional items in the
         items array to produce some string-value elements for the list.

         Notice: If you mix non-database relations with database relations like
         this, DO NOT use integers for values and DO NOT use "\_" (underscore)
         in values either!

         Notice: Will not work if you also use "MM" relations!

   Scope
         Proc.


.. container:: table-row

   Key
         default

   Datatype
         string

   Description
         Default value.

         If empty, the first element in the items array is selected.

   Scope
         Display / Proc.


.. container:: table-row

   Key
         dontRemapTablesOnCopy

   Datatype


   Description
         (See same feature for type="group", internal\_type="db")

         Set it to the exact same value as "foreign\_table" if you don't want
         values to be remapped on copy.

   Scope
         Proc.


.. container:: table-row

   Key
         rootLevel

   Datatype
         boolean

   Description
         If set, the "foreign\_table\_where" will be ignored and a "pid=0" will
         be added to the query to select only records from root level of the
         page tree.

   Scope
         Display


.. container:: table-row

   Key
         MM

   Datatype
         string

         (table name)

   Description
         Means that the relation to the records of "foreign\_table" /
         "neg\_foreign\_table" is done with a M-M relation with a third "join"
         table.

         That table has three columns as a minimum:

         - *uid\_local, uid\_foreign* for uids respectively.

         - *sorting* is a required field used for ordering the items

         - *sorting\_foreign* is required if the relation is bidirectional (see
           description and example below table)

         - *tablenames* is used if multiple tables are allowed in the relation.

         - *uid* (auto-incremented and PRIMARY KEY) may be used if you need the
           “multiple” feature (which allows the same record to be references
           multiple times in the box. See “MM\_hasUidField”

         - Other fields may exist, in particular if MM\_match\_fields is involved
           in the set up.

         **Example SQL #1** (most simple MM table) **:** ::

            CREATE TABLE user_testmmrelations_one_rel_mm (
              uid_local int(11) DEFAULT '0' NOT NULL,
              uid_foreign int(11) DEFAULT '0' NOT NULL,
              sorting int(11) DEFAULT '0' NOT NULL,

              KEY uid_local (uid_local),
              KEY uid_foreign (uid_foreign)
            );

         **Example SQL #2** (Advanced with UID field, “ident” used with
         MM\_match\_fields and sorting\_foreign for bidirectional MM
         relations)::

            #
            # Table structure for table 'user_testmmrelations_two_rel_mm'
            #
            #
            CREATE TABLE user_testmmrelations_two_rel_mm (
              uid int(11) NOT NULL auto_increment,
              uid_local int(11) DEFAULT '0' NOT NULL,
              uid_foreign int(11) DEFAULT '0' NOT NULL,
              tablenames varchar(30) DEFAULT '' NOT NULL,
              sorting int(11) DEFAULT '0' NOT NULL,
              sorting_foreign int(11) DEFAULT '0' NOT NULL,
              ident varchar(30) DEFAULT '' NOT NULL,

              KEY uid_local (uid_local),
              KEY uid_foreign (uid_foreign),
              PRIMARY KEY (uid),
            );

         The field name of the config is not used for data-storage anymore but
         rather it's set to the number of records in the relation on each
         update, so the field should be an integer.

         Notice: Using MM relations you can ONLY store real relations for
         foreign tables in the list - no additional string values or non-record
         values.

         **MM relations and flexforms**

         MM relations has been tested to work with flexforms if not in a
         repeated element in a section. See example below.

   Scope
         Proc.


.. container:: table-row

   Key
         MM\_opposite\_field

   Datatype
         string

         (field name)

   Description
         If you want to make a MM relation editable from the foreign side
         (bidirectional) of the relation as well, you need to set
         MM\_opposite\_field on the foreign side to the field name on the local
         side.

         E.g. if the field "companies.employees" is your local side and you
         want to make the same relation editable from the foreign side of the
         relation in a field called persons.employers, you would need to set
         the MM\_opposite\_field value of the TCA configuration of the
         persons.employers field to the string "employees".

         *Notice: Bidirectional references only get registered once on the
         native side in sys\_refindex*

   Scope
         Proc.


.. container:: table-row

   Key
         MM\_match\_fields

   Datatype
         array

   Description
         Array of field=>value pairs to both insert and match against when
         writing/reading MM relations

   Scope


.. container:: table-row

   Key
         MM\_insert\_fields

   Datatype
         array

   Description
         Array of field=>value pairs to insert when writing new MM relations

   Scope


.. container:: table-row

   Key
         MM\_table\_where

   Datatype
         string (SQL WHERE)

   Description
         Additional where clause used when reading MM relations.

   Scope


.. container:: table-row

   Key
         MM\_hasUidField

   Datatype
         boolean

   Description
         If the “multiple” feature is used with MM relations you MUST set this
         value to true and include a UID field! Otherwise sorting and removing
         relations will be buggy.

   Scope


.. container:: table-row

   Key
         special

   Datatype
         string

         (any of keywords)

   Description
         This configures the selector box to fetch content from some predefined
         internal source. These are the possibilities:

         - **tables** - the list of TCA tables is added to the selector
           (excluding "adminOnly" tables).

         - **pagetypes** - all "doktype"-values for the "pages" table are added.

         - **exclude** - the list of "excludeFields" as found in $TCA is added.

         - **modListGroup** - module-lists added for groups.

         - **modListUser** - module-lists added for users.

         - **explicitValues** – List values that require explicit permissions to
           be allowed or denied. (See “authMode” directive for the “select”
           type).

         - **languages** – List system languages (sys\_language records from page
           tree root + Default language)

         - **custom** – Custom values set by backend modules (see
           TYPO3\_CONF\_VARS[BE][customPermOptions])

         As you might have guessed these options are used for backend user
         management and pretty worthless for most other purposes.

   Scope
         Display / Proc.


.. container:: table-row

   Key
         size

   Datatype
         integer

   Description
         Height of the selector box in TCEforms.

   Scope
         Display


.. container:: table-row

   Key
         autoSizeMax

   Datatype
         integer

   Description
         If set, then the height of multiple-item selector boxes (maxitems > 1)
         will automatically be adjusted to the number of selected elements,
         however never less than "size" and never larger than the integer value
         of "autoSizeMax" itself (takes precedence over "size"). So
         "autoSizeMax" is the maximum height the selector can ever reach.

   Scope
         Display


.. container:: table-row

   Key
         selectedListStyle

   Datatype
         string

   Description
         If set, this will override the default style of the selector box with
         selected items (which is “width:200px”).

         Applies for when maxitems is > 1

   Scope
         Display


.. container:: table-row

   Key
         itemListStyle

   Datatype
         string

   Description
         If set, this will override the default style of the selector box with
         available items to select (which is “width:200px”).

         Applies for when maxitems is > 1

   Scope
         Display


.. container:: table-row

   Key
         renderMode

   Datatype
         string (any of keywords)

   Description
         (Only for maxitems > 1)

         Renders the list of multiple options as either a list of checkboxes or
         as a selector box with multiple choices.

         The data type is fully compatible with an ordinary multiple element
         list except that duplicate values cannot be represented for obvious
         reasons (option "multiple" does not work) and the order of values is
         fixed.

         Keywords are:

         - **checkbox** - Renders a list of checkboxes

         - **singlebox** - Renders a single multiple selector box

         - **tree** - Renders the selector as tree. This will work properly only
           when referrring to a foreign table, so make sure that the
           "foreign\_table" property is set. See "treeConfig" property
           configuration options.

         When renderMode is “checkbox” or “singlebox” all values selected by
         “foreign\_table” settings will automatically have their icon part in
         the items array set to the record icon (unless overruled by
         “selicon\_field” of that table).

         **Notice:** “maxitems” and “minitems” are not enforced in the browser
         for any of the render modes here! However they will be on the server.
         It is recommended to set “minitems” to zero and “maxitems” to a very
         large number exceeding the possible number of values you can select
         (for instance set it to 1000 or so).

   Scope


.. container:: table-row

   Key
         treeConfig

   Datatype
         (configuration options)

   Description
         Configuration if the renderMode is set to "tree". Either childrenField
         or parentField has to be set - childrenField takes precedence.

         **Sub-properties:**

         - **childrenField (string)** : Field name of the foreign\_table that
           references the uid of the child records (either child

         - **parentField (string)** : Field name of the foreign\_table that
           references the uid of the parent record

         - **rootUid (integer, optional)** : uid of the record that shall be
           considered as the root node of the tree. In general this might be set
           by Page TSconfig

         - **appearance (array, optional)** :

         - **showHeader (boolean)** : Whether to show the header of the tree that
           contains a field to filter the records and allows to expand or
           collapse all nodes

         - **expandAll (boolean)** : Whether to show the tree with all nodes
           expanded

         - **maxLevels (integer)** : The maximal amount of levels to be rendered
           (can be used to stop possible recursions)

         - **nonSelectableLevels (list, default "0")** : Comma-separated list of
           levels that will not be selectable, by default the root node (which is
           "0") cannot be selected

         - **width** (since TYPO3 CMS 6.0): Set a custom width of the tree select field in pixels.

   Scope


.. container:: table-row

   Key
         multiple

   Datatype
         boolean

   Description
         Allows the  *same item* more than once in a list.

         If used with bidirectional MM relations it must be set for both the
         native and foreign field configuration. Also, with MM relations in
         general you must use a UID field in the join table, see description
         for “MM”

   Scope
         Display / Proc.


.. container:: table-row

   Key
         maxitems

   Datatype
         integer > 0

   Description
         Maximum number of items in the selector box. (Default = 1)

   Scope
         Display / Proc


.. container:: table-row

   Key
         minitems

   Datatype
         integer > 0

   Description
         Minimum number of items in the selector box. (Default = 0)

   Scope
         Display


.. container:: table-row

   Key
         wizards

   Datatype
         array

   Description
         [See section later for options]

   Scope
         Display


.. container:: table-row

   Key
         disableNoMatchingValueElement

   Datatype
         boolean

   Description
         If set, then no element is inserted if the current value does not
         match any of the existing elements. A corresponding options is also
         found in Page TSconfig.

   Scope
         Display


.. container:: table-row

   Key
         authMode

   Datatype
         string keyword

   Description
         Authorization mode for the selector box. Keywords are:

         - **explicitAllow** – All static values from the “items” array of the
           selector box will be added to a matrix in the backend user
           configuration where a value must be explicitlyselected if a user
           (other than admin) is allowed to use it!)

         - **explicitDeny** – All static values from the “items” array of the
           selector box will be added to a matrix in the backend user
           configuration where a value must be explicitlyselected if a user
           should be denied access.

         - **individual** – State is individually set for each item in the
           selector box. This is done by the keywords “ **EXPL\_ALLOW** ” and “
           **EXPL\_DENY** ” entered at the 5. position in the item array (see
           “items” configuration above). Items without any of these keywords can
           be selected as usual without any access restrictions applied.

         **Notice:** The authentication modes will work only with values that
         are statically present in the “items” configuration. Any values added
         from foreign tables, file folder or by user processing will  *not* be
         configurable and the evaluation of such values is not guaranteed for!

         **maxitems > 1**

         “authMode” works also for selector boxes with maxitems > 1. In this
         case the list of values is traversed and each value is evaluated. Any
         disallowed values will be removed.

         If all submitted values turns out to be removed the result will be
         that the field is not written – basically leaving the old value. For
         maxitems <=1 (single value) this means that a non-allowed value is
         just not written. For multiple values (maxitems >1) it depends on
         whether any elements are left in the list after evaluation of each
         value.

   Scope
         Display / Proc


.. container:: table-row

   Key
         authMode\_enforce

   Datatype
         string keyword

   Description
         Various additional enforcing options for authMode.

         Keywords are:

         - **strict** - If set, then permission to edit the record will be
           granted only if the “authMode” evaluates OK. The default is that a
           record having an authMode configured field with a “non-allowed” value
           can be edited – just the value of the authMode field cannot be set to
           a value that is not allowed. **Notice:** This works only when maxitems
           <=1 (and no MM relations) since the “raw” value in the record is all
           that is evaluated!

   Scope
         Display / Proc


.. container:: table-row

   Key
         exclusiveKeys

   Datatype
         string (list of)

   Description
         List of keys that exclude any other keys in a select box where
         multiple items could be selected.

         "Show at any login" of "fe\_groups" (tables "pages" and "tt\_content")
         is an example where such a configuration is used.

   Scope


.. container:: table-row

   Key
         localizeReferencesAtParentLocalization

   Datatype
         boolean

   Description
         Defines whether referenced records should be localized when the
         current record gets localized (mostly used in Inline Relational Record
         Editing)

   Scope
         Proc.


.. ###### END~OF~TABLE ######


Here follow some code listings as examples:


.. _columns-select-examples:

Examples
""""""""

Example - A simple selector box:
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

This is the most simple selector box you can get. It contains a static
set of options you can select from:

|img-21| ::

   'tx_examples_options' => array (
           'exclude' => 0,
           'label' => 'LLL:EXT:examples/locallang_db.xml:fe_users.tx_examples_options',
           'config' => array (
                   'type' => 'select',
                   'items' => array (
                           array('LLL:EXT:examples/locallang_db.xml:fe_users.tx_examples_options.I.0', '1'),
                           array('LLL:EXT:examples/locallang_db.xml:fe_users.tx_examples_options.I.1', '2'),
                           array('LLL:EXT:examples/locallang_db.xml:fe_users.tx_examples_options.I.2', '--div--'),
                           array('LLL:EXT:examples/locallang_db.xml:fe_users.tx_examples_options.I.3', '3'),
                   ),
                   'size' => 1,
                   'maxitems' => 1,
           )
   ),

In the configuration the elements are configured by the "items" array.
Each entry in the array contains pairs of label/value. Notice the
third entry of the “items” array. It defines a  *divider* . This value
cannot be selected. It only helps to divide the list of options with a
label indicating a new section.


Example - Simple selector box with TSconfig markers
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

This example shows the use of markers inside the
"foreign\_table\_where" clause and how the corresponding TSconfig must
be set up.

In the TCA definition of the "haiku" table ("examples" extension)
there is a simple select field to create a reference to a page in the
"pages" table::

   'reference_page' => array(
           'label' => 'LLL:EXT:examples/locallang_db.xml:tx_examples_haiku.reference_page',
           'config' => array(
                   'type' => 'select',
                   'foreign_table' => 'pages',
                   'foreign_table_where' => "AND pages.title LIKE '%###PAGE_TSCONFIG_STR###%'",
                   'size' => 1,
                   'minitems' => 0,
                   'maxitems' => 1
           ),
   ),

Without any TSconfig, the selector will display a full list of pages:

|img-22| Let's add the following bit of Tsconfig to the page containing our
"haiku" record::

   TCEFORM.tx_examples_haiku.reference_page.PAGE_TSCONFIG_STR = image

The list of pages that we can select from is now reduced to:

|img-23|
Example - A multiple value selector with contents from a database table
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

The user group selector is based on the fe\_groups table. It appears
as a multiple selector:

|img-20| The corresponding TCA configuration::

   'fe_group' => array(
      'exclude' => 1,
      'label' => 'LLL:EXT:lang/locallang_general.xml:LGL.fe_group',
      'config' => array(
              'type' => 'select',
              'size' => 7,
              'maxitems' => 20,
              'items' => array(
                      array(
                              'LLL:EXT:lang/locallang_general.xml:LGL.hide_at_login',
                              -1,
                      ),
                      array(
                              'LLL:EXT:lang/locallang_general.xml:LGL.any_login',
                              -2,
                      ),
                      array(
                              'LLL:EXT:lang/locallang_general.xml:LGL.usergroups',
                              '--div--',
                      ),
              ),
              'exclusiveKeys' => '-1,-2',
              'foreign_table' => 'fe_groups',
              'foreign_table_where' => 'ORDER BY fe_groups.title',
      ),
   ),

The value stored in the database will be a  *comma list of uid
numbers* of the records selected.

The interesting point of this example is that it shows that static
values can be mixed with values fetched from a database table.


Example - Using a look up table for single value
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

In this case the selector box looks up languages in a static table
from an extension "static\_info\_tables":

|img-24| The configuration looks like this (taken from the sys\_lang table)::

   'static_lang_isocode' => array(
           'exclude' => 1,
           'label' => 'LLL:EXT:lang/locallang_tca.php:sys_language.isocode',
           'displayCond' => 'EXT:static_info_tables:LOADED:true',
           'config' => array(
                   'type' => 'select',
                   'items' => array(
                           array('', 0),
                   ),
                   'foreign_table' => 'static_languages',
                   'foreign_table_where' => 'AND static_languages.pid=0 ORDER BY static_languages.lg_name_en',
                   'size' => 1,
                   'minitems' => 0,
                   'maxitems' => 1,
           )
   ),

Notice how a condition is set that this box should only be displayed
*if* the extension it relies on exists! This is very important since
otherwise the table will not be in the database and we will get SQL
errors.


Example - Adding icons for selection
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

This example shows how you can add icons to the selection choice very
easily. Each icon is associated with an option in the selector box and
clicking the icon will automatically select the option in the selector
box and more the black arrow:

|img-25| The configuration looks like this. ::

   'imageorient' => array(
           'label' => 'LLL:EXT:cms/locallang_ttc.xml:imageorient',
           'config' => array(
                   'type' => 'select',
                   'items' => array(
                           array(
                                   'LLL:EXT:cms/locallang_ttc.xml:imageorient.I.0',
                                   0,
                                   'selicons/above_center.gif',
                           ),
                           array(
                                   'LLL:EXT:cms/locallang_ttc.xml:imageorient.I.1',
                                   1,
                                   'selicons/above_right.gif',
                           ),
                           array(
                                   'LLL:EXT:cms/locallang_ttc.xml:imageorient.I.2',
                                   2,
                                   'selicons/above_left.gif',
                           ),
                           ...
                           array(
                                   'LLL:EXT:cms/locallang_ttc.xml:imageorient.I.10',
                                   26,
                                   'selicons/intext_left_nowrap.gif',
                           ),
                   ),
                   'selicon_cols' => 6,
                   'default' => '0',
                   'iconsInOptionTags' => 1,
           ),
   ),

Notice how each label/value pair contains an icon reference on the
third position. Towards the bottom the layout of the icons is defined
as being arranged in 6 columns.


Example - Render the General Record Storage Page selector as a tree of page
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

The following configuration change::

   t3lib_div::loadTCA('pages');
   $tempConfiguration = array(
      'type' => 'select',
      'foreign_table' => 'pages',
      'size' => 10,
      'renderMode' => 'tree',
      'treeConfig' => array(
              'expandAll' => true,
              'parentField' => 'pid',
              'appearance' => array(
                      'showHeader' => TRUE,
              ),
      ),
   );
   $TCA['pages']['columns']['storage_pid']['config'] = array_merge(
      $TCA['pages']['columns']['storage_pid']['config'],
      $tempConfiguration
   );

will transform the General Record Storage Page selector into:

|img-26|
Example - Adding wizards
~~~~~~~~~~~~~~~~~~~~~~~~

This example shows how wizards can be added to a selector box. The
three typical wizards for a selector box is edit, add and list items.
This enables the user to create new items in the look up table while
being right at the selector box where he want to select them:

The configuration is rather long and looks like this (notice, that
wizards are not exclusively available for selector boxes!)::

   'file_mountpoints' => array(
           'label' => 'LLL:EXT:lang/locallang_tca.xml:be_users.options_file_mounts',
           'config' => array(
                   'type' => 'select',
                   'foreign_table' => 'sys_filemounts',
                   'foreign_table_where' => ' AND sys_filemounts.pid=0 ORDER BY sys_filemounts.title',
                   'size' => '3',
                   'maxitems' => '10',
                   'autoSizeMax' => 10,
                   'iconsInOptionTags' => 1,
                   'wizards' => array(
                        '_PADDING' => 1,
                        '_VERTICAL' => 1,
                        'edit' => array(
                                'type' => 'popup',
                                'title' => 'LLL:EXT:lang/locallang_tca.xml:file_mountpoints_edit_title',
                                'script' => 'wizard_edit.php',
                                'icon' => 'edit2.gif',
                                'popup_onlyOpenIfSelected' => 1,
                                'JSopenParams' => 'height=350,width=580,status=0,menubar=0,scrollbars=1',
                        ),
                        'add' => array(
                                'type' => 'script',
                                'title' => 'LLL:EXT:lang/locallang_tca.xml:file_mountpoints_add_title',
                                'icon' => 'add.gif',
                                'params' => array(
                                        'table' => 'sys_filemounts',
                                        'pid' => '0',
                                        'setValue' => 'prepend'
                                ),
                                'script' => 'wizard_add.php',
                        ),
                        'list' => array(
                                'type' => 'script',
                                'title' => 'LLL:EXT:lang/locallang_tca.xml:file_mountpoints_list_title',
                                'icon' => 'list.gif',
                                'params' => array(
                                        'table' => 'sys_filemounts',
                                        'pid' => '0',
                                ),
                                'script' => 'wizard_list.php',
                        )
                )
           )
   ),

The part with the wizards is highlighted in bold. See the wizard
section in this document for more information.

|img-27| Notice the configuration of "autoSizeMax". This value will make the
height of the selector boxes adjust themselves automatically depending
on the content in them. The result is as follows:


Example – Bidirectional MM relations
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

For a table, “user\_testmmrelations\_two”, we have a field “rel” with
configured with MM relations::

              "rel" => Array (
                           "exclude" => 1,
                           "label" => "Relations:",
                           "config" => Array (
                                   "type" => "select",
                                   "foreign_table" => "user_testmmrelations_one",
                                   "foreign_table_where" => "ORDER BY user_testmmrelations_one.uid",
                                   "size" => 10,
                                   "minitems" => 0,
                                   "maxitems" => 10,
                                   "MM" => "user_testmmrelations_two_rel_mm",
                                   'MM_match_fields' => array('ident'=>'table_two')
                           )
                   ),

The MM table is called “user\_testmmrelations\_two\_rel\_mm”, and the
field “ident” is used to match on with the word “table\_two”. Doing
this enables us to use the  *same MM* table for other fields using
other keywords for the “ident” field.

In another table “user\_testmmrelations\_one” a field called “rel2”
constitutes the foreign side of the bidirectional relation::

              "rel2" => Array (
                           "label" => "Foreign relation:",
                           "config" => Array (
                                   "type" => "select",
                                   "foreign_table" => "user_testmmrelations_two",
                                   "foreign_table_where" => "ORDER BY user_testmmrelations_two.uid",
                                   "size" => 10,
                                   "minitems" => 0,
                                   "maxitems" => 10,
                                   "MM" => "user_testmmrelations_two_rel_mm",
                                   'MM_match_fields' => array('ident'=>'table_two'),
                                   "MM_opposite_field" => "rel"
                           )
                   ),

Notice how in both cases “ foreign\_table” points to the table name of
the other. Also they use the exact same set up except in the foreign
side case above the field “MM\_opposite\_field” is set to “rel” - the
name of the field in table “user\_testmmrelations\_two"!

The SQL looks like::

   #
   # Table structure for table 'user_testmmrelations_two_rel_mm'
   #
   #
   CREATE TABLE user_testmmrelations_two_rel_mm (
     uid int(11) NOT NULL auto_increment,
     uid_local int(11) DEFAULT '0' NOT NULL,
     uid_foreign int(11) DEFAULT '0' NOT NULL,
     tablenames varchar(30) DEFAULT '' NOT NULL,
     sorting int(11) DEFAULT '0' NOT NULL,
     sorting_foreign int(11) DEFAULT '0' NOT NULL,
     ident varchar(30) DEFAULT '' NOT NULL,

     KEY uid_local (uid_local),
     KEY uid_foreign (uid_foreign),
     PRIMARY KEY (uid),
   );

In the backend the form could look like:

|img-28| So, from a record in table two (native) there are two relations made
to records in table one.

If we look at one of the records from table one we see the relation
made from “TWO (1)”:

|img-29| |img-30| In the database it looks like this:


Example – FlexForms and MM relations
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

MM relations can be used with flexforms. Here is an example:

|img-31| The flexform field configuration looks like this::

   <rel1>
       <TCEforms>
           <label>Relation:</label>
           <config>
               <type>group</type>
               <internal_type>db</internal_type>
               <allowed>user_testmmrelations_three</allowed>
               <size>10</size>
               <minitems>0</minitems>
               <maxitems>10</maxitems>
               <MM>user_testmmrelations_two_rel_mm</MM>
               <MM_match_fields>
                   <ident>table_one_flex</ident>
               </MM_match_fields>
               <multiple>1</multiple>
               <MM_hasUidField>1</MM_hasUidField>
           </config>
       </TCEforms>
   </rel1>

As you can see the same element (titled “3-3 (UID-3)”) is selected
twice (the “<multiple>” flag has been set) – and as a consequence
<MM\_hasUidField>1</MM\_hasUidField> is set as well. In fact this
configuration is  *sharing the MM table* with another field (see the
previous example) so the configuration ::

                      <MM_match_fields>
                   <ident>table_one_flex</ident>
               </MM_match_fields>

makes sure all MM relations for this flexform field is marked with the
string “table\_one\_flex”.

In the database the entry looks like:

|img-32| (The first two entries belong to that other field, see previous
example).

Of course you can specify a dedicated join table to the flexform
instead of sharing it.

**What will not work in flexforms** is if you put MM relation fields
in elements that can get repeated, like in sections:

|img-33| Here I have added three sections and tried to add entries to each.
However, when saved the two last entries are loaded for all of them.
The result of the save was:

|img-34| The reason is that the fields all use the same uid (that of the
record) to find the MM records. This could work when MM fields were
used outside sections of flexform fields which could only occur one
time per record, but here it's not possible.


Data format of "select" elements
""""""""""""""""""""""""""""""""

Since the "select" element allows to store references to multiple
elements we might want to look at how these references are stored
internally. The principle is the same as with the "group" type (see
below).

