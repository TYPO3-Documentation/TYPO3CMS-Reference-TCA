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

.. include:: /Images/Rst/Inline1nInline1.rst.txt

This combines a table (for example companies) with a child table (for example
employees).

.. include:: /CodeSnippets/Inline1nInline1.rst.txt


.. _columns-inline-examples-fal:
.. _tca_example_inline_fal_inline_1:

File abstraction layer
======================

.. include:: /Images/Rst/InlineFalInline1.rst.txt

Inline-type fields are massively used by the TYPO3 Core in the :ref:`File Abstraction Layer (FAL) <t3coreapi:fal>`.

FAL provides an API for registering an inline-type field with relations to the "sys_file_reference" table containing
information related to existing media. Here an example from the
:ref:`extension styleguide <styleguide>`:

.. include:: /CodeSnippets/InlineFalInline1.rst.txt

The method to call is :php:`\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::getFileFieldTCAConfig()` which takes
four parameters. The first one is the name of the field, the second one is an array of configuration options which will
be merged with the default configuration. The third one is the list of allowed file types and the fourth one
(not used above) the list of disallowed file types. The default field configuration into which the
options (second call parameter) are merged looks like:

.. include:: /CodeSnippets/Manual/FileFieldTCAConfig.rst.txt


Using inline FAL relations in flexforms
=======================================

It is also possible to use the inline FAL relations is a flexform. However
there is no method which facilitates the generation of the code yet. So
the configuration has to be written manually like this:

.. include:: /CodeSnippets/InlineFalInline1Flexform.rst.txt


.. _columns-inline-examples-asymmetric-mm:

Attributes on anti-symmetric intermediate table
===============================================

.. include:: /Images/Rst/Inline1n1nInline1.rst.txt

The record has two child records displayed inline.

This example combines records from a parent table
:php:`tx_styleguide_inline_mn` with records from the child table
:php:`tx_styleguide_inline_mn_child` using the intermediate table
:php:`tx_styleguide_inline_mn_mm`. It is also possible to add
attributes to every relation – in this example a checkbox.

The parent table :php:`tx_styleguide_inline_mn` contains the following column:

.. include:: /CodeSnippets/InlineMnInline1.rst.txt

If the child table :php:`tx_styleguide_inline_mn_child` wants to display its parents also it needs to define a
column like in this example:

.. include:: /CodeSnippets/InlineMnChildParents.rst.txt

The intermediate table :php:`tx_styleguide_inline_mn_mm` defines the following fields:

.. include:: /CodeSnippets/Manual/InlineMnMm.rst.txt


.. _columns-inline-examples-symmetric-mm:
.. _tca_example_inline_mn_symmetric_11_branches:

Attributes on symmetric intermediate table
==========================================

.. include:: /Images/Rst/InlineMnSymmetric11Branches.rst.txt

Record 1 is related to records 6 and 11 of the same table

This example combines records of the same table with each other. Image we want
to store relationships between hotels. Symmetric relations combine records of
one table with each other. If record A is related to record B then record B is
also related to record A. However, the records are not stored in groups. If
record A is related to B and C, B doesn't have to be related to C.


.. include:: /Images/Rst/InlineMnSymmetric11Branches.rst.txt

Record 11 is symmetrically related to record 1 but not to 6

The main table :php:`tx_styleguide_inline_mnsymmetric` has a field storing the
inline relation, here: :php:`branches`.

.. include:: /CodeSnippets/InlineMnSymmetricBranches.rst.txt

Records of the main table can than have a symmetric relationship to each other
using the intermediate table :php:`tx_styleguide_inline_mnsymmetric_mm`.

The intermediate table stores the uids of both sides of the relation in
:php:`hotelid` and :php:`branchid`. Furthermore custom sorting can be defined in
both directions.

.. include:: /CodeSnippets/Manual/InlineMnSymetricMm.rst.txt

.. note::
   :typoscript:`TCAdefaults.<table>.pid = <page id>` can be used to define the pid of new child records. Thus, it's possible to
   have special storage folders on a per-table-basis. See the :ref:`TSconfig reference <t3tsconfig:usertoplevelobjects>`.

.. _tca_example_inline_usecombinationc_inline_1:

With a combination box
======================

.. include:: /Images/Rst/InlineUsecombinationcInline1.rst.txt

The combination box shows available records. On clicking one entry it gets
added to the parent record.


.. include:: /CodeSnippets/InlineUsecombinationcInline1.rst.txt

.. _inline-example-field-information:

Add a custom fieldInformation
=============================

We show a very minimal example which adds a custom fieldInformation for the
inline type in tt_content. Adding a fieldWizard is done in a similar way.

As explained in the :ref:`description <columns-inline>`, :code:`fieldInformation`
or :code:`fieldWizard` must be configured within the :code:`ctrl` **for the field
type inline** - as it is a container.

.. rst-class:: bignums-xxl

#. Create a custom fieldInformation

   .. code-block:: php
      :caption: EXT:my_extension/Classes/FormEngine/FieldInformation/DemoFieldInformation

         <?php
         declare(strict_types=1);
         namespace Myvendor\Myexample\FormEngine\FieldInformation;

         use TYPO3\CMS\Backend\Form\AbstractNode;

         class DemoFieldInformation extends AbstractNode
         {
             public function render()
             {
                 $fieldName = $this->data['fieldName'];
                 $result = $this->initializeResultArray();

                  // Add fieldInformation only for this field name
                  //   this may be changed accordingly
                  if ($fieldName !== 'my_new_field') {
                      return $result;
                  }

                  $text = $GLOBALS['LANG']->sL(
                          'LLL:EXT:my_example/Resources/Private/Language/'
                          . 'locallang_db.xlf:tt_content.fieldInformation.demo'
                  );

                  $result['html'] = $text;
                  return $result;
             }
         }

#. Register this node type

   .. code-block:: php
      :caption: EXT:my_extension/ext_localconf.php

         <?php
         use Myvendor\Myexample\FormEngine\FieldInformation\DemoFieldInformation;

         // ...

         $GLOBALS['TYPO3_CONF_VARS']['SYS']['formEngine']['nodeRegistry'][1654355506] = [
             'nodeName' => 'demoFieldInformation',
             'priority' => 30,
             'class' => DemoFieldInformation::class,
         ];

#. Add the fieldInformation to the container for containerRenderType inline

   .. code-block:: php
      :caption: EXT:my_extension/Configuration/TCA/Overrides/tt_content.php

          $GLOBALS['TCA']['tt_content']['ctrl']['container']['inline']['fieldInformation'] = [
              'demoFieldInformation' => [
                  'renderType' => 'demoFieldInformation',
              ],
          ];

#. A field my_new_field is created in the tt_content TCA:

   .. code-block:: php
      :caption: EXT:my_extension/Configuration/TCA/Overrides/tt_content.php

          'my_new_field2' => [
              'label' => 'inline field with field information',
              'config' => [
                  'type' => 'inline',
                  // further configuration can be found in the examples above
                  // ....
              ],
          ],
          // ...

.. seealso::

   *  :ref:`['ctrl']['container'] <ctrl-reference-container>`
   *  How to create custom fieldInformation, fieldControl or fieldWizard in
      :ref:`FormEngine <t3coreapi:FormEngine-Rendering-NodeExpansion>` chapter (TYPO3
      Explained)
   *  :ref:`fieldInformation <tca_property_fieldInformation>` property
