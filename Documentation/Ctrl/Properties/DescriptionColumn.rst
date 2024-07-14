.. include:: /Includes.rst.txt
.. _ctrl-reference-descriptionColumn:

=================
descriptionColumn
=================

..  confval:: descriptionColumn
    :name: ctrl-descriptionColumn
    :Path: $GLOBALS['TCA'][$table]['ctrl']
    :type: string (field name)
    :Scope: Display

    ..  versionchanged:: 13.3
        The column definition is :ref:`auto-created <ctrl-auto-created-columns>`.

    Field name where description of a record is stored in. This description
    is only displayed in the backend to guide editors and admins and should
    never be shown in the frontend. If filled, the content of this column is
    displayed in the  :guilabel:`Web > Page` and  :guilabel:`Web > List` module, and shown above the field list if
    editing a record. It is meant as a note field to give editors important
    additional information on single records. The TYPO3 Core sets this
    property for a series of main tables like `be_users`, `be_groups` and `tt_content`.

    ..  include:: _AutoCreateWarning.rst.txt

..  _ctrl-reference-descriptionColumn-example:

Example: Create a table that has a description column
=====================================================

.. include:: /Images/Rst/CtrlDescriptionColumn.rst.txt

.. include:: /CodeSnippets/TxStyleguideCtrlCommon.rst.txt
