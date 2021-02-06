.. include:: /Includes.rst.txt
.. _columns-select-properties-special:

=======
special
=======

.. confval:: special

   :type: string (keyword)
   :Scope: Display  / Proc.
   :RenderType: :ref:`selectCheckBox <columns-select-rendertype-selectCheckBox>`,
      :ref:`selectMultipleSideBySide <columns-select-rendertype-selectMultipleSideBySide>`,
      :ref:`selectSingle <columns-select-rendertype-selectSingle>`,
      :ref:`selectSingleBox <columns-select-rendertype-selectSingleBox>`

   This configures the selector box to fetch content from some predefined internal source. These options are used for
   backend user management and pretty worthless for most other purposes. Keywords:

   tables
     The list of TCA tables is added to the selector (excluding "adminOnly" tables).

   pagetypes
     All "doktype"-values for the "pages" table are added.

   exclude
     The list of "excludeFields" as found in :php:`$GLOBALS['TCA']` is added.

   modListGroup
     Module-lists added for groups.

   modListUser
     Module-lists added for users.

   explicitValues
     List values that require explicit permissions to be allowed or denied, see
     :ref:`authMode <columns-select-properties-authmode>`.

   languages
     List system languages ("sys\_language" records from page tree root + Default language)

   custom
     Custom values set by backend modules (see `TYPO3_CONF_VARS[BE][customPermOptions]`)

Examples
========

.. _tca_example_select_singlebox_3:

Select single box with special `languages`
------------------------------------------

.. include:: /Includes/Images/Styleguide/RstIncludes/SelectSinglebox3.rst.txt

.. include:: /Includes/Snippets/Styleguide/RstIncludes/SelectSinglebox3.rst.txt


.. _tca_example_select_singlebox_4:

Select single box with special `tables`
---------------------------------------

.. include:: /Includes/Images/Styleguide/RstIncludes/SelectSinglebox4.rst.txt

.. include:: /Includes/Snippets/Styleguide/RstIncludes/SelectSinglebox4.rst.txt


.. _tca_example_select_singlebox_5:

Select single box with special `pagetypes`
------------------------------------------

.. include:: /Includes/Images/Styleguide/RstIncludes/SelectSinglebox5.rst.txt

.. include:: /Includes/Snippets/Styleguide/RstIncludes/SelectSinglebox5.rst.txt



.. _tca_example_select_singlebox_6:

Select single box with special `exclude`
----------------------------------------

.. include:: /Includes/Images/Styleguide/RstIncludes/SelectSinglebox6.rst.txt

.. include:: /Includes/Snippets/Styleguide/RstIncludes/SelectSinglebox6.rst.txt



.. _tca_example_select_singlebox_7:

Select single box with special `modListGroup`
---------------------------------------------

.. include:: /Includes/Images/Styleguide/RstIncludes/SelectSinglebox7.rst.txt

.. include:: /Includes/Snippets/Styleguide/RstIncludes/SelectSinglebox7.rst.txt



.. _tca_example_select_singlebox_8:

Select single box with special `modListUser`
--------------------------------------------

.. include:: /Includes/Images/Styleguide/RstIncludes/SelectSinglebox8.rst.txt

.. include:: /Includes/Snippets/Styleguide/RstIncludes/SelectSinglebox8.rst.txt



.. _tca_example_select_singlebox_9:

Select single box with special `explicitValues`
-----------------------------------------------

.. include:: /Includes/Images/Styleguide/RstIncludes/SelectSinglebox9.rst.txt

.. include:: /Includes/Snippets/Styleguide/RstIncludes/SelectSinglebox9.rst.txt



.. _tca_example_select_singlebox_10:

Select single box with special `custom`
---------------------------------------

.. include:: /Includes/Images/Styleguide/RstIncludes/SelectSinglebox10.rst.txt

.. include:: /Includes/Snippets/Styleguide/RstIncludes/SelectSinglebox10.rst.txt

