:navigation-title: Examples

..  include:: /Includes.rst.txt
..  _ctrl-examples:

==============================================
Examples demonstrating the ctrl section of TCA
==============================================

The conference table of the conference extension has a configuration
such as this:

..  literalinclude:: /CodeSnippets/my_extension/Configuration/TCA/tx_myextension_conference.php
    :caption: EXT:my_extension/Configuration/TCA/tx_myextension_conference.php
    :visible-lines: 4-29

..  _tca-example-ctrl-minimal:

Minimal table configuration
===========================

The sponsors of the conference extension have a small `ctrl` section:

..  literalinclude:: /CodeSnippets/my_extension/Configuration/TCA/tx_myextension_sponsor.php
    :caption: EXT:my_extension/Configuration/TCA/tx_myextension_sponsor.php
    :emphasize-lines: 5-6, 11

Property `label` is a mandatory setting, `title` and `iconfile` are a
recommended minimum. The :guilabel:`Content > Records` module shows the icon
and the translated title of the table, and it uses the value of the field
`name` as title for single rows:

..  figure:: /Images/Conference/CtrlMinimalRecordList.png
    :alt: The sponsors in the Content > Records module
    :class: with-shadow

    The sponsors in the Content > Records module

The sponsors additionally sort by name, keep deleted records in the database,
and store when a record was created and changed. Single record
administration is still limited with this setup: The sponsors can not be
sorted manually, hidden, or translated. TYPO3 creates all database columns
from the TCA.


..  _tca-example-ctrl-tt-content:

Core table tt_content
=====================

Table `tt_content` makes much more excessive use of the `['ctrl']` section:

..  include:: /CodeSnippets/TtContentCtrl.rst.txt

A few remarks:

*   When tt_content records are displayed in the backend, the "label" property
    indicates that you will see the content from the field named "header"
    shown as the title of the record. If that field is empty, the content of field
    subheader and if empty, of field bodytext is used as title.

*   The field called "sorting" will be used to determine the order in
    which tt_content records are displayed within each branch of the page tree.

*   The title for the table as shown in the backend is defined as coming from a "locallang" file.

*   The "type" field will be the one named "CType". The value of this field determines the set of fields
    shown in the edit forms in the backend, see the :ref:`['types'] <types>` section for details.

*   Of particular note is the "enablecolumns" property. It is quite extensive for this table since it is a
    frontend-related table. Thus proper access rights, publications dates, etc. must be enforced.

*   Every type of content element has its own icon and its own class, used in conjunction with the
    :ref:`Icon API <t3coreapi:icon>` to visually represent that type in the TYPO3 backend.


..  _tca-example-ctrl-container:

Extended container examples
===========================

..  _tca-example-ctrl-container-disable:

Disable a built-in wizard
-------------------------

..  literalinclude:: _CodeSnippets/_disableFieldWizard.php
    :caption: EXT:my_extension/Configuration/TCA/tx_myextension_domain_model_something.php

This disables the default `localizationStateSelector` fieldWizard of
`inlineControlContainer`.

..  _tca-example-ctrl-container-cusotm:

Add your own wizard
-------------------

Register an own node in a :file:`ext_localconf.php`:

..  literalinclude:: _CodeSnippets/_WizardRegistration/_ext_localconf.php
    :caption: EXT:my_extension/ext_localconf.php

Register the new node as `fieldWizard` of `tt_content` table in an
:file:`Configuration/TCA/Overrides/tt_content.php` file:

..  literalinclude:: _CodeSnippets/_WizardRegistration/_tca_overrides.php
    :caption: EXT:my_extension/Configuration/TCA/Overrides/tt_content.php

In PHP, the node has to implement an interface, but can return any additional HTML which is rendered in the
"OuterWrapContainer" between the record title and the field body when editing a record:

..  include:: /Images/ManualScreenshots/OuterFieldWizard.rst.txt

..  _tca-example-ctrl-container-inline:

Add fieldInformation to field of type inline
--------------------------------------------

This example can be found in :ref:`the example with a custom fieldInformation <inline-example-field-information>`.
