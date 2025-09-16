..  include:: /Includes.rst.txt

..  _columns-user:

====================
Custom inputs (user)
====================

..  contents:: Table of contents:
    :local:
    :depth: 1

..  _columns-user-introduction:

Introduction
============

There are three columns config types that do similar things, but still have subtle differences between them.
These are the :ref:`none type <columns-none>`, the :ref:`passthrough type <columns-passthrough>` and the
:ref:`user type <columns-user>`.

Characteristics of `user`:

*   A value sent to the DataHandler is just kept as is and put into the database field. Default FormEngine
    however never sends values.
*   Unlike `none`, the type `user` must have a database field.
*   FormEngine only renders a dummy element for type `user` fields by default. It should be combined with a
    custom `renderType`.
*   Type `user` field values are rendered as-is at other places in the backend. They for instance can be selected
    to be displayed in the list module "single table view".
*   Field updates by the DataHandler get logged and the history/undo function will work with such values.

The `user` field can be useful, if:

*   A special rendering and evaluation is needed for a value when editing records via FormEngine.

..  note::
    In previous versions of TYPO3 core, :php:`type='user'` had a property `userFunc` to call an own class
    method of some extension. This has been substituted with a custom element using a `renderType`.
    See example below.


..  _columns-user-examples:

Examples
========

This example is part of the TYPO3 Documentation Team extension :composer:`t3docs/examples`.

The example registers an own node element, a TCA field using it and a class
implementing a rendering. See :ref:`FormEngine docs
<t3coreapi:FormEngine-Rendering-NodeFactory>` for more details on this.

..  rst-class:: bignums

1.  Verify Extension Compatibility with Dependency Injection (DI)

    ..  versionchanged:: 13.0

        Form Elements are now instantiated using
        `Dependency injection <https://docs.typo3.org/permalink/t3coreapi:dependency-injection>`_.
        Therefore, ensure your TYPO3 extension includes a properly
        configured :file:`Configuration/Services.yaml` file.

    Make sure your extension contains a :file:`Configuration/Services.yaml` file with
    the minimal configuration. For the minimal content, see the section about
    `Services.yaml declaring service defaults <https://docs.typo3.org/permalink/t3coreapi:dependency-injection-in-extensions>`_
    in the TYPO3 documentation.

2.  Register the new renderType node element

    Add to :file:`ext_localconf.php`:

    ..  code-block:: php
        :caption: EXT:my_extension/ext_localconf.php

        $GLOBALS['TYPO3_CONF_VARS']['SYS']['formEngine']['nodeRegistry'][<current timestamp>] = [
            'nodeName' => 'specialField',
            'priority' => 40,
            'class' => \MyVendor\MyExtension\Form\Element\SpecialFieldElement::class,
        ];


3.  Use the renderType in a TCA field definition

    Add the field to the TCA definition, here in
    :file:`Configuration/TCA/Overrides/fe_users.php`:

    ..  literalinclude:: _includes/_fe_users.php
        :caption: EXT:my_extension/Configuration/TCA/Overrides/fe_users.php

4.  Implement the FormElement class

    The :php:`renderType` can be implemented by extending the class
    :php:`AbstractFormElement` and overriding the function :php:`render()`:

    ..  literalinclude:: _includes/_SpecialFieldElement.php
        :caption: EXT:my_extension/Classes/Form/Element/SpecialFieldElement.php

    ..  versionchanged:: 13.3
        The label of a custom field does not get rendered automatically anymore
        but must be rendered with :php:`$this->renderLabel($fieldId)` or
        :php:`$this->wrapWithFieldsetAndLegend()`.

    ..  rubric:: Migration

    If the custom field is used with TYPO3 v13, add :php:`$this->renderLabel($fieldId)`
    to the output. If your extension should be compatible with both TYPO3 v12.4
    and v13 make a version check first and only add this for major versions
    larger then 12.

    ..  literalinclude:: _includes/_Label.diff
        :caption: EXT:my_extension/Classes/Form/Element/SpecialFieldElement.php

    ..  attention::
        The returned data in :php:`$resultArray['html']` will be output in the
        TYPO3 Backend as it is passed. Therefore don't trust user input in
        order to prevent :ref:`cross-site scripting (XSS)
        <t3coreapi:security-xss>`.

    The array :php:`$this->data` consists of the following parts:

    *   The row of the currently edited record in
        :php:`$this->data['databaseRow']`
    *   The configuration from the TCA in
        :php:`$this->data['parameterArray']['fieldConf']['config']`
    *   The name of the input field in
        :php:`$this->data['parameterArray']['itemFormElName']`
    *   The current value of the field in
        :php:`$this->data['parameterArray']['itemFormElValue']`

    In order for the field to work, it is vital, that the corresponding
    HTML input field has a unique :html:`id` attribute, fills the
    attributes :html:`name` and :html:`data-formengine-input-name` with the
    correct name, as provided in the :php:`itemFormElName`.

    ..  note::
        The returned data in :php:`$resultArray['html']` must be valid HTML.
        Invalid HTML (e.g. not closed elements) may result in unexpected
        behaviour in TYPO3 (e.g. new inline elements not saved).


The field would then look like this in the backend:

..  include:: /Images/Rst/ExtendingTcaFeUsers.rst.txt

This example is also described in TYPO3 Explained,
:ref:`Extending TCA example <t3coreapi:extending-examples-feusers>`.

..  _columns-user-properties-notablewrapping:
..  _columns-user-properties-parameters:
..  _columns-user-properties-userfunc:
..  _columns-user-properties:

Properties of the TCA column type `user`
========================================

..  _columns-user-properties-renderType:

..  confval:: renderType
    :name: user-renderType
    :Path: $GLOBALS['TCA'][$table]['columns'][$field]['config']['renderType']
    :type: integer
    :Scope: Display

    The default renderType simply displays a dummy entry, indicating that a
    custom renderType should be added. Additional render types can be defined
    based on the requirements of the user type field. These render types
    determine how the field is displayed and interacted with in the TYPO3
    backend, allowing for specialized rendering and user interaction. Custom
    render types provide a tailored experience for editing records
    via the FormEngine.
