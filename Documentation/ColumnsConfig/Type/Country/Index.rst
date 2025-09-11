:navigation-title: Country

..  include:: /Includes.rst.txt
..  _columns-country:

=======================
Country picker TCA type
=======================

..  versionadded:: 14.0

The TCA type :php:`country` can be used to render a country picker. Its main
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

..  figure:: /Images/ManualScreenshots/CountryBasic.png
    :alt: A country picker in the TYPO3 backend, displaying the ISO2 Code, here 'CH' and the flag of the country

The following code displays a basic country picker with Suisse (Iso code `CH`)
as default value. The localized name is displayed to the backend users.

.. tabs::

    ..  group-tab:: TCA

        ..  literalinclude:: _country-basic.php
            :caption: packages/my_extension/Configuration/TCA/tx_myextension_domain_model_address.php

    ..  group-tab:: Flexform

        ..  literalinclude:: _country-basic-flex.xml
            :caption: packages/my_extension/Configuration/FlexForms/Address.xml

..  _columns-country-example-extended:

Extended country picker example
===============================

The following example demonstrates most of the properties of the
country picker TCA type:

.. tabs::

    ..  group-tab:: TCA

        ..  literalinclude:: _country-extended.php
            :caption: packages/my_extension/Configuration/TCA/tx_myextension_domain_model_address.php

    ..  group-tab:: Flexform

        ..  literalinclude:: _country-extended-flex.xml
            :caption: packages/my_extension/Configuration/FlexForms/Address.xml

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
