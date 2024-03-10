..  include:: /Includes.rst.txt
..  _columns-flex-properties-ds-pointerfield-searchparent:

==============================
ds\_pointerField\_searchParent
==============================

..  note::
    This configuration option will not be handled anymore with TYPO3 v13+.
    Beginning with TYPO3 v12 you can migrate to PSR-14 events to manipulate the
    data structure lookup logic:

*   :ref:`t3coreapi:AfterFlexFormDataStructureIdentifierInitializedEvent`
*   :ref:`t3coreapi:AfterFlexFormDataStructureParsedEvent`
*   :ref:`t3coreapi:BeforeFlexFormDataStructureIdentifierInitializedEvent`
*   :ref:`t3coreapi:BeforeFlexFormDataStructureParsedEvent`

..  confval:: ds_pointerField_searchParent

    :Path: $GLOBALS['TCA'][$table]['columns'][$field]['config']
    :type: string
    :Scope: Display  / Proc.

    Used to search for Data Structure recursively back in the table assuming that the table is a tree table.
    This value points to the "pid" field.
