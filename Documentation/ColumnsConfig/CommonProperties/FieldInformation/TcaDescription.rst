..  include:: /Includes.rst.txt
..  _tca-property-fieldinformation-tcadescription:
..  _tca-property-fieldinformation-tcadescription-examples:
..  _tca-property-fieldinformation-tcadescription-examples-activatetcadescription:
..  _tca-property-fieldinformation-tcadescription-examples-renderdescription:

==============
tcaDescription
==============

..  deprecated:: 14.2
    :changelog: deprecation-109280-1742109280

    The `TcaDescription` field information render type has been deprecated.
    Field descriptions configured via `['columns']['my_field']['description'] <https://docs.typo3.org/permalink/t3tca:confval-columns-description>`_
    are now rendered automatically next to the field label.

    Remove any explicit `tcaDescription` field information configuration from
    TCA when dropping TYPO3 13.4 support.

..  confval:: tcaDescription
    :name: fieldInformation-tcaDescription
    :TCA path: $GLOBALS['TCA'][$table]['columns'][$field]['config']['fieldInformation']['tcaDescription']
    :type: array
    :Scope: Display

    ..  deprecated:: 14.2
