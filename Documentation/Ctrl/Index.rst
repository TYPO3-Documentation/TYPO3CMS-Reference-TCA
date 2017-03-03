.. include:: ../Includes.txt

.. _ctrl:

========
['ctrl']
========


Introduction
------------

The ['ctrl'] section contains properties for a database table in general.

These properties are basically divided into two main categories:

- Properties which affect how a table is *displayed* and handled in
  the backend *interface*. This includes which icon is shown and which name is given for a record. It defines which
  column contains the title value, which column contains the type value etc.

- Properties which determine how entries in the backend interface are processed by the system
  (TCE). This includes the publishing control, the "deleted" flag, whether a table
  can only be edited by admin-users, whether a table may only exist in the tree root etc.


.. _ctrl-examples:

Examples
--------

.. code-block:: php

    'ctrl' => [
        'title' => 'LLL:EXT:myExtension/Resources/Private/Language/general.xlf:tableTitle',
        'label' => 'title',
        'iconfile' => 'EXT:myExtension/Resources/Public/Icons/someIcon.svg',
    ],

Property :code:`label` is a mandatory setting, but the above properties are a recommended
minimum. The list module shows an icon and a translated title of the table, and it uses the value of
field :code:`title` as title for single rows. Single record administration however is limited with this setup: This
table does not implement soft delete, record rows can not be sorted between each other, record localization is not
possible, and much more. In the database, only columns :code:`uid`, :code:`pid` and :code:`title` are needed
in :file:`ext_tables.sql` with this setup.

Table :code:`tt_content` makes much more excessive use of the :code:`['ctrl']` section:

.. code-block:: php

    'ctrl' => [
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
        'descriptionColumn' => 'rowDescription',
        'hideAtCopy' => true,
        'prependAtCopy' => 'LLL:EXT:lang/locallang_general.xlf:LGL.prependAtCopy',
        'copyAfterDuplFields' => 'colPos,sys_language_uid',
        'useColumnsForDefaultValues' => 'colPos,sys_language_uid,CType',
        'shadowColumnsForNewPlaceholders' => 'colPos',
        'transOrigPointerField' => 'l18n_parent',
        'translationSource' => 'l10n_source',
        'transOrigDiffSourceField' => 'l18n_diffsource',
        'languageField' => 'sys_language_uid',
        'enablecolumns' => [
            'disabled' => 'hidden',
            'starttime' => 'starttime',
            'endtime' => 'endtime',
            'fe_group' => 'fe_group'
        ],
        'typeicon_column' => 'CType',
        'typeicon_classes' => [
            'header' => 'mimetypes-x-content-header',
            'textpic' => 'mimetypes-x-content-text-picture',
            ...
            'default' => 'mimetypes-x-content-text'
        ],
        'searchFields' => 'header,header_link,subheader,bodytext,pi_flexform',
    ],

A few remarks:

- When tt_content records are displayed in the backend, the "label" property
  indicates that you will see the content from the field named "header"
  shown as the title of the record. If that field is empty, the content of field
  subheader and if empty, of field bodytext is used as title.

- The field called "sorting" will be used to determine the order in
  which tt_content records are displayed within each branch of the page tree.

- The title for the table as shown in the backend is defined as coming from a "locallang" file.

- The "type" field will be the one named "CType". The value of this field determines the set of fields
  shown in the edit forms in the backend, see the :ref:`['types'] <types>` section for details.

- Of particular note is the "enablecolumns" property. It is quite extensive for this table since it is a
  frontend-related table. Thus proper access rights, publications dates, etc. must be enforced.

- Every type of content element has its own icon and its own class, used in conjunction with the
  :ref:`Icon API <t3coreapi:icon>` to visually represent that type in the TYPO3 backend.


.. _ctrl-reference:

.. _ctrl-reference-title:
.. include:: CtrlTitle.rst

.. _ctrl-reference-label:
.. include:: CtrlLabel.rst

.. _ctrl-reference-label-alt:
.. include:: CtrlLabelAlt.rst

.. _ctrl-reference-label-alt-force:
.. include:: CtrlLabelAltForce.rst

.. _ctrl-reference-label-userfunc:
.. include:: CtrlLabelUserfunc.rst

.. _ctrl-reference-label-userfunc-options:
.. include:: CtrlLabelUserFuncOptions.rst

.. _ctrl-reference-formattedlabel-userfunc:
.. include:: CtrlFormattedLabelUserFunc.rst

.. _ctrl-reference-formattedlabel-userfunc-options:
.. include:: CtrlFormattedLabelUserFuncOptions.rst

.. _ctrl-reference-type:
.. include:: CtrlType.rst

.. _ctrl-reference-hidetable:
.. include:: CtrlHideTable.rst

.. _ctrl-reference-iconfile:
.. include:: CtrlIconfile.rst

.. _ctrl-reference-typeicon-column:
.. include:: CtrlTypeiconColumn.rst

.. _ctrl-reference-typeicon-classes:
.. include:: CtrlTypeiconClasses.rst

.. _ctrl-reference-thumbnail:
.. include:: CtrlThumbnail.rst

.. _ctrl-reference-selicon-field:
.. include:: CtrlSeliconField.rst

.. _ctrl-reference-selicon-field-path:
.. include:: CtrlSeliconFieldPath.rst

.. _ctrl-reference-sortby:
.. include:: CtrlSortby.rst

.. _ctrl-reference-default-sortby:
.. include:: CtrlDefaultSortby.rst

.. _ctrl-reference-tstamp:
.. include:: CtrlTstamp.rst

.. _ctrl-reference-crdate:
.. include:: CtrlCrdate.rst

.. _ctrl-reference-cruser-id:
.. include:: CtrlCruserId.rst

.. _ctrl-reference-rootlevel:
.. include:: CtrlRootLevel.rst

.. _ctrl-reference-readonly:
.. include:: CtrlReadOnly.rst

.. _ctrl-reference-adminonly:
.. include:: CtrlAdminOnly.rst

.. _ctrl-reference-editlock:
.. include:: CtrlEditlock.rst

.. _ctrl-reference-origuid:
.. include:: CtrlOrigUid.rst

.. _ctrl-reference-delete:
.. include:: CtrlDelete.rst

.. _ctrl-reference-descriptionColumn:
.. include:: CtrlDescriptionColumn.rst



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


            .. figure:: ../Images/CtrlEnableFields.png
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
         :php:`$GLOBALS['TCA'][<table>]['columns']` as well.

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

         Must be configured in :php:`$GLOBALS['TCA'][<table>]['columns']`, at least as a
         passthrough type.

   Scope
         Proc. / Display



.. _ctrl-reference-translationSource:

translationSource
~~~~~~~~~~~~~~~~~

.. container:: table-row

   Key
         translationSource

   Datatype
         string (field name)

   Description
         Name of the field used by translations to point back to the original
         record (i.e. the record in any language of which they are a translation).

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

         You don't have to configure this field in :php:`$GLOBALS['TCA'][<table>]['columns']`,
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

   $GLOBALS['TCA']['sys_file'] = array(
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



