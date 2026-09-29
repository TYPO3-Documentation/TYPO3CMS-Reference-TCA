<?php

declare(strict_types=1);

namespace MyVendor\MyExtension\Userfuncs;

use TYPO3\CMS\Backend\Utility\BackendUtility;

final class Tca
{
  public function haikuTitle(array &$parameters): void
  {
    $record = BackendUtility::getRecord(
      $parameters['table'],
      $parameters['row']['uid'],
    ) ?? $parameters['row'];
    $excerpt = substr(strip_tags($record['poem'] ?? ''), 0, 10);
    $parameters['title'] = $record['title'] . ' (' . $excerpt . '...)';
  }
}
