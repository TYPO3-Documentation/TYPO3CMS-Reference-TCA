..  include:: /Includes.rst.txt
..  _tca_property_fieldInformation_tcaDescription:
..  _tca_property_fieldInformation_tcaDescription_examples:
..  _tca_property_fieldInformation_tcaDescription_examples_activateTcaDescription:
..  _tca_property_fieldInformation_tcaDescription_examples_renderDescription:

==============
tcaDescription
==============

..  versionchanged:: 15.0
    The `tcaDescription` field information render type has been removed. It was
    deprecated with TYPO3 14.2. Field descriptions configured via
    `['columns']['my_field']['description'] <https://docs.typo3.org/permalink/t3tca:confval-columns-description>`_
    are rendered automatically next to the field label, so no field information
    has to be configured for them.

    Remove any explicit `tcaDescription` field information configuration from
    your TCA.

    See `Breaking: #109783 - Deprecated functionality removed <https://docs.typo3.org/permalink/changelog:breaking-109783-1776735296>`_ and
    `Deprecation: #109280 - FormEngine TcaDescription fieldInformation <https://docs.typo3.org/permalink/changelog:deprecation-109280-1742109280>`_

..  confval:: tcaDescription
    :name: fieldInformation-tcaDescription
    :Path: $GLOBALS['TCA'][$table]['columns'][$field]['config']['fieldInformation']
    :type: array
    :Scope: fieldInformation

    ..  versionchanged:: 15.0
        Removed. Field descriptions are rendered automatically.
