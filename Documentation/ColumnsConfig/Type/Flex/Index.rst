..  include:: /Includes.rst.txt
..  _columns-flex:

==============
FlexForm field
==============

Renders a :ref:`FlexForm <t3coreapi:flexforms>` element. Essentially, this consists in a
hierarchically organized set of fields which will have their values saved into a
single field in the database, stored as XML.

The general idea is: There is a data structure that defines which and how single
fields should be displayed, re-using all the TCA column type possibilities. The
actual values of single fields are then stored in an XML representation within
this "flex" field.

..  contents:: Table of contents

..  toctree::
    :titlesonly:

    AboutDataStructures
    FlexformSyntax
    Examples


..  _columns-flex-properties:

Properties of the TCA column type `flex`
========================================

..  deprecated:: 12.4
    The configuration options `ds_tableField`, `ds_pointerField_searchParent_subField`
    and `ds_pointerField_searchParent` will not handled anymore with TYPO3 v13. Use the
    :ref:`Events <columns-flex-events>` to replace their logic if needed.

..  confval-menu::
    :display: table
    :type:
    :Scope:

    ..  include:: _Properties/_AllowLanguageSynchronization.rst.txt
        :show-buttons:

    ..  include:: _Properties/_Ds.rst.txt
        :show-buttons:

    ..  include:: _Properties/_DsPointerField.rst.txt
        :show-buttons:

    ..  include:: _Properties/_DsPointerFieldSearchParent.rst.txt
        :show-buttons:

    ..  include:: _Properties/_DsPointerFieldSearchParentSubField.rst.txt
        :show-buttons:

    ..  include:: _Properties/_DsTableField.rst.txt
        :show-buttons:

    ..  include:: _Properties/_FieldInformation.rst.txt
        :show-buttons:

    ..  include:: _Properties/_FieldWizard.rst.txt
        :show-buttons:

    ..  include:: _Properties/_ReadOnly.rst.txt
        :show-buttons:

..  _columns-flex-events:

Events to manipulate the FlexForm data structure
================================================

..  versionadded:: 12.x

There are appropriate events that allow the manipulation of the data structure
lookup logic:

*   :ref:`t3coreapi:AfterFlexFormDataStructureIdentifierInitializedEvent`
*   :ref:`t3coreapi:AfterFlexFormDataStructureParsedEvent`
*   :ref:`t3coreapi:BeforeFlexFormDataStructureIdentifierInitializedEvent`
*   :ref:`t3coreapi:BeforeFlexFormDataStructureParsedEvent`
