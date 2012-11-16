.. ==================================================
.. FOR YOUR INFORMATION
.. --------------------------------------------------
.. -*- coding: utf-8 -*- with BOM.

.. include:: ../../../Includes.txt
.. include:: Images.txt


.. _columns-flex:

TYPE: "flex"
^^^^^^^^^^^^

Rendering a FlexForm element - essentially this consists in a
hierarchically organized set of fields which will have their values
saved into a single field in the database, stored as XML.


.. ### BEGIN~OF~TABLE ###

.. container:: table-row

   Key
         Key

   Datatype
         Datatype

   Description
         Description


.. container:: table-row

   Key
         type

   Datatype
         string

   Description
         *[Must be set to "flex"]*


.. container:: table-row

   Key
         ds\_pointerField

   Datatype
         string

   Description
         Field name(s) in the record which point to the field where the key for
         “ds” is found. Up to two field names can be specified comma separated.


.. container:: table-row

   Key
         ds

   Datatype
         array

   Description
         Data Structure(s) defined in an array.

         Each key is a value that can be pointed to by “ds\_pointerField”.
         Default key is “default” which is what you should use if you do not
         have a “ds\_pointerField” value of course.

         If you specified more than one ds\_pointerField, the keys in this “ds”
         array should contain comma-separated value pairs where the asterisk \*
         matches all values (see the example below). If you don't need to
         switch for the second ds\_pointerField, it's also possible to use only
         the first ds\_pointerField's value as a key in the "ds" array without
         necessarily suffixing it with ",\*" for a catch-all on the second
         ds\_pointerField.

         For each value in the array there are two options:

         - Either enter XML directly

         - Make a reference to an external XML file

         **Example with XML directly entered:** ::

            'config' => array(
                'type' => 'flex',
                'ds_pointerField' => 'list_type',
                'ds' => array(
                    'default' => '
                        <T3DataStructure>
                          <ROOT>
                            <type>array</type>
                            <el>
                              <xmlTitle>
                                <TCEforms>
                                    <label>The Title:</label>
                                    <config>
                                        <type>input</type>
                                        <size>48</size>
                                    </config>
                                </TCEforms>
                              </xmlTitle>
                            </el>
                          </ROOT>
                        </T3DataStructure>
                    ',
                )
            )

         **Example with XML in external file:**

         (File reference is relative) ::

            'config' => array(
                'type' => 'flex',
                'ds_pointerField' => 'list_type',
                'ds' => array(
                    'default' => 'FILE:EXT:mininews/flexform_ds.xml',
                )
            )

         **Example using two ds\_pointerFields** (as used for
         tt\_content.pi\_flexform since TYPO3 4.2.0)::

            'config' => array(
                'type' => 'flex',
                'ds_pointerField' => 'list_type,CType',
                'ds' => array(
                    'default' => 'FILE:...',
                    'tt_address_pi1,list' => 'FILE:EXT:tt_address/pi1/flexform.xml', // DS for list_type=tt_address_pi1 and CType=list
                    '*,table' => 'FILE:EXT:css_styled_content/flexform_ds.xml', // DS for CType=table, no matter which list_type value
                    'tx_myext_pi1' => 'FILE:EXT:myext/flexform.xml', // DS for list_type=tx_myext_pi1 without specifying a CType at all
                )
            )


.. container:: table-row

   Key
         ds\_tableField

   Datatype
         string

   Description
         Contains the value “[table]:[field name]” from which to fetch Data
         Structure XML.

         “ds\_pointerField” is in this case the pointer which should contain
         the uid of a record from that table.

         This is used by TemplaVoila extension for instance where a field in
         the tt\_content table points to a TemplaVoila Data Structure record::

            'tx_templavoila_flex' => array(
                'exclude' => 1,
                'label' => '...',
                'displayCond' => 'FIELD:tx_templavoila_ds:REQ:true',
                'config' => array(
                    'type' => 'flex',
                    'ds_pointerField' => 'tx_templavoila_ds',
                    'ds_tableField' => 'tx_templavoila_datastructure:dataprot',
                )
            ),


