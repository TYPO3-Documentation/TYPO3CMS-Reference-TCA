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

..  literalinclude:: _codesnippets/_my_table.php
    :caption: EXT:my_extension/Configuration/TCA/my_table.php

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

..  literalinclude:: _codesnippets/SpecialRelationsProcessor.php
    :caption: EXT:my_extension/Classes/Processors/SpecialRelationsProcessor.php

You can add your own parameters to processors. They are exposed
via the processor context.

Add parameters via TCA or page TSconfig and access them through
`$context->processorParameters`.

For example, the following item processor configuration:

..  code-block:: php
    :caption: EXT:my_extension/Configuration/TCA/my_table.php

    // ...
    100 => [
        'class' => SpecialRelationsProcessor::class,
        'parameters' => [
            'foo' => 'bar',
        ],
    ],

can access `$context->processorParameters['foo']`. The value can be overridden
or extended, for example via a site setting defined in page TSconfig:

..  code-block:: typoscript
    :caption: EXT:my_extension/Configuration/Sets/MySet/page.tsconfig

    TCEFORM.example_table.content.itemsProcessors.100.foo = {$myExtension.bar}

Registering item processors in FlexForms
========================================

Registration of processors is also possible inside FlexForms:

..  code-block:: xml
    :caption: EXT:my_package/Configuration/FlexForms/SomeForm.xml

    <some_selector>
        <label>Choice</label>
        <config>
            <type>select</type>
            <renderType>selectSingle</renderType>
            <itemsProcessors>
                <numIndex index="100">
                    <class>MyVendor\MyPackage\Processors\SpecialRelationsProcessor</class>
                </numIndex>
            </itemsProcessors>
        </config>
    </some_selector>
