<?php

declare(strict_types=1);

namespace MyVendor\MyExtension\Form\FieldWizard;

use TYPO3\CMS\Backend\Form\AbstractNode;
use TYPO3\CMS\Core\Database\ReferenceIndex;
use TYPO3\CMS\Core\Localization\LanguageService;

/**
 * Shows above the form how many records refer to the edited record
 */
final class ReferencesToThisRecordWizard extends AbstractNode
{
  public function __construct(
    private readonly ReferenceIndex $referenceIndex,
  ) {}

  public function render(): array
  {
    $result = $this->initializeResultArray();
    $uid = (int)($this->data['databaseRow']['uid'] ?? 0);
    if ($uid === 0) {
      // A new record has no references yet
      return $result;
    }
    $count = $this->referenceIndex->getNumberOfReferencedRecords($this->data['tableName'], $uid);
    $result['html'] = '<p class="text-body-secondary">' . htmlspecialchars(sprintf(
      $this->getLanguageService()->sL('my_extension.db:references'),
      $count,
    )) . '</p>';
    return $result;
  }

  private function getLanguageService(): LanguageService
  {
    return $GLOBALS['LANG'];
  }
}