.. container:: table-row

   Key
         ds\_pointerField\_searchParent

   Datatype
         string

   Description
         Used to search for Data Structure recursively back in the table
         assuming that the table is a tree table. This value points to the
         “pid” field.

         See “templavoila” for example - uses this for the Page Template.


.. container:: table-row

   Key
         ds\_pointerField\_searchParent\_subField

   Datatype
         string

   Description
         Points to a field in the “rootline” which may contain a pointer to the
         “next-level” template.

         See “templavoila” for example - uses this for the Page Template.


.. ###### END~OF~TABLE ######


Pointing to a Data Structure
""""""""""""""""""""""""""""

Basically the configuration for a FlexForm field is all about pointing
to the Data Structure which will contain form rendering information in
the application specific tag “<TCEforms>”.

For general information about the backbone of a Data Structure, please
see the <T3DataStructure> chapter in the Data Formats section.


FlexForm facts
""""""""""""""

FlexForms create a form-in-a-form. The content coming from this form
is still stored in the associated database field - but as an XML
structure (stored by t3lib\_div::array2xml())!

The “TCA” information needed to generate the FlexForm fields are found
inside a <T3DataStructure> XML document. When you configure a FlexForm
field in a Data Structure (DS) you can use basically all column types
documented here for TCA. The limitations are:

- “unique” and “uniqueInPid” evaluation is not available

- You cannot nest FlexForm configurations inside of FlexForms.

- Charset follows that of the current backend (since TYPO3 4.7, the only
  accepted character encoding is UTF-8. When storing FlexForm
  information in external files, make sure that they are using UTF-8
  too).


<T3DataStructure> extensions for “<TCEforms>”
"""""""""""""""""""""""""""""""""""""""""""""

For FlexForms the DS is extended with a tag, “<TCEforms>” which define
all settings specific to the FlexForms usage.

Also a few meta tag features are used.

Sometimes it may be necessary to reload flexform if content of the
field in the flexform is changed. This is accomplished by adding
“<onChange>reload</onChange>”inside <TCEforms>. A typical example for
that is a field that defines operational modes for an extension. When
the mode changes, a flexform may need to show a new set of fields. By
combining the <onChange> tag for mode fields with <displayCond> tag
for other fields, it is possible to create truly dynamic flexforms.

Notice that changing the mode does not delete hidden field values of
the flexform. Always use the “mode” field to determine which
parameters to use.

The tables below document the extension elements:

“Array” Elements:


.. ### BEGIN~OF~TABLE ###

.. container:: table-row

   Element
         Element

   Description
         Description

   Child elements
         Child elements


.. container:: table-row

   Element
         <meta>

   Description
         Can contain application specific meta settings. For FlexForms this
         means a definition of how languages are handled in the form.

   Child elements
         <langChildren>

         <langDisable>


.. container:: table-row

   Element
         <[application tag]>

   Description
         In this case the application tag is “<TCEforms>”

   Child elements
         *A direct reflection of a ['columns']['field name']['config'] PHP
         array configuring a field in TCA. As XML this is expressed by
         array2xml()'s output. See example below.*


.. container:: table-row

   Element
         <ROOT><TCEforms>

   Description
         For <ROOT> elements in the DS you can add application specific
         information about the sheet that the <ROOT> element represents.

   Child elements
         <sheetTitle>

         <sheetDescription>

         <sheetShortDescr>


.. ###### END~OF~TABLE ######


“Value” Elements:


.. ### BEGIN~OF~TABLE ###

.. container:: table-row

   Element
         Element

   Format
         Format

   Description
         Description


