..  include:: /Includes.rst.txt
..  _tca-property-itemsprocfunc:

=============
itemsProcFunc
=============

..  confval:: itemsProcFunc
    :name: itemsProcFunc
    :TCA path: $GLOBALS['TCA'][$table]['columns'][$field]['config']['itemsProcFunc']
    :type: string (class->method reference)
    :Scope: Display / Proc.
    :Types: :ref:`check <columns-check>`, :ref:`select <columns-select>`, :ref:`radio <columns-radio>`

    PHP method which is called to fill or manipulate the items array.
    It is recommended to use the actual FQCN with :php:`class` and then concatenate the method:

    :php:`\MyVendor\MyExtension\UserFunction\FormEngine\YourClass::class . '->yourMethod'`

    This becomes handy when using an IDE and doing operations like renaming classes.

    The provided method will have an array of parameters passed to it. The items array is passed by reference
    in the key `items`. By modifying the array of items, you alter the list of items. A method may throw an
    exception which will be displayed as a proper error message to the user.

..  _tca-property-items-proc-func-passed-parameters:

Passed parameters
=================

*   `items` (passed by reference)
*   `config` (TCA config of the field)
*   `TSconfig` (The matching :ref:`itemsProcFunc TSconfig <t3tsref:itemsProcFunc>`)
*   `table` (current table)
*   `row` (current database record)
*   `field` (current field name)
*   `effectivePid` (correct page ID)
*   `site` (current site)

The following parameter only exists if the field has a :ref:`flex parent <columns-flex>`.

*   `flexParentDatabaseRow`

The following parameters are filled if the current record has an
:ref:`inline parent <columns-inline>`.

*   `inlineParentUid`
*   `inlineParentTableName`
*   `inlineParentFieldName`
*   `inlineParentConfig`
*   `inlineTopMostParentUid`
*   `inlineTopMostParentTableName`
*   `inlineTopMostParentFieldName`

..  _tca-property-items-proc-func-example:

Example
=======

A talk belongs to one track of its conference. The conference lists its
tracks in a text field, one per line:

..  literalinclude:: /CodeSnippets/my_extension/Configuration/TCA/Overrides/129-tx_myextension_conference-tracks.php
    :caption: EXT:my_extension/Configuration/TCA/Overrides/129-tx_myextension_conference-tracks.php
    :emphasize-lines: 9-16

The field `track` of the talk adds these tracks as items:

..  figure:: /Images/Conference/ItemsProcFuncTrack.png
    :alt: The track of a talk
    :class: with-shadow

    The track of a talk

..  literalinclude:: /CodeSnippets/my_extension/Configuration/TCA/Overrides/290-tx_myextension_talk-track.php
    :caption: EXT:my_extension/Configuration/TCA/Overrides/290-tx_myextension_talk-track.php
    :emphasize-lines: 18

The referenced `itemsProcFunc` method should populate the items by filling
:php:`$params['items']`:

..  literalinclude:: /CodeSnippets/my_extension/Classes/Backend/TrackItems.php
    :caption: EXT:my_extension/Classes/Backend/TrackItems.php

The method uses the passed parameter `row` to find the conference of the
talk. A new talk is not stored yet, so its conference is the inline parent
in `inlineParentUid`.
