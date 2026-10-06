<?php

declare(strict_types=1);

namespace MyVendor\MyExtension\Form\FieldInformation;

use TYPO3\CMS\Backend\Form\AbstractNode;
use TYPO3\CMS\Core\Localization\LanguageService;

/**
 * Shows the text of the option "text" between the label and the field
 */
final class InformationText extends AbstractNode
{
  public function render(): array
  {
    $result = $this->initializeResultArray();
    $label = (string)($this->data['renderData']['fieldInformationOptions']['text'] ?? '');
    $result['html'] = '<p class="text-body-secondary">'
      . htmlspecialchars($this->getLanguageService()->sL($label))
      . '</p>';
    return $result;
  }

  private function getLanguageService(): LanguageService
  {
    return $GLOBALS['LANG'];
  }
}
