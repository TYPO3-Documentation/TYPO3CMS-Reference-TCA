<?php

declare(strict_types=1);

namespace MyVendor\MyExtension\Backend\ItemsProcessor;

use TYPO3\CMS\Core\DataHandling\ItemsProcessorContext;
use TYPO3\CMS\Core\DataHandling\ItemsProcessorInterface;
use TYPO3\CMS\Core\Schema\Struct\SelectItem;
use TYPO3\CMS\Core\Schema\Struct\SelectItemCollection;

/**
 * Offers the languages of the site as the language a talk is held in
 */
final readonly class SpokenLanguageItemsProcessor implements ItemsProcessorInterface
{
  public function processItems(
    SelectItemCollection $items,
    ItemsProcessorContext $context,
  ): SelectItemCollection {
    foreach ($context->site->getLanguages() as $language) {
      $items->add(new SelectItem(
        type: 'radio',
        label: $language->getTitle(),
        value: $language->getLocale()->getLanguageCode(),
      ));
    }
    return $items;
  }
}
