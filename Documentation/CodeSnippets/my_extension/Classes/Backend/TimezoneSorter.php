<?php

declare(strict_types=1);

namespace MyVendor\MyExtension\Backend;

use TYPO3\CMS\Core\Schema\Struct\SelectItem;

/**
 * Sorts time zones by their current offset to UTC. Time zones with the
 * same offset keep their previous order.
 */
final class TimezoneSorter
{
  /**
   * @param SelectItem[] $items
   */
  public function sortByOffset(array &$items): void
  {
    $now = new \DateTimeImmutable();
    usort(
      $items,
      static fn(SelectItem $a, SelectItem $b): int => self::getOffset($a, $now) <=> self::getOffset($b, $now),
    );
  }

  private static function getOffset(SelectItem $item, \DateTimeImmutable $now): int
  {
    try {
      return (new \DateTimeZone((string)$item->getValue()))->getOffset($now);
    } catch (\Exception) {
      // The empty item stays first
      return PHP_INT_MIN;
    }
  }
}
