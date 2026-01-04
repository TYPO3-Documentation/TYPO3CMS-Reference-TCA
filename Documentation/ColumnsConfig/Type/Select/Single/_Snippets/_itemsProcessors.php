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

// Additional item, extended
$items->add(
    new SelectItem(
        type: 'select',
        label: 'LLL:my_extension.db:my_item',
        value: 42,
        group: 'group1',
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
