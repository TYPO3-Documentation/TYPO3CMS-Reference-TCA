<?php

declare(strict_types=1);

namespace MyVendor\MyExtension\Backend\FieldInformation;

use TYPO3\CMS\Backend\Form\AbstractNode;

final class TagInformation extends AbstractNode
{
  public function render(): array
  {
    $result = $this->initializeResultArray();
    $label = $this->data['renderData']['fieldInformationOptions']['text'];
    $result['html'] = htmlspecialchars(
      $GLOBALS['LANG']->sL($label),
    );
    return $result;
  }
}
