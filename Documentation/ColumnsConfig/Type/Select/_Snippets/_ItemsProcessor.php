<?php

declare(strict_types=1);

namespace MyVendor\MyExtension\Processors;

use TYPO3\CMS\Core\DataHandling\ItemsProcessorContext;
use TYPO3\CMS\Core\DataHandling\ItemsProcessorInterface;
use TYPO3\CMS\Core\Schema\Struct\SelectItem;
use TYPO3\CMS\Core\Schema\Struct\SelectItemCollection;

final class SomeItemProcessor implements ItemsProcessorInterface
{
  public function processItems(
    SelectItemCollection $items,
    ItemsProcessorContext $context,
  ): SelectItemCollection {
    // Additional item, minimal
    $items->add(new SelectItem(
      type: 'select',
      label: 'LLL:my_extension.db:my_item',
      value: 42,
    ));

    // Additional item, extended
    $items->add(new SelectItem(
      type: 'select',
      label: 'LLL:my_extension.db:my_item',
      value: 43,
      group: 'group1',
    ));

    // Additional item with an icon
    $items->add(new SelectItem(
      type: 'select',
      label: 'LLL:my_extension.db:my_item',
      value: 44,
      icon: 'EXT:my_extension/Resources/Public/Icons/MyItem.svg',
    ));

    // Additional item with a description
    $items->add(new SelectItem(
      type: 'select',
      label: 'LLL:my_extension.db:my_item',
      value: 45,
      description: 'LLL:my_extension.db:my_item.description',
    ));

    // Additional item with a description as array
    $items->add(new SelectItem(
      type: 'select',
      label: 'LLL:my_extension.db:my_item',
      value: 46,
      description: [
        'title' => 'LLL:my_extension.db:my_item.title',
        'description' => 'LLL:my_extension.db:my_item.description',
      ],
    ));

    // Divider
    $items->add(new SelectItem(
      type: 'select',
      label: 'LLL:my_extension.db:my_divider',
      value: '--div--',
    ));

    return $items;
  }
}
