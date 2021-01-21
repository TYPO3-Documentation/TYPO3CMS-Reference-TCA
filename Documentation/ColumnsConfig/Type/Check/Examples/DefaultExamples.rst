.. include:: /Includes.rst.txt

.. _columns-check-examples:
.. _columns-check-examples-single:
.. _columns-check-examples-array:

========
Examples
========

All examples listed here can be found in the :ref:`extension styleguide
<tca_examples_extension_styleguide>`.

.. _tca_example_checkbox_2:

Example: Simple checkbox with label
===================================

.. figure:: /Examples/Images/Styleguide/Checkbox2.png
  :alt: Simple checkbox with label (checkbox_2)
  :class: with-shadow

  Simple checkbox with label (checkbox_2)

TCA:

.. literalinclude:: /Examples/Snippets/Styleguide/tx_styleguide_elements_basic.php
   :language: php
   :start-at: start checkbox_2
   :end-before: end checkbox_2
   :lines: 2-

If the checkbox is checked, the value for the field will be 1,
if unchecked, it will be 0.

:ref:`FlexForm <t3coreapi:flexforms>`:

.. code-block:: xml

  <settings.checkbox_2>
     <TCEforms>
         <label>checkbox_2 one checkbox with label</label>
         <config>
             <type>check</type>
             <items type="array">
                 <numIndex index="0" type="array">
                     <numIndex index="0">foo</numIndex>
                     <numIndex index="1"></numIndex>
                 </numIndex>
             </items>
         </config>
     </TCEforms>
  </settings.checkbox_2>

.. _tca_example_checkbox_12:

Example: Four checkboxes in three columns
=========================================

.. figure:: /Examples/Images/Styleguide/Checkbox12.png
  :alt: Four checkboxes in three columns (checkbox_12)
  :class: with-shadow

  Four checkboxes in three columns (checkbox_12)

TCA:


.. literalinclude:: /Examples/Snippets/Styleguide/tx_styleguide_elements_basic.php
   :language: php
   :start-at: start checkbox_12
   :end-before: end checkbox_12
   :lines: 2-

If all checkboxes are checked, the value for the field will be 15 (:php:`1 | 2 | 4 | 8`).

:ref:`FlexForm <t3coreapi:flexforms>`:

.. code-block:: xml

  <settings.checkbox_2>
     <TCEforms>
         <label>checkbox_12 cols=3</label>
         <config>
             <type>check</type>
             <items type="array">
                 <numIndex index="0" type="array">
                     <numIndex index="0">foo1</numIndex>
                     <numIndex index="1"></numIndex>
                 </numIndex>
                 <numIndex index="1" type="array">
                     <numIndex index="0">foo2</numIndex>
                     <numIndex index="1"></numIndex>
                 </numIndex>
                 <numIndex index="2" type="array">
                     <numIndex index="0">foo3</numIndex>
                     <numIndex index="1"></numIndex>
                 </numIndex>
                 <numIndex index="3" type="array">
                     <numIndex index="0">foo4</numIndex>
                     <numIndex index="1"></numIndex>
                 </numIndex>
             </items>
             <cols>3</cols>
         </config>
     </TCEforms>
  </settings.checkbox_2>

.. _tca_example_checkbox_16:

Example: Checkboxes with inline floating
========================================

.. figure:: /Examples/Images/Styleguide/Checkbox16.png
  :alt: Checkboxes wit inline floating (checkbox_16)
  :class: with-shadow

  Checkboxes with inline floating (checkbox_16)

.. literalinclude:: /Examples/Snippets/Styleguide/tx_styleguide_elements_basic.php
   :language: php
   :start-at: start checkbox_16
   :end-before: end checkbox_16
   :lines: 2-

This will display as many checkbox items as will fit in one row. Without inline,
each checkbox would be displayed in a separate row.
