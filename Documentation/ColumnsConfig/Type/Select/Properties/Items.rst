.. include:: /Includes.rst.txt
.. _columns-select-properties-items:

=====
items
=====

.. confval:: items

   :type: array
   :Scope: Display  / Proc.
   :RenderType: all

   Contains the elements for the selector box unless the property "foreign\_table" or "special" has been set
   in which case automated values are set in addition to any values listed in this array.

   Each element in this array is in itself an array where:

   #1 First value is the **item label** (string or LLL reference)

   #2 Second value is the **value of the item**

      -  The special value `--div--` is used to insert a non-selectable value that appears as a divider
         label in the selector box (only for maxitems <=1)

      -  Values must not contain "," (comma) and "\|" (vertical bar). If you want to use "authMode" you should
         also refrain from using ":" (colon).

   #3 Third value is an optional icon. For custom icons use a path prepended with "EXT:" to refer to an image
      file found inside an extension or use an registered icon identifier.

   #4  Fourth value is an optional description text. This is only shown when the list is shown
      with `renderType='selectCheckBox'`.

   #5  Fifth value is reserved as keyword "EXPL\_ALLOW" or "EXPL\_DENY". See
      property :ref:`authMode / individual <columns-select-properties-authmode>` for more details.

.. note::

      When having a zero as second value and the field is of type :code:`int(10)` in the database, make sure to define
      the :ref:`default value <columns-select-properties-default>` as well in TCA: :php:`'default' => 0`. Otherwise
      issues may arise e.g. with MySQL strict mode.


Examples
========

.. _tca_example_select_single_1:

Simple items definition with label and value
--------------------------------------------

.. include:: /Includes/Images/Styleguide/RstIncludes/SelectSingle1.rst.txt

.. include:: /Includes/Snippets/Styleguide/RstIncludes/SelectSingle1.rst.txt


.. _tca_example_select_single_4:

Items definition with label, value and icon
-------------------------------------------

A more complex example could be this (includes icons):

.. include:: /Includes/Images/Styleguide/RstIncludes/SelectSingle4.rst.txt

.. include:: /Includes/Snippets/Styleguide/RstIncludes/SelectSingle4.rst.txt

.. _tca_example_sys_language_uid:

A typical sys_language_uid field
--------------------------------

The icons can also be referenced by their identifier in the
:ref:`Icon API<t3coreapi:icon>`

.. include:: /Includes/Images/Styleguide/RstIncludes/SysLanguageUid.rst.txt

.. include:: /Includes/Snippets/Styleguide/RstIncludes/SysLanguageUid.rst.txt


Select checkbox field with icons and descriptions
-------------------------------------------------

Descriptions are only displayed in render type `selectCheckbox`.

.. include:: /Includes/Images/Styleguide/RstIncludes/SelectCheckbox3.rst.txt

.. include:: /Includes/Snippets/Styleguide/RstIncludes/SelectCheckbox3.rst.txt
