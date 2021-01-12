.. include:: /Includes.rst.txt
.. _columns-select-properties-special:

=======
special
=======

:aspect:`Datatype`
   string (keyword)

:aspect:`Scope`
   Display / Proc.


:aspect:`RenderType`
   :ref:`selectCheckBox <columns-select-rendertype-selectCheckBox>`,
   :ref:`selectMultipleSideBySide <columns-select-rendertype-selectMultipleSideBySide>`,
   :ref:`selectSingle <columns-select-rendertype-selectSingle>`,
   :ref:`selectSingleBox <columns-select-rendertype-selectSingleBox>`

:aspect:`Description`
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
