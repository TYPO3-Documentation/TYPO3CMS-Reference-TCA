.. include:: ../../Includes.txt


.. _ctrl:

['ctrl'] section
^^^^^^^^^^^^^^^^

The [ctrl] section contains properties for a database table in general.

These properties are basically divided into two main categories:

- Properties which affect how a table is *displayed* and handled in
  the backend *interface*. This includes which icon is shown and which name is given for a record. It defines which
  column contains the title value, which column contains the type value
  etc.

- Properties which determine how entries in the backend interface are processed by the system
  (TCE). This includes the publishing control, the "deleted" flag, whether a table
  can only be edited by admin-users, whether a table may only exist in the tree root
  etc.


.. _ctrl-reference:

Reference
"""""""""

.. container:: ts-properties

   ==================================== ===========
   Property                             Data Type
   ==================================== ===========
   `adminOnly`_                         boolean
   `copyAfterDuplFields`_               string
   `crdate`_                            string
   `cruser\_id`_                        string
   `default\_sortby`_                   string
   `delete`_                            string
   `descriptionColumn`_                 string
   `editlock`_                          string
   `enablecolumns`_                     array
   `EXT[extension\_key]`_               array
   `fe\_cruser\_id`_                    string
   `fe\_crgroup\_id`_                   string
   `fe\_admin\_lock`_                   string
   `formattedLabel\_userFunc`_          string
   `formattedLabel\_userFunc_options`_  array
   `groupName`_                         string
   `hideAtCopy`_                        boolean
   `hideTable`_                         boolean
   `iconfile`_                          string
   `is\_static`_                        boolean
   `label`_                             string
   `label\_alt`_                        string
   `label\_alt\_force`_                 boolean
   `label\_userFunc`_                   string
   `label\_userFunc\_options`_          array
   `languageField`_                     string
   `origUid`_                           string
   `prependAtCopy`_                     string
   `readOnly`_                          boolean
   `requestUpdate`_                     string
   `rootLevel`_                         [0, 1, -1]
   `thumbnail`_                         string
   `searchFields`_                      string
   `security`_                          array
   `selicon\_field`_                    string
   `selicon\_field\_path`_              string
   `setToDefaultOnCopy`_                string
   `shadowColumnsForNewPlaceholders`_   string
   `shadowColumnsForMovePlaceholders`_  string
   `sortby`_                            string
   `title`_                             string
   `transForeignTable`_                 string
   `transOrigDiffSourceField`_          string
   `transOrigPointerField`_             string
   `transOrigPointerTable`_             string
   `tstamp`_                            string
   `type`_                              string
   `typeicon\_column`_                  string
   `typeicon_classes`_                  array
   `useColumnsForDefaultValues`_        string
   `versioningWS`_                      boolean
   `versioningWS\_alwaysAllowLiveEdit`_ boolean
   ==================================== ===========

Reference details
"""""""""""""""""


.. _ctrl-reference-title:

title
~~~~~

