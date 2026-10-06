<?php

declare(strict_types=1);

namespace MyVendor\MyExtension\Backend;

use TYPO3\CMS\Backend\Utility\BackendUtility;
use TYPO3\CMS\Core\Utility\GeneralUtility;

/**
 * Offers the tracks of the conference of a talk, one per line in the field
 * "tracks" of the conference
 */
final class TrackItems
{
  public function addTracks(array &$params): void
  {
    // A new talk is not stored yet, its conference is the inline parent
    $conference = (int)($params['row']['conference'] ?? 0)
      ?: (int)($params['inlineParentUid'] ?? 0);
    $record = BackendUtility::getRecord('tx_myextension_conference', $conference, 'tracks');
    $tracks = GeneralUtility::trimExplode("\n", (string)($record['tracks'] ?? ''), true);
    foreach ($tracks as $track) {
      $params['items'][] = ['label' => $track, 'value' => $track];
    }
  }
}
