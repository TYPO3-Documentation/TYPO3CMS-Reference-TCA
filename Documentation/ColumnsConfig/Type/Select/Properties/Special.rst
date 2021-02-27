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

.. _tca_example_special_languages_1:

Select single box with special `languages`
------------------------------------------

.. include:: /Includes/Images/Styleguide/RstIncludes/SpecialLanguages1.rst.txt

.. include:: /Includes/Snippets/Styleguide/RstIncludes/SpecialLanguages1.rst.txt


.. _tca_example_special_tables_1:

Select single box with special `tables`
---------------------------------------

.. include:: /Includes/Images/Styleguide/RstIncludes/SpecialTables1.rst.txt

.. include:: /Includes/Snippets/Styleguide/RstIncludes/SpecialTables1.rst.txt


.. _tca_example_special_pagetypes_1:

Select single box with special `pagetypes`
------------------------------------------

.. include:: /Includes/Images/Styleguide/RstIncludes/SpecialPagetypes1.rst.txt

.. include:: /Includes/Snippets/Styleguide/RstIncludes/SelectSinglebox5.rst.txt



.. _tca_example_special_exclude_1:

Select single box with special `exclude`
----------------------------------------

.. include:: /Includes/Images/Styleguide/RstIncludes/SpecialExclude1.rst.txt

.. include:: /Includes/Snippets/Styleguide/RstIncludes/SpecialExclude1.rst.txt



.. _tca_example_special_modlistgroup_1:

Select single box with special `modListGroup`
---------------------------------------------

.. include:: /Includes/Images/Styleguide/RstIncludes/SpecialModlistgroup1.rst.txt

.. include:: /Includes/Snippets/Styleguide/RstIncludes/SpecialModlistgroup1.rst.txt



.. _tca_example_special_usermods_1:

Select single box with special `modListUser`
--------------------------------------------

.. include:: /Includes/Images/Styleguide/RstIncludes/SpecialUsermods1.rst.txt

.. include:: /Includes/Snippets/Styleguide/RstIncludes/SpecialUsermods1.rst.txt



.. _tca_example_special_explicitvalues_1:

Select single box with special `explicitValues`
-----------------------------------------------

.. include:: /Includes/Images/Styleguide/RstIncludes/SpecialExplicitvalues1.rst.txt

.. include:: /Includes/Snippets/Styleguide/RstIncludes/SpecialExplicitvalues1.rst.txt



.. _tca_example_special_custom_1:

Select single box with special `custom`
---------------------------------------

This option is only used in the Core table :sql:`be_groups`. It enables
extensions to introduce custom options for user rights.

To include a field with this option anywhere but in :sql:`be_groups` would
probably make no sense.

You can introduce additional values by defining the following in your
extension's :file:`ext_tables.php`:

.. include:: /Includes/Snippets/Styleguide/RstIncludes/Manual/SpecialCustomOptions.rst.txt

This is an example of the option in the styleguide extension:

.. include:: /Includes/Images/Styleguide/RstIncludes/SpecialCustom1.rst.txt

.. include:: /Includes/Snippets/Styleguide/RstIncludes/SpecialCustom1.rst.txt

