<?php

declare(strict_types=1);

namespace MyVendor\MyExtension\Slug;

/**
 * Puts the year of the conference in front of the slug, for example
 * "2027/typo3-developer-days"
 */
final class ConferenceSlugModifier
{
  /**
   * @param array{slug: string, record: array<string, mixed>} $parameters
   */
  public function prependYear(array $parameters): string
  {
    $date = $parameters['record']['conference_date'] ?? '';
    // A timestamp from the database, or a date such as "2027-05-12" from
    // the backend form
    $year = is_numeric($date) && (int)$date > 0
      ? date('Y', (int)$date)
      : substr((string)$date, 0, 4);
    if (preg_match('/^\d{4}$/', $year) !== 1) {
      return $parameters['slug'];
    }
    return $year . '/' . ltrim($parameters['slug'], '/');
  }
}