.. container:: table-row

   Key
         title

   Datatype
         string or LLL reference

   Description
         Contains the *system name* of the table. Is used for display in the
         backend.

         For instance the "tt\_content" table is of course named "tt\_content"
         technically. However in the backend display it will be shown as
         "Page Content" when the backend language is English. When another
         language is chosen, like Danish, then the label "Sideindhold" is shown
         instead. This value is managed by the "title" value.

         You can insert plain text values, but the preferred way is to enter a
         reference to a localized string. See the :ref:`examples <ctrl-examples>`. Refer to the
         Localization section in :ref:`Inside TYPO3 <t3inside:start>`.
         for more details.

         **Example:**

         For table "sys\_template".

         .. code-block:: php

            'ctrl' => array(
            	'title' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:sys_template',

         In the above example the :code:`LLL:` prefix tells the system to look up a
         label from a localized file. The next prefix code:`EXT:cms` will look for
         the data in the extension with the key "cms". In that extension the
         file :file:`locallang_tca.xlf` contains a XML structure inside of which one
         label tag has an index attribute named "sys\_template". This tag
         contains the value to display in the default language. Other languages
         are provided by the language packs.

   Scope
         Display



.. _ctrl-reference-label:

label
~~~~~

.. container:: table-row

   Key
         label

   Datatype
         string (field name)

   Description
         **Required!**

         Points to the field name of the table which should be used as the
         "title" when the record is displayed in the system.

         .. note::

            :ref:`label_userFunc <ctrl-reference-label-userfunc>`
            overrides this property (but it is still required).

   Scope
         Display



.. _ctrl-reference-label-alt:

label\_alt
~~~~~~~~~~

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

         **Example:**

         For table "tt\_content":

         .. code-block:: php

            'ctrl' => array(
				'label' => 'header',
				'label_alt' => 'subheader,bodytext',

         See :code:`\TYPO3\CMS\Backend\Utility\BackendUtility::getRecordTitle()`.

         Also see :ref:`label_alt_force <ctrl-reference-label-alt-force>`.

         .. note::

            :ref:`label_userFunc <ctrl-reference-label-userfunc>`
            overrides this property.

   Scope
         Display



.. _ctrl-reference-label-alt-force:

label\_alt\_force
~~~~~~~~~~~~~~~~~

.. container:: table-row

   Key
         label\_alt\_force

   Datatype
         boolean

   Description
         If set, then the :ref:`label_alt <ctrl-reference-label-alt>` fields
         are always shown in the title separated by comma.

         See :code:`\TYPO3\CMS\Backend\Utility\BackendUtility::getRecordTitle()`.

         .. note::

            :ref:`label_userFunc <ctrl-reference-label-userfunc>`
            overrides this property.

   Scope
         Display



.. _ctrl-reference-label-userfunc:

label\_userFunc
~~~~~~~~~~~~~~~

.. container:: table-row

   Key
         label\_userFunc

   Datatype
         string

   Description
         Function or method reference. This can be used whenever the label or
         :ref:`label_alt <ctrl-reference-label-alt>` options don't offer enough flexibility, e.g. when you want
         to look up another table to create your label. The result of this
         function overrules the :ref:`label <ctrl-reference-label>`, :ref:`label_alt <ctrl-reference-label-alt>`
         or :ref:`label_alt_force <ctrl-reference-label-alt-force>` settings.

         When calling a method from a class, enter"[classname]->[methodname]".
         The class name must be prefixed with "user\_" or "tx\_". When using a
         function, just enter the function name. The function name must be
         prefixed "user\_" or "tx\_". The preferred way is to use a class and a
         method.

         Two arguments will be passed to the function/method: The first
         argument is an array which contains the following information about
         the record for which to get the title::

            $params['table'] = $table;
            $params['row'] = $row;

         The resulting title must be written to $params['title'] which is passed
         by reference.

         The second argument is a reference to the parent object.

         .. note::

            The function file must be included manually (e.g. include
            it in your ext\_tables.php file). When using a class, the preferred
            way is to declare it with the autoloader.

         .. warning::

            The title is passed later on through :code:`htmlspecialchars()`
            so it may not include any HTML formatting.

         **Example:**

         Let's look at what is done for the "haiku" table of the "examples"
         extension. The call to the user function appears
         in the :file:`EXT:examples/Configuration/TCA/tx_examples_haiku.php` file:

         .. code-block:: php

            'ctrl' => array(
            	...
            	'label'     => 'title',
            	'label_userFunc' => 'Documentation\\Examples\\Userfuncs\\Tca->haikuTitle',
            	...

         In class :code:`Documentation\Examples\Userfuncs\Tca` is the code itself:

         .. code-block:: php

            public function haikuTitle(&$parameters, $parentObject) {
            	$record = \TYPO3\CMS\Backend\Utility\BackendUtility::getRecord($parameters['table'], $parameters['row']['uid']);
            	$newTitle = $record['title'];
            	$newTitle .= ' (' . substr(strip_tags($record['poem']), 0, 10) . '...)';
            	$parameters['title'] = $newTitle;
            }

   Scope
         Display



.. _ctrl-reference-label-userfunc-options:

label\_userFunc\_options
~~~~~~~~~~~~~~~~~~~~~~~~

.. container:: table-row

   Key
         label\_userFunc\_options

   Datatype
         string

   Description
         Options for :ref:`label_userFunc <ctrl-reference-label-userfunc>`.
         The array of options is passed to the user function in the parameters
         array with key "options".

         .. note::

            When the :code:`label_userFunc` is used for inline (IRRE)
            elements, the options are **not** passed. If you need options
            use :ref:`formattedLabel_userFunc <ctrl-reference-formattedlabel-userfunc>`
            instead.

   Scope
         Display



.. _ctrl-reference-formattedlabel-userfunc:

formattedLabel\_userFunc
~~~~~~~~~~~~~~~~~~~~~~~~

.. container:: table-row

   Key
         formattedLabel\_userFunc

   Datatype
         string

   Description
         Similar to :ref:`label_userFunc <ctrl-reference-label-userfunc>`
         but allowed to return formatted HTML for the label
         **and used only for the labels of inline (IRRE) records**.
         The referenced user function may receive optional arguments using the
         :ref:`formattedLabel_userFunc_options <ctrl-reference-formattedlabel-userfunc-options>`
         property.

         **Example**

         Taken from table "sys_file_reference".

         .. code-block:: php

			'formattedLabel_userFunc' => 'EXT:core/Classes/Resource/Service/UserFileInlineLabelService.php:TYPO3\\CMS\\Core\\Resource\\Service\\UserFileInlineLabelService->getInlineLabel',
			'formattedLabel_userFunc_options' => array(
				'sys_file' => array(
					'title',
					'name'
				)
			),

         See class :ref:`TYPO3\\CMS\\Core\\Resource\\Service\\UserFileInlineLabelService <t3api:TYPO3\\CMS\\Core\\Resource\\Service\\UserFileInlineLabelService>`
         for how such a user function should be designed and how the options are used.

   Scope
         Display



.. _ctrl-reference-formattedlabel-userfunc-options:

formattedLabel\_userFunc\_options
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

.. container:: table-row

   Key
         formattedLabel\_userFunc\_options

   Datatype
         string

   Description
         Options for :ref:`formattedLabel_userFunc <ctrl-reference-formattedlabel-userfunc>`.

   Scope
         Display



.. _ctrl-reference-type:

type
~~~~

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

         The most widely known usage of this feature is the case of *Content Elements*
         where the "Type:" selector is defined as the "type" field and when you
         change that selector you will also get another rendering of the form:

         .. figure:: ../../Images/CtrlType.png
            :alt: The type selector

            The type selector of content elements

         It is also used by the "doktype" field in the "pages" table.

         **Example:**

         The "dummy" table from the "examples" extension defines different
         types. The field used for differentiating the types is the
         "record\_type" field. Hence we have the following in the :code:`['ctrl']` section
         of the tx\_examples\_dummy table:

         .. code-block:: php

            'type' => 'record_type'

         The "record\_type" field can take values ranging from 0 to 2.
         Accordingly we define types for the same values. Each type defines
         which fields will be displayed in the BE form:

         .. code-block:: php

            'types' => array(
                    '0' => array('showitem' => 'hidden, record_type, title, some_date '),
                    '1' => array('showitem' => 'record_type, title '),
                    '2' => array('showitem' => 'title, some_date, hidden, record_type '),
            ),

         See the :ref:`section about types <types>` for more details.

         Since TYPO3 CMS 4.7, it is also possible to make the type depend on the
         value of a related record, i.e. switch using the type field of a
         foreign table. The syntax is :code:`relation_field:foreign_type_field`.

         **Example:**

         The "sys_file_metadata" table takes its type from the "sys_file" table.
         The relation between the two tables is stored in the "file" field.
         Thus the :code:`type` declaration for "sys_file_metadata" looks like:

         .. code-block:: php

         	'type' => 'file:type'


   Scope
         Display / Proc.



.. _ctrl-reference-hidetable:

hideTable
~~~~~~~~~

.. container:: table-row

   Key
         hideTable

   Datatype
         boolean

   Description
         Hide this table in record listings.

   Scope
         Display



.. _ctrl-reference-requestupdate:

requestUpdate
~~~~~~~~~~~~~

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



.. _ctrl-reference-iconfile:

iconfile
~~~~~~~~

.. container:: table-row

   Key
         iconfile

   Datatype
         string

   Description
         Pointing to the icon file to use for the table.

         Icons should be square SVGs. In case you cannot supply a SVG you can still
         use a PNG file of 64x64 pixels in dimension.

         **Example usage**

         For haikus from the "examples" extension, the icon is defined this
         way:

         .. code-block:: php

            'iconfile' => 'EXT:examples/Resources/Public/Images/Haiku.svg',

   Scope
         Display



.. _ctrl-reference-typeicon-column:

typeicon\_column
~~~~~~~~~~~~~~~~

.. container:: table-row

   Key
         typeicon\_column

   Datatype
         string

         (field name)

   Description
         Field name, whose value decides *alternative icons* for the table records
         (The default icon is the one defined with the 'iconfile' value.)

         The values in the field referenced by this property must match entries
         in the array defined in :ref:`typeicon_classes <ctrl-reference-typeicon-classes>`
         properties. If no match is found, the default icon is used.

         .. note::

            These options do not work for the pages-table, which is configured using
            the :code:`$PAGES_TYPES` array.

         See example in the related :ref:`typeicon_classes <ctrl-reference-typeicon-classes>` feature.

   Scope
         Display



.. _ctrl-reference-typeicon-classes:

typeicon_classes
~~~~~~~~~~~~~~~~

.. container:: table-row

   Key
         typeicon\_classes

   Datatype
         array

   Description
         Array of class names to use for the records. The keys must correspond
         to the values found in the column referenced in the
         :ref:`typeicon_column <ctrl-reference-typeicon-column>` property.
         The class names correspond to the backend's sprite icons.

         .. tip::

            To register your own icons with the global backend sprite, use
            method :code:`\TYPO3\CMS\Backend\Sprite\SpriteManager::addSingleIcons()`.

         **Example:**

         Taken from the configuration of the "tt\_content" table:

         .. code-block:: php

              'typeicon_classes' => array(
                      'header' => 'mimetypes-x-content-header',
                      ...
                      'default' => 'mimetypes-x-content-text',
              ),

   Scope
         Display



.. _ctrl-reference-thumbnail:

thumbnail
~~~~~~~~~

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
         element:

         .. code-block:: php

            'thumbnail' => 'image',

         The effect of the field can be seen in listings in e.g. the "Web > List"
         module:

         .. figure:: ../../Images/CtrlThumbnail.png
            :alt: Thumbnails in the list view

            Thumbnails in the List module

         (You might have to enable "Show Thumbnails by default" in the
         "Startup" tab of the User Settings module first in order to see this
         display).

   Scope
         Display



.. _ctrl-reference-selicon-field:

selicon\_field
~~~~~~~~~~~~~~

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
         containing reference icons:

         .. code-block:: php

         	'ctrl' => array(
         		...
         		'selicon_field' => 'icon',
         		'selicon_field_path' => 'uploads/media',
         		...
         	),

         Also see :ref:`selicon_field_path <ctrl-reference-selicon-field-path>`.

   Scope
         Display



.. _ctrl-reference-selicon-field-path:

selicon\_field\_path
~~~~~~~~~~~~~~~~~~~~

.. container:: table-row

   Key
         selicon\_field\_path

   Datatype
         string

   Description
         The path prefix of the value from :ref:`selicon_field <ctrl-reference-selicon-field>`.
         This must the same as the "upload\_path" of that field.

         See example above.

   Scope
         Display



.. _ctrl-reference-sortby:

sortby
~~~~~~

.. container:: table-row

   Key
         sortby

   Datatype
         string

         (field name)

   Description
         Field name, which is used to manage the *order* of the records.

         The field will contain an integer value which positions it at the
         correct position between other records from the same table on the
         current page.

         .. note::

            The field should *not* be editable by the user since the
            TCE will manage the content automatically in order to manage the order
            of records.

         This feature is used by e.g. the "pages" table and "tt\_content" table
         (Content Elements) in order to output the pages or the content
         elements in the order expected by the editors. Extensions are expected
         to respect this field.

         Typically the field name :code:`sorting` is dedicated to this feature.

         Also see :ref:`default_sortby <ctrl-reference-default-sortby>`.

   Scope
         Proc. / Display



.. _ctrl-reference-default-sortby:

default\_sortby
~~~~~~~~~~~~~~~

.. container:: table-row

   Key
         default\_sortby

   Datatype
         string

   Description
         If a field name for :ref:`sortby <ctrl-reference-sortby>` is defined, then this is ignored.

         Otherwise this is used as the 'ORDER BY' statement to sort the records
         in the table when listed in the TYPO3 backend.

         **Example:**

         For the "haikus" table of the "examples" extension, records are listed
         alphabetically, based on their title:

         .. code-block:: php

         	'ctrl' => array(
         		...
         		'default_sortby' => 'ORDER BY title',
         		...
         	),

   Scope
         Display



.. _ctrl-reference-tstamp:

tstamp
~~~~~~

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

         from the :code:`['ctrl']` section of the "haikus" table:

         .. code-block:: php

         	'ctrl' => array(
         		...
         		'tstamp'    => 'tstamp',
         		'crdate'    => 'crdate',
         		'cruser_id' => 'cruser_id',
         		...
         	),

         The above example shows the same definition for the :ref:`crdate <ctrl-reference-crdate>` and
         :ref:`cruser_id <ctrl-reference-cruser-id>` fields described below.

   Scope
         Proc.



.. _ctrl-reference-crdate:

crdate
~~~~~~

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



.. _ctrl-reference-cruser-id:

cruser\_id
~~~~~~~~~~

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



.. _ctrl-reference-rootlevel:

rootLevel
~~~~~~~~~

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
           the page tree (where the "pid" field value will be 0 (zero)).
           **Notice:** the -1 value will still select foreign\_table records for
           selector boxes only from root (pid=0)

         .. note::

            The setting for "rootLevel" is ignored for records in the
            "pages" table (they are hardcoded to be allowed anywhere, equal to a
            "-1" setting of rootLevel).

         .. warning::

            This property does not tell the whole story. If set to
            "0" or "-1", it allows records from the table in the page tree, but
            **not** on any kind of page. By default records can be created only in
            "Folder"-type pages. To enable the creation of records on any kind of
            page, an additional call must be made:

         .. code-block:: php

            \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_examples_haiku');

   Scope
         Proc. / Display



.. _ctrl-reference-readonly:

readOnly
~~~~~~~~

.. container:: table-row

   Key
         readOnly

   Datatype
         boolean

   Description
         Records from this table may not be edited in the TYPO3 backend. Such
         tables are usually called "static".

   Scope
         Proc. / Display



.. _ctrl-reference-adminonly:

adminOnly
~~~~~~~~~

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
         editable only by admin users:

         .. code-block:: php

         	'ctrl' => array(
         		...
         		'adminOnly' => 1,
         		...
         	),

   Scope
         Proc. / Display



.. _ctrl-reference-editlock:

editlock
~~~~~~~~

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
         Proc. / Display



.. _ctrl-reference-origuid:

origUid
~~~~~~~

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
         Proc.



.. _ctrl-reference-delete:

delete
~~~~~~

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
         turn the whole system *must* strictly respect the record as deleted.
         This means that any SQL query must exclude records where this field is
         true.

         This is a very common feature. Most tables use it throughout the TYPO3
         Core.

   Scope
         Proc. / Display

.. _ctrl-reference-descriptionColumn:

descriptionColumn
~~~~~~~~~~~~~~~~~

.. container:: table-row

   Key
         descriptionColumn

   Datatype
         string

         (field name)

   Description
         Field name where description of a record is stored in.

         This description is only displayed in the backend to guide editors and admins.
   Scope
         Display

.. _ctrl-reference-enablecolumns:

enablecolumns
~~~~~~~~~~~~~

.. container:: table-row

   Key
         enablecolumns

   Datatype
         array

   Description
         Specifies which *publishing control features* are automatically
         implemented for the table.

         This includes that records can be "disabled" or "hidden", have a
         starting and/or ending time and be access controlled so only a certain
         front end user group can access them

         In the frontend libraries the enableFields() function automatically
         detects which of these fields are configured for a table and returns
         the proper WHERE clause SQL code for creating select queries.

         These are the keys in the array you can use. Each of the values must
         be a field name in the table which should be used for the feature:

         disabled
           Defines which field serves as hidden/disabled flag.

         starttime
           Defines which field contains the starting time.

         endtime
           Defines which field contains the ending time.

         fe\_group
           Defines which field is used for access control via a selection
           of FE user groups.

         .. note::

            In general these fields do *not* affect the access or
            display in the backend! They are primarily related to the frontend.
            However the icon of records having these features enabled will
            normally change as these examples show:


            .. figure:: ../../Images/CtrlEnableFields.png
               :alt: Enable fields show up as icon overlays

               FE group restricted access showing up on modified record icons

         See also the :ref:`delete <ctrl-reference-delete>` feature which is related,
         but is active for both frontend and backend.

         **Example:**

         Typically the "enablecolumns" could be configured like this (here for
         the "tt\_content" table):

         .. code-block:: php

			'enablecolumns' => array(
				'disabled' => 'hidden',
				'starttime' => 'starttime',
				'endtime' => 'endtime',
				'fe_group' => 'fe_group'
			),

         .. tip::

            The :code:`$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_page.php']['addEnableColumns']`
            hook makes it possible to define custom enable fields.

   Scope
         Proc. / Display



.. _ctrl-reference-searchfields:

searchFields
~~~~~~~~~~~~

.. container:: table-row

   Key
         searchFields

   Datatype
         string

   Description
         Comma-separated list of fields from the table that will be included
         when searching for records in the TYPO3 backend. Starting with TYPO3
         CMS 4.6, no record from a table will ever be found if that table does not
         have "searchFields" defined.

         There are finer controls per column, see the "search" property in the
         list of "Common properties" further in this manual.

         **Example:**

         The "tt\_content" table has the following definition:

         .. code-block:: php

         	'ctrl' => array(
         		'searchFields' => 'header,header_link,subheader,bodytext,pi_flexform'
         	),

   Scope
         Search



.. _ctrl-reference-groupname:

groupName
~~~~~~~~~

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



.. _ctrl-reference-hideatcopy:

hideAtCopy
~~~~~~~~~~

.. container:: table-row

   Key
         hideAtCopy

   Datatype
         boolean

   Description
         If set, and the "disabled" field from :ref:`enablecolumns <ctrl-reference-enablecolumns>` is
         specified, then records will be disabled/hidden when they are copied.

   Scope
         Proc.



.. _ctrl-reference-prependatcopy:

prependAtCopy
~~~~~~~~~~~~~

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



.. _ctrl-reference-copyafterduplfields:

copyAfterDuplFields
~~~~~~~~~~~~~~~~~~~

.. container:: table-row

   Key
         copyAfterDuplFields

   Datatype
         string

         (list of field names)

   Description
         The fields in this list will automatically have the value of the same
         field from the "previous" record transferred when they are *copied or
         moved* to the position *after* another record from same table.

         **Example:**

         Take from the "tt_content" table.

         .. code-block:: php

         	'copyAfterDuplFields' => 'colPos, sys_language_uid',

   Scope
         Proc.



.. _ctrl-reference-settodefaultoncopy:

setToDefaultOnCopy
~~~~~~~~~~~~~~~~~~

.. container:: table-row

   Key
         setToDefaultOnCopy

   Datatype
         string

         (list of field names)

   Description
         These fields are restored to the default value of the record when they
         are copied.

         **Example:**

         Take from the "sys_action" table.

         .. code-block:: php

         	'ctrl' => array(
         		'setToDefaultOnCopy' => 'assign_to_groups',
         	),

   Scope
         Proc.



.. _ctrl-reference-usecolumnsfordefaultvalues:

useColumnsForDefaultValues
~~~~~~~~~~~~~~~~~~~~~~~~~~

.. container:: table-row

   Key
         useColumnsForDefaultValues

   Datatype
         string

         (list of field names)

   Description
         When a new record is created, this defines the fields from the
         'previous' record that should be used as default values.

         **Example:**

         Take from the "sys_filemounts" table.

         .. code-block:: php

         	'ctrl' => array(
         		...
         		'useColumnsForDefaultValues' => 'path,base',
         		...
         	),

   Scope
         Proc.



.. _ctrl-reference-shadowcolumnsfornewplaceholders:

shadowColumnsForNewPlaceholders
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

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
         example would be :code:`sys_language_uid`. This property defines the list
         of fields whose values are "shadowed" to the Live record.

         All fields listed for this option must be defined in
         :code:`$TCA[<table>]['columns']` as well.

         Furthermore fields which are listed in :ref:`transOrigPointerField <ctrl-reference-transorigpointerfield>`,
         :ref:`languageField <ctrl-reference-languageField>`, :ref:`label <ctrl-reference-label>`
         and :ref:`type <ctrl-reference-type>` are automatically added to this
         list of fields and do not have to be mentioned again here.

         **Example:**

         Take from the "sys_filemounts" table.

         .. code-block:: php

			'ctrl' => array(
		  		...
		  		'shadowColumnsForNewPlaceholders' => 'sys_language_uid,l18n_parent,colPos',
		  		...
		  	),

   Scope
         Proc.



.. _ctrl-reference-shadowcolumnsformoveplaceholders:

shadowColumnsForMovePlaceholders
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

.. container:: table-row

   Key
         shadowColumnsForMovePlaceholders

   Datatype
         string

         (list of field names)

   Description
         Similar to :ref:`shadowColumnsForNewPlaceholders <ctrl-reference-shadowcolumnsfornewplaceholders>`
         but for move placeholders. It is used when:

         - changing the sorting order of elements on the same page
         - moving elements to a different page

         **Note:** Since TYPO3 CMS 7 LTS move-placeholders are always used.


.. _ctrl-reference-is-static:

is\_static
~~~~~~~~~~

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

   Scope
         Used by import/export



.. _ctrl-reference-fe-cruser-id:

fe\_cruser\_id
~~~~~~~~~~~~~~

.. container:: table-row

   Key
         fe\_cruser\_id

   Datatype
         string

         (field name)

   Description
         Field name which is used to store the uid of a frontend user if the
         record is created through fe\_adminLib.

   Scope
         FE



.. _ctrl-reference-fe-crgroup-id:

fe\_crgroup\_id
~~~~~~~~~~~~~~~

.. container:: table-row

   Key
         fe\_crgroup\_id

   Datatype
         string

         (field name)

   Description
         Field name which is used for storing the uid of a frontend group whose
         members are allowed to edit through fe\_adminLib.

   Scope
         FE



.. _ctrl-reference-fe-admin-lock:

fe\_admin\_lock
~~~~~~~~~~~~~~~

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



.. _ctrl-reference-languagefield:

languageField
~~~~~~~~~~~~~

.. container:: table-row

   Key
         languageField

   Datatype
         string (field name)

   Description
         **Localization access control.**

         Field name which contains the pointer to the language of the record's
         content. Language for a record is defined by an integer pointing to a
         "sys\_language" record (found in the page tree root).

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

         Also see the :ref:`Frontend Localization Guide <t3l10n:core-support-tca>`
         for a discussion about the effects of this property (and other TCA
         properties) on the localization process.

   Scope
         Proc. / Display



.. _ctrl-reference-transorigpointerfield:

transOrigPointerField
~~~~~~~~~~~~~~~~~~~~~

.. container:: table-row

   Key
         transOrigPointerField

   Datatype
         string (field name)

   Description
         Name of the field used by translations to point back to the original
         record (i.e. the record in the default language of which they are a
         translation).

         If this value is found being set together with
         :ref:`languageField <ctrl-reference-languagefield>` then
         TCEforms will show the default translation value under the fields in
         the main form. This is very neat if translators are to see what they
         are translating.

         Must be configured in :code:`$TCA[<table>]['columns']`, at least as a
         passthrough type.

   Scope
         Proc. / Display



.. _ctrl-reference-transforeigntable:

transForeignTable
~~~~~~~~~~~~~~~~~

.. container:: table-row

   Key
         transForeignTable

   Datatype
         string (table name)

   Description
         Translations may be stored in a separate table, instead of the same
         one. In such a case, the name of the translation table is stored in
         this property. The translation table in turn will use the
         :ref:`transOrigPointerTable <ctrl-reference-transorigpointertable>`
         property to point back to this table.

         This is used in the TYPO3 Core for the "pages" table, which uses the
         "pages\_language\_overlay" table to hold the translations.

         **Example:**

         In the "pages" table:

         .. code-block:: php

			'ctrl' => array(
				...
				'transForeignTable' => 'pages_language_overlay',
				...
			),

         In "pages\_language\_overlay" table:

         .. code-block:: php

         	'ctrl' => array(
         		...
         		'transOrigPointerField' => 'pid',
         		'transOrigPointerTable' => 'pages',
         		...
         	),

         Note that the :ref:`transOrigPointerField <ctrl-reference-transorigpointerfield>`
         is still used, but within the table holding the translations.

         .. warning::

            This is still not fully for all other tables than the
            "pages" table. You should expect some issues and inconsistencies when
            using this translation method.

   Scope
         Proc.



.. _ctrl-reference-transorigpointertable:

transOrigPointerTable
~~~~~~~~~~~~~~~~~~~~~

.. container:: table-row

   Key
         transOrigPointerTable

   Datatype
         string (table name)

   Description
         Symmetrical property to "transForeignTable". See above for
         explanations.

   Scope
         Proc. / Display



.. _ctrl-reference-transorigdiffsourcefield:

transOrigDiffSourceField
~~~~~~~~~~~~~~~~~~~~~~~~

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

         You don't have to configure this field in :code:`$TCA[<table>]['columns']`,
         but if you do, select the "passthrough" type. That will enable
         the undo function to also work on this field.

   Scope
         Proc. / Display



.. _ctrl-reference-versioningws:

versioningWS
~~~~~~~~~~~~

.. container:: table-row

   Key
         versioningWS

   Datatype
         boolean

   Description
         If set, versioning is enabled for this table.

         Versioning in TYPO3 is based on this scheme::

            [Online version, pid>=0] 1- * [Offline versions, pid=-1]

         Offline versions are identified by having a pid value = -1 and they
         refer to their online version by the field "t3ver\_oid". Offline
         versions of the "Page" and "Branch" types (contrary to "Element" type)
         can have child records which points to the uid of their offline "root"
         version with their pid fields (as usual). These children records are
         typically copies of child elements of the online version of the
         offline root version, but are not considered "versions" of them in a
         technical sense, hence they don't point to them with their t3ver\_oid
         field (and shouldn't).

         In the backend "Offline" is labeled "Draft" while "Online" is labeled
         "Live".

         In order for versioning to work on a table there are certain
         requirements; Tables supporting versioning must have these fields:

         t3ver\_oid
           For offline versions; pointing back to online
           version uid. For online: 0 (zero)

         t3ver\_id
           Incremental integer (version number)

         t3ver\_label
           Version label, e.g. "1.1.1" or "Christmas edition"

         t3ver\_wsid
           For offline versions: Workspace ID of version.
           For all workspace Ids apart from 0 (zero) there can be only one
           version of an element per ID. For online: 0 (zero) unless t3ver\_state
           is set in which case it plays a role for previews in the backend (to
           no de-select placeholders for workspaces, see
           :code:`\TYPO3\CMS\Backend\Utility\BackendUtility::versioningPlaceholderClause())`
           and for publishing of move-to-actions (see
           :code:`\TYPO3\CMS\Backend\Utility\BackendUtility::getMovePlaceholder()`).

         t3ver\_state
           Contains special states of a version used when
           new, deleted, moved content requires versioning.

           - For an  **online** version:

             - "1" or "2" means that it is a temporary placeholder for a new element
               (which is the offline version of this record)

             - "3" means it is a "move-to-location" placeholder and t3ver\_move\_id
               holds uid of online record (with an offline version) to move . Unlike
               for "1" and "2" there is  *no offline version* of this record type!
               (V2 feature)

             - If "t3ver\_state" has a value >0 it should never be shown in Live
               workspace.

           - For an  **offline** version:

             - "1" or "2" means that when published, the element must be deleted
               (placeholder for delete-action).

             - "-1" means it is just an indication that the online version has the
               flag set to "1" (is a placeholder for new records.). This only affects
               display, not processing anywhere.

             - "4" means this version is a "move-pointer" for the online record and
               an online "move-to-location" (t3ver\_state=3) record exists. (V2
               feature)

         t3ver\_stage
           Contains the ID of the stage at which the record
           is. Special values are "0" which still refers to "edit", "-10" refers
           to "ready to publish".

         t3ver\_count
           0/offline=draft/never published,
           0/online=current, 1/offline=archive, 1+=multiple online/offline
           occurrences (incrementation happens when versions are swapped
           offline.)

         t3ver\_tstamp
           Timestamp of last swap/publish action.

         t3ver\_move\_id
           For online records with t3ver\_state=3 this
           indicates the online record to move to this location upon publishing
           of the offline version of the online record "t3ver\_move\_id" points
           to.

         The fields  **pid** and  **uid** should have "signed" attributes in
         MySQL (so their content can be negative!)

         **Corresponding SQL definitions:**

         .. code-block:: mysql

              t3ver_oid int(11) DEFAULT '0' NOT NULL,
              t3ver_id int(11) DEFAULT '0' NOT NULL,
              t3ver_wsid int(11) DEFAULT '0' NOT NULL,
              t3ver_label varchar(30) DEFAULT '' NOT NULL,
              t3ver_state tinyint(4) DEFAULT '0' NOT NULL,
              t3ver_stage int(11) DEFAULT '0' NOT NULL,
              t3ver_count int(11) DEFAULT '0' NOT NULL,
              t3ver_tstamp int(11) DEFAULT '0' NOT NULL,
              t3ver_move_id int(11) DEFAULT '0' NOT NULL,

         **Special "t3ver\_swapmode" field for pages**

         When pages are versioned it is an option whether content and even the
         branch of the page is versioned. This is determined by the parameter
         "treeLevels" set when the page is versioned. "-1" means swap only
         record, 0 means record and content and >0 means full branch. When the
         version is later published the swapping will happen accordingly.

   Scope
         Proc.



.. _ctrl-reference-versioningws-alwaysallowliveedit:

versioningWS\_alwaysAllowLiveEdit
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

.. container:: table-row

   Key
         versioningWS\_alwaysAllowLiveEdit

   Datatype
         boolean

   Description
         If set, this table can always be edited live even in a workspace and
         even if "live editing" is not enabled in a custom workspace. For
         instance this is set by default for Backend user and group records
         since it is assumed that administrators like the flexibility of
         editing backend users without having to go to the Live workspace.

   Scope
        Special



.. _ctrl-reference-security:

security
~~~~~~~~

.. container:: table-row

   Key
         security

   Datatype
         array

   Description
         Array of sub-properties, see :ref:`ctrl-security`.

   Scope
         Display



.. _ctrl-reference-ext-extension-key:

EXT[extension\_key]
~~~~~~~~~~~~~~~~~~~

.. container:: table-row

   Key
         EXT[ *extension\_key* ]

   Datatype
         array

   Description
         User-defined content for extensions. You can use this as you like.

         Let's say that you have an extension with the key "myext", then you
         have the right to define properties for:

         .. code-block:: php

            ...['ctrl']['EXT']['myext'] = ... (whatever you define)

         Note that this is just a convention. You can use some other syntax but
         with the risk that it conflicts with some other extension or future
         changes in the TYPO3 CMS Core.

   Scope
         (variable, depends on extension)


.. _ctrl-security:

Security-related configuration
""""""""""""""""""""""""""""""

This section describes "sub-properties" of the "security" property. They
are meant to be used as keys of the "security" property array::

   $TCA['sys_file'] = array(
      'ctrl' => array(
         ...
         'security' => array(
            'ignoreWebMountRestriction' => 1,
            'ignoreRootLevelRestriction' => 1,
         ),
         ...
      )
   );



.. _ctrl-security-ignorewebmountrestriction:

ignoreWebMountRestriction
~~~~~~~~~~~~~~~~~~~~~~~~~

.. container:: table-row

   Key
         ignoreWebMountRestriction

   Datatype
         boolean

   Description
         Allows users to access records that are not in their defined web-mount,
         thus bypassing this restriction.

   Scope
         Display



.. _ctrl-security-ignorerootlevelrestriction:

ignoreRootLevelRestriction
~~~~~~~~~~~~~~~~~~~~~~~~~~

.. container:: table-row

   Key
         ignoreRootLevelRestriction

   Datatype
         boolean

   Description
         Allows non-admin users to access records that on the root-level (page-id 0),
         thus bypassing this usual restriction.

   Scope
         Display



.. _ctrl-examples:

Examples
""""""""

Here are a couple examples of complete configurations of :code:`['ctrl']`
sections.

The first one is from the "pages" table:

.. code-block:: php

	'ctrl' => array(
		'label' => 'title',
		'tstamp' => 'tstamp',
		'sortby' => 'sorting',
		'title' => 'LLL:EXT:lang/locallang_tca.xlf:pages',
		'type' => 'doktype',
		'versioningWS' => true,
		'origUid' => 't3_origuid',
		'delete' => 'deleted',
		'crdate' => 'crdate',
		'hideAtCopy' => 1,
		'prependAtCopy' => 'LLL:EXT:lang/locallang_general.xlf:LGL.prependAtCopy',
		'cruser_id' => 'cruser_id',
		'editlock' => 'editlock',
		'useColumnsForDefaultValues' => 'doktype,fe_group,hidden',
		'enablecolumns' => array(
			'disabled' => 'hidden',
			'starttime' => 'starttime',
			'endtime' => 'endtime',
			'fe_group' => 'fe_group'
		),
		'transForeignTable' => 'pages_language_overlay',
		'typeicon_column' => 'doktype',
		'typeicon_classes' => array(
			'1' => 'apps-pagetree-page-default',
			'1-hideinmenu' => 'apps-pagetree-page-not-in-menu',
			...
			'default' => 'apps-pagetree-page-default'
		),
		'typeicons' => array(
			'1' => 'pages.gif',
			'254' => 'sysf.gif',
			'255' => 'recycler.gif'
		),
		'searchFields' => 'title,alias,nav_title,subtitle,url,keywords,description,abstract,author,author_email'
	),

A few remarks:

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

Similarly for the "tt\_content" table:

.. code-block:: php

	'ctrl' => array(
		'label' => 'header',
		'label_alt' => 'subheader,bodytext',
		'sortby' => 'sorting',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'title' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tt_content',
		'delete' => 'deleted',
		'versioningWS' => true,
		'origUid' => 't3_origuid',
		'type' => 'CType',
		'hideAtCopy' => TRUE,
		'prependAtCopy' => 'LLL:EXT:lang/locallang_general.xlf:LGL.prependAtCopy',
		'copyAfterDuplFields' => 'colPos,sys_language_uid',
		'useColumnsForDefaultValues' => 'colPos,sys_language_uid',
		'shadowColumnsForNewPlaceholders' => 'colPos',
		'transOrigPointerField' => 'l18n_parent',
		'transOrigDiffSourceField' => 'l18n_diffsource',
		'languageField' => 'sys_language_uid',
		'enablecolumns' => array(
			'disabled' => 'hidden',
			'starttime' => 'starttime',
			'endtime' => 'endtime',
			'fe_group' => 'fe_group'
		),
		'typeicon_column' => 'CType',
		'typeicon_classes' => array(
			'header' => 'mimetypes-x-content-header',
			'textpic' => 'mimetypes-x-content-text-picture',
			...
			'default' => 'mimetypes-x-content-text'
		),
		'typeicons' => array(
			'header' => 'tt_content_header.gif',
			'textpic' => 'tt_content_textpic.gif',
			...
		),
		'thumbnail' => 'image',
		'requestUpdate' => 'list_type,rte_enabled,menu_type',
		'searchFields' => 'header,header_link,subheader,bodytext,pi_flexform'
	),

A few remarks:

- of particular note is the "enablecolumns" property. It is quite
  extensive for this table since it is a frontend-related table. Thus
  proper access rights, publications dates, etc. must be enforced.

- every type of content element has its own icon and its own class, used
  in conjunction with the skinning API to visually represent that type
  in the TYPO3 backend.

- the column "image" is defined as the one to use to fetch any
  thumbnails related to the record.
