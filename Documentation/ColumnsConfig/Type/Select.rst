.. include:: ../../Includes.txt

.. _columns-select:

type = 'select'
---------------

.. _columns-select-introduction:

Introduction
============

Selectors boxes are very common elements in forms. By the "select" type you can create selector boxes. In
the most simple form this is a list of values among which you can chose only one.

There are various shapes of the select type, the images below give an overview. The basic idea is that all
possible child elements are always listed. This is in contrast to the group type which lists only selected
elements and helps with selecting others via element browser and other tools.

The select type is pretty powerful, there are a lot of options to steer both rendering and database handling.


.. _columns-select-examples:

Examples
========

.. figure:: ../../Images/TypeSelectStyleguideSingle3.png
    :alt: Simple select drop down with static and database values (select_single_3)

    Simple select drop down with static and database values (select_single_3)

.. figure:: ../../Images/ColumnsExampleSelectImages.png
    :alt: Select foreign rows which have icons configured (select_single_12)

    Select foreign rows which have icons configured (select_single_12)

.. figure:: ../../Images/TypeSelectStyleguideSingle10.png
    :alt: Select a single value from a list of elements (select_single_10)

    Select a single value from a list of elements (select_single_10)

.. figure:: ../../Images/TypeSelectStyleguideSingleBox1.png
    :alt: Select multiple values from a box (select_singlebox_1)

    Select multiple values from a box (select_singlebox_1)

.. figure:: ../../Images/TypeSelectStyleguideCheckbox3.png
    :alt: Select values from a checkbox list (select_checkbox_3)

    Select values from a checkbox list (select_checkbox_3)

.. figure:: ../../Images/TypeSelectStyleguideMultipleSideBySide5.png
    :alt: Side-by-side view with filter (select_multiplesidebyside_5)

    Side-by-side view with filter (select_multiplesidebyside_5)

.. figure:: ../../Images/TypeSelectStyleguideTree1.png
    :alt: A happy little tree! (select_tree_1)

    A happy little tree! (select_tree_1)

.. code-block:: php

        'select_single_3' => [
            'label' => 'select_single_3 static values, dividers, foreign_table_where',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [
                    ['Static values', '--div--'],
                    ['static -2', -2],
                    ['static -1', -1],
                    ['DB values', '--div--'],
                ],
                'foreign_table' => 'tx_styleguide_staticdata',
                'foreign_table_where' => 'AND tx_styleguide_staticdata.value_1 LIKE \'%foo%\' ORDER BY uid',
                // @todo: docu of rootLevel says, foreign_table_where is *ignored*, which is NOT true.
                'rootLevel' => 1,
                'foreign_table_prefix' => 'A prefix: ',
            ],
        ],

.. code-block:: php

        'select_single_12' => [
            'label' => 'select_single_12 foreign_table selicon_field',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'foreign_table' => 'tx_styleguide_elements_select_single_12_foreign',
                'fieldWizard' => [
                    'selectIcons' => [
                        'disabled' => false,
                    ],
                ],
            ],
        ],

.. code-block:: php

        'select_single_10' => [
            'label' => 'select_single_10 size=6, three options',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [
                    ['foo 1', 1],
                    ['foo 2', 2],
                    ['a divider', '--div--'],
                    ['foo 3', 3],
                ],
                'size' => 6,
            ],
        ],

.. code-block:: php

        'select_singlebox_1' => [
            'label' => 'select_singlebox_1',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingleBox',
                'items' => [
                    ['foo 1', 1],
                    ['foo 2', 2],
                    ['divider', '--div--'],
                    ['foo 3', 3],
                    ['foo 4', 4],
                ],
            ],
        ],

.. code-block:: php

        'select_checkbox_3' => [
            'label' => 'select_checkbox_3 icons, description',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectCheckBox',
                'items' => [
                    ['foo 1', 1, '', 'optional description'],
                    ['foo 2', 2, 'EXT:styleguide/Resources/Public/Icons/tx_styleguide.svg', 'description'],
                    ['foo 3', 3, 'EXT:styleguide/Resources/Public/Icons/tx_styleguide.svg'],
                    ['foo 4', 4],
                ],
            ],
        ],

