:navigation-title: itemsProcessors

..  include:: /Includes.rst.txt
..  _tca-property-itemsprocessors:

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

..  _tca-property-itemsprocessors-registration:

TCA item processor registration
===============================

The time zone of a conference gets its items from a processor:

..  literalinclude:: /CodeSnippets/my_extension/Configuration/TCA/Overrides/121-tx_myextension_conference-timezone.php
    :caption: EXT:my_extension/Configuration/TCA/Overrides/121-tx_myextension_conference-timezone.php
    :emphasize-lines: 17-24

A further processor with a key lower than `100` would run before it.

..  _tca-property-itemsprocessors-implementation:

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

..  literalinclude:: /CodeSnippets/my_extension/Classes/Backend/ItemsProcessor/TimezoneItemsProcessor.php
    :caption: EXT:my_extension/Classes/Backend/ItemsProcessor/TimezoneItemsProcessor.php

You can add your own parameters to processors. They are exposed
via the processor context.

Add parameters via TCA or page TSconfig and access them through
`$context->processorParameters`.

For example, the time zone processor reads the regions from its
parameters:

..  literalinclude:: /CodeSnippets/my_extension/Configuration/TCA/Overrides/121-tx_myextension_conference-timezone.php
    :caption: EXT:my_extension/Configuration/TCA/Overrides/121-tx_myextension_conference-timezone.php
    :emphasize-lines: 20-22

The processor accesses `$context->processorParameters['regions']`. The value
can be overridden or extended, for example via a site setting defined in
page TSconfig:

..  code-block:: typoscript
    :caption: EXT:my_extension/Configuration/Sets/MySet/page.tsconfig

    TCEFORM.tx_myextension_conference.timezone.itemsProcessors.100.regions = {$myExtension.regions}

..  _tca-property-items-processors-registering-item-processors:

Registering item processors in FlexForms
========================================

Registration of processors is also possible inside FlexForms:

..  literalinclude:: /CodeSnippets/my_extension/Configuration/FlexForms/ConferenceList.xml
    :caption: EXT:my_extension/Configuration/FlexForms/ConferenceList.xml
    :visible-lines: 91-111
    :emphasize-lines: 102-109
