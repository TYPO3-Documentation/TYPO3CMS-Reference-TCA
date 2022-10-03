..  include:: /Includes.rst.txt
..  _columns-file-properties-allowed:

=======
allowed
=======

..  confval:: allowed (type => file)

    :Path: $GLOBALS['TCA'][$table]['columns'][$field]['config']
    :type: string / array
    :Scope: Proc. / Display
    :Default: `common-image-types`

    One of the following reserved strings:

    `common-image-types`
        Gets replaced with the value from
        :php:`$GLOBALS['TYPO3_CONF_VARS']['GFX']['imagefile_ext']`.

    `common-text-types`
        Gets replaced with the value from
        :php:`$GLOBALS['TYPO3_CONF_VARS']['SYS']['textfile_ext']`.

    `common-media-types`
        Gets replaced with the value from
        :php:`$GLOBALS['TYPO3_CONF_VARS']['SYS']['mediafile_ext']`.

    or an array of allowed file
    endings, for example :php:`['jpg','png','svg']`.
