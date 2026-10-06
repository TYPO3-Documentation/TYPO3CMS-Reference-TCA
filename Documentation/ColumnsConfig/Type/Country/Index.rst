:navigation-title: Country

..  include:: /Includes.rst.txt
..  _columns-country:

=======================
Country picker TCA type
=======================

..  versionadded:: 14.0

The TCA type `country` can be used to render a country picker. Its main
purpose is to use the
`Country API <https://docs.typo3.org/permalink/t3coreapi:country-api>`_ to provide
a country selection in the backend and use the stored representation in Extbase
or TypoScript output.

..  seealso::
    *   `Country API <https://docs.typo3.org/permalink/t3coreapi:country-api>`_
    *   `Form.countrySelect ViewHelper <f:form.countrySelect> <https://docs.typo3.org/permalink/t3viewhelper:typo3-fluid-form-countryselect>`_

..  contents:: Table of contents:
    :local:
    :depth: 1

..  _columns-country-example:

Example: Define a basic country picker
======================================

..  figure:: /Images/Conference/CountrySpeaker.png
    :alt: The country of a speaker
    :class: with-shadow

    The country of a speaker

The following code displays a basic country picker for the country of a
speaker. The localized name is displayed to the backend users.

..  tabs::

    ..  group-tab:: TCA

        ..  literalinclude:: /CodeSnippets/my_extension/Configuration/TCA/Overrides/325-tx_myextension_speaker-country.php
            :caption: EXT:my_extension/Configuration/TCA/Overrides/325-tx_myextension_speaker-country.php
            :emphasize-lines: 11-12

    ..  group-tab:: Flexform

        ..  literalinclude:: /CodeSnippets/my_extension/Configuration/FlexForms/ConferenceList.xml
            :caption: EXT:my_extension/Configuration/FlexForms/ConferenceList.xml
            :visible-lines: 1-7, 79-90, 112-114, 156-157
            :emphasize-lines: 82-83

..  _columns-country-example-extended:

Extended country picker example
===============================

The following example demonstrates most of the properties of the
country picker TCA type. A location can only be in one of a few countries,
and Switzerland, Germany, and Austria are listed first:

..  figure:: /Images/Conference/CountryLocation.png
    :alt: The country of a location
    :class: with-shadow

    The country of a location

..  tabs::

    ..  group-tab:: TCA

        ..  literalinclude:: /CodeSnippets/my_extension/Configuration/TCA/Overrides/410-tx_myextension_location-country.php
            :caption: EXT:my_extension/Configuration/TCA/Overrides/410-tx_myextension_location-country.php
            :emphasize-lines: 12-22

    ..  group-tab:: Flexform

        ..  literalinclude:: /CodeSnippets/my_extension/Configuration/FlexForms/ConferenceList.xml
            :caption: EXT:my_extension/Configuration/FlexForms/ConferenceList.xml
            :visible-lines: 1-7, 79-90, 112-114, 156-157
            :emphasize-lines: 84-88

Additional countries can be added via the
`BeforeCountriesEvaluatedEvent <https://docs.typo3.org/permalink/t3coreapi:beforecountriesevaluatedevent>`_.

..  _columns-country-properties:

Properties of TCA column type `country`
=======================================

..  confval-menu::
    :name: country
    :display: table
    :type:
    :Scope:

    ..  include:: _Properties/_*.rst.txt
        :show-buttons:
