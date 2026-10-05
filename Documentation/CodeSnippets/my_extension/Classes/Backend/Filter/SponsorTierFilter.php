<?php

declare(strict_types=1);

namespace MyVendor\MyExtension\Backend\Filter;

use TYPO3\CMS\Backend\Utility\BackendUtility;

/**
 * Keeps the sponsors of the tier given in the parameter "tier"
 */
final class SponsorTierFilter
{
  /**
   * @param array{values: list<string>, tier?: string} $parameters
   * @return list<string>
   */
  public function filter(array $parameters, object $parentObject): array
  {
    $tier = $parameters['tier'] ?? 'gold';
    return array_values(array_filter(
      $parameters['values'],
      static function (string $value) use ($tier): bool {
        // A value is the table name and the uid: tx_myextension_sponsor_42
        $uid = (int)substr($value, strrpos($value, '_') + 1);
        $sponsor = BackendUtility::getRecord('tx_myextension_sponsor', $uid);
        return ($sponsor['tier'] ?? '') === $tier;
      },
    ));
  }
}
