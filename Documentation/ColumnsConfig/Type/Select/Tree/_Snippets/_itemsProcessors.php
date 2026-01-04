<?php

use TYPO3\CMS\Core\Schema\Struct\SelectItem;

// Inside an item processor implementation ...

$items->add(
    new SelectItem(
        type: 'select',
        label: 'LLL:my_extension.db:my_item',
        value: 42,
    )
);