.. container:: table-row

   Element
         <langDisable>

   Format
         boolean, 0/1

   Description
         If set, then handling of localizations is disabled. Otherwise
         FlexForms will allow editing of additional languages than the default
         according to “sys\_languages” table contents.

         The language you can select from is the language configured in
         “sys\_languages” but they  *must* have ISO country codes set - see
         example below.


.. container:: table-row

   Element
         <langChildren>

   Format
         boolean, 0/1

   Description
         If set, then localizations are bound to the default values 1-1
         (“value” level). Otherwise localizations are handled on “structure
         level”


.. container:: table-row

   Element
         <sheetTitle>

   Format
         string or LLL reference

   Description
         Specifies the title of the sheet.


.. container:: table-row

   Element
         <sheetDescription>

   Format
         string or LLL reference

   Description
         Specifies a description for the sheet shown in the flexform.


.. container:: table-row

   Element
         <sheetShortDescr>

   Format
         string or LLL reference

   Description
         Specifies a short description of the sheet used in the tab-menu.


.. ###### END~OF~TABLE ######


Sheets and FlexForms
""""""""""""""""""""

FlexForms always resolve sheet definitions in a Data Structure. If
only one sheet is defined that must be the “sDEF” sheet (default). In
that case no tab-menu for sheets will appear (see examples below).


