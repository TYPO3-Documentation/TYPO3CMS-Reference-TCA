<?php

declare(strict_types=1);

namespace MyVendor\MyExtension\Backend\ItemsProcessor;

use Symfony\Component\DependencyInjection\Attribute\Autoconfigure;
use TYPO3\CMS\Core\Database\ConnectionPool;
use TYPO3\CMS\Core\DataHandling\ItemsProcessorContext;
use TYPO3\CMS\Core\DataHandling\ItemsProcessorInterface;
use TYPO3\CMS\Core\Schema\Struct\SelectItem;
use TYPO3\CMS\Core\Schema\Struct\SelectItemCollection;

/**
 * Adds one checkbox for each day of the conference that a talk belongs to
 *
 * The core creates the processor with GeneralUtility::makeInstance(), which
 * injects the constructor arguments of public services only.
 */
#[Autoconfigure(public: true)]
final readonly class ConferenceDaysItemsProcessor implements ItemsProcessorInterface
{
  public function __construct(
    private ConnectionPool $connectionPool,
  ) {}

  public function processItems(
    SelectItemCollection $items,
    ItemsProcessorContext $context,
  ): SelectItemCollection {
    $conference = $this->connectionPool
      ->getConnectionForTable('tx_myextension_conference')
      ->select(
        ['conference_date', 'end_date'],
        'tx_myextension_conference',
        ['uid' => (int)($context->row['conference'] ?? 0)],
      )
      ->fetchAssociative();
    if ($conference === false) {
      return $items;
    }
    $day = (int)$conference['conference_date'];
    $lastDay = (int)($conference['end_date'] ?? $day) ?: $day;
    // A check field stores each checkbox as one bit, 31 at most
    for ($count = 0; $day <= $lastDay && $count < 31; $count++) {
      $items->add(new SelectItem(
        type: 'check',
        label: date('D, j M', $day),
        value: null,
      ));
      $day += 86400;
    }
    return $items;
  }
}
