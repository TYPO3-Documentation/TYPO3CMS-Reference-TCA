:navigation-title: itemsProcessors

..  include:: /Includes.rst.txt
..  _tca-property-itemsProcessors:

============================================================================
itemsProcessors: Processing of items for select, check and radio type fields
============================================================================

The TCA option `itemsProcessors` provides a structured and extensible way
to process items for `select`, `check`, and `radio` type fields. It
supersedes `itemsProcFunc` by allowing multiple processors to be applied
in a defined order using a strictly typed API.

The option is defined as an array of processors. Each processor is executed
sequentially based on its numerical array key, with lower values executed
first. This makes it possible for extensions or integrators to add additional
processing steps without replacing existing logic.

`itemsProcFunc` can still be used, but `itemsProcessors` is the recommended
approach. If both `itemsProcFunc` and `itemsProcessors` are configured,
both are executed. In that case, `itemsProcFunc` is executed first.

..  _tca-property-itemsProcessors-registration:

TCA item processor registration
===============================

..  literalinclude:: /ColumnsConfig/CommonProperties/_codesnippets/_my_table.php
    :caption: EXT:my_extension/Configuration/TCA/tx_myextension_mytable.php
    :visible-lines: 3-4, 12-36
    :emphasize-lines: 24

In this example, `SpecialRelationsProcessor2` is executed before
`SpecialRelationsProcessor`.

..  _tca-property-itemsProcessors-implementation:

TCA item processor implementation
=================================

All processors must implement the
:php-short:`\TYPO3\CMS\Core\DataHandling\ItemsProcessorInterface`.

Processors have two parameters:

*   A :php-short:`\TYPO3\CMS\Core\Schema\Struct\SelectItemCollection` instance
    containing the current items.
*   An :php-short:`\TYPO3\CMS\Core\DataHandling\ItemsProcessorContext` instance
    providing access to table, field, row data, and configuration.

A processor must return a
:php-short:`\TYPO3\CMS\Core\Schema\Struct\SelectItemCollection`. Since items
are handled as objects, newly added items can no longer be represented as
untyped arrays.

..  literalinclude:: /ColumnsConfig/CommonProperties/_codesnippets/SpecialRelationsProcessor.php
    :caption: EXT:my_extension/Classes/Processors/SpecialRelationsProcessor.php

You can add your own parameters to processors. They are exposed
via the processor context.

Add parameters via TCA or page TSconfig and access them through
`$context->processorParameters`.

For example, the following item processor configuration:

..  literalinclude:: /ColumnsConfig/CommonProperties/_codesnippets/_my_table.php
    :caption: EXT:my_extension/Configuration/TCA/tx_myextension_mytable.php
    :visible-lines: 24-34
    :emphasize-lines: 27

can access `$context->processorParameters['foo']`. The value can be overridden
or extended, for example via a site setting defined in page TSconfig:

..  code-block:: typoscript
    :caption: EXT:my_extension/Configuration/Sets/MySet/page.tsconfig

    TCEFORM.tx_myextension_mytable.relation.itemsProcessors.100.foo = {$myExtension.bar}

..  _tca-property-items-processors-registering-item-processors:

Registering item processors in FlexForms
========================================

Registration of processors is also possible inside FlexForms:

..  literalinclude:: /ColumnsConfig/CommonProperties/_codesnippets/_ItemsProcessorsFlexForm.xml
    :caption: EXT:my_extension/Configuration/FlexForms/SomeForm.xml
    :visible-lines: 8-20
    :emphasize-lines: 14