FlexForm data format, <T3FlexForms>
"""""""""""""""""""""""""""""""""""

When saving FlexForm elements the content is stored as XML using
t3lib\_div::array2xml() to convert the internal PHP array to XML
format. The structure is as follows:

“Array” Elements:


.. ### BEGIN~OF~TABLE ###

.. container:: table-row

   Element
         Element

   Description
         Description

   Child elements
         Child elements


.. container:: table-row

   Element
         <T3FlexForms>

   Description
         Document tag

   Child elements
         <meta>

         <data>


.. container:: table-row

   Element
         <meta>

   Description
         Meta data for the content. For instance information about which sheet
         is active etc.

   Child elements
         <currentSheetId>

         <currentLangId>


.. container:: table-row

   Element
         <data>

   Description
         Contains the data; sheets, language sections, field and values

   Child elements
         <sheet>


.. container:: table-row

   Element
         <sheet>

   Description
         Contains the data for each sheet in the form. If there are no sheets,
         the default sheet “<sDEF>” is always used.

   Child elements
         <sDEF>

         <s\_[sheet keys]>


.. container:: table-row

   Element
         <sDEF>

         <[sheet keys]>

   Description
         For each sheet it contains elements for each language. If
         <meta><langChildren> is false then all languages are stored on this
         level, otherwise only the <lDEF> tag is used.

   Child elements
         <lDEF>

         <l[ISO language code]>


.. container:: table-row

   Element
         <lDEF>

         <[language keys]>

   Description
         For each language the fields in the form will be available on this
         level.

   Child elements
         <[field name]>


.. container:: table-row

   Element
         <[field name]>

   Description
         For each field name there is at least one element with the value,
         <vDEF>. If <meta><langChildren> is true then there will be a <v\*> tag
         for each language holding localized values.

   Child elements
         <vDEF>

         <v[ISO language code]>


.. container:: table-row

   Element
         <currentLangId>

   Description
         Numerical array of language ISO codes + “DEF” for default which are
         currently displayed for editing.

   Child elements
         <n[0-x]>


.. ###### END~OF~TABLE ######


“Value” Elements:


.. ### BEGIN~OF~TABLE ###

.. container:: table-row

   Element
         Element

   Format
         Format

   Description
         Description


.. container:: table-row

   Element
         <vDEF>

         <v[ISO language code]>

   Format
         string

   Description
         Content of the field in default or localized versions


.. container:: table-row

   Element
         <currentSheetId>

   Format
         string

   Description
         Points to the currently shown sheet in the DS.


.. ###### END~OF~TABLE ######


Example: Simple FlexForm
~~~~~~~~~~~~~~~~~~~~~~~~

The extension “examples” provides some sample FlexForms. The “simple
FlexForm” plugin provides a very basic configuration with just a
select-type field to choose a page from the “pages” table.

|img-40| The DS used to render this field is found in the file
“flexform\_ds1.xml” inside the “examples” extension. Notice the
<TCEforms> tags::

   <T3DataStructure>
           <meta>
                   <langDisable>1</langDisable>
           </meta>
           <sheets>
                   <sDEF>
                           <ROOT>
                                   <TCEforms>
                                           <sheetTitle>LLL:EXT:examples/locallang_db.xml: examples.pi_flexform.sheetGeneral</sheetTitle>
                                   </TCEforms>
                                   <type>array</type>
                                   <el>
                                           <pageSelector>
                                                   <TCEforms>
                                                           <label>LLL:EXT:examples/locallang_db.xml: examples.pi_flexform.pageSelector</label>
                                                           <config>
                                                                   <type>select</type>
                                                                   <items type="array">
                                                                           <numIndex index="0" type="array">
                                                                                   <numIndex index="0">LLL:EXT:examples/locallang_db.xml:examples.pi_flexform.choosePage</numIndex>
                                                                                   <numIndex index="1">0</numIndex>
                                                                           </numIndex>
                                                                   </items>
                                                                   <foreign_table>pages</foreign_table>
                                                                   <foreign_table_where>ORDER BY title</foreign_table_where>
                                                                   <minitems>0</minitems>
                                                                   <maxitems>1</maxitems>
                                                           </config>
                                                   </TCEforms>
                                           </pageSelector>
                                   </el>
                           </ROOT>
                   </sDEF>
           </sheets>
   </T3DataStructure>

It's clear that the contents of <TCEforms> is a direct reflection of
the field configurations we normally set up in the $TCA array.

The Data Structure for this FlexForm is loaded in the “pi\_flexform”
field of the “tt\_content” table by adding the following to the
ext\_tables.php file of the “examples” extension::

   $TCA['tt_content']['types']['list']['subtypes_addlist'][$_EXTKEY . '_pi1'] = 'pi_flexform';
   t3lib_extMgm::addPiFlexFormValue($_EXTKEY . '_pi1', 'FILE:EXT:examples/flexform_ds1.xml');

In the first line the tt\_content field “pi\_flexform” is added to the
display of fields when the Plugin type is selected and set to
“examples\_pi1”. In the second line the DS xml file is configured to
be the source of the FlexForm DS used.

If we browse the definition for the “pi\_flexform” field in
“tt\_content” using the Admin > Configuration module, we can see the
following:

|img-41| As you can see there are quite a few extensions that have added
pointers to their Data Structures. Towards the bottom we can find the
one we have just been looking at.


Example: FlexForm with two sheets
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

In this example we create a FlexForm field with two “sheets”. Each
sheet can contain a separate FlexForm structure. We build it up on top
of the previous example, so the first sheet still has a select-type
field related to the “pages” table. In the second sheet, we add a
simple input field and a text field. ::

   <T3DataStructure>
           <meta>
                   <langDisable>1</langDisable>
           </meta>
           <sheets>
                   <sDEF>
                           <ROOT>
                                   <TCEforms>
                                           <sheetTitle>LLL:EXT:examples/locallang_db.xml: examples.pi_flexform.sheetGeneral</sheetTitle>
                                   </TCEforms>
                                   <type>array</type>
                                   <el>
                                           <pageSelector>
                                                   <TCEforms>
                                                           <label>LLL:EXT:examples/locallang_db.xml: examples.pi_flexform.pageSelector</label>
                                                           <config>
                                                                   <type>select</type>
                                                                   <items type="array">
                                                                           <numIndex index="0" type="array">
                                                                                   <numIndex index="0">LLL:EXT:examples/locallang_db.xml:examples.pi_flexform.choosePage</numIndex>
                                                                                   <numIndex index="1">0</numIndex>
                                                                           </numIndex>
                                                                   </items>
                                                                   <foreign_table>pages</foreign_table>
                                                                   <foreign_table_where>ORDER BY title</foreign_table_where>
                                                                   <minitems>0</minitems>
                                                                   <maxitems>1</maxitems>
                                                           </config>
                                                   </TCEforms>
                                           </pageSelector>
                                   </el>
                           </ROOT>
                   </sDEF>
                <s_Message>
                        <ROOT>
                                <TCEforms>
                                        <sheetTitle>LLL:EXT: examples/locallang_db.xml:examples.pi_flexform.s_Message</sheetTitle>
                                </TCEforms>
                                <type>array</type>
                                <el>
                                        <header>
                                                <TCEforms>
                                                        <label>LLL:EXT: examples/locallang_db.xml:examples.pi_flexform.header</label>
                                                        <config>
                                                                <type>input</type>
                                                                <size>30</size>
                                                        </config>
                                                </TCEforms>
                                        </header>
                                        <message>
                                                <TCEforms>
                                                        <label>LLL:EXT: examples/locallang_db.xml:examples.pi_flexform.message</label>
                                                        <config>
                                                                <type>text</type>
                                                                <cols>40</cols>
                                                                <rows>5</rows>
                                                        </config>
                                                </TCEforms>
                                        </message>
                                </el>
                        </ROOT>
                </s_Message>
           </sheets>
   </T3DataStructure>

The part that is different from the first Data Structure is
highlighted in bold. The result from this configuration is a form
which looks like this:

|img-42| This looks very much like the first example, but notice the second
tab. Clicking on “Message”, we can access the second sheet which shows
some other fields:

|img-43| |img-44| If you look at the XML stored in the database field “pi\_flexform”
this is how it looks::

   <?xml version="1.0" encoding="utf-8" standalone="yes" ?>
   <T3FlexForms>
       <data>
           <sheet index="sDEF">
               <language index="lDEF">
                   <field index="pageSelector">
                       <value index="vDEF">9</value>
                   </field>
               </language>
           </sheet>
           <sheet index="s_Message">
               <language index="lDEF">
                   <field index="header">
                       <value index="vDEF">My Header</value>
                   </field>
                   <field index="message">
                       <value index="vDEF">And my message.

   On several lines.</value>
                   </field>
               </language>
           </sheet>
       </data>
   </T3FlexForms>

Notice how the data of the two sheets are separated (sheet names
highlighted in bold above).


Example: Rich Text Editor in FlexForms
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

Creating a RTE in FlexForms is done by adding “defaultExtras” content
to the <TCEforms> tag::

   <TCEforms>
           <config>
                   <type>text</type>
                   <cols>48</cols>
                   <rows>5</rows>
           </config>
           <label>Subtitle</label>
           <defaultExtras>richtext[*]:rte_transform[mode=ts_css]</defaultExtras>
   </TCEforms>


Handling languages in FlexForms
"""""""""""""""""""""""""""""""

FlexForms allows you to handle translations of content in two ways.
But before you can enable those features you have to install the
extension “static\_info\_tables” which contains country names and ISO-
language codes which are the ones by which FlexForms stores localized
content:

|img-45| Then you must configure languages in the database:

|img-46| And finally, you have to make sure that each of these languages points
to the right ISO code:

|img-47| By default, you will not see any changes. Indeed if you look at the
example XML displayed above, you will notice the following line, at
the top, in the “meta” section::

   <langDisable>1</langDisable>

This means that translation of the FlexForm is disabled. In the
example above, the FlexForm is part of a content element. That content
element can still be translated as usual. What we're going to look at
below is how a FlexForm field may end up containing its own
translations. There are two methods for this.


Localization method #1
~~~~~~~~~~~~~~~~~~~~~~

The first localization method just requires to change the
“langDisable” flag mentioned above to 0::

   <langDisable>0</langDisable>

This means that translations are now allowed for that FlexForm. This
is how it looks like:

|img-48| The data XML in the data base looks like this::

   <?xml version="1.0" encoding="utf-8" standalone="yes" ?>
   <T3FlexForms>
       <data>
           <sheet index="sDEF">
               <language index="lDEF">
                   <field index="pageSelector">
                       <value index="vDEF">9</value>
                   </field>
               </language>
               <language index="lDE">
                   <field index="pageSelector">
                       <value index="vDEF"></value>
                   </field>
               </language>
               <language index="lEN">
                   <field index="pageSelector">
                       <value index="vDEF"></value>
                   </field>
               </language>
           </sheet>
           <sheet index="s_Message">
               <language index="lDEF">
                   <field index="header">
                       <value index="vDEF">My Header</value>
                   </field>
                   <field index="message">
                       <value index="vDEF">And my message.

   On several lines.</value>
                   </field>
               </language>
               <language index="lDE">
                   <field index="header">
                       <value index="vDEF">Hallo!</value>
                   </field>
                   <field index="message">
                       <value index="vDEF">Das is auf Deutsch!</value>
                   </field>
               </language>
               <language index="lEN">
                   <field index="header">
                       <value index="vDEF"></value>
                   </field>
                   <field index="message">
                       <value index="vDEF"></value>
                   </field>
               </language>
           </sheet>
       </data>
   </T3FlexForms>

Note how each language is stored separately at a level above the
“field” level. Each language tag carries an attribute identifying the
language like “lDE” or “lEN”.


Localization method #2
~~~~~~~~~~~~~~~~~~~~~~

In the first method of localization each language can potentially
contain a differently structured data set. This is possible because as
soon as a DS defines sections with array objects inside the number of
objects can be individual!

The second method of localization handles each language on the
*value* level instead, thus requiring a translation for each and every
field in the default language! You enable this by setting the
“langChildren” tag to “1” in the “meta” section::

   <meta>
           <langDisable>0</langDisable>
           <langChildren>1</langChildren>
   </meta>

The editing form will now look like this:

|img-49| You can see how all translation fields for the “Header” are grouped
together with the default header. Likewise for the “Message” field.

The difference is also seen in the <T3FlexForms> content::

   <?xml version="1.0" encoding="utf-8" standalone="yes" ?>
   <T3FlexForms>
       <data>
           <sheet index="sDEF">
               <language index="lDEF">
                   <field index="pageSelector">
                       <value index="vDEF"></value>
                       <value index="vDE"></value>
                       <value index="vEN"></value>
                       <value index="vDE.vDEFbase"></value>
                       <value index="vEN.vDEFbase"></value>
                   </field>
               </language>
           </sheet>
           <sheet index="s_Message">
               <language index="lDEF">
                   <field index="header">
                       <value index="vDEF">My header</value>
                       <value index="vDE">Hallo!</value>
                       <value index="vEN"></value>
                       <value index="vDE.vDEFbase">My header</value>
                       <value index="vEN.vDEFbase">My header</value>
                   </field>
                   <field index="message">
                       <value index="vDEF">And my message.

   On several lines.</value>
                       <value index="vDE">Das is auf Deutsch!</value>
                       <value index="vEN"></value>
                       <value index="vDE.vDEFbase">And my message.

   On several lines.</value>
                       <value index="vEN.vDEFbase">And my message.

   On several lines.</value>
                   </field>
               </language>
           </sheet>
       </data>
   </T3FlexForms>

In this case, there's only on “language” tag per sheet and all values
are repeated with a language index attribute to tell them apart.

The additional “value” tags with an index attribute like
“vDE.vDEFbase” are used to store the previous value that the field
contained, so that a translation diff view can be displayed:

|img-50| **NOTICE:** The two localization methods are NOT compatible! You
cannot suddenly change from the one method to the other without having
to do some conversion of the data format. That is obvious when you
look at how the two methods also require different data structures
underneath!

