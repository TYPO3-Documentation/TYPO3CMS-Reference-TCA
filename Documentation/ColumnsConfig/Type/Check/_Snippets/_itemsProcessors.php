<?php

use TYPO3\CMS\Core\Schema\Struct\SelectItem;

// Inside an item processor implementation ...

// Minimal example
$items->add(
    new SelectItem(
        type: 'check',
        label: 'LLL:my_extension.db:my_item',
        value: null,
    )
);

// Extended example
$items->add(
    new SelectItem(
        type: 'check',
        label: 'LLL:my_extension.db:some_item',
        value: null,
        invertStateDisplay: true,
        iconIdentifierChecked: 'my-item-checked',
        iconIdentifierUnchecked: 'my-item-unchecked',
        labelChecked: 'LLL:my_extension.db:some_item.checked',
        labelUnchecked: 'LLL:my_extension.db:some_item.unchecked',
    )
);
