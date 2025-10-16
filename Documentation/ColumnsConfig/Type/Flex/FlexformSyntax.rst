..  include:: /Includes.rst.txt
..  _columns-flex-facts:

===============
FlexForm syntax
===============

..  note::
    See :ref:`Core API <t3coreapi:t3ds>`
    and :ref:`t3coreapi:flexforms` for further information.

FlexForms provide a way for editors to set values for plugins by providing a "form-within-a-form"
in the backend.

FlexForms have 2 parts: a setup XML file with root <T3DataStructure> and an XML
document inside a field in the tt_content database table with root <T3FlexForms>.
The setup fle consists of field types (the same as TCA fields). The database field
consists of the values entered by the editor in the backend form. The function
:code:`\TYPO3\CMS\Core\Utility\GeneralUtility::xml2array()` saves the values entered
into the backend form into the database XML.

When setting up the XML file there are some limitations:

*   "unique" and "uniqueInPid" are not available

*   configuration cannot be recursively nested.

*   You cannot add, change or remove fields. You need make a copy and then change the configuration in the copy.

*   The charset will be the same as the current backend UTF-8. Make sure that the
    files use UTF-8.

*   :php:`type='inline'` and types that point to other database tables are not
    allowed.

..  versionchanged:: 13.0

    Since TYPO3 13.0, :php:`type='select'` (if using
    :php:`foreign_table`) is not allowed and will raise an exception.
    Note this only applies to FlexForm sections, not general
    FlexForm usage. For details and migration see
    :ref:`Breaking: #102970 - No database relations in FlexForm container sections <changelog:breaking-102970-1706447911>`.

There are 2 types of elements in a FlexForm XML file - array elements and value
elements:


..  _columns-flex-tceforms-array:

Array Elements
==============

..  _columns-flex-tceforms-array-meta:

<meta>
------

:aspect:`Element`
    <meta>
    Contains definitions of how languages are handled in the form.

..  _columns-flex-tceforms-array-application-tag:

<[application tag]>
-------------------

:aspect:`Element`
    The same as ['columns']['field name']['config'] for a field in TCA.

..  _columns-flex-tceforms-array-root-tceforms:

<ROOT>
------

:aspect:`Element`
    Sections in FlexForms are called sheets. Each sheet has a <ROOT> element. The
    <ROOT> element contains the following child (value) elements:

    Child elements
        <sheetTitle>

        <sheetDescription>

        <sheetShortDescr>


..  _columns-flex-tceforms-value:

Value Elements
==============

..  _columns-flex-tceforms-value-sheettitle:

<sheetTitle>
------------

:aspect:`Element`
    <sheetTitle>

:aspect:`Format`
    string or LLL reference with the title of the sheet.

..  _columns-flex-tceforms-value-sheetdescription:

<sheetDescription>
------------------

:aspect:`Element`
    <sheetDescription>

:aspect:`Format`
    string or LLL reference
    with a description of the sheet shown in the FlexForm.

..  _columns-flex-tceforms-value-sheetshortdescr:

<sheetShortDescr>
-----------------

:aspect:`Element`
    <sheetShortDescr>

:aspect:`Format`
    string or LLL reference
    with a description of the sheet. The description is used in the tab-menu.


..  _columns-flex-sheets:

Sheets and FlexForms saved in the database
==========================================

FlexForms consist of sheets. If there is only one sheet, the sheet element will
be "sDEF" by default and there is no tab-menu. The tab-menu only exists if there
is more than one sheet.


..  _columns-flex-data-format:

FlexForm data format, <T3FlexForms>
===================================

The structure of the XML is as follows:

..  _columns-flex-data-format-array:

..  _columns-flex-data-format-array-t3flexforms:

<T3FlexForms>
-------------

:aspect:`Element`
    <T3FlexForms>
    Document tag

    Child elements
        <meta>

        <data>

..  _columns-flex-data-format-array-meta:

<meta>
------

:aspect:`Element`
    <meta>
    Meta data about the content, for example, information about which sheet is active.

..  _columns-flex-data-format-array-data:

<data>
------

:aspect:`Element`
    <data>
    Contains the main data: sheets, language sections, fields and values.

    Child elements
         <sheet>

..  _columns-flex-data-format-array-sheet:

<sheets>
--------

:aspect:`Element`
    <sheets>
    Contains the data for each sheet (section) in the form. If there are no sheets,
    only a default sheet "<sDEF>" exists.

    Child elements
        <sDEF>

        <s\_[sheet keys]>

..  _columns-flex-data-format-array-sdef:

<sDEF>
""""""

:aspect:`Element`
    <sDEF>
    Each sheet contains elements for each language. The only child tag is the <lDEF> tag.

    Child elements
        <lDEF>

..  _columns-flex-data-format-array-ldef:

<lDEF>
------

:aspect:`Element`
    <lDEF>
    Contains field content in each language.

    Child elements
        <[field name]>

..  _columns-flex-data-format-array-field-name:

<[field name]>
--------------

:aspect:`Element`
    <[field name]>
    There is at least one element with the value <vDEF> for each field.

    Child elements
        <vDEF>


..  _columns-flex-data-format-value:

..  _columns-flex-data-format-value-vdef:

<vDEF>
------

:aspect:`Element`
    <vDEF>

:aspect:`Format`
    string
    Default or localized field content.
