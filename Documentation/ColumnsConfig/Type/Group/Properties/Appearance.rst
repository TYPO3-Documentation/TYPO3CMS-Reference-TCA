.. include:: /Includes.rst.txt
.. _columns-group-properties-appearance:

==========
appearance
==========

.. confval:: appearance

   :type: array
   :Scope: Display
   :InternalType: all

   Options for refining the appearance of group-type fields. This property is
   automatically used for :ref:`FAL<t3fal:start>` relations created by the function
   :php:`ExtensionManagementUtility::getFileFieldTCAConfig`.

   elementBrowserType (string)
      Allows set an alternative element browser type ("db" or "file") than
      would otherwise be rendered based on the "internal_type" setting.
      This is used internally for :ref:`FAL<t3fal:start>` file fields, where
      internal_type is "db" but the element browser should be the file element
      browser anyway.

   elementBrowserAllowed (string)
      Makes it possible to set an alternative element browser allowed string
      than would otherwise be taken from the "allowed" setting of this field.
      This is used internally for :ref:`FAL<t3fal:start>` file fields, where
      this is used to supply the comma list of allowed file types.

Examples
========

.. include:: /Includes/Images/Styleguide/RstIncludes/InlineFalInline1.rst.txt

.. include:: /Includes/Snippets/Styleguide/RstIncludes/InlineFalInline1.rst.txt

Where :php:`ExtensionManagementUtility::getFileFieldTCAConfig` internally
creates an array like this:

.. include:: /Includes/Snippets/Styleguide/RstIncludes/Manual/FileFieldTCAConfig.rst.txt
