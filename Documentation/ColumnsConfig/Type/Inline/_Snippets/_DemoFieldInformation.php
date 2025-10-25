<?php

declare(strict_types=1);

namespace Myvendor\Myexample\FormEngine\FieldInformation;

use TYPO3\CMS\Backend\Form\AbstractNode;

class DemoFieldInformation extends AbstractNode
{
    public function render(): array
    {
        $fieldName = $this->data['fieldName'];
        $result = $this->initializeResultArray();

        // Add fieldInformation only for this field name
        //   this may be changed accordingly
        if ($fieldName !== 'my_new_field') {
            return $result;
        }

        $text = $GLOBALS['LANG']->sL(
            'my_extension.db:tt_content.fieldInformation.demo'
        );

        $result['html'] = $text;
        return $result;
    }
}
