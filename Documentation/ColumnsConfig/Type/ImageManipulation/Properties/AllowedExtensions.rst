..  include:: /Includes.rst.txt
..  _columns-imageManipulation-properties-allowedExtensions:

=================
allowedExtensions
=================

..  confval:: allowedExtensions
    :name: imageManipulation-allowedExtensions
    :Path: $GLOBALS['TCA'][$table]['columns'][$field]['config']
    :type: string (list of file extensions)
    :Scope: Proc. / Display

    List of image types (by file extension) which can be cropped. Defaults to
    `$GLOBALS['TYPO3_CONF_VARS']['GFX']['imagefile_ext']` which is usually `gif,jpg,jpeg,png`.
