..  include:: /Includes.rst.txt
..  _tca_property_fieldInformation_tcaDescription:

==============
tcaDescription
==============

Use this `fieldInformation` to allow adding a more detailed description to the
form element. `tcaDescription` will read the `description` part of the
TCA column definition. If that value starts with `LLL:` it will render a
translated output. Else it will render the text unmodified.

..  include:: /Images/Rst/FieldInformationTcaDescription.rst.txt

..  confval:: tcaDescription
    :name: fieldInformation-tcaDescription
    :Path: $GLOBALS['TCA'][$table]['columns'][$field]['config']['fieldInformation']
    :type: array
    :Scope: fieldInformation

    ..  note::
        The HTML tags for this specific area are limited to:
        `<a>`, `<br>`, `<br/>`, `<div>`, `<em>`, `<i>`, `<p>`, `<strong>`,
        `<span>`, `<code>`.

`tcaDescription` is activated for most of the TYPO3 form elements by default.

..  _tca_property_fieldInformation_tcaDescription_examples:

Examples
========

..  _tca_property_fieldInformation_tcaDescription_examples_activateTcaDescription:

Activate tcaDescription
-----------------------

For most of the TYPO3 own form elements it is not needed to activate
`tcaDescription` as it is activated by default. Before adding `tcaDescription`
to any kind of form elements you have to make sure the element supports the
rendering of `fieldInformation`.

..  literalinclude:: /CodeSnippets/Manual/FieldInformationTcaDescription.php
    :caption: EXT:my_extkey/Configuration/TCA/Overrides/pages.php

..  _tca_property_fieldInformation_tcaDescription_examples_renderDescription:

Render a description
--------------------

As `tcaDescription` is activated for most of the TYPO3 own form elements,
it just needs to set the `description` property:

..  literalinclude:: /CodeSnippets/Manual/FieldInformationRenderDescription.php
    :caption: EXT:seo/Configuration/TCA/Overrides/pages.php
