.. include:: /Includes.rst.txt
.. _columns-flex-facts:

===============
FlexForm syntax
===============

.. note::
    This section is still messy, should be merged with the section from :ref:`Core API <t3coreapi:t3ds>`
    and :ref:`t3coreapi:flexforms` and should be much easier to understand.

FlexForms create a form-in-a-form. The content coming from this form
is still stored in the associated database field - but as an XML
structure, stored by :code:`\TYPO3\CMS\Core\Utility\GeneralUtility::xml2array()`.

The "TCA" information needed to generate the FlexForm fields are found
inside a <T3DataStructure> XML document. When you configure a FlexForm
field in a Data Structure (DS) you can use basically all column types
documented here for TCA. The limitations are:

-  "unique" and "uniqueInPid" evaluation is not available

-  You cannot nest FlexForm configurations inside of FlexForms.

-  You cannot add, change or remove fields in FlexForms without copying the data structure and changing the configuration accordingly.

-  Charset follows that of the current backend UTF-8. When storing FlexForm information in external files,
   make sure that they are using UTF-8 too.

-  :php:`type='inline'` and other type's that point to different tables are not allowed in flex form section containers.

.. _columns-flex-tceforms:

For FlexForms the DS is extended with a tag, "<TCEforms>" which define all settings specific to the FlexForms usage.
Also a few meta tag features are used.

The tables below documents the extension elements:


.. _columns-flex-tceforms-array:

Array Elements
==============

.. _columns-flex-tceforms-array-meta:

<meta>
------

:aspect:`Element`
    <meta>
    Can contain application specific meta settings. For FlexForms this means a definition of how languages
    are handled in the form.

.. _columns-flex-tceforms-array-application-tag:

<[application tag]>
-------------------

:aspect:`Element`
    <TCEforms>
    A direct reflection of a ['columns']['field name']['config'] PHP array configuring a field in TCA. As XML,
    this is expressed by array2xml()'s output.

.. _columns-flex-tceforms-array-root-tceforms:

<ROOT><TCEforms>
----------------

:aspect:`Element`
    <ROOT><TCEforms>
    For <ROOT> elements in the DS you can add application specific information about the
    sheet that the <ROOT> element represents.

   Child elements
         <sheetTitle>

         <sheetDescription>

         <sheetShortDescr>


.. _columns-flex-tceforms-value:

Value Elements
==============

.. _columns-flex-tceforms-value-sheettitle:

<sheetTitle>
------------

:aspect:`Element`
    <sheetTitle>

:aspect:`Format`
    string or LLL reference
    Specifies the title of the sheet.

.. _columns-flex-tceforms-value-sheetdescription:

<sheetDescription>
------------------

:aspect:`Element`
    <sheetDescription>

:aspect:`Format`
    string or LLL reference
    Specifies a description for the sheet shown in the flexform.

.. _columns-flex-tceforms-value-sheetshortdescr:

<sheetShortDescr>
-----------------

:aspect:`Element`
    <sheetShortDescr>

:aspect:`Format`
    string or LLL reference
    Specifies a short description of the sheet used in the tab-menu.


.. _columns-flex-sheets:

Sheets and FlexForms
====================

FlexForms always resolve sheet definitions in a Data Structure. If only one sheet is defined that must be
the "sDEF" sheet (default). In that case no tab-menu for sheets will appear (see examples below).


.. _columns-flex-data-format:

FlexForm data format, <T3FlexForms>
===================================

When saving FlexForm elements the content is stored as XML using
:code:`\TYPO3\CMS\Core\Utility\GeneralUtility::array2xml()` to convert the internal PHP array to XML
format. The structure is as follows:


.. _columns-flex-data-format-array:

.. _columns-flex-data-format-array-t3flexforms:

<T3FlexForms>
-------------

:aspect:`Element`
    <T3FlexForms>
    Document tag

    Child elements
        <meta>

        <data>

.. _columns-flex-data-format-array-meta:

<meta>
------

:aspect:`Element`
    <meta>
    Meta data for the content. For instance information about which sheet is active etc.

.. _columns-flex-data-format-array-data:

<data>
------

:aspect:`Element`
    <data>
    Contains the data: sheets, language sections, field and values

    Child elements
         <sheet>

.. _columns-flex-data-format-array-sheet:

<sheets>
--------

:aspect:`Element`
    <sheets>
    Contains the data for each sheet in the form. If there are no sheets, the default sheet "<sDEF>" is always used.

    Child elements
        <sDEF>

        <s\_[sheet keys]>

.. _columns-flex-data-format-array-sdef:

<sDEF>
""""""

:aspect:`Element`
    <sDEF>
    For each sheet it contains elements for each language. only the <lDEF> tag is used.

    Child elements
        <lDEF>

.. _columns-flex-data-format-array-ldef:

<lDEF>
------

:aspect:`Element`
    <lDEF>
    For each language the fields in the form will be available on this level.

    Child elements
        <[field name]>

.. _columns-flex-data-format-array-field-name:

<[field name]>
--------------

:aspect:`Element`
    <[field name]>
    For each field name there is at least one element with the value, <vDEF>.

   Child elements
         <vDEF>


.. _columns-flex-data-format-value:

.. _columns-flex-data-format-value-vdef:

<vDEF>
------

:aspect:`Element`
    <vDEF>

:aspect:`Format`
    string
    Content of the field in default or localized versions.

