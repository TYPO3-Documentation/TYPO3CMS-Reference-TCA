<?php

declare(strict_types=1);

namespace MyVendor\MyExtension\Evaluation;

use TYPO3\CMS\Core\Page\JavaScriptModuleInstruction;

/**
 * Removes the leading "#" a hashtag is often entered with
 */
final class HashtagEvaluation
{
  /**
   * Client side: the JavaScript module that evaluates the field
   */
  public function returnFieldJS(): JavaScriptModuleInstruction
  {
    return JavaScriptModuleInstruction::create(
      '@myvendor/my-extension/hashtag-evaluation.js',
      'FormEngineEvaluation',
    );
  }

  /**
   * Server side: evaluates the value before it is saved
   */
  public function evaluateFieldValue(string $value): string
  {
    return ltrim($value, '#');
  }

  /**
   * Server side: prepares the value for the form
   */
  public function deevaluateFieldValue(array $parameters): string
  {
    return (string)$parameters['value'];
  }
}
