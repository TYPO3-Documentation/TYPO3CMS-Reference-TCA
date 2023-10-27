:orphan:

..  include:: /Includes.rst.txt
..  _columns-flex-properties-ds-pointerfield-searchparent:

==============================
ds\_pointerField\_searchParent
==============================

..  versionchanged:: 13.0
    This configuration option is not handled anymore.

Migration
=========

There are appropriate events that allow the manipulation of the data structure
lookup logic:

*   :ref:`AfterFlexFormDataStructureIdentifierInitializedEvent`
*   :ref:`AfterFlexFormDataStructureParsedEvent`
*   :ref:`BeforeFlexFormDataStructureIdentifierInitializedEvent`
*   :ref:`BeforeFlexFormDataStructureParsedEvent`

Those can be used to re-implement the logic that has been removed from TYPO3
Core if needed.
