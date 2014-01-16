.. ==================================================
.. FOR YOUR INFORMATION
.. --------------------------------------------------
.. -*- coding: utf-8 -*- with BOM.

.. include:: ../../Includes.txt


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

.. figure:: ../../Images/TypesSysNote.png
   :alt: The internal note input form

   The internal note form showing four input fields

It corresponds to the following "types" configuration::

   'types' => array(
		'0' => array('showitem' => 'category;;;;2-2-2, personal, subject;;;;3-3-3, message')
   )

The key "showitem" lists the order in which to define the fields:
"category, personal, subject, message".


.. _types-optional:

Optional possibilities
""""""""""""""""""""""

The power of the "types"-configuration becomes clear when you want the
form composition of a record to depend on a value from the record.
Let's look at the "dummy" table from the "examples" extension. The
"ctrl" section of its TCA looks like this::

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

The line in bold indicates that the field called "record\_type" will
used to indicate the "type" of any given record of the table. Let's
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
field, with three options. Finally, in the "types" section, we defined
what fields should appear and in what order for every value of the
"type" field::

   'types' => array(
           '0' => array('showitem' => 'hidden, record_type, title, some_date '),
           '1' => array('showitem' => 'record_type, title '),
           '2' => array('showitem' => 'title, some_date, hidden, record_type '),
   ),

The result if the following display when type "Normal" is chosen:

.. figure:: ../../Images/TypesDummyNormal.png
   :alt: The "normal" layout of dummy records

   The "normal" layout of dummy records

Changing to type "Short" reloads the form and displays the following:

.. figure:: ../../Images/TypesDummyShort.png
   :alt: The "short" layout of dummy records

   The "short" layout displays less fields

And finally, type "Weird" also shows all fields, but in a different
order:

.. figure:: ../../Images/TypesDummyWeird.png
   :alt: The "weird" layout of dummy records

   The "weird" layout displays the fields in a totally different order


.. _types-default:

Default values
""""""""""""""

If no "type" field is defined the type value will default to "0"
(zero). If the type value (coming from a field or being zero by
default) does not point to a defined index in the
"types"-configuration, the configuration for key "1" will be used by
default.

.. warning::

   You must not show the same field more than once in the
   editing form. If you do, the field will not detect the value properly.


.. only:: html

   .. contents::
      :local:
      :depth: 1


.. _types-properties:

Properties
""""""""""

.. container:: ts-properties

   ============================= =========
   Property                      Data Type
   ============================= =========
   `bitmask\_value\_field`_      string
   `bitmask\_excludelist\_bits`_ string
   `showitem`_                   string
   `subtype\_value\_field`_      string
   `subtypes\_excludelist`_      string
   `subtypes\_addlist`_          string
   ============================= =========

Property details
""""""""""""""""

.. only:: html

   .. contents::
      :local:
      :depth: 1


.. _types-properties-showitem:

showitem
~~~~~~~~

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
             and 'richtext[ *(list of keys or \*)* ]' (see "Additional $TCA
             features")

           - Part 5: Form style codes (see "Visual style of TCEforms")

         .. note::

            Instead of a real field name you can insert :code:`--div--` and you
            should have a divider line shown. However this is not rendered by
            default. If you set the dividers2tabs option (see ['ctrl'] section),
            each :code:`--div--` will define a new tab. Furthermore using value
            :code:`--newline--` for Part 3, will start a newline with this tab.

         **Example:**

         .. code-block:: php

            'types' => array(
                    '0' => array('showitem' => 'hidden;;;;1-1-1, title;;;;2-2-2, poem, filename;;;;3-3-3, season;;;;4-4-4, weirdness, color, --div--;LLL:EXT:examples/locallang_db.xml:tx_examples_haiku.images, image1, image2, image3, image4, image5'),
            ),

         Another special field name, :code:`--palette--`, will insert a link to a
         :ref:`palette <palettes>` (of course you need to specify a palette and title then...)



.. _types-properties-subtype-value-field:

subtype\_value\_field
~~~~~~~~~~~~~~~~~~~~~

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

         **Example (from typo3/sysext/frontend/Configuration/TCA/tt_content.php):**

         .. code-block:: php

            'subtype_value_field' => 'list_type',
            'subtypes_excludelist' => array(
                    '3' => 'layout',
                    '2' => 'layout',
                    '5' => 'layout',
                    ...
                    '21' => 'layout'
            ),



.. _types-properties-subtypes-excludelist:

subtypes\_excludelist
~~~~~~~~~~~~~~~~~~~~~

.. container:: table-row

   Key
         subtypes\_excludelist

   Datatype
         array

   Description
         See :ref:`types-properties-subtype-value-field`.

         **Syntax:**

         "[field value]" => "[comma-separated list of fields (from the main
         types-config) which are excluded]"



.. _types-properties-subtypes-addlist:

subtypes\_addlist
~~~~~~~~~~~~~~~~~

.. container:: table-row

   Key
         subtypes\_addlist

   Datatype
         array

   Description
         A list of fields to add when the "subtype\_value\_field" matches a key
         in this array.

         See :ref:`types-properties-subtype-value-field`.

         **Syntax:**

         "[value]" => "[comma-separated list of fields which are added]"



.. _types-properties-bitmask-value-field:

bitmask\_value\_field
~~~~~~~~~~~~~~~~~~~~~

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



.. _types-properties-bitmask-excludelist-bits:

bitmask\_excludelist\_bits
~~~~~~~~~~~~~~~~~~~~~~~~~~

.. container:: table-row

   Key
         bitmask\_excludelist\_bits

   Datatype
         array

   Description
         See "bitmask\_value\_field"

         "[+/-][bit-number]" => "[comma-separated list of fields (from the main
         types-config) excluded]"
