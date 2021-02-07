.. include:: /Includes.rst.txt
.. _columns-group-properties-internal-type:

==============
internal\_type
==============

.. confval:: internal_type

   :Required: true
   :type: string
   :Scope: Display  / Proc.

   Configures the internal type of the group type of the element.
   There are two possible options to choose from:

   folder
      This will create a field where folders can be attached to the record.

   db
      This will create a field where database records can be attached as references.

   There is no default value, the property is required.

.. deprecated:: 9.5
   The internal types `file` and `file_reference` have been deprecated with
   TYPO3 9 and removed with TYPO3 10. Extensions that used group fields
   with these internal types should switch to use
   :ref:`FAL references <tca_example_inline_fal_inline_1>` based on
   type=inline instead.


Examples
========

Internal type `db`- group relation to a single page
---------------------------------------------------

.. include:: /Includes/Images/Styleguide/RstIncludes/GroupDb10.rst.txt

.. include:: /Includes/Snippets/Styleguide/RstIncludes/GroupDb10.rst.txt

.. _tca_example_group_folder_1:

Internal type `folder`
----------------------

.. include:: /Includes/Images/Styleguide/RstIncludes/GroupFolder1.rst.txt

.. include:: /Includes/Snippets/Styleguide/RstIncludes/GroupFolder1.rst.txt
