..  include:: /Includes.rst.txt
..  _ctrl-reference-versioningws:

============
versioningWS
============

..  confval:: versioningWS
    :name: ctrl-versioningWS
    :Path: $GLOBALS['TCA'][$table]['ctrl']
    :type: boolean
    :Scope: Proc.


    If set, versioning is enabled for this table.

    ..  note::
        The field details explained here are outdated.

    Versioning in TYPO3 is based on this scheme:

    ..  code-block:: none

        [Online version, pid>=0] 1- * [Offline versions, pid==1]

    Offline versions are identified by having a pid value = -1 and they
    refer to their online version by the field `t3ver_oid`. Offline
    versions of the "Page" and "Branch" types (contrary to "Element" type)
    can have child records which points to the uid of their offline "root"
    version with their pid fields (as usual). These children records are
    typically copies of child elements of the online version of the
    offline root version, but are not considered "versions" of them in a
    technical sense, hence they don't point to them with their `t3ver_oid`
    field (and shouldn't).

    In the backend "Offline" is labeled "Draft" while "Online" is labeled "Live".

    In order for versioning to work on a table there are certain requirements;
    Tables supporting versioning must have these fields:

    `t3ver_oid`
        For offline versions; pointing back to online
        version uid. For online: 0 (zero)

    `t3ver_wsid`
        For offline versions: Workspace ID of version.
        For all workspace Ids apart from 0 (zero) there can be only one
        version of an element per ID. For online: 0 (zero) unless t3ver\_state
        is set in which case it plays a role for previews in the backend (to
        no de-select placeholders for workspaces, see
        :code:`\TYPO3\CMS\Backend\Utility\BackendUtility::versioningPlaceholderClause())`
        and for publishing of move-to-actions (see
        :code:`\TYPO3\CMS\Backend\Utility\BackendUtility::getMovePlaceholder()`).

    `t3ver_state`
        Contains special states of a version used when new, deleted, moved content requires versioning.

        -   For an  **online** version:

            -   "1" or "2" means that it is a temporary placeholder for a new
                element (which is the offline version of this record)
            -   If "t3ver\_state" has a value >0 it should never be shown in Live workspace.

        -   For an  **offline** version:

            -   "1" or "2" means that when published, the element must be deleted (placeholder for delete-action).
            -   "-1" means it is just an indication that the online version has the flag set to "1" (is a placeholder for
                new records.). This only affects display, not processing anywhere.

    `t3ver_stage`
        Contains the ID of the stage at which the record is. Special values are "0" which still refers to
        "edit", "-10" refers to "ready to publish".

    `t3ver_count`
        0/offline=draft/never published, 0/online=current, 1/offline=archive, 1+=multiple online/offline
        occurrences (incrementation happens when versions are swapped offline.)

    `t3ver_tstamp`
        Timestamp of last swap/publish action.

    ..  versionchanged:: 10.0

        Field `t3ver_move_id` is not evaluated anymore. It can be safely dropped
        after the upgrade wizard has been executed.

    **Corresponding SQL definitions:**

    ..  code-block:: sql

        t3ver_oid int(11) DEFAULT '0' NOT NULL,
        t3ver_wsid int(11) DEFAULT '0' NOT NULL,
        t3ver_state tinyint(4) DEFAULT '0' NOT NULL,
        t3ver_stage int(11) DEFAULT '0' NOT NULL,

    **Special `t3ver_swapmode` field for pages**

    When pages are versioned it is an option whether content and even the
    branch of the page is versioned. This is determined by the parameter
    `treeLevels` set when the page is versioned. `-1` means swap only record,
    0 means record and content and '> 0' means full branch. When the version is
    later published the swapping will happen accordingly.
