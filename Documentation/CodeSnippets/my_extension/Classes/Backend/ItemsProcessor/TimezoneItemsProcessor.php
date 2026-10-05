<?php

declare(strict_types=1);

namespace MyVendor\MyExtension\Backend\ItemsProcessor;

use TYPO3\CMS\Core\DataHandling\ItemsProcessorContext;
use TYPO3\CMS\Core\DataHandling\ItemsProcessorInterface;
use TYPO3\CMS\Core\Schema\Struct\SelectItem;
use TYPO3\CMS\Core\Schema\Struct\SelectItemCollection;

/**
 * Offers the time zones of the regions given in the parameter "regions",
 * grouped by region
 */
final readonly class TimezoneItemsProcessor implements ItemsProcessorInterface
{
  public function processItems(
    SelectItemCollection $items,
    ItemsProcessorContext $context,
  ): SelectItemCollection {
    $regions = explode(',', (string)($context->processorParameters['regions'] ?? 'Europe'));
    foreach (\DateTimeZone::listIdentifiers() as $identifier) {
      [$region, $city] = array_pad(explode('/', $identifier, 2), 2, '');
      if ($city === '' || !in_array($region, $regions, true)) {
        continue;
      }
      $items->add(new SelectItem(
        type: 'select',
        label: str_replace('_', ' ', $city),
        value: $identifier,
        group: $region,
      ));
    }
    return $items;
  }
}
