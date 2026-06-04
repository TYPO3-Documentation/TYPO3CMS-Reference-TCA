..  include:: /Includes.rst.txt
..  _tca_property_fieldInformation_tcaDescription:
..  _tca_property_fieldInformation_tcaDescription_examples:
..  _tca_property_fieldInformation_tcaDescription_examples_activateTcaDescription:
..  _tca_property_fieldInformation_tcaDescription_examples_renderDescription:

==============
tcaDescription
==============

..  deprecated:: 14.2
    The `TcaDescription` field information render type has been deprecated.
    Field descriptions configured via `['columns']['my_field']['description'] <https://docs.typo3.org/permalink/t3tca:confval-columns-description>`_
    are now rendered automatically next to the field label.

    Remove any explicit :php:`tcaDescription` field information configuration from
    TCA when dropping TYPO3 13.4 support.

    See `Deprecation: #109280 - FormEngine TcaDescription fieldInformation <https://docs.typo3.org/permalink/changelog:deprecation-109280-1742109280>`_

..  confval:: tcaDescription
    :name: fieldInformation-tcaDescription
    :Path: $GLOBALS['TCA'][$table]['columns'][$field]['config']['fieldInformation']
    :type: array
    :Scope: fieldInformation

    ..  deprecated:: 14.2
