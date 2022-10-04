..  include:: /Includes.rst.txt
..  _columns-file-properties-disallowed:

=========================
disallowed (type => file)
=========================

..  confval:: disallowed

    :Path: $GLOBALS['TCA'][$table]['columns'][$field]['config']
    :type: array
    :Scope: Proc. / Display

    An array of file extensions that are not allowed even though they are
    listed in the property `allowed`, for example :php:`['doc','docx']`.
