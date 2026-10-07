..  include:: /Includes.rst.txt
..  _tca-property-fieldinformation:

================
fieldInformation
================

The `fieldInformation` is a reserved area within a single form element between
the label and the form element itself.

..  confval:: fieldInformation
    :name: fieldInformation
    :TCA path: $GLOBALS['TCA'][$table]['columns'][$field]['config']['fieldInformation']
    :type: array
    :Scope: Display

Currently, TYPO3 comes with following implemented `fieldInformation` nodes:

..  toctree::
    :titlesonly:

    TcaDescription

..  _tca-property-fieldinformation-example:

Example
=======

The email address of a speaker shows a translated information text below
its label. The label reference of the text is passed to the node in the
`options` of its `fieldInformation` configuration:

..  figure:: /Images/Conference/FieldInformationEmail.png
    :alt: The email address of a speaker with an information text
    :class: with-shadow

    The email address of a speaker with an information text

..  literalinclude:: /CodeSnippets/my_extension/Configuration/TCA/Overrides/310-tx_myextension_speaker-email.php
    :caption: EXT:my_extension/Configuration/TCA/Overrides/310-tx_myextension_speaker-email.php
    :emphasize-lines: 14-22

The node receives the options in
:php:`$this->data['renderData']['fieldInformationOptions']` and returns the
HTML to show:

..  literalinclude:: /CodeSnippets/my_extension/Classes/Form/FieldInformation/InformationText.php
    :caption: EXT:my_extension/Classes/Form/FieldInformation/InformationText.php

The node is registered with the name used as `renderType` in
:file:`ext_localconf.php`:

..  literalinclude:: /CodeSnippets/my_extension/ext_localconf.php
    :caption: EXT:my_extension/ext_localconf.php
    :emphasize-lines: 42-46
