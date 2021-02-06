<?php

namespace TYPO3\CMS\Styleguide\UserFunctions\FormEngine;

class TypeText9Eval
{

    /**
     * Adds text "PHPfoo-evaluate" at end on saving
     *
     * @param string $value
     * @param string $is_in
     * @param bool $set
     * @return string
     */
    public function evaluateFieldValue($value, $is_in, &$set)
    {
        return $value . 'PHPfoo-evaluate';
    }

    /**
     * Adds text "PHPfoo-deevaluate" at end on opening
     *
     * @param array $parameters
     * @return string
     */
    public function deevaluateFieldValue(array $parameters)
    {
        $value = $parameters['value'];
        return $value . 'PHPfoo-deevaluate';
    }
}
