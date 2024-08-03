<?php

namespace TYPO3\CMS\Styleguide\UserFunctions\FormEngine;

class TypeText9Eval
{
    /**
     * Adds text "PHPfoo-evaluate" at end on saving
     */
    public function evaluateFieldValue(string $value, string $is_in, bool &$set): string
    {
        return $value . 'PHPfoo-evaluate';
    }

    /**
     * Adds text "PHPfoo-deevaluate" at end on opening
     */
    public function deevaluateFieldValue(array $parameters): string
    {
        $value = $parameters['value'];
        return $value . 'PHPfoo-deevaluate';
    }
}
