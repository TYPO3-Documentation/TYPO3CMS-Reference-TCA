..  include:: /Includes.rst.txt
..  _tca-property-fieldinformation:

================
fieldInformation
================

The `fieldInformation` is a reserved area within a single form element between
the label and the form element itself.

..  include:: /Images/Rst/FieldInformationTcaDescription.rst.txt

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

The field `tags` shows a translated information text next to its label.
The label reference of the text is passed to the node in the `options` of
its `fieldInformation` configuration:

..  literalinclude:: /ColumnsConfig/CommonProperties/_codesnippets/_FieldInformationTca.php
    :caption: EXT:my_extension/Configuration/TCA/tx_myextension_product.php
    :visible-lines: 9-22
    :emphasize-lines: 15

The node receives the options in
:php:`$this->data['renderData']['fieldInformationOptions']` and returns the
HTML to show:

..  literalinclude:: /ColumnsConfig/CommonProperties/_codesnippets/_FieldInformationClass.php
    :caption: EXT:my_extension/Classes/Backend/FieldInformation/TagInformation.php

The node is registered with the name used as `renderType` in
:file:`ext_localconf.php`:

..  literalinclude:: /ColumnsConfig/CommonProperties/_codesnippets/_FieldInformationRegistration.php
    :caption: EXT:my_extension/ext_localconf.php
