<?php

use TYPO3\CMS\Core\Schema\Struct\SelectItem;

// Inside an item processor implementation ...

// Additional item, minimal
$items->add(
    new SelectItem(
        type: 'select',
        label: 'LLL:my_extension.db:my_item',
        value: 42,
    )
);

// Additional item, extended, with description
$items->add(
    new SelectItem(
        type: 'select',
        label: 'LLL:my_extension.db:my_item',
        value: 42,
        group: 'group1',
        icon: 'EXT:styleguide/Resources/Public/Icons/tx_styleguide.svg',
        description: 'LLL:my_extension.db:my_item.description',
    )
);

// Additional item, extended, with description as array
$items->add(
    new SelectItem(
        type: 'select',
        label: 'LLL:my_extension.db:my_item',
        value: 42,
        group: 'group1',
        icon: 'EXT:styleguide/Resources/Public/Icons/tx_styleguide.svg',
        description: [
            'title' => 'LLL:my_extension.db:my_item.title',
            'description' => 'LLL:my_extension.db:my_item.description',
        ],
    )
);

// Divider
$items->add(
    new SelectItem(
        type: 'select',
        label: 'LLL:my_extension.db:my_divider',
        value: '--div--',
    )
);
