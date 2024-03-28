..  include:: /Includes.rst.txt
..  _columns-select-properties-dbFieldLength:

=============
dbFieldLength
=============

..  versionadded:: 13.0
    As TYPO3 takes care of
    :ref:`generating the according database field <t3coreapi:auto-generated-db-structure>`
    for `select` fields since TYPO3 v13, a developer can adjust the length
    of the database field with this option in TCA directly.

..  confval:: dbFieldLength
    :name: select-dbFieldLength
    :Path: $GLOBALS['TCA'][$table]['columns'][$field]['config']
    :type: integer
    :Default: 255
    :Scope: Proc.
    :RenderType: all

    The TCA config option :php:`dbFieldLength` has contains an integer value
    that is applied to :sql:`varchar` fields (not :sql:`text`) and defines the
    length of the database field. It will not be respected for fields that
    resolve to an integer type. Developers who wish to optimize field length can
    use :php:`dbFieldLength` for :php:`type=select` fields to increase or
    decrease the default length.

Example
=======

..  code-block:: php
    :caption: Excerpt from EXT:my_extension/Configuration/TCA/myextension_domain_model_mytable.php

    'my_field' => [
        'label' => 'My field',
        'config' => [
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => [
                ['label' => '', 'value' => ''],
                ['label' => 'Some label', 'value' => 'some'],
                ['label' => 'Another label', 'value' => 'another'],
            ],
            'default' => '',
            'dbFieldLength' => 10,
    ],
