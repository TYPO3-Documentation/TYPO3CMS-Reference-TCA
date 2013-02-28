.. ==================================================
.. FOR YOUR INFORMATION
.. --------------------------------------------------
.. -*- coding: utf-8 -*- with BOM.

.. include:: ../../Includes.txt
.. include:: Images.txt


.. _types:

['types'] section
^^^^^^^^^^^^^^^^^

You have to add *at least* one entry in the "types"-configuration
before any of the configured fields from the ['columns'] section will
show up in TCEforms.


.. _types-required:

Required configuration
""""""""""""""""""""""

Let's take the internal notes (sys\_note) as an example. The input
form looks like this:

|img-53| It corresponds to the following “types” configuration::

   'types' => array(
           '0' => array('showitem' => 'category;;;;2-2-2, author, email, personal, subject;;;;3-3-3, message')
   )

The key "showitem" lists the order in which to define the fields:
"category, author, email, personal, subject, message".


.. _types-optional:

Optional possibilities
""""""""""""""""""""""

The power of the "types"-configuration becomes clear when you want the
form composition of a record to depend on a value from the record.
Let's look at the “dummy” table from the “examples” extension. The
“ctrl” section of its TCA looks like this::

   $TCA['tx_examples_dummy'] = array(
           'ctrl' => array(
                   'title'     => 'LLL:EXT:examples/locallang_db.xml:tx_examples_dummy',
                   'label'     => 'title',
                   'tstamp'    => 'tstamp',
                   'crdate'    => 'crdate',
                   'cruser_id' => 'cruser_id',
                   'type'       => 'record_type',
                   'default_sortby' => 'ORDER BY title',
                   'delete' => 'deleted',
                   'enablecolumns' => array(
                           'disabled' => 'hidden',
                   ),
                   'iconfile'          => t3lib_extMgm::extRelPath($_EXTKEY) . 'icon_tx_examples_dummy.gif',
           )
   );

The line in bold indicates that the field called “record\_type” will
used to indicate the “type” of any given record of the table. Let's
look at how this field is defined::

   'record_type' => array(
           'exclude' => 0,
           'label' => 'LLL:EXT:examples/locallang_db.xml:tx_examples_dummy.record_type',
           'config' => array(
                   'type' => 'select',
                   'items' => array(
                           array('LLL:EXT:examples/locallang_db.xml:tx_examples_dummy.record_type.0', 0),
                           array('LLL:EXT:examples/locallang_db.xml:tx_examples_dummy.record_type.1', 1),
                           array('LLL:EXT:examples/locallang_db.xml:tx_examples_dummy.record_type.2', 2),
                   )
           )
   ),

There's nothing unusual here. It's a pretty straightforward select
field, with three options. Finally, in the “types” section, we defined
what fields should appear and in what order for every value of the
“type” field::

   'types' => array(
           '0' => array('showitem' => 'hidden, record_type, title, some_date '),
           '1' => array('showitem' => 'record_type, title '),
           '2' => array('showitem' => 'title, some_date, hidden, record_type '),
   ),

The result if the following display when type “Normal” is chosen:

|img-54| Changing to type “Short” reloads the form and displays the following:

|img-55| |img-56| And finally, type “Weird” also shows all fields, but in a different
order:


.. _types-default:

Default values
""""""""""""""

If no "type" field is defined the type value will default to "0"
(zero). If the type value (coming from a field or being zero by
default) does not point to a defined index in the
"types"-configuration, the configuration for key "1" will be used by
default.

**Notice:** You must not show the same field more than once in the
editing form. If you do, the field will not detect the value properly.


.. ### BEGIN~OF~TABLE ###