.. code-block:: php

        'select_multiplesidebyside_5' => [
            'label' => 'select_multiplesidebyside_5 multiSelectFilterItems, enableMultiSelectFilterTextfield=true',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectMultipleSideBySide',
                'items' => [
                    ['foo 1', 1],
                    ['foo 2', 2],
                    ['foo 3', 3],
                    ['bar', 4],
                ],
                'enableMultiSelectFilterTextfield' => true,
                'multiSelectFilterItems' => [
                    ['', ''],
                    ['foo', 'foo'],
                    ['bar', 'bar'],
                ],
            ],
        ],

.. code-block:: php

        'select_tree_1' => [
            'label' => 'select_tree_1 pages, showHeader=true, expandAll=true, size=20, order by sorting, static items',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectTree',
                'foreign_table' => 'pages',
                'foreign_table_where' => 'ORDER BY pages.sorting',
                'size' => 20,
                'items' => [
                    [ 'static from tca 4711', 4711 ],
                    [ 'static from tca 4712', 4712 ],
                ],
                'treeConfig' => [
                    'parentField' => 'pid',
                    'appearance' => [
                        'expandAll' => true,
                        'showHeader' => true,
                    ],
                ],
            ],
        ],

This setting specifies how the select field should be displayed. Available options are:

- ``selectSingle`` - Normal select field for selecting a single value.
- ``selectSingleBox`` - Normal select field for selecting multiple values.
- ``selectCheckBox`` - List of checkboxes for selecting muliple values.
- ``selectMultipleSideBySide`` - Two select fields, items can be selected from the right field, selected items are displayed in the left select.
- ``selectTree`` - A tree for selecting hierarchical data.



.. _columns-select-properties:

.. _columns-select-properties-type:

.. _columns-select-properties-items:
.. include:: ../Properties/SelectItems.rst

.. _columns-select-properties-itemsprocfunc:
.. include:: ../Properties/CommonItemsProcFunc.rst

.. _columns-select-properties-foreign-table:
.. include:: ../Properties/SelectForeignTable.rst

.. _columns-select-properties-foreign-table-where:
.. include:: ../Properties/SelectForeignTableWhere.rst

.. _columns-select-properties-foreign-table-prefix:
.. include:: ../Properties/SelectForeignTablePrefix.rst

.. _columns-select-properties-filefolder:
.. include:: ../Properties/SelectFileFolder.rst

.. _columns-select-properties-filefolder-extlist:
.. include:: ../Properties/SelectFileFolderExtList.rst

.. _columns-select-properties-filefolder-recursions:
.. include:: ../Properties/SelectFileFolderRecursions.rst

.. _columns-select-properties-allownonidvalues:
.. include:: ../Properties/SelectAllowNonIdValues.rst

.. _columns-select-properties-default:
.. include:: ../Properties/SelectDefault.rst

.. _columns-select-properties-dontremaptablesoncopy:
.. include:: ../Properties/CommonDontRemapTablesOnCopy.rst

.. _columns-select-properties-rootlevel:
.. include:: ../Properties/SelectRootLevel.rst

.. _columns-select-properties-mm:
.. include:: ../Properties/CommonMm.rst

.. _columns-select-properties-mm-opposite-field:
.. include:: ../Properties/CommonOppositeField.rst

.. _columns-select-properties-mm-match-fields:
.. include:: ../Properties/CommonMmMatchFields.rst

.. _columns-select-properties-mm-opposite-usage:
.. _columns-select-properties-mm-oppositeusage:
.. include:: ../Properties/CommonMmOppositeUsage.rst

.. _columns-select-properties-mm-insert-fields:
.. include:: ../Properties/CommonMmInsertFields.rst

.. _columns-select-properties-mm-table-where:
.. include:: ../Properties/CommonMmTableWhere.rst

