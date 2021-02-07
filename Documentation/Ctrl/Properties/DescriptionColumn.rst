.. include:: /Includes.rst.txt
.. _ctrl-reference-descriptionColumn:

=================
descriptionColumn
=================

.. confval:: descriptionColumn

   :type: string (field name)
   :Scope: Display


   Field name where description of a record is stored in. This description is only displayed in the backend to
   guide editors and admins and should never be shown in the frontend. If filled, the content of this field
   is displayed in the page and list module, and shown above the field list if editing a record. It is meant
   as a note field to give editors important additional information on single records. The TYPO3 Core sets this
   property for a series of main tables like `be_users`, `be_groups` and `tt_content`.


Examples
========

.. include:: /Includes/Images/Styleguide/RstIncludes/CtrlDescriptionColumn.rst.txt

.. include:: /Includes/Snippets/Styleguide/RstIncludes/Manual/TxStyleguideCtrlCommon.rst.txt