.. container:: table-row

   Key
         showitem

   Datatype
         string

         (list of field configuration sets)

   Description
         **Required.**

         Configuration of the displayed order of fields in TCEforms.

         The whole string is divided by tokens according to a - unfortunately -
         complex ruleset.

         - #1: Overall the value is divided by a "comma" ( , ). Each part
           represents the configuration for a single field.

         - #2: Each of the field configurations is further divided by a semi-
           colon ( ; ). Each part of this division has a special significance.

           - Part 1: Field name reference ( **Required!** )

           - Part 2: Alternative field label (string or LLL reference)

           - Part 3: Palette number (referring to an entry in the "palettes"
             section).

           - Part 4: Special configuration (split by colon ( : )), e.g. 'nowrap'
             and 'richtext[ *(list of keys or \*)* ]' (see “Additional $TCA
             features”)

           - Part 5: Form style codes (see “Visual style of TCEforms”)

         Notice: Instead of a real field name you can insert "--div--" and you
         should have a divider line shown. However this is not rendered by
         default. If you set the dividers2tabsoption (see ['ctrl'] section),
         each –div-- will define a new tab. Furthermore using a value "newline"
         for Part 3, will start a newline with this tab.

         **Example:** ::

            'types' => array(
                    '0' => array('showitem' => 'hidden;;;;1-1-1, title;;;;2-2-2, poem, filename;;;;3-3-3, season;;;;4-4-4, weirdness, color, --div--;LLL:EXT:examples/locallang_db.xml:tx_examples_haiku.images, image1, image2, image3, image4, image5'),
            ),

         Another special field name, '--palette--', will insert a link to a
         palette (of course you need to specify a palette and title then...)


.. container:: table-row

   Key
         subtype\_value\_field

   Datatype
         string

         (field name)

   Description
         Field name, which holds a value being a key in the
         'subtypes\_excludelist' array. This is used to specify a secondary
         level of 'types' - basically hiding certain fields of those found in
         the types-configuration, based on the value of another field in the
         row.

         **Example (from sysext/cms/tbl\_tt\_content.php):** ::

            'subtype_value_field' => 'list_type',
            'subtypes_excludelist' => array(
                    '3' => 'layout',
                    '2' => 'layout',
                    '5' => 'layout',
                    ...
                    '21' => 'layout'
            ),


.. container:: table-row

   Key
         subtypes\_excludelist

   Datatype
         array

   Description
         See "subtype\_value\_field".

         **Syntax:**

         “[field value]” => “[comma-separated list of fields (from the main
         types-config) which are excluded]”


.. container:: table-row

   Key
         subtypes\_addlist

   Datatype
         array

   Description
         A list of fields to add when the "subtype\_value\_field" matches a key
         in this array.

         See "subtype\_value\_field".

         **Syntax:**

         “[value]” => “[ comma-separated list of fields which are added]

         **Notice:** that any transformation configuration used by TCE will NOT
         work because that configuration is visible for the TCEforms class only
         during the drawing of fields. In other words any configuration in this
         list of fields will work for display only.”


.. container:: table-row

   Key
         bitmask\_value\_field

   Datatype
         string

         (field name)

   Description
         Field name, which holds a value being the integer (bit-mask) for the
         'bitmask\_excludelist\_bits' array.

         It works much like 'subtype\_value\_field' but excludes fields based
         on whether a bit from the value field is set or not. See
         'bitmask\_excludelist\_bits';

         [+/-] indicates whether the bit [bit-number] is set or not.

         **Example:** ::

            'bitmask_value_field' => 'active',
            'bitmask_excludelist_bits' => array(
                '-0' => 'tmpl_a_subpart_marker,tmpl_a_description',
                '-1' => 'tmpl_b_subpart_marker,tmpl_b_description',
                '-2' => 'tmpl_c_subpart_marker,tmpl_c_description'
            )


.. container:: table-row

   Key
         bitmask\_excludelist\_bits

   Datatype
         array

   Description
         See "bitmask\_value\_field"

         “[+/-][bit-number]” => “[comma-separated list of fields (from the main
         types-config) excluded]”


.. ###### END~OF~TABLE ######

