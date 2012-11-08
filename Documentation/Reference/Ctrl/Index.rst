.. ==================================================
.. FOR YOUR INFORMATION
.. --------------------------------------------------
.. -*- coding: utf-8 -*- with BOM.

.. include:: ../../Includes.txt
.. include:: Images.txt


['ctrl'] section
^^^^^^^^^^^^^^^^

The [ctrl]section contains properties for the table in general.

These properties are basically divided into two main categories:

- properties which affect how the table is  *displayed* and handled in
  the backend  *interface* .This includes which icon, what name, which
  columns contains the title value, which column defines the type value
  etc.

- properties which determines how it is processed by the system
  (TCE).This includes publishing control, "deleted" flag, if the table
  can only be edited by admin-users, may only exist in the tree root
  etc.


Reference for the ['ctrl'] section:
"""""""""""""""""""""""""""""""""""


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
         title

   Datatype
         string or LLL reference

   Description
         Contains the  *system name* of the table. Is used for display in the
         backend.

         For instance the "tt\_content" table is of course named "tt\_content"
         technically. However in the backend display it will be shown as
         "Pagecontent" when the backend language is English. When another
         language is chosen, like Danish, then the label "Sideindhold" is shown
         instead. This value is managed by the "title" value.

         You can insert plain text values, but the preferred way is to enter a
         reference to a localized string. See the example below. Refer to the
         localization section in " `Inside TYPO3 <#Localization%7Coutline>`_ "
         for more details.

         **Example:** ::

            $TCA['sys_template'] = array(
                    'ctrl' => array(
                            'title' => 'LLL:EXT:cms/locallang_tca.xml:sys_template',

         In the above example the "LLL:" prefix tells the system to look up a
         label from a localized file. The next prefix "EXT:cms" will look for
         the data in the extension with the key "cms". In that extension the
         file "locallang\_tca.xml" contains a XML structure inside of which one
         label tag has an index attribute named "sys\_template". This tag
         contains the value to display in the default language. Other languages
         are provided by the language packs.

   Scope
         Display


.. container:: table-row

   Key
         label

   Datatype
         string (field name)

   Description
         **Required!**

         Points to the field name of the table which should be used as the
         "title" when the record is displayed in the system.

         **Note:** label\_userFunc overrides this property (but it is still
         required).

   Scope
         Display


.. container:: table-row

   Key
         label\_alt

   Datatype
         String (comma-separated list of field names)

   Description
         Comma-separated list of field names, which are holding alternative
         values to the value from the field pointed to by "label" (see above)
         if that value is empty. May not be used consistently in the system,
         but should apply in most cases.

         **Example:** ::

            $TCA['tt_content'] = array(
                    'ctrl' => array(
                            'label' => 'header',
                            'label_alt' => 'subheader,bodytext',

         See t3lib\_BEfunc::getRecordTitle()

         Also see "label\_alt\_force"

         **Note:** label\_userFunc overrides this property.

   Scope
         Display


.. container:: table-row

   Key
         label\_alt\_force

   Datatype
         boolean

   Description
         If set, then the "label\_alt" fields are always shown in the title
         separated by comma.

         See t3lib\_BEfunc::getRecordTitle()

         **Note:** label\_userFunc overrides this property.

   Scope
         Display


.. container:: table-row

   Key
         label\_userFunc

   Datatype
         string

   Description
         Function or method reference. This can be used whenever the label or
         label\_alt options don't offer enough flexibility, e.g. when you want
         to look up another table to create your label. The result of this
         function overrules the “label”, “label\_alt” or “label\_alt\_force”
         settings.

         When calling a method from a class, enter"[classname]->[methodname]".
         The class name must be prefixed "user\_" or "tx\_". When using a
         function, just enter the function name. The function name must be
         prefixed "user\_" or "tx\_". The preferred way is to use a class and a
         method.

         Two arguments will be passed to the function/method: The first
         argument is an array which contains the following information about
         the record for which to get the title::

            $params['table'] = $table;
            $params['row'] = $row;

         The resulting title must be written to$params['title']which is passed
         by reference.

         The second argument is a reference to the parent object.

         **Note** : The function file must be included manually (e.g. include
         it in your ext\_tables.php file). When using a class, the preferred
         way is to declare it with the autoloader.

         **Example:**

         Let's look at what is done for the "haiku" table of the "examples"
         extension. First, in the ext\_autoload.php file::

            $extensionPath = t3lib_extMgm::extPath('examples');
            return array(
                    'tx_examples_tca' => $extensionPath . 'class.tx_examples_tca.php',
            );

         the necessary class is declared. The call to the user function appears
         in the ext\_tables.php file::

            $TCA['tx_examples_haiku'] = array(
                    'ctrl' => array(
                            ...
                            'label'     => 'title',
                            'label_userFunc' => 'tx_examples_tca
            ->haikuTitle',
                            ...
                    )
            );

         Finally in class.tx\_examples\_tca.php is the code itself::

            public function haikuTitle(&$parameters, $parentObject) {
                    $record = t3lib_BEfunc::getRecord($parameters['table'], $parameters['row']['uid']);
                    $newTitle = $record['title'];
                    $newTitle .= ' (' . substr(strip_tags($record['poem']), 0, 10) . '...)';
                    $parameters['title'] = $newTitle;
            }

   Scope
         Display


.. container:: table-row

   Key
         type

   Datatype
         string

         (field name)

   Description
         Field name, which defines the "record type".

         The value of this field determines which one of the 'types'
         configurations are used for displaying the fields in the TCEforms. It
         will probably also affect how the record is used in the context where
         it belongs.

         The most widely known usage of this feature is the Content Elements
         where the "Type:" selector is defined as the "type" field and when you
         change that selector you will also get another rendering of the form:

         |img-3| It is also used by the "doktype" field in the "pages" table.

         **Example:**

         The "dummy" table from the "examples" extension defines different
         types. The field used for differentiating the types is the
         "record\_type" field. Hence we have the following in the [ctrl]section
         of the tx\_examples\_dummy table::

            'type' => 'record_type'

         The "record\_type" field can takes values ranging from 0 to 2.
         Accordingly we define types for the same values. Each type defines
         which fields will be displayed in the BE form. Types are discussed in
         more details later on. ::

            'types' => array(
                    '0' => array('showitem' => 'hidden, record_type, title, some_date '),
                    '1' => array('showitem' => 'record_type, title '),
                    '2' => array('showitem' => 'title, some_date, hidden, record_type '),
            ),

         Since TYPO3 4.7, it is also possible to make the type depend on the
         value of a related record, i.e. switch using the type field of a
         foreign table. The syntax is "relation\_field:foreign\_type\_field".

         **Example**

         Imagine two tables, related as parent and child. The child table has a
         relation to the parent table using a "select" field called "myparent"
         with "foreign\_table" set to the parent table. Now, if you want the
         fields displayed in the child table to depend on a field called
         "parenttype" of the parent table, you can define the [ctrl][type]of
         the child table like "myparent:parenttype".

   Scope
         Display / Proc.


.. container:: table-row

   Key
         hideTable

   Datatype
         boolean

   Description
         Hide this table in record listings.

   Scope


.. container:: table-row

   Key
         requestUpdate

   Datatype
         string

         (list of field names)

   Description
         This is a list of fields that will trigger an update of the form, on
         top of the "type" field. This is generally done to hide or show yet
         more fields depending on the value of the field that triggered the
         update.

   Scope
         Proc.


.. container:: table-row

   Key
         iconfile

   Datatype
         string

   Description
         Pointing to the icon file to use for the table.

         Icons should be dimensioned 16x16 pixels and of the GIF or PNG file
         type.

         The value of the option can be any of these:

         - **If there is a slash ( / ) in the value:** It must be a relative file
           path pointing to the icon file relative to the typo3/ (admin) folder.
           You may start that path with '../' if you like to get your icon from a
           folder in the PATH\_site path.

         - For extensions, see example below.

         - **If there is just a filename:** It must exist in the "typo3/gfx/i/"
           folder.

         - **If empty/not given:** The default icon for a table is defined as
           "gfx/i/[table\_name].gif". (This is an obsolete approach to use since
           the content of the "gfx/i/" folder should not be changed.)

         **Example: How to assign an icon from an extension**

         For haikus from the "examples" extension, the icon is defined this
         way::

            'iconfile' => t3lib_extMgm::extRelPath($_EXTKEY) . 'icon_tx_examples_haiku.gif',

   Scope
         Display


.. container:: table-row

   Key
         typeicon\_column

   Datatype
         string

         (field name)

   Description
         Field name, whose value decides  *alternative icons* for the table
         (The default icon is the one defined with the 'iconfile' value.)

         An icon in the 'typeicons' array may override the default icon if an
         entry is found for the key having the value of the field pointed to by
         "typeicon\_column" (this feature).

         **Notice:** These options ("typeicon\_column" and "typeicons") do not
         work for the pages-table, which is configured by the $PAGES\_TYPES
         array.

         Related "typeicons"

         This feature is used by for instance the "tt\_content" table (Content
         Elements) where each type of content element has its own icon.

         **Example:**

         See "typeicons"

   Scope
         Display


.. container:: table-row

   Key
         typeicons

   Datatype
         array

   Description
         (See "typeicon\_column")

         **Example of configuration (from the "tt\_content" table):** ::

                    'typeicon_column' => 'CType',
                    'typeicons' => array(
                        'header' => 'tt_content_header.gif',
                        'textpic' => 'tt_content_textpic.gif',
                        'image' => 'tt_content_image.gif',
                        'bullets' => 'tt_content_bullets.gif',
                        'table' => 'tt_content_table.gif',
                        'splash' => 'tt_content_news.gif',
                        'uploads' => 'tt_content_uploads.gif',
                        'multimedia' => 'tt_content_mm.gif',
                        'menu' => 'tt_content_menu.gif',
                        'list' => 'tt_content_list.gif',
                        'mailform' => 'tt_content_form.gif',
                        'search' => 'tt_content_search.gif',
                        'login' => 'tt_content_login.gif',
                        'shortcut' => 'tt_content_shortcut.gif',
                        'script' => 'tt_content_script.gif',
                        'div' => 'tt_content_div.gif',
                        'html' => 'tt_content_html.gif'
                    ),

   Scope
         Display


.. container:: table-row

   Key
         thumbnail

   Datatype
         string

         (field name)

   Description
         Field name, which contains the value for any thumbnails of the
         records.

         This could be a field of the "group" type containing a list of file
         names.

         **Example:**

         For the "tt\_content" table this option points to the field "image"
         which contains the list of images that can be attached to the content
         element::

            'thumbnail' => 'image',

         The effect of the field can be see in listings in e.g. the "List"
         module:

         |img-4| (You might have to enable "Show Thumbnails by default" in the
         "Startup" tab of the User Settings module first in order to see this
         display).

   Scope
         Display


.. container:: table-row

   Key
         selicon\_field

   Datatype
         string

         (field name)

   Description
         Field name, which contains the thumbnail image used to represent the
         record visually whenever it is shown in TCEforms as a foreign
         reference selectable from a selector box.

         Only images in a usual format for the web (i.e. gif, png, jpeg, jpg)
         are allowed. No scaling is done.

         You should consider this a feature where you can attach an "icon" to a
         record which is typically selected as a reference in other records.
         For example a "category". In such a case this field points out the
         icon image which will then be shown. This feature can thus enrich the
         visual experience of selecting the relation in other forms.

         **Example:**

         The "backend\_layout" table defines the "icon" field as being the one
         containing reference icons::

            $TCA['backend_layout'] = array (
                    'ctrl' => array (
                            ...
                            'selicon_field' => 'icon',
                            'selicon_field_path' => 'uploads/media',
                            ...
                    )
            );

         Also see "selicon\_field\_path" below.

   Scope
         Display


.. container:: table-row

   Key
         selicon\_field\_path

   Datatype
         string

   Description
         The path prefix of the value from 'selicon\_field'. This must the same
         as the "upload\_path" of that field.

         See example above.

   Scope
         Display


.. container:: table-row

   Key
         sortby

   Datatype
         string

         (field name)

   Description
         Field name, which is used to manage the  *order* of the records.

         The field will contain an integer value which positions it at the
         correct position between other records from the same table on the
         current page.

         **NOTICE:** The field should  *not* be editable by the user since the
         TCE will manage the content automatically in order to manage the order
         of records.

         This feature is used by e.g. the "pages" table and "tt\_content" table
         (Content Elements) in order to output the pages or the content
         elements in the order expected by the editors. Extensions are expected
         to respect this field.

         Typically the field name "sorting" is dedicated to this feature.

         Also see "default\_sortby" below.

   Scope
         Display/Proc.


.. container:: table-row

   Key
         default\_sortby

   Datatype
         string

   Description
         If a field name for "sortby" is defined, then this is ignored.

         Otherwise this is used as the 'ORDER BY' statement to sort the records
         in the table when listed in the TYPO3 backend.

         **Example:**

         For the "haikus" table of the "examples" extension, records are listed
         alphabetically, based on their title::

            $TCA['tx_examples_haiku'] = array(
                    'ctrl' => array(
                            ...
                            'default_sortby' => 'ORDER BY title',
                            ...
                    )
            );

   Scope
         Display


.. container:: table-row

   Key
         mainpalette

   Datatype
         comma-separated list of integers (pointing to multiple palette keys)

   Description
         Points to the palette-number(s) that should always be shown in the
         bottom of the TCEform.

         **Example:**

         The [ctrl]section looks like this::

            'mainpalette' => '1',

         The number "1" references a palette. This palette could be something
         like::

            'palettes' => array(
                '1' => array('showitem' => 'hidden,starttime,endtime,fe_group'),

         Note that "mainpalette" is not much used anymore. It has the drawback
         of positioning the related fields weirdly when tabs are added to
         existing tables via extensions (the fields come at the end of the new
         tabs, which may be disturbing for editors).

   Scope
         Display


.. container:: table-row

   Key
         canNotCollapse

   Datatype
         boolean

   Description
         By default, fields placed in palettes (see later for more about
         palettes) are not shown by TCEforms. They appear only once the "Show
         secondary options" checkbox at the bottom of the screen is checked.

         |img-5| By setting "canNotCollapse" to true, the palettes of this
         table will always be displayed, as if the above-mentioned option was
         always checked. This setting can also be defined per palette (see
         later).

   Scope
         Display


.. container:: table-row

   Key
         tstamp

   Datatype
         string (field name)

   Description
         Field name, which is automatically updated to the current timestamp
         (UNIX-time in seconds) each time the record is updated/saved in the
         system.

         Typically the name "tstamp" is used for that field.

         **Example:**

         from the[ctrl]section of the "haikus" table::

            $TCA['tx_examples_haiku'] = array(
                            ...
                            'tstamp'    => 'tstamp',
                            'crdate'    => 'crdate',
                            'cruser_id' => 'cruser_id',
                            ...
                    )
            );

         The above example shows the same definition for the "crdate" and
         "cruser\_id" fields described below.

   Scope
         Proc.


.. container:: table-row

   Key
         crdate

   Datatype
         string (field name)

   Description
         Field name, which is automatically set to the current timestamp when
         the record is created. Is never modified again.

         Typically the name "crdate" is used for that field.

         See example above.

   Scope
         Proc.


.. container:: table-row

   Key
         cruser\_id

   Datatype
         string (field name)

   Description
         Field name, which is automatically set to the uid of the backend user
         (be\_users) who originally created the record. Is never modified
         again.

         Typically the name "cruser\_id" is used for that field.

         See example above.

   Scope
         Proc.


.. container:: table-row

   Key
         rootLevel

   Datatype
         [0, 1, -1]

   Description
         Determines where a record may exist in the page tree. There are three
         options depending on the value:

         - **0 (false): Can only exist in the page tree.** Records from this
           table  *must* belong to a page (i.e. have a positive "pid" field
           value). Thus records cannot be created in the root of the page tree
           (where "admin" users are the only ones allowed to create records
           anyways). This is the default behavior.

         - **1 (true): Can only exist in the root.** Records must have a
           "pid"-field value equal to zero. The consequence is that only admin
           can edit this record.

         - **-1: Can exist in both page tree and root.** Records can belong
           either to a page (positive "pid" field value) or exist in the root of
           the page tree (where the "pid" field value will be 0 (zero))
           **Notice:** the -1 value will still select foreign\_table records for
           selector boxes only from root (pid=0)

         **Notice** : The setting for "rootLevel" is ignored for records in the
         "pages" table (they are hardcoded to be allowed anywhere, equal to a
         "-1" setting of rootLevel).

         **Warning:** this property does not tell the whole story. If set to
         "0" or "-1", it allows records from the table in the page tree, but
         **not** on any kind of page. By default records can be created only in
         "Folder"-type pages. To enable the creation of records on any kind of
         page, an additional call must be made::

            t3lib_extMgm::allowTableOnStandardPages('tx_examples_haiku');

   Scope
         Proc. /

         Display


.. container:: table-row

   Key
         readOnly

   Datatype
         boolean

   Description
         Records from this table may not be edited in the TYPO3 backend. Such
         tables are usually called "static".

   Scope
         Proc. /

         Display


.. container:: table-row

   Key
         adminOnly

   Datatype
         boolean

   Description
         Records may be changed  *only* by "admin"-users (having the "admin"
         flag set).

         **Example:**

         The "cms" system extension defines the table "sys\_template" as being
         editable only by admin users::

            $TCA['sys_template'] = array (
                    'ctrl' => array (
                            ...
                            'adminOnly' => 1,
                            ...
                    )
            );

   Scope
         Proc. / Display


.. container:: table-row

   Key
         editlock

   Datatype
         string (field name)

   Description
         Field name, which – if set – will prevent all editing of the record
         for non-admin users.

         The field should be configured as a checkbox type. Non-admins could be
         allowed to edit the checkbox but if they set it, they will effectively
         lock the record so they cannot edit it again – and they need an Admin-
         user to remove the lock.

         Note that this flag is cleared when a new copy or version of the
         record is created.

         This feature is used on the pages table, where it also prevents
         editing of records on that page (except other pages)! Also, no new
         records (including pages) can be created on the page.

   Scope
         Proc / Display


.. container:: table-row

   Key
         origUid

   Datatype
         string

         (field name)

   Description
         Field name, which will contain the UID of the original record in case
         a record is created as a copy or new version of another record.

         Is used when new versions are created from elements and enables the
         backend to display a visual comparison between a new version and its
         original.

   Scope
         Proc


.. container:: table-row

   Key
         delete

   Datatype
         string

         (field name)

   Description
         Field name, which indicates if a record is considered deleted or not.

         If this feature is used, then records are not really deleted, but just
         marked 'deleted' by setting the value of the field name to "1". And in
         turn the whole system  *must* strictly respect the record as deleted.
         This means that any SQL query must exclude records where this field is
         true.

         This is a very common feature. Most tables use it throughout the TYPO3
         Core.

   Scope
         Proc. / Display


.. container:: table-row

   Key
         enablecolumns

   Datatype
         array

   Description
         Specifies which  *publishing control features* are automatically
         implemented for the table.

         This includes that records can be "disabled" or "hidden", have a
         starting and/or ending time and be access controlled so only a certain
         front end user group can access them

         In the frontend libraries the enableFields() function automatically
         detects which of these fields are configured for a table and returns
         the proper WHERE clause SQL code for creating select queries.

         There are the keys in the array you can use. Each of the values must
         be a field name in the table which should be used for the feature:

         **"disabled":** defining hidden-field of record

         **"starttime":** defining start time-field of record

         **"endtime":** defining end time-field of record

         **"fe\_group":** defining fe\_group-field of record

         **Notice:** In general these fields do  *not* affect the access or
         display in the backend! They are primarily related to the frontend.
         However the icon of records having these features enabled will
         normally change as these examples show:

         |img-6| See also the "delete" feature which is related, but is active
         for both frontend and backend.

         **Example:**

         Typically the "enablecolumns" could be configured like this (here for
         the "tt\_content" table)::

            'enablecolumns' => array(
                    'disabled' => 'hidden',
                    'starttime' => 'starttime',
                    'endtime' => 'endtime',
                    'fe_group' => 'fe_group',
            ),

   Scope
         Proc. / Display


.. container:: table-row

   Key
         searchFields

   Datatype
         string

   Description
         Comma-separated list of fields from the table that will be included
         when searching for records in the TYPO3 backend. Starting with TYPO3
         4.6, no record from a table will ever be found if that table does not
         have "searchFields" defined.

         There are finer controls per column, see the "search" property in the
         list of "Common properties" further in this manual.

         **Example:**

         The "tt\_content" table has the following definition::

            $TCA['pages'] = array(
                    'ctrl' => array(
                            ...
                            'searchFields' => 'title,alias,nav_title,subtitle,url,keywords,description,abstract,author,author_email',
                            ...
                    ),
            );

   Scope
         Search


.. container:: table-row

   Key
         groupName

   Datatype
         string

   Description
         This option can be used to group records in the new record wizard. If
         you define a new table and set its "groupName" to the key of another
         extension, your table will appear in the list of records from that
         other extension in the new record wizard.

   Scope
         Special


.. container:: table-row

   Key
         hideAtCopy

   Datatype
         boolean

   Description
         If set, and the "disabled" field from "enablecolumns" (see above) is
         specified, then records will be disabled/hidden when they are copied.

   Scope
         Proc.


.. container:: table-row

   Key
         prependAtCopy

   Datatype
         string or LLL reference

   Description
         This string will be prepended the records title field when the record
         is inserted on the same PID as the original record (thus you can
         distinguish them).

         Usually the value is something like " (copy %s)" which tells that it
         was a copy that was just inserted (The token "%s" will take the copy
         number).

   Scope
         Proc.


.. container:: table-row

   Key
         copyAfterDuplFields

   Datatype
         string

         (list of field names)

   Description
         The fields in this list will automatically have the value of the same
         field from the 'previous' record transferred when they are  *copied or
         moved* to the position  *after* another record from same table.

         **Example:** ::

            'copyAfterDuplFields' => 'colPos, sys_language_uid',

   Scope
         Proc.


.. container:: table-row

   Key
         setToDefaultOnCopy

   Datatype
         string

         (list of field names)

   Description
         These fields are restored to the default value of the record when they
         are copied.

         **Example:** ::

            $TCA['sys_action'] = array(
                    'ctrl' => array(
                            'setToDefaultOnCopy' => 'assign_to_groups',

   Scope
         Proc.


.. container:: table-row

   Key
         useColumnsForDefaultValues

   Datatype
         string

         (list of field names)

   Description
         When a new record is created, this defines the fields from the
         'previous' record that should be used as default values.

         **Example:** ::

            $TCA['sys_filemounts'] = array(
                    'ctrl' => array(
                            'useColumnsForDefaultValues' => 'path,base',

   Scope
         Proc.


.. container:: table-row

   Key
         shadowColumnsForNewPlaceholders

   Datatype
         string

         (list of field names)

   Description
         When a new element is created in a draft workspace a placeholder
         element is created in the Live workspace. Some values must be stored
         in this placeholder and not just in the overlay record. A typical
         example would be "sys\_language\_uid". This property defines the list
         of fields whose values are "shadowed" to the Live record.

         All fields listed for this option must be defined in
         $TCA[<table>]['columns']as well.

         Furthermore fields which are listed in "transOrigPointerField",
         "languageField", "label" and "type" are automatically added to this
         list of fields and do not have to mentioned again here.

         **Example:** ::

            $TCA['tt_content'] = array(
                    'ctrl' => array(
                            'shadowColumnsForNewPlaceholders' => 'sys_language_uid,l18n_parent,colPos',

   Scope
         Proc.


.. container:: table-row

   Key
         is\_static

   Datatype
         boolean

   Description
         This marks a table to be "static".

         A "static table" means that it should not be updated for individual
         databases because it is meant to be centrally updated and distributed.
         For instance static tables could contain country-codes used in many
         systems.

         The foremost property of a static table is that the uid's used are the
         SAME across systems. Import/Export of records expect static records to
         be common for two systems.

         **Example (also including the features "rootLevel", "readOnly" and
         "adminOnly" above):** ::

            $TCA['static_template'] = array(
                    'ctrl' => array(
                            'label' => 'title',
                            'tstamp' => 'tstamp',
                            'title' => 'LLL:EXT:statictemplates/locallang_tca.xml:static_template',
                            'readOnly' => 1,// Prevents the table from being altered
                            'adminOnly' => 1, // Only admin, if any
                            'rootLevel' => 1,
                            'is_static' => 1,

   Scope
         Used by import/export


.. container:: table-row

   Key
         fe\_cruser\_id

   Datatype
         string

         (field name)

   Description
         Field name which is used to store the uid of a frontend user if the
         record is created through fe\_adminLib

   Scope
         FE


.. container:: table-row

   Key
         fe\_crgroup\_id

   Datatype
         string

         (field name)

   Description
         Field name which is used for storing the uid of a frontend group whose
         members are allowed to edit through fe\_adminLib .

   Scope
         FE


.. container:: table-row

   Key
         fe\_admin\_lock

   Datatype
         string

         (field name)

   Description
         Field name which points to the field name which - as a boolean - will
         prevent any editing by the fe\_adminLib if set. Say if the
         "fe\_cruser\_id" field matches the current fe\_user normally the field
         is editable. But with this option, you could make a check-box in the
         backend that would lock this option.

   Scope
         FE


.. container:: table-row

   Key
         languageField

   Datatype
         string (field name)

   Description
         **Localization access control.**

         Field name which contains the pointer to the language of the record's
         content. Language for a record is defined by an integer pointing to a
         “sys\_language” record (found in the page tree root).

         Backend users can be limited to have edit access for only certain of
         these languages and if this option is set, edit access for languages
         will be enforced for this table.

         The values in this field may be the following:

         **-1 :** (ALL) The record does not represent any specific language.
         Localization access control is never carried out for such a record.
         Typically this is used if the record has content which itself handles
         localization (such as plugins or flexforms).

         **0 :** The default language of the system. Localization access
         control applies.

         **Values > 0** : Points to a uid of a sys\_language record
         representing a possible language for translation. Localization access
         control applies.

         The field name pointed to should be a single value selector box
         (maxitems <=1) saving its value into an integer field in the database.

   Scope
         Proc / Display


.. container:: table-row

   Key
         transOrigPointerField

   Datatype
         string (field name)

   Description
         Name of the field used by translations to point back to the original
         record (i.e. the record in the default language of which they are a
         translation).

         If this value is found being set together with “languageField” then
         TCEforms will show the default translation value under the fields in
         the main form. This is very neat if translators are to see what they
         are translating of course...

         Must be configured in $TCA[<table>]['columns'], at least as a
         passthrough type.

   Scope
         Proc /

         Display


.. container:: table-row

   Key
         transForeignTable

   Datatype
         string (table name)

   Description
         Translations may be stored in a separate table, instead of the same
         one. In such a case, the name of the translation table is stored in
         this property. The translation table in turn will use the
         "transOrigPointerTable" property to point back to this table.

         This is used in the TYPO3 Core for the "pages" table, which uses the
         "pages\_language\_overlay" table to hold the translations.

         **Example:** ::

            $TCA['pages'] = array(
                    'ctrl' => array(
                            ...
                            'transForeignTable' => 'pages_language_overlay',

         ::

            $TCA['pages_language_overlay'] = array (
                    'ctrl' => array (
                            ...
                            'transOrigPointerField' => 'pid',
                            'transOrigPointerTable' => 'pages',

         Note that the "transOrigPointerField" is still used, but within the
         table holding the translations.

         *WARNING: This is still not fully for all other tables than the
         “pages” table. You should expect some issues and inconsistencies when
         using this translation method.*

   Scope


.. container:: table-row

   Key
         transOrigPointerTable

   Datatype
         string (table name)

   Description
         Symmetrical property to "transForeignTable". See above for
         explanations.

   Scope
         Proc / Display


.. container:: table-row

   Key
         transOrigDiffSourceField

   Datatype
         string (field name)

   Description
         Field name which will be updated with the value of the original
         language record whenever the translation record is updated. This
         information is later used to compare the current values of the default
         record with those stored in this field and if they differ there will
         be a display in the form of the difference visually. This is a big
         help for translators so they can quickly grasp the changes that
         happened to the default language text.

         The field type in the database should be a large text field
         (clob/blob).

         You don't have to configure this field in $TCA[<table>]['columns'],
         but if you do, select the “passthrough” type. That will enable that
         the undo function to also work on this field.

   Scope
         Proc / Display


.. container:: table-row

   Key
         versioningWS

   Datatype
         boolean / version number

   Description
         If set, versioning is enabled for this table. If integer it indicates
         a version number of versioning features.

         - Version 2: Support for moving elements was added. (“V2” is used to
           mark features)

         Versioning in TYPO3 is based on this scheme::

            [Online version, pid>=0] 1- * [Offline versions, pid=-1]

         Offline versions are identified by having a pid value = -1 and they
         refer to their online version by the field “t3ver\_oid”. Offline
         versions of the “Page” and “Branch” types (contrary to “Element” type)
         can have child records which points to the uid of their offline “root”
         version with their pid fields (as usual). These children records are
         typically copies of child elements of the online version of the
         offline root version, but are not considered “versions” of them in a
         technical sense, hence they don't point to them with their t3ver\_oid
         field (and shouldn't).

         In the backend “Offline” is labeled “Draft” while “Online” is labeled
         “Live”.

         In order for versioning to work on a table there are certain
         requirements; Tables supporting versioning must have these fields:

         - “ **t3ver\_oid”** - For offline versions; pointing back to online
           version uid. For online: 0 (zero)

         - “ **t3ver\_id”** - Incremental integer (version number)

         - “ **t3ver\_label”** - Version label, e.g. "1.1.1" or "Christmas
           edition"

         - “ **t3ver\_wsid”** - For offline versions: Workspace ID of version.
           For all workspace Ids apart from 0 (zero) there can be only one
           version of an element per ID. For online: 0 (zero) unless t3ver\_state
           is set in which case it plays a role for previews in the backend (to
           no de-select placeholders for workspaces, see
           t3lib\_BEfunc::versioningPlaceholderClause()) and for publishing of
           move-to-actions (see t3lib\_BEfunc::getMovePlaceholder())

         - “ **t3ver\_state”** - Contains special states of a version used when
           new, deleted, moved content requires versioning.

           - For an  **online** version:

             - “1” or “2” means that it is a temporary placeholder for a new element
               (which is the offline version of this record)

             - “3” means it is a “move-to-location” placeholder and t3ver\_move\_id
               holds uid of online record (with an offline version) to move . Unlike
               for “1” and “2” there is  *no offline version* of this record type!
               (V2 feature)

             - If “t3ver\_state” has a value >0 it should never be shown in Live
               workspace.

           - For an  **offline** version:

             - “1” or “2” means that when published, the element must be deleted
               (placeholder for delete-action).

             - "-1" means it is just an indication that the online version has the
               flag set to "1" (is a placeholder for new records.). This only affects
               display, not processing anywhere.

             - “4” means this version is a “move-pointer” for the online record and
               an online “move-to-location” (t3ver\_state=3) record exists. (V2
               feature)

         - “ **t3ver\_stage”** - Contains the ID of the stage at which the record
           is. Special values are "0" which still refers to "edit", "-10" refers
           to "ready to publish".

         - “ **t3ver\_count”** - 0/offline=draft/never published,
           0/online=current, 1/offline=archive, 1+=multiple online/offline
           occurrences (incrementation happens when versions are swapped
           offline.)

         - “ **t3ver\_tstamp”** - Timestamp of last swap/publish action.

         - “ **t3ver\_move\_id”** - For online records with t3ver\_state=3 this
           indicates the online record to move to this location upon publishing
           of the offline version of the online record “t3ver\_move\_id” points
           to.

         - The fields  **pid** and  **uid** should have "signed" attributes in
           MySQL (so their content can be negative!)

         **Corresponding SQL definitions:** ::

              t3ver_oid int(11) DEFAULT '0' NOT NULL,
              t3ver_id int(11) DEFAULT '0' NOT NULL,
              t3ver_wsid int(11) DEFAULT '0' NOT NULL,
              t3ver_label varchar(30) DEFAULT '' NOT NULL,
              t3ver_state tinyint(4) DEFAULT '0' NOT NULL,
              t3ver_stage int(11) DEFAULT '0' NOT NULL,
              t3ver_count int(11) DEFAULT '0' NOT NULL,
              t3ver_tstamp int(11) DEFAULT '0' NOT NULL,
              t3ver_move_id int(11) DEFAULT '0' NOT NULL,

         **Special “t3ver\_swapmode” field for pages**

         When pages are versioned it is an option whether content and even the
         branch of the page is versioned. This is determined by the parameter
         “treeLevels” set when the page is versioned. “-1” means swap only
         record, 0 means record and content and >0 means full branch. When the
         version is later published the swapping will happen accordingly.

   Scope
         Proc.


.. container:: table-row

   Key
         versioningWS\_alwaysAllowLiveEdit

   Datatype
         boolean

   Description
         If set, this table can always be edited live even in a workspace and
         even if “live editing” is not enabled in a custom workspace. For
         instance this is set by default for Backend user and group records
         since it is assumed that administrators like the flexibility of
         editing backend users without having to go to the Live workspace.

   Scope


.. container:: table-row

   Key
         versioning\_followPages

   Datatype
         boolean

   Description
         (Only for other tables than “pages”)

         If set, content from this table will get copied along when a new
         version of a page is created.

         **Tracking Originals**

         It is highly recommended to use the “origUid” feature for tables whose
         records are copied with pages that are versioned with content or
         subtree since this will enable the possibility of content comparison
         between current and future versions.

   Scope
         Proc.


.. container:: table-row

   Key
         dividers2tabs

   Datatype
         integer

   Description
         This key defines the activation of tabs, according to the following
         values:

         0: disabled (default)

         1: activated, empty tabs are removed

         2: activated, empty tabs are disabled

         When tabs are activated, the special field name "--div--" used in the
         types configuration will be interpreted as starting a new tab in a
         tab-menu for the record. The second part after "--div--" is the title
         of the tab.

         If you place a "--div--" field as the very first element in the types
         configuration it will just be used to set the title of the first tab
         (which is by default "General").

         **Example:**

         The [ctrl] section of table "tt\_content" contains the following::

            $TCA['tt_content'] = array (
                    'ctrl' => array (
                            'dividers2tabs' => 1

         Then the types make use of "--div--" fields. Example for the
         "text"-type (usage of "--div--" highlighted in bold)::

            'types' => array(
                    '1' =>       array(
                            'showitem' => 'CType',
                    ),
                    ...
                    'text' => array(
                            'showitem' =>
                                    '--palette--;LLL:EXT:cms/ locallang_ttc.xml:palette.general;general,
                                    --palette--;LLL:EXT:cms/ locallang_ttc.xml:palette.header;header,
                                    bodytext;LLL:EXT:cms/ locallang_ttc.xml:bodytext_formlabel;;richtext:rte_transform[flag=rte_enabled|mode=ts_css],
                                    rte_enabled;LLL:EXT:cms/ locallang_ttc.xml:rte_enabled_formlabel,
                            --div--;LLL:EXT:cms/ locallang_ttc.xml:tabs.access,
                                    --palette--;LLL:EXT:cms/ locallang_ttc.xml:palette.visibility;visibility,
                                    --palette--;LLL:EXT:cms/ locallang_ttc.xml:palette.access;access,
                            --div--;LLL:EXT:cms/ locallang_ttc.xml:tabs.appearance,
                                    --palette--;LLL:EXT:cms/ locallang_ttc.xml:palette.frames;frames,
                                    --palette--;LLL:EXT:cms/ locallang_ttc.xml:palette.textlayout;textlayout,
                            --div--;LLL:EXT:cms/ locallang_ttc.xml:tabs.extended',
                    ),

         This will render a tab menu for the record where the fields are
         distributed on the various tabs:

         |img-7| Here another tab is activated and another part of the form is
         shown:

         |img-8| Since TYPO3 4.3, it is customary for most tables to make use
         of tabs for improved usability.

   Scope


.. container:: table-row

   Key
         dynamicConfigFile

   Datatype
         string

   Description
         Reference to the complete $TCA entry content.

         Filename of the PHP file which contains the  *full configuration* of
         the table in $TCA. The [ctrl]part (and [feInterface]if used) are
         always mandatory, but the rest may be placed in such a file in order
         to limit the amount of memory consumed by the $TCA array (when e.g.
         the columns definitions are not needed).

         The format of the value may be:

         - an absolute path (this is used for extensions, see example below).

         - **prefixed with "T3LIB:"** This indicates that it's located in
           t3lib/install/

         - any other path is considered to be relative to "typo3conf/"

         **Example:**

         Looking at the definition of the "haikus" table, we find the following
         in the "ext\_tables.php" file::

            $TCA['tx_examples_haiku'] = array(
                    'ctrl' => array(
                            ...
                            'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY) . 'tca.php',
                            ...
                    )
            );

         Then in the file "tca.php" is PHP code which completes the $TCA entry
         for the table::

            <?php
            $TCA['tx_examples_haiku'] = array(
                    'ctrl' => $TCA['tx_examples_haiku']['ctrl'],
                    'columns' => array(
                            'hidden' => array(
                                    'exclude' => 1,
                                    'label'   => 'LLL:EXT:lang/locallang_general.xml:LGL.hidden',
                                    'config'  => array(
                                            'type'    => 'check',
                                            'default' => '0'
                                    )
                            ),
                            …

         Note how the [ctrl] section is referenced so as not to be lost.

         See Appendix B for a detailed discussion of dynamically loading $TCA.

   Scope
         API


.. container:: table-row

   Key
         EXT[ *extension\_key* ]

   Datatype
         array

   Description
         User-defined content for extensions. You can use this as you like.

         Let's say that you have an extension with the key "myext", then you
         have the right to define properties for::

            ...['ctrl']['EXT']['myext'] = ... (whatever you define)

         Note that this is just a convention. You can use some other syntax but
         with the risk that it conflicts with some other extension or future
         changes in the TYPO3 Core.

   Scope
         Ext.


.. ###### END~OF~TABLE ######


Examples
""""""""

Here are a couple examples of complete configurations of [ctrl]
sections. ::

   $TCA['pages'] = array(
      'ctrl' => array(
              'label' => 'title',
              'tstamp' => 'tstamp',
              'sortby' => 'sorting',
              'title' => 'LLL:EXT:lang/locallang_tca.xml:pages',
              'type' => 'doktype',
              'versioningWS' => 2,
              'origUid' => 't3_origuid',
              'delete' => 'deleted',
              'crdate' => 'crdate',
              'hideAtCopy' => 1,
              'prependAtCopy' => 'LLL:EXT:lang/locallang_general.xml:LGL.prependAtCopy',
              'cruser_id' => 'cruser_id',
              'editlock' => 'editlock',
              'useColumnsForDefaultValues' => 'doktype,fe_group,hidden',
              'dividers2tabs' => 1,
              'enablecolumns' => array(
                      'disabled' => 'hidden',
                      'starttime' => 'starttime',
                      'endtime' => 'endtime',
                      'fe_group' => 'fe_group',
              ),
              'transForeignTable' => 'pages_language_overlay',
              'typeicon_column' => 'doktype',
              'typeicon_classes' => array(
                      '1' => 'apps-pagetree-page-default',
                      '1-hideinmenu' => 'apps-pagetree-page-not-in-menu',
                      ...
                      'contains-news' => 'apps-pagetree-folder-contains-news',
                      'default' => 'apps-pagetree-page-default',
              ),
              'typeicons' => array(
                      '1' => 'pages.gif',
                      '254' => 'sysf.gif',
                      '255' => 'recycler.gif',
              ),
              'dynamicConfigFile' => 'T3LIB:tbl_pages.php',
      )
   );

This is found in file "t3lib/stddb/tables.php". Here are a few notes:

- When pages are displayed in the backend, the "label" property
  indicates that you will see the content from the field named "title"
  shown as the title of the page record.

- The field called "sorting" will be used to determine the order in
  which pages are displayed within each branch of the page tree.

- The title for the pages table as shown in the backend (e.g. "Pages" in
  english, "Sider" in danish etc...) is defined as coming from a
  "locallang" file.

- The "type" field will be the one named "doktype". This determines the
  set of fields shown in the edit forms in the backend.

- Note on the last line how the dynamic configuration file is
  referenced.

Configuration for the tt\_content table (Content Elements) is no less
complete. It can be found in file "typo3/sysext/cms/ext\_tables.php"::

   // ******************************************************************
   // This is the standard TypoScript content table, tt_content
   // ******************************************************************
   $TCA['tt_content'] = array (
      'ctrl' => array (
              'label' => 'header',
              'label_alt' => 'subheader,bodytext',
              'sortby' => 'sorting',
              'tstamp' => 'tstamp',
              'crdate' => 'crdate',
              'cruser_id' => 'cruser_id',
              'title' => 'LLL:EXT:cms/locallang_tca.xml:tt_content',
              'delete' => 'deleted',
              'versioningWS' => 2,
              'versioning_followPages' => true,
              'origUid' => 't3_origuid',
              'type' => 'CType',
              'hideAtCopy' => true,
              'prependAtCopy' => 'LLL:EXT:lang/locallang_general.xml:LGL.prependAtCopy',
              'copyAfterDuplFields' => 'colPos,sys_language_uid',
              'useColumnsForDefaultValues' => 'colPos,sys_language_uid',
              'shadowColumnsForNewPlaceholders' => 'colPos',
              'transOrigPointerField' => 'l18n_parent',
              'transOrigDiffSourceField' => 'l18n_diffsource',
              'languageField' => 'sys_language_uid',
              'enablecolumns' => array (
                      'disabled' => 'hidden',
                      'starttime' => 'starttime',
                      'endtime' => 'endtime',
                      'fe_group' => 'fe_group',
              ),
              'typeicon_column' => 'CType',
              'typeicon_classes' => array(
                      'header' => 'mimetypes-x-content-header',
                      ...
                      'default' => 'mimetypes-x-content-text',
              ),
              'typeicons' => array (
                      'header' => 'tt_content_header.gif',
                      ...
                      'html' => 'tt_content_html.gif'
              ),
              'thumbnail' => 'image',
              'requestUpdate' => 'list_type,rte_enabled',
              'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY).'tbl_tt_content.php',
              'dividers2tabs' => 1
      )
   );

- of particular note is the "enablecolumns" property. It is quite
  extensive for this table since it is a frontend-related table. Thus
  proper access rights, publications dates, etc. must be enforced.

- every type of content element has its own icon and its own class, used
  in conjunction with the skinning API to visually represent that type
  in the TYPO3 backend.

- the column "image" is defined as the one to use to fetch any
  thumbnails related to the record.

