.. include:: /Includes.rst.txt
.. _columns-inline-examples:

========
Examples
========

.. _columns-inline-examples-images:
.. _columns-inline-examples-1nRelation:

Simple 1:n relation
===================


.. figure:: Images/Styleguide1.png
    :alt: A nested 1:n to 1:n relation
    :class: with-shadow

    A nested 1:n to 1:n relation

This combines a table (for example companies) with a child table (for example
employees).

.. literalinclude:: /Examples/Snippets/Styleguide/tx_styleguide_inline_1n.php
   :language: php
   :start-at: [start inline_1]
   :end-before: [end inline_1]
   :lines: 2-

.. _columns-inline-examples-fal:

File abstraction layer
======================

.. figure:: Images/FalStyleguide1.png
    :alt: A typical FAL relation
    :class: with-shadow

    A typical FAL relation

Inline-type fields are massively used by the TYPO3 Core in the :ref:`File Abstraction Layer (FAL) <t3fal:start>`.

FAL provides an API for registering an inline-type field with relations to the "sys_file_reference" table containing
information related to existing media. Here an example from the
:ref:`extension styleguide <styleguide>`:

.. literalinclude:: /Examples/Snippets/Styleguide/tx_styleguide_inline_fal.php
   :language: php
   :start-at: 'inline_1'
   :end-before: 'inline_2'

The method to call is :php:`\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::getFileFieldTCAConfig()` which takes
four parameters. The first one is the name of the field, the second one is an array of configuration options which will
be merged with the default configuration. The third one is the list of allowed file types and the fourth one
(not used above) the list of disallowed file types. The default field configuration into which the
options (second call parameter) are merged looks like:

.. code-block:: php

    $fileFieldTCAConfig = [
        'type' => 'inline',
        'foreign_table' => 'sys_file_reference',
        'foreign_field' => 'uid_foreign',
        'foreign_sortby' => 'sorting_foreign',
        'foreign_table_field' => 'tablenames',
        'foreign_match_fields' => [
            'fieldname' => $fieldName
        ],
        'foreign_label' => 'uid_local',
        'foreign_selector' => 'uid_local',
        'overrideChildTca' => [
            'columns' => [
                'uid_local' => [
                    'config' => [
                        'appearance' => [
                            'elementBrowserType' => 'file',
                            'elementBrowserAllowed' => $allowedFileExtensions
                        ],
                    ],
                ],
            ],
        ],
        'filter' => [
            [
                'userFunc' => 'TYPO3\\CMS\\Core\\Resource\\Filter\\FileExtensionFilter->filterInlineChildren',
                'parameters' => [
                    'allowedFileExtensions' => $allowedFileExtensions,
                    'disallowedFileExtensions' => $disallowedFileExtensions
                ]
            ]
        ],
        'appearance' => [
            'useSortable' => true,
            'headerThumbnail' => [
                'field' => 'uid_local',
                'width' => '45',
                'height' => '45c',
            ],
            'showPossibleLocalizationRecords' => false,
            'showRemovedLocalizationRecords' => false,
            'showSynchronizationLink' => false,
            'showAllLocalizationLink' => false,

            'enabledControls' => [
                'info' => false,
                'new' => false,
                'dragdrop' => true,
                'sort' => false,
                'hide' => true,
                'delete' => true,
                'localize' => true,
            ],
        ],
    ];


Using inline FAL relations in flexforms
=======================================

It is also possible to use the inline FAL relations is a flexform. However
there is no method which fascilitates the generation of the code yet. So
the configuration has to be written manually like this:

.. literalinclude:: /Examples/Snippets/Styleguide/tx_styleguide_inline_fal.php
   :language: xml
   :start-at: <fal>
   :end-before: </fal>


.. _columns-inline-examples-asymmetric-mm:

Attributes on anti-symmetric intermediate table
===============================================

.. figure:: /Examples/Images/Styleguide/InlineMn.png
    :alt: A symetric relation
    :class: with-shadow

   The record has two child records displayed inline.

This example combines records from a parent table
:php:`tx_styleguide_inline_mn` with records from the child table
:php:`tx_styleguide_inline_mn_child` using the intermediate table
:php:`tx_styleguide_inline_mn_mm`. It is also possible to add
attributes to every relation – in this example a checkbox.

The parent table :php:`tx_styleguide_inline_mn` contains the following column:

.. literalinclude:: /Examples/Snippets/Styleguide/tx_styleguide_inline_mn.php
   :language: php
   :start-at: [start inline_1]
   :end-before: [end inline_1]
   :lines: 2-

If the child table :php:`tx_styleguide_inline_mn_child` wants to display its parents also it needs to define a
column like in this example:

.. literalinclude:: /Examples/Snippets/Styleguide/tx_styleguide_inline_mn_child.php
   :language: php
   :start-at: [start parents]
   :end-before: [end parents]
   :lines: 2-

The intermediate table :php:`tx_styleguide_inline_mn_mm` defines the following fields:

.. literalinclude:: /Examples/Snippets/Styleguide/tx_styleguide_inline_mn_mm.php
   :language: php
   :start-at: [start parentid]
   :end-before: [end check_1]


.. _columns-inline-examples-symmetric-mm:

Attributes on symmetric intermediate table
==========================================

.. figure:: /Examples/Images/Styleguide/InlineMnsymmetric.png
    :alt: A symetric relation
    :class: with-shadow

   Record 1 is related to records 6 and 11 of the same table

This example combines records of the same table with each other. Image we want
to store relationships between hotels. Symmetric relations combine records of
one table with each other. If record A is related to record B then record B is
also related to record A. However, the records are not stored in groups. If
record A is related to B and C, B doesn't have to be related to C.


.. figure:: /Examples/Images/Styleguide/InlineMnsymmetric.png
    :alt: A symetric relation
    :class: with-shadow

   Record 11 is symetrically related to record 1 but not to 6

The main table :php:`tx_styleguide_inline_mnsymmetric` has a field storing the
inline relation, here: :php:`branches`.

.. literalinclude:: /Examples/Snippets/Styleguide/tx_styleguide_inline_usecombination.php
   :language: php
   :start-at: [start inline_1]
   :end-before: [end inline_1]
   :lines: 2-

Records of the main table can than have a symetric relationship to each other
using the intermediate table :php:`tx_styleguide_inline_mnsymmetric_mm`.

The intermediate table stores the uids of both sides of the relation in
:php:`hotelid` and :php:`branchid`. Furthermore custom sorting can be defined in
both directions.

.. literalinclude:: /Examples/Snippets/Styleguide/tx_styleguide_inline_mnsymmetric_mm.php
   :language: php
   :start-at: [start hotelid]
   :end-before: [end branchsort]
   :lines: 2-

.. note::
   :ts:`TCAdefaults.<table>.pid = <page id>` can be used to define the pid of new child records. Thus, it's possible to
   have special storage folders on a per-table-basis. See the :ref:`TSconfig reference <t3tsconfig:usertoplevelobjects>`.


With a combination box
======================

.. figure:: Images/CombinationBox1.png
    :alt: A m:n relation with combination box
    :class: with-shadow

    A m:n relation with combination box

The combination box shows availible records. On clicking one entry it gets
added to the parent record.

.. literalinclude:: /Examples/Snippets/Styleguide/tx_styleguide_inline_usecombination.php
   :language: php
   :start-at: [start inline_1]
   :end-before: [end inline_1]
   :lines: 2-