.. _columns-select-properties-mm-hasuidfield:
.. include:: ../Properties/CommonMmHasUidField.rst

.. _columns-select-properties-special:
.. include:: ../Properties/SelectSpecial.rst

.. _columns-select-properties-size:
.. include:: ../Properties/CommonSize.rst

.. _columns-select-properties-itemliststyle:
.. incdule:: ../Properties/SelectItemListStyle.rst

.. _columns-select-properties-treeconfig:
.. include:: ../Properties/SelectTreeConfig.rst

.. _columns-select-properties-multiple:
.. include:: ../Properties/CommonMultiple.rst

.. _columns-select-properties-maxitems:
.. include:: ../Properties/CommonMaxitems.rst

.. _columns-select-properties-minitems:
.. include:: ../Properties/CommonMinitems.rst

.. _columns-select-properties-disablenomatchingvalueelement:
.. include:: ../Properties/SelectDisableNonMatchingValueElement.rst

.. _columns-select-properties-enablemultiselectfiltertextfield:
.. include:: ../Properties/SelectEnableMultiSelectFilterTextfield.rst

.. _columns-select-properties-multiselectfilteritems:
.. include:: ../Properties/SelectMultiSelectFilterItems.rst

.. _columns-select-properties-authmode:
.. include:: ../Properties/SelectAuthMode.rst

.. _columns-select-properties-authmode-enforce:
.. include:: ../Properties/SelectAuthModeEnforce.rst

.. _columns-select-properties-exclusivekeys:
.. include:: ../Properties/SelectExclusiveKeys.rst

.. _columns-select-properties-localizereferencesatparentlocalization:
.. include:: ../Properties/SelectLocalizeReferencesAtParentLocalization.rst



Examples
""""""""

.. _columns-select-examples-simple-markers:

Simple selector box with TSconfig markers
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

This example shows the use of markers inside the
:ref:`foreign_table_where <columns-select-properties-foreign-table-where>`
property and how the corresponding TSconfig must be set up.

In the TCA definition of the "haiku" table ("examples" extension)
there is a simple select field to create a reference to a page in the
"pages" table:

.. code-block:: php

   'reference_page' => array(
           'label' => 'LLL:EXT:examples/locallang_db.xml:tx_examples_haiku.reference_page',
           'config' => array(
                   'type' => 'select',
                   'renderType' => 'selectSingle',
                   'foreign_table' => 'pages',
                   'foreign_table_where' => "AND pages.title LIKE '%###PAGE_TSCONFIG_STR###%'",
                   'size' => 1,
                   'minitems' => 0,
                   'maxitems' => 1
           ),
   ),

Without any TSconfig, the selector will display a full list of pages:

.. figure:: ../../Images/TypeSelectHaikuAllPages.png
   :alt: Page selector with full list

   The page selector showing all existing pages

Let's add the following bit of Tsconfig to the page containing our
"haiku" record:

.. code-block:: typoscript

   TCEFORM.tx_examples_haiku.reference_page.PAGE_TSCONFIG_STR = image

The list of pages that we can select from is now reduced to:

.. figure:: ../../Images/TypeSelectHaikuLimitedPages.png
   :alt: Page selector with restricted list

   The page selector showing only pages with "image" in their title


.. _columns-select-examples-multiple:

A multiple value selector with contents from a database table
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

The user group selector is based on the fe\_groups table. It appears
as a multiple selector:

.. figure:: ../../Images/TypeSelectUserGroups.png
   :alt: List of user groups

   User groups selector in the access rights configuration

The corresponding TCA configuration:

.. code-block:: php

	'fe_group' => array(
		'exclude' => 1,
		'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.fe_group',
		'config' => array(
			'type' => 'select',
			'size' => 5,
			'maxitems' => 20,
			'items' => array(
				array(
					'LLL:EXT:lang/locallang_general.xlf:LGL.hide_at_login',
					-1
				),
				array(
					'LLL:EXT:lang/locallang_general.xlf:LGL.any_login',
					-2
				),
				array(
					'LLL:EXT:lang/locallang_general.xlf:LGL.usergroups',
					'--div--'
				)
			),
			'exclusiveKeys' => '-1,-2',
			'foreign_table' => 'fe_groups',
			'foreign_table_where' => 'ORDER BY fe_groups.title'
		)
	),

