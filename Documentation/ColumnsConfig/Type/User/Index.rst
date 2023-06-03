..  include:: /Includes.rst.txt

..  _columns-user:

====================
Custom inputs (user)
====================

..  contents:: Table of contents:
    :local:

..  _columns-user-introduction:

Introduction
============

There are three columns config types that do similar things, but still have subtle differences between them.
These are the :ref:`none type <columns-none>`, the :ref:`passthrough type <columns-passthrough>` and the
:ref:`user type <columns-user>`.

Characteristics of `user`:

*   A value sent to the DataHandler is just kept as is and put into the database field. Default FormEngine
    however never sends values.
*   Unlike none, type user must have a database field.
*   FormEngine only renders a dummy element for type user fields by default. It should be combined with a
    custom renderType.
*   Type user field values are rendered as-is at other places in the backend. They for instance can be selected
    to be displayed in the list module "single table view".
*   Field updates by the DataHandler get logged and the history/undo function will work with such values.

The `user` field can be useful, if:

*   A special rendering and evaluation is needed for a value when editing records via FormEngine.

..  note::
    In previous versions of TYPO3 core, :php:`type='user'` had a property `userFunc` to call an own class
    method of some extension. This has been substituted with a custom element using a `renderType`.
    See example below.


.. _columns-user-examples:

Examples
========

This example is part of the TYPO3 Documentation Team extension :t3ext:`examples/`.

The example registers an own node element, a TCA field using it and a class
implementing a rendering. See :ref:`FormEngine docs
<t3coreapi:FormEngine-Rendering-NodeFactory>` for more details on this.

.. rst-class:: bignums


1.  Register the new renderType node element

    Add to :file:`ext_localconf.php`:

    ..  code-block:: php
        :caption: EXT:my_extension/ext_localconf.php

        $GLOBALS['TYPO3_CONF_VARS']['SYS']['formEngine']['nodeRegistry'][<current timestamp>] = [
            'nodeName' => 'specialField',
            'priority' => 40,
            'class' => \MyVendor\MyExtension\Form\Element\SpecialFieldElement::class,
        ];


2.  Use the renderType in a TCA field definition

    Add the field to the TCA definition, here in
    :file:`Configuration/TCA/Overrides/fe_users.php`:

    ..  literalinclude:: _includes/_fe_users.php
        :caption: EXT:my_extension/Configuration/TCA/Overrides/fe_users.php

3.  Implement the FormElement class

    The :php:`renderType` can be implemented by extending the class
    :php:`AbstractFormElement` and overriding the function :php:`render()`:

    ..  literalinclude:: _includes/_SpecialFieldElement.php
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

Properties
==========

..  _columns-user-properties-dbType:

dbType
------

..  versionadded:: 12.2
    The dbType `json` was introduced to allow storage and usage of JSON data.

..  confval:: dbType (type => user)

    :Path: $GLOBALS['TCA'][$table]['columns'][$field]['config']['dbType']
    :type: string
    :Scope: Proc

    `json`
        When the property dbType is set to `json`, the form engine
        provides the decoded JSON to the RecordProviders and the `user`
        PHP implementation (extending :php:`TYPO3\CMS\Backend\Form\Element\AbstractFormElement`)
        can then use the field value.

        ..  note:: In the frontend and in custom backend implementations the
            implementing code still **must** decode the string into a PHP array:

            If :ref:`Connection->insert() <t3coreapi:database-connection-insert>`
            or :ref:`Connection->update()  <t3coreapi:database-connection-update>` are
            used, and not specified types handed over, the database scheme is
            used and the native format for JSON fields data will then encoded.

            This does not work for :ref:`QueryBuilder <t3coreapi:database-query-builder>`.
            Same goes for Extbase, which is not decoding this field type yet
            but retrieving it as a string.

dbType = json example
~~~~~~~~~~~~~~~~~~~~~

The system extension :t3ext:`reaction` uses a TCA field of type `user` with
the dbType `json`:

..  code-block:: php
    :caption: :t3src:`reaction/Configuration/TCA/Overrides/sys_reaction_create_record.php` (excerpt)

    <?php

    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns(
        'sys_reaction',
        [
            // ...
            'fields' => [
                'label' => 'LLL:EXT:reactions/Resources/Private/Language/locallang_db.xlf:sys_reaction.fields',
                'config' => [
                    'type' => 'user',
                    'renderType' => 'fieldMap',
                    'dbType' => 'json',
                    'default' => '{}',
                ],
            ],
        ]
    );

The implementing class receives the parsed JSON as PHP array:

..  literalinclude:: _includes/_FieldMapElement.php
    :caption: :t3src:`reaction/Classes/Form/Element/FieldMapElement.php` (excerpt)

..  _columns-user-properties-renderType:

renderType
----------

..  confval:: renderType (type => user)

    :Path: $GLOBALS['TCA'][$table]['columns'][$field]['config']['renderType']
    :type: integer
    :Scope: Display

    The default renderType just renders a dummy entry to indicate a custom
    renderType should be added. Additional render types
