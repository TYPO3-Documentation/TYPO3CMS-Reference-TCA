<?php

namespace MVendor\MyExtension\Evaluation;

use TYPO3\CMS\Core\Page\JavaScriptModuleInstruction;

/**
 * Class for field value validation/evaluation to be used in 'eval' of TCA
 */
class ExampleEvaluation
{
    /**
     * JavaScript code for client side validation/evaluation
     *
     * @return string|JavaScriptModuleInstruction JavaScript code for client side validation/evaluation
     */
    public function returnFieldJS()
    {
        // you can return JavaScript code directly:
        //return 'return value + " [added by JavaScript on field blur]";';

        // or you can use JavaScriptModuleInstruction.
        // In this case you should add your JavaScript modules using
        // Configuration/JavaScriptModules.php
        return JavaScriptModuleInstruction::create('@myvendor/myextension/example-evaluation.js', 'FormEngineEvaluation');
    }

    /**
     * Server-side validation/evaluation on saving the record
     *
     * @param string $value The field value to be evaluated
     * @param string $is_in The "is_in" value of the field configuration from TCA
     * @param bool $set Boolean defining if the value is written to the database or not.
     * @return string Evaluated field value
     */
    public function evaluateFieldValue($value, $is_in, &$set)
    {
        return $value . ' [added by PHP on saving the record]';
    }

    /**
     * Server-side validation/evaluation on opening the record
     *
     * @param array $parameters Array with key 'value' containing the field value from the database
     * @return string Evaluated field value
     */
    public function deevaluateFieldValue(array $parameters)
    {
        return $parameters['value'] . ' [added by PHP on opening the record]';
    }
}
