.. include:: /Includes.rst.txt
.. _columns-inline-examples:

========
Examples
========

.. _columns-inline-examples-images:
.. _columns-inline-examples-1nRelation:
.. _tca_example_inline_1n_inline_1:

Simple 1:n relation
===================

.. include:: /Includes/Images/Styleguide/RstIncludes/Inline1nInline1.rst.txt

This combines a table (for example companies) with a child table (for example
employees).

.. include:: /Includes/Snippets/Styleguide/RstIncludes/Inline1nInline1.rst.txt


.. _columns-inline-examples-fal:
.. _tca_example_inline_fal_inline_1:

File abstraction layer
======================

.. include:: /Includes/Images/Styleguide/RstIncludes/InlineFalInline1.rst.txt

Inline-type fields are massively used by the TYPO3 Core in the :ref:`File Abstraction Layer (FAL) <t3fal:start>`.

FAL provides an API for registering an inline-type field with relations to the "sys_file_reference" table containing
information related to existing media. Here an example from the
:ref:`extension styleguide <styleguide>`:

.. include:: /Includes/Snippets/Styleguide/RstIncludes/InlineFalInline1.rst.txt

The method to call is :php:`\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::getFileFieldTCAConfig()` which takes
four parameters. The first one is the name of the field, the second one is an array of configuration options which will
be merged with the default configuration. The third one is the list of allowed file types and the fourth one
(not used above) the list of disallowed file types. The default field configuration into which the
options (second call parameter) are merged looks like:

.. include:: /Includes/Snippets/Styleguide/RstIncludes/Manual/FileFieldTCAConfig.rst.txt


Using inline FAL relations in flexforms
=======================================

It is also possible to use the inline FAL relations is a flexform. However
there is no method which facilitates the generation of the code yet. So
the configuration has to be written manually like this:

.. include:: /Includes/Snippets/Styleguide/RstIncludes/InlineFalInline1Flexform.rst.txt


.. _columns-inline-examples-asymmetric-mm:

Attributes on anti-symmetric intermediate table
===============================================

.. include:: /Includes/Images/Styleguide/RstIncludes/Inline1n1nInline1.rst.txt

The record has two child records displayed inline.

This example combines records from a parent table
:php:`tx_styleguide_inline_mn` with records from the child table
:php:`tx_styleguide_inline_mn_child` using the intermediate table
:php:`tx_styleguide_inline_mn_mm`. It is also possible to add
attributes to every relation – in this example a checkbox.

The parent table :php:`tx_styleguide_inline_mn` contains the following column:

.. include:: /Includes/Snippets/Styleguide/RstIncludes/InlineMnInline1.rst.txt

If the child table :php:`tx_styleguide_inline_mn_child` wants to display its parents also it needs to define a
column like in this example:

.. include:: /Includes/Snippets/Styleguide/RstIncludes/InlineMnChildParents.rst.txt

The intermediate table :php:`tx_styleguide_inline_mn_mm` defines the following fields:

.. include:: /Includes/Snippets/Styleguide/RstIncludes/Manual/InlineMnMm.rst.txt


.. _columns-inline-examples-symmetric-mm:
.. _tca_example_inline_mn_symetric_11_branches:

Attributes on symmetric intermediate table
==========================================

.. include:: /Includes/Images/Styleguide/RstIncludes/InlineMnSymetric11Branches.rst.txt

Record 1 is related to records 6 and 11 of the same table

This example combines records of the same table with each other. Image we want
to store relationships between hotels. Symmetric relations combine records of
one table with each other. If record A is related to record B then record B is
also related to record A. However, the records are not stored in groups. If
record A is related to B and C, B doesn't have to be related to C.


.. include:: /Includes/Images/Styleguide/RstIncludes/InlineMnSymetric11Branches.rst.txt

Record 11 is symetrically related to record 1 but not to 6

The main table :php:`tx_styleguide_inline_mnsymmetric` has a field storing the
inline relation, here: :php:`branches`.

.. include:: /Includes/Snippets/Styleguide/RstIncludes/InlineMnSymetricBranches.rst.txt

Records of the main table can than have a symetric relationship to each other
using the intermediate table :php:`tx_styleguide_inline_mnsymmetric_mm`.

The intermediate table stores the uids of both sides of the relation in
:php:`hotelid` and :php:`branchid`. Furthermore custom sorting can be defined in
both directions.

.. include:: /Includes/Snippets/Styleguide/RstIncludes/Manual/InlineMnSymetricMm.rst.txt

.. note::
   :ts:`TCAdefaults.<table>.pid = <page id>` can be used to define the pid of new child records. Thus, it's possible to
   have special storage folders on a per-table-basis. See the :ref:`TSconfig reference <t3tsconfig:usertoplevelobjects>`.

.. _tca_example_inline_usecombinationc_inline_1:

With a combination box
======================

.. include:: /Includes/Images/Styleguide/RstIncludes/InlineUsecombinationcInline1.rst.txt

The combination box shows available records. On clicking one entry it gets
added to the parent record.


.. include:: /Includes/Snippets/Styleguide/RstIncludes/InlineUsecombinationcInline1.rst.txt

