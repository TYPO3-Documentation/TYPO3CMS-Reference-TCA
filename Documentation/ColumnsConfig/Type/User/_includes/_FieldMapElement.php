<?php

declare(strict_types=1);

namespace TYPO3\CMS\Reactions\Form\Element;

use TYPO3\CMS\Backend\Form\Element\AbstractFormElement;

class FieldMapElement extends AbstractFormElement
{
    public function render(): array
    {
        $parameterArray = $this->data['parameterArray'];
        $itemValue = $parameterArray['itemFormElValue'];
        // $itemValue contains the JSON data of the field as PHP array
        // ...
        return ['Some HTML representation'];
    }
}
