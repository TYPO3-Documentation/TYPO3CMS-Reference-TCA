<?php

declare(strict_types=1);

namespace MyVendor\MyExtension\Processors;

use TYPO3\CMS\Core\DataHandling\ItemsProcessorContext;
use TYPO3\CMS\Core\DataHandling\ItemsProcessorInterface;
use TYPO3\CMS\Core\Schema\Struct\SelectItem;
use TYPO3\CMS\Core\Schema\Struct\SelectItemCollection;

final class CheckItemsProcessor implements ItemsProcessorInterface
{
  public function processItems(
    SelectItemCollection $items,
    ItemsProcessorContext $context,
  ): SelectItemCollection {
    // Minimal example
    $items->add(new SelectItem(
      type: 'check',
      label: 'LLL:my_extension.db:my_item',
      value: null,
    ));

    // Extended example
    $items->add(new SelectItem(
      type: 'check',
      label: 'LLL:my_extension.db:some_item',
      value: null,
      invertStateDisplay: true,
      iconIdentifierChecked: 'my-item-checked',
      iconIdentifierUnchecked: 'my-item-unchecked',
      labelChecked: 'LLL:my_extension.db:some_item.checked',
      labelUnchecked: 'LLL:my_extension.db:some_item.unchecked',
    ));

    return $items;
  }
}
