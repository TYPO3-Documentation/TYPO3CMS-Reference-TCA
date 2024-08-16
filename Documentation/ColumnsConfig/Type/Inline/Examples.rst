..  include:: /Includes.rst.txt
..  _columns-inline-examples:

========
Examples
========

..  note::
    Inline fields should not be used to handle files.  Use the TCA
    column type :ref:`file <columns-file>` instead.

..  _columns-inline-examples-images:
..  _columns-inline-examples-1nRelation:
..  _tca_example_inline_1n_inline_1:

Simple 1:n relation
===================

..  include:: /Images/Rst/Inline1nInline1.rst.txt

This combines a table (for example companies) with a child table (for example
employees).

..  include:: /CodeSnippets/Inline1nInline1.rst.txt

..  _columns-inline-examples-asymmetric-mm:

Attributes on anti-symmetric intermediate table
===============================================

..  include:: /Images/Rst/Inline1n1nInline1.rst.txt

The record has two child records displayed inline.

This example combines records from a parent table
:php:`tx_styleguide_inline_mn` with records from the child table
:php:`tx_styleguide_inline_mn_child` using the intermediate table
:php:`tx_styleguide_inline_mn_mm`. It is also possible to add
attributes to every relation – in this example a checkbox.

The parent table :php:`tx_styleguide_inline_mn` contains the following column:

..  include:: /CodeSnippets/InlineMnInline1.rst.txt

If the child table :php:`tx_styleguide_inline_mn_child` wants to display its parents also it needs to define a
column like in this example:

..  include:: /CodeSnippets/InlineMnChildParents.rst.txt

The intermediate table :php:`tx_styleguide_inline_mn_mm` defines the following fields:

..  include:: /CodeSnippets/Manual/InlineMnMm.rst.txt


..  _columns-inline-examples-symmetric-mm:
..  _tca_example_inline_mn_symmetric_11_branches:

Attributes on symmetric intermediate table
==========================================

..  include:: /Images/Rst/InlineMnSymmetric11Branches.rst.txt

Record 1 is related to records 6 and 11 of the same table

This example combines records of the same table with each other. Image we want
to store relationships between hotels. Symmetric relations combine records of
one table with each other. If record A is related to record B then record B is
also related to record A. However, the records are not stored in groups. If
record A is related to B and C, B doesn't have to be related to C.


..  include:: /Images/Rst/InlineMnSymmetric11Branches.rst.txt

Record 11 is symmetrically related to record 1 but not to 6

The main table :php:`tx_styleguide_inline_mnsymmetric` has a field storing the
inline relation, here: :php:`branches`.

..  include:: /CodeSnippets/InlineMnSymmetricBranches.rst.txt

Records of the main table can than have a symmetric relationship to each other
using the intermediate table :php:`tx_styleguide_inline_mnsymmetric_mm`.

The intermediate table stores the uids of both sides of the relation in
:php:`hotelid` and :php:`branchid`. Furthermore custom sorting can be defined in
both directions.

..  include:: /CodeSnippets/Manual/InlineMnSymetricMm.rst.txt

..  note::
    :typoscript:`TCAdefaults.<table>.pid = <page id>` can be used to define the pid of new child records. Thus, it's possible to
    have special storage folders on a per-table-basis. See the :ref:`TSconfig reference <t3tsconfig:usertoplevelobjects>`.

..  _tca_example_inline_usecombinationc_inline_1:

With a combination box
======================

..  include:: /Images/Rst/InlineUsecombinationcInline1.rst.txt

The combination box shows available records. On clicking one entry it gets
added to the parent record.


..  include:: /CodeSnippets/InlineUsecombinationcInline1.rst.txt

..  _inline-example-field-information:

Add a custom fieldInformation
=============================

We show a very minimal example which adds a custom fieldInformation for the
inline type in tt_content. Adding a fieldWizard is done in a similar way.

As explained in the :ref:`description <columns-inline>`, :code:`fieldInformation`
or :code:`fieldWizard` must be configured within the :code:`ctrl` **for the field
type inline** - as it is a container.

..  rst-class:: bignums-xxl

#. Create a custom fieldInformation

    ..  literalinclude:: _Snippets/_DemoFieldInformation.php
        :caption: EXT:my_extension/Classes/FormEngine/FieldInformation/DemoFieldInformation.php

#. Register this node type

    ..  literalinclude:: _Snippets/_ext_localconf.php
        :caption: EXT:my_extension/ext_localconf.php

#. Add the fieldInformation to the container for containerRenderType inline

    ..  literalinclude:: _Snippets/_tt_content.php
        :caption: EXT:my_extension/Configuration/TCA/Overrides/tt_content.php

#. A field my_new_field is created in the tt_content TCA:

    ..  literalinclude:: _Snippets/_tt_content2.php
        :caption: EXT:my_extension/Configuration/TCA/Overrides/tt_content.php

..  seealso::

    *   :ref:`['ctrl']['container'] <ctrl-reference-container>`
    *   How to create custom fieldInformation, fieldControl or fieldWizard in
        :ref:`FormEngine <t3coreapi:FormEngine-Rendering-NodeExpansion>` chapter (TYPO3
        Explained)
    *   :ref:`fieldInformation <tca_property_fieldInformation>` property

..  _columns-inline-properties-overrideChildTca-examples:

Examples with overrideChildTca
==============================

Overrides the crop variants
---------------------------

This example overrides the crop variants in a configured fal relation:

..  literalinclude:: _Snippets/_overrideChildTcaCropVariants.php
    :caption: EXT:my_extension/Configuration/TCA/Overrides/tt_content.php

Define which fields to show in the child table
----------------------------------------------

This example overrides the :ref:`showitem <types-properties-showitem>` field of
the child table TCA:

..  literalinclude:: _Snippets/_overrideChildTcaShowItems.php
    :caption: EXT:my_extension/Configuration/TCA/Overrides/tt_content.php

Override the default value of a child tables field
--------------------------------------------------

This overrides the :code:`default` columns property of a child field in an inline relation from within
the parent if a new child is created:

..  literalinclude:: _Snippets/_overrideChildTcaDefault.php
    :caption: EXT:my_extension/Configuration/TCA/Overrides/tt_content.php

Override the foreign_selector field target
------------------------------------------

This overrides the foreign_selector field target field config, defined in the
:ref:`foreign_selector <columns-inline-properties-foreign-selector>` property. This is used in FAL inline relations:


..  literalinclude:: _Snippets/_overrideChildTcaForeignSelector.php
    :caption: EXT:my_extension/Configuration/TCA/Overrides/tt_content.php

..  note::
    It is allowed to use this property within the :ref:`columnsOverrides property <types-properties-columnsOverrides>`
    of an inline parent in the :code:`['types']` section.

Example: Override by type
-------------------------

..  literalinclude:: _Snippets/_overrideChildTcaForeignSelector.php
    :caption: EXT:my_extension/Configuration/TCA/Overrides/tt_content.php
