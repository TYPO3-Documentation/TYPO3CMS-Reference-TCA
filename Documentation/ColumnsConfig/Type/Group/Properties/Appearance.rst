.. include:: /Includes.rst.txt
.. _columns-group-properties-appearance:

==========
appearance
==========

.. confval:: appearance

   :Path: $GLOBALS['TCA'][$table]['columns'][$field]['config']
   :type: array
   :Scope: Display

   Options for refining the appearance of group-type fields. This property is
   automatically used for :ref:`FAL <t3coreapi:fal>` relations created by the
   function :php:`ExtensionManagementUtility::getFileFieldTCAConfig`.

   elementBrowserType (string)
      Allows to set the alternative element browser type `file` that would
      otherwise be rendered as `db`. This is used internally for
      :ref:`FAL <t3coreapi:fal>` file fields, where a group field's element
      browser should be the file element browser.

   elementBrowserAllowed (string)
      Makes it possible to set an alternative element browser allowed string
      that would otherwise be taken from the :ref:`allowed <columns-group-properties-allowed>` setting of this field.
      This is used internally for :ref:`FAL <t3coreapi:fal>` file fields, where
      this is used to supply the comma list of allowed file types. This also
      affects whether the "Add media by URL" button is shown if online media
      file extensions (e.g. `youtube` or `vimeo`) are included.

Examples
========

.. include:: /Images/Rst/InlineFalInline1.rst.txt

.. include:: /CodeSnippets/InlineFalInline1.rst.txt

Where :php:`ExtensionManagementUtility::getFileFieldTCAConfig` internally
creates an array like this:

.. include:: /CodeSnippets/Manual/FileFieldTCAConfig.rst.txt
