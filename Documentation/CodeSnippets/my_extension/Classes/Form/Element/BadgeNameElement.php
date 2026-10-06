<?php

declare(strict_types=1);

namespace MyVendor\MyExtension\Form\Element;

use TYPO3\CMS\Backend\Form\Element\AbstractFormElement;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Core\Utility\StringUtility;

/**
 * An input for the name on the badge, with a preview of the badge
 */
final class BadgeNameElement extends AbstractFormElement
{
  public function render(): array
  {
    $parameterArray = $this->data['parameterArray'];
    $color = (string)($parameterArray['fieldConf']['config']['parameters']['color'] ?? '#ff8700');
    $value = (string)$parameterArray['itemFormElValue'];
    // Without a badge name, the badge shows the name of the frontend user
    $preview = $value !== '' ? $value : (string)($this->data['databaseRow']['name'] ?? '');

    $fieldInformationResult = $this->renderFieldInformation();
    $resultArray = $this->mergeChildReturnIntoExistingResult(
      $this->initializeResultArray(),
      $fieldInformationResult,
      false,
    );

    $fieldId = StringUtility::getUniqueId('formengine-input-');
    $attributes = [
      'id' => $fieldId,
      'type' => 'text',
      'value' => $value,
      'name' => $parameterArray['itemFormElName'],
      'data-formengine-input-name' => $parameterArray['itemFormElName'],
      'placeholder' => $preview,
      'class' => 'form-control',
    ];

    $html = [];
    $html[] = $this->renderLabel($fieldId);
    $html[] = '<div class="formengine-field-item t3js-formengine-field-item">';
    $html[] = $fieldInformationResult['html'];
    $html[] = '<div class="form-control-wrap">';
    $html[] = '<input ' . GeneralUtility::implodeAttributes($attributes, true) . ' />';
    $html[] = '</div>';
    $html[] = '<p class="mt-2"><span class="badge" style="background-color: ' . htmlspecialchars($color) . '">';
    $html[] = htmlspecialchars($preview);
    $html[] = '</span></p>';
    $html[] = '</div>';
    $resultArray['html'] = implode(LF, $html);
    return $resultArray;
  }
}
