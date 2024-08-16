:navigation-title: Examples

..  include:: /Includes.rst.txt
..  _ctrl-examples:

==============================================
Examples demonstrating the ctrl section of TCA
==============================================

A common table has a configuration such as this:

..  include:: /CodeSnippets/TxStyleguideCtrlCommon.rst.txt

..  _tca_example_ctrl_minimal:

Minimal table configuration
===========================

..  include:: /Images/Rst/TxStyleguideCtrlMinimal.rst.txt

..  include:: /CodeSnippets/TxStyleguideCtrlMinimal.rst.txt

Property :code:`label` is a mandatory setting, but the above properties are a recommended
minimum. The list module shows an icon and a translated title of the table, and it uses the value of
field :code:`title` as title for single rows. Single record administration however is limited with this setup: This
table does not implement soft delete, record rows can not be sorted between each other, record localization is not
possible, and much more. In the database, only columns :code:`uid`, :code:`pid` and :code:`title` are needed
in :file:`ext_tables.sql` with this setup.


..  _tca_example_ctrl_tt_content:

Core table tt_content
=====================

Table :code:`tt_content` makes much more excessive use of the :code:`['ctrl']` section:

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


..  _tca_example_ctrl_container:

Extended container examples
===========================

..  _tca_example_ctrl_container-disable:

Disable a built-in wizard
-------------------------

..  literalinclude:: _CodeSnippets/_disableFieldWizard.php

This disables the default :php:`localizationStateSelector` fieldWizard of
:php:`inlineControlContainer`.

..  _tca_example_ctrl_container-cusotm:

Add your own wizard
-------------------

Register an own node in a :file:`ext_localconf.php`:

..  literalinclude:: _CodeSnippets/_WizardRegistration/_ext_localconf.php
    :caption: EXT:my_extension/ext_localconf.php

Register the new node as `fieldWizard` of `tt_content` table in an
:file:`Configuration/TCA/Overrides/tt_content.php` file:

..  literalinclude:: _CodeSnippets/_WizardRegistration/_ext_localconf.php
    :caption: EXT:my_extension/Configuration/TCA/Overrides/tt_content.php

In PHP, the node has to implement an interface, but can return any additional HTML which is rendered in the
"OuterWrapContainer" between the record title and the field body when editing a record:

..  include:: /Images/ManualScreenshots/OuterFieldWizard.rst.txt

..  _tca_example_ctrl_container-inline:

Add fieldInformation to field of type inline
--------------------------------------------

This example can be found in :ref:`inline-example-field-information`.
