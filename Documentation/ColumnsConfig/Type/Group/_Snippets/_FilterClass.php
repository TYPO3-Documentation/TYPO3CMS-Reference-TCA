<?php

declare(strict_types=1);

namespace MyVendor\MyExtension\Filter;

use TYPO3\CMS\Backend\Utility\BackendUtility;

final class GenderFilter
{
  public function filterByGender(
    array $parameters,
    object $parentObject,
  ): array {
    $gender = $parameters['evaluateGender'] ?? '';
    return array_values(array_filter(
      $parameters['values'],
      static function (string $value) use ($gender): bool {
        // A value is the table name and the uid: tx_myextension_person_42
        $uid = (int)substr($value, strrpos($value, '_') + 1);
        $person = BackendUtility::getRecord('tx_myextension_person', $uid);
        return ($person['gender'] ?? '') === $gender;
      },
    ));
  }
}
