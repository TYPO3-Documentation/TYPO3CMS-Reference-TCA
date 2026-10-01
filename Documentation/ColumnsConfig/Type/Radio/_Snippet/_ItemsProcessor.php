<?php

declare(strict_types=1);

namespace MyVendor\MyExtension\Processors;

use TYPO3\CMS\Core\DataHandling\ItemsProcessorContext;
use TYPO3\CMS\Core\DataHandling\ItemsProcessorInterface;
use TYPO3\CMS\Core\Schema\Struct\SelectItem;
use TYPO3\CMS\Core\Schema\Struct\SelectItemCollection;

final class RadioItemsProcessor implements ItemsProcessorInterface
{
  public function processItems(
    SelectItemCollection $items,
    ItemsProcessorContext $context,
  ): SelectItemCollection {
    $items->add(new SelectItem(
      type: 'radio',
      label: 'LLL:my_extension.db:my_item',
      value: 42,
    ));

    return $items;
  }
}
