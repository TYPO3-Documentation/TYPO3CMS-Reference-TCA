<?php

declare(strict_types=1);

namespace MyVendor\MyExtension\Form\FieldInformation;

use TYPO3\CMS\Backend\Form\AbstractNode;
use TYPO3\CMS\Core\Localization\LanguageService;

/**
 * Explains above the talks of a conference how to change the program
 */
final class TalkOrderInformation extends AbstractNode
{
  public function render(): array
  {
    $result = $this->initializeResultArray();
    // The container shows this information for every inline field of the table
    if ($this->data['fieldName'] !== 'talks') {
      return $result;
    }
    $result['html'] = '<p class="text-body-secondary">' . htmlspecialchars(
      $this->getLanguageService()->sL('my_extension.db:conference.talks.order'),
    ) . '</p>';
    return $result;
  }

  private function getLanguageService(): LanguageService
  {
    return $GLOBALS['LANG'];
  }
}
