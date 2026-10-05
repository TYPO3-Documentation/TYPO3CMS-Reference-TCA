<?php

declare(strict_types=1);

namespace MyVendor\MyExtension\Evaluation;

/**
 * Keeps the abstract of a talk to paragraphs separated by one blank line
 */
final class AbstractEvaluation
{
  /**
   * Evaluates the value before it is saved
   */
  public function evaluateFieldValue(string $value): string
  {
    $value = str_replace(["\r\n", "\r"], "\n", $value);
    return (string)preg_replace('/\n{3,}/', "\n\n", $value);
  }

  /**
   * Prepares the value for the form
   */
  public function deevaluateFieldValue(array $parameters): string
  {
    return (string)$parameters['value'];
  }
}
