:orphan:

..  include:: /Includes.rst.txt
..  _columns-flex-properties-ds-pointerfield-searchparent-subfield:

========================================
ds\_pointerField\_searchParent\_subField
========================================

..  versionchanged:: 13.0
    This configuration option is not handled anymore.

Migration
=========

There are appropriate events that allow the manipulation of the data structure
lookup logic:

*   :ref:`t3coreapi:AfterFlexFormDataStructureIdentifierInitializedEvent`
*   :ref:`t3coreapi:AfterFlexFormDataStructureParsedEvent`
*   :ref:`t3coreapi:BeforeFlexFormDataStructureIdentifierInitializedEvent`
*   :ref:`t3coreapi:BeforeFlexFormDataStructureParsedEvent`

Those can be used to re-implement the logic that has been removed from TYPO3
Core if needed.
