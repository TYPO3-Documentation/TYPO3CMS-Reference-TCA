..  include:: /Includes.rst.txt
..  _columns-flex:

==============
FlexForm field
==============

..  versionadded:: 13.0
    When using the `flex` type, TYPO3 takes care of
    :ref:`generating the according database field <t3coreapi:auto-generated-db-structure>`.
    A developer does not need to define this field in an extension's
    :file:`ext_tables.sql` file.

Renders a :ref:`FlexForm <t3coreapi:flexforms>` element. Essentially, this consists in a
hierarchically organized set of fields which will have their values saved into a
single field in the database, stored as XML.

The :ref:`according database field <t3coreapi:auto-generated-db-structure>`
is generated automatically.

The general idea is: There is a data structure that defines which and how single
fields should be displayed, re-using all the TCA column type possibilities. The
actual values of single fields are then stored in an XML representation within
this "flex" field.

..  contents:: Table of contents:
    :local:
    :depth: 1

..  toctree::
    :titlesonly:

    AboutDataStructures
    FlexformSyntax
    Examples

..  _columns-flex-properties:

Properties of the TCA column type `flex`
========================================

..  versionchanged:: 13.0
    The configuration options `ds_tableField`, `ds_pointerField_searchParent_subField`
    and `ds_pointerField_searchParent` are not handled anymore. Use the
    :ref:`Events <columns-flex-events>` to replace their logic if needed.

..  confval-menu::
    :name: flex
    :display: table
    :type:
    :Scope:

    ..  include:: _Properties/_*.rst.txt
        :show-buttons:


..  _columns-flex-special-ds:

Defining multiple data structures for different records
=======================================================

There can be multiple data structures defined in `TCA` and which one is chosen
depends on the configuration and the record . You can use
:confval:`flex-ds` or :ref:`Events <columns-flex-events>` to manipulate
which data structure should be displayed.

..  note::
    It is **not** possible to override these properties in
    :ref:`TCA type columnsOverrides <types-properties-columnsOverrides>` or to manipulate
    them in an inline parent-child relation from the parent `TCA`.

..  _columns-flex-events:

Events to manipulate the FlexForm data structure
================================================

There are appropriate events that allow the manipulation of the data structure
lookup logic:

*   :ref:`t3coreapi:AfterFlexFormDataStructureIdentifierInitializedEvent`
*   :ref:`t3coreapi:AfterFlexFormDataStructureParsedEvent`
*   :ref:`t3coreapi:BeforeFlexFormDataStructureIdentifierInitializedEvent`
*   :ref:`t3coreapi:BeforeFlexFormDataStructureParsedEvent`
