..  include:: /Includes.rst.txt
..  _columns-flex-properties-ds-pointerfield-searchparent-subfield:

========================================
ds\_pointerField\_searchParent\_subField
========================================

..  note::
    This configuration option will not be handled anymore with TYPO3 v13+.
    Beginning with TYPO3 v12 you can migrate to PSR-14 events to manipulate the
    data structure lookup logic:

*   :ref:`t3coreapi:AfterFlexFormDataStructureIdentifierInitializedEvent`
*   :ref:`t3coreapi:AfterFlexFormDataStructureParsedEvent`
*   :ref:`t3coreapi:BeforeFlexFormDataStructureIdentifierInitializedEvent`
*   :ref:`t3coreapi:BeforeFlexFormDataStructureParsedEvent`

..  confval:: ds_pointerField_searchParent_subField

    :Path: $GLOBALS['TCA'][$table]['columns'][$field]['config']
    :type: string
    :Scope: Display  / Proc.

    Points to a field in the "rootline" which may contain a pointer to the "next-level" template.
