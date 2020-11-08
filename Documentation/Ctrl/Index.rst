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
        'prependAtCopy' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.prependAtCopy',
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

.. _ctrl-reference-adminonly:
.. include:: CtrlAdminOnly.rst.txt

.. _ctrl-reference-container:
.. include:: CtrlContainer.rst.txt

.. _ctrl-reference-copyafterduplfields:
.. include:: CtrlCopyAfterDuplFields.rst.txt

.. _ctrl-reference-crdate:
.. include:: CtrlCrdate.rst.txt

.. _ctrl-reference-cruser-id:
.. include:: CtrlCruserId.rst.txt

.. _ctrl-reference-default-sortby:
.. include:: CtrlDefaultSortby.rst.txt

.. _ctrl-reference-delete:
.. include:: CtrlDelete.rst.txt

.. _ctrl-reference-descriptionColumn:
.. include:: CtrlDescriptionColumn.rst.txt

.. _ctrl-reference-editlock:
.. include:: CtrlEditlock.rst.txt

.. _ctrl-reference-enablecolumns:
.. include:: CtrlEnablecolumns.rst.txt

.. _ctrl-reference-ext-extension-key:
.. include:: CtrlExt.rst.txt

.. _ctrl-reference-formattedlabel-userfunc:
.. include:: CtrlFormattedLabelUserFunc.rst.txt

.. _ctrl-reference-formattedlabel-userfunc-options:
.. include:: CtrlFormattedLabelUserFuncOptions.rst.txt

.. _ctrl-reference-groupname:
.. include:: CtrlGroupName.rst.txt

.. _ctrl-reference-hideatcopy:
.. include:: CtrlHideAtCopy.rst.txt

.. _ctrl-reference-hidetable:
.. include:: CtrlHideTable.rst.txt

.. _ctrl-reference-iconfile:
.. include:: CtrlIconfile.rst.txt

.. _ctrl-reference-is-static:
.. include:: CtrlIsStatic.rst.txt

.. _ctrl-reference-label:
.. include:: CtrlLabel.rst.txt

.. _ctrl-reference-label-alt:
.. include:: CtrlLabelAlt.rst.txt

.. _ctrl-reference-label-alt-force:
.. include:: CtrlLabelAltForce.rst.txt

.. _ctrl-reference-label-userfunc:
.. include:: CtrlLabelUserfunc.rst.txt

.. _ctrl-reference-label-userfunc-options:
.. include:: CtrlLabelUserFuncOptions.rst.txt

.. _ctrl-reference-languagefield:
.. include:: CtrlLanguageField.rst.txt

.. _ctrl-reference-origuid:
.. include:: CtrlOrigUid.rst.txt

.. _ctrl-reference-prependatcopy:
.. include:: CtrlPrependAtCopy.rst.txt

.. _ctrl-reference-readonly:
.. include:: CtrlReadOnly.rst.txt

.. _ctrl-reference-rootlevel:
.. include:: CtrlRootLevel.rst.txt

.. _ctrl-reference-searchfields:
.. include:: CtrlSearchFields.rst.txt

.. _ctrl-reference-security:
.. _ctrl-security:
.. _ctrl-security-ignorewebmountrestriction:
.. _ctrl-security-ignorerootlevelrestriction:
.. include:: CtrlSecurity.rst.txt

.. _ctrl-reference-selicon-field:
.. include:: CtrlSeliconField.rst.txt

.. _ctrl-reference-shadowcolumnsfornewplaceholders:
.. include:: CtrlShadowColumnsForNewPlaceholders.rst.txt

.. _ctrl-reference-sortby:
.. include:: CtrlSortby.rst.txt

.. _ctrl-reference-thumbnail:
.. include:: CtrlThumbnail.rst.txt

.. _ctrl-reference-title:
.. include:: CtrlTitle.rst.txt

.. _ctrl-reference-translationSource:
.. include:: CtrlTranslationSource.rst.txt

.. _ctrl-reference-transorigdiffsourcefield:
.. include:: CtrlTransOrigDiffSourceField.rst.txt

.. _ctrl-reference-transorigpointerfield:
.. include:: CtrlTransOrigPointerField.rst.txt

.. _ctrl-reference-tstamp:
.. include:: CtrlTstamp.rst.txt

.. _ctrl-reference-type:
.. include:: CtrlType.rst.txt

.. _ctrl-reference-typeicon-classes:
.. include:: CtrlTypeiconClasses.rst.txt

.. _ctrl-reference-typeicon-column:
.. include:: CtrlTypeiconColumn.rst.txt

.. _ctrl-reference-usecolumnsfordefaultvalues:
.. include:: CtrlUseColumnsForDefaultValues.rst.txt

.. _ctrl-reference-versioningws:
.. include:: CtrlVersioningWS.rst.txt

.. _ctrl-reference-versioningws-alwaysallowliveedit:
.. include:: CtrlVersioningWSAlwaysAllowLiveEdit.rst.txt
