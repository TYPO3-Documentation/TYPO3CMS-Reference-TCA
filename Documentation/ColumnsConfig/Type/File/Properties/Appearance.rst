..  include:: /Includes.rst.txt
..  _columns-file-properties-appearance:

==========
appearance
==========

..  confval:: appearance (type => file)

    :Path: $GLOBALS['TCA'][$table]['columns'][$field]['config']
    :type: array
    :Scope: Display

    Has information about the appearance of child-records, namely:

    collapseAll (boolean)
        Show all child-records collapsed (if false, all are expanded)

    expandSingle (boolean)
        Show only one child-record expanded each time. If a collapsed record is
        clicked, the currently open one collapses and the clicked one expands.

    createNewRelationLinkTitle (string or LLL reference)
        Overrides the link text and title of the "Create new relation" button
        with a localized string. Only useful, if the element browser is enabled.

    addMediaLinkTitle (string or LLL reference)
        ..  versionadded:: 12.3

        Overrides the link text and title of the "Add media by URL" button
        with a localized string. Only useful, if the element browser is enabled.

    uploadFilesLinkTitle (string or LLL reference)
        ..  versionadded:: 12.3

        Overrides the link text and title of the "Select & upload files" button
        with a localized string. Only useful, if the element browser is enabled.

    useSortable (boolean)
        Activate drag & drop.

    showPossibleLocalizationRecords (boolean)
        Show unlocalized files which are in the original language, but not
        yet localized.

    showAllLocalizationLink (boolean)
        Defines whether to show the "localize all records" link to fetch
        untranslated records from the original language.

    showSynchronizationLink (boolean)
        Defines whether to show a "synchronize" link to update to a
        1:1 translation with the original language.

    enabledControls (array)
        Associative array with the keys 'info', 'new', 'dragdrop', 'sort',
        'hide', 'delete', 'localize'. If the accordant values are set to a
        boolean value (true or false), the control is shown or hidden in the
        header of each record.

    headerThumbnail (array)
        Defines whether a thumbnail should be rendered in the inline element's
        header. This is used by the file abstraction layer to render a preview
        of the related image. Can contain image processing instructions
        like `width` and `height`.

        field (required)
            The table column name, which contains the uid of the image reference. Usually this is :sql:`uid_local`.
        width
            The width of the thumbnail.
        height
            The height of the thumbnail.

    fileUploadAllowed (boolean)
        Defines whether the button "Select & upload file" should be rendered. This can be used for file fields to directly
        upload files and create a reference to the file. The button is limited to file fields using File Abstraction Layer.
        It will only appear to backend users which have write access to the user upload folder. By default this folder is
        :file:`fileadmin/user_upload` but it can be changed in User TSconfig using :typoscript:`options.defaultUploadFolder`.
        See the :ref:`TSconfig reference <t3tsconfig:useroptions>`.

        The button is shown by default unless this option is set to :php:`false`.

    fileByUrlAllowed (boolean)
         Defines whether the button "Add media by URL" should be rendered. This button is used to include media
         URLs from e.g. Vimeo or YouTube. In addition to this, a valid online media identifier must be listed
         in the allowed list of :ref:`elementBrowserAllowed <columns-group-properties-appearance>`.

    elementBrowserEnabled (boolean)
        Hides or displays the element browser button in inline records

    This property can also be overridden by :ref:`page TSconfig <tceform>`.
