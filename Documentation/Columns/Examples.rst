.. include:: /Includes.rst.txt

========
Examples
========

Some examples from extension styleguide to get an idea on what the 
field definition is capable of: An input field
with slider, a select drop-down for images, an inline relation spanning multiple tables.


The following examples all can be found in the
:ref:`extension styleguide <styleguide>`.

.. index:: 
   Styleguide; input_30
   Input; With slider

Input field with slider
=======================

.. figure:: /Examples/Images/Styleguide/Input30.png
    :alt: Slider input field
    :class: with-shadow

    Slider input field


Input field with a slider, allowing integer values between -90 and 90:
    
.. literalinclude:: /Examples/Snippets/Styleguide/tx_styleguide_elements_basic.php
   :language: php
   :start-at: start input_30
   :end-before: end input_30
   :lines: 2-


.. index:: 
   Styleguide; select_single_12
   pair: selectSingle; Images

Select drop-down for records represented by images
==================================================

.. figure:: /Examples/Images/Styleguide/SelectSingle12.png
    :alt: Select images from a drop-down
    :class: with-shadow

    Select foreign records from a drop-down using selicon

Select field with foreign table relation and field wizard:

.. literalinclude:: /Examples/Snippets/Styleguide/tx_styleguide_elements_select.php
   :language: php
   :start-at: start select_single_12
   :end-before: end select_single_12
   :lines: 2-
   
The table :sql:`tx_styleguide_elements_select_single_12_foreign` is defined as
follows::

   [
      'ctrl' => [
         // ...
         'selicon_field' => 'fal_1',
      ],

      'columns' => [
         // ...
         'fal_1' => [
            'label' => 'fal_1 selicon_field',
            'exclude' => 1,
            'config' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::getFileFieldTCAConfig(
               'fal_1',
               [
                  'maxitems' => 1,
               ],
               $GLOBALS['TYPO3_CONF_VARS']['SYS']['mediafile_ext']
            ),
         ],
      ],
      // ...

   ];


Inline relation (IRRE) spanning multiple tables
===============================================

.. figure:: /Examples/Images/Styleguide/Inline1.png
    :alt: Nested inline relation to a different table
    :class: with-shadow

    Nested inline relation to a different table

Inline relation to a foreign table:

.. literalinclude:: /Examples/Snippets/Styleguide/tx_styleguide_inline_1n.php
   :language: php
   :start-at: start inline_1
   :end-before: end inline_1
   :lines: 2-