The value stored in the database will be a  *comma-separated list of uid numbers*
of the selected records.

An interesting point of this example is that it shows that static
values can be mixed with values fetched from a database table.


.. _columns-select-examples-lookup:

Using a look up table for single value
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

In this case the selector box looks up languages in a static table
from an extension "static\_info\_tables":

.. figure:: ../../Images/TypeSelectLookupTable.png
   :alt: List of languages

   Language selector based on the static_languages table

The configuration looks like this (taken from the "sys\_language" table):

.. code-block:: php

	'static_lang_isocode' => array(
		'exclude' => 1,
		'label' => 'LLL:EXT:lang/locallang_tca.xlf:sys_language.isocode',
		'displayCond' => 'EXT:static_info_tables:LOADED:true',
		'config' => array(
			'type' => 'select',
                   	'renderType' => 'selectSingle',
			'items' => array(
				array('', 0)
			),
			'foreign_table' => 'static_languages',
			'foreign_table_where' => 'AND static_languages.pid=0 ORDER BY static_languages.lg_name_en',
			'size' => 1,
			'minitems' => 0,
			'maxitems' => 1
		)
	),

Notice how a condition is set that this box should only be displayed
*if* the extension it relies on exists! This is very important since
otherwise the table will not be in the database and we will get SQL
errors.



.. _columns-select-examples-mm:

MM relations
~~~~~~~~~~~~

This example demonstrates the use of MM relations. In particular
they are used to relate system categories to a variety of other
records. As such it is necessary to keep track in the MM table of
the nature of each such record. This is achieved by using the
"fieldname" field, referenced in the :ref:`MM_match_fields <columns-select-properties-mm-match-fields>`
configuration.

The "tablenames" field is also used in the case where multiple
category relation fields are added to the same record type
(as happens to the "pages" table when the "examples" extension
is installed).

.. code-block:: php

	'type' => 'select',
	'foreign_table' => 'sys_category',
	'foreign_table_where' => ' AND sys_category.sys_language_uid IN (-1, 0) ORDER BY sys_category.sorting ASC',
	'MM' => 'sys_category_record_mm',
	'MM_opposite_field' => 'items',
	'MM_match_fields' => array(
		'tablenames' => 'pages',
		'fieldname' => 'categories',
	),
	'size' => 10,
	'maxitems' => 9999,
	'renderType' => 'selectTree',
	'treeConfig' => array(
		'parentField' => 'parent',
		'appearance' => array(
			'expandAll' => TRUE,
			'showHeader' => TRUE,
		),
	),

The selector looks like this:

.. figure:: ../../Images/TypeSelectMmLocal.png
   :alt: The categories selector

   The categories selector as added by default to pages

The above configuration also defines the MM relation as being
bidirectional, via the :ref:`MM_opposite_field <columns-select-properties-mm-opposite-field>`
property. This means that we can look at a given category and see
which items it is related to. Note that it is perfectly possible to
create relations from that side too.

.. figure:: ../../Images/TypeSelectMmForeign.png
   :alt: The category and its items

   A category and the items it is related to

.. note::

   The TCA configuration listed above cannot be found directly
   in a TCA file, but is generated by the `addTcaColumn()` method
   of class :ref:`TYPO3\CMS\Core\Category\CategoryRegistry <t3api:TYPO3\\CMS\\Core\\Category\\CategoryRegistry>`.


.. _columns-select-data-format:

Data format of "select" elements
""""""""""""""""""""""""""""""""

Since the "select" element allows to store references to multiple
elements we might want to look at how these references are stored
internally. The principle is the same as with the
:ref:`"group" type <columns-group-data>`.
