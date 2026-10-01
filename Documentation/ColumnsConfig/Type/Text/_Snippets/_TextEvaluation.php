<?php

declare(strict_types=1);

namespace MyVendor\MyExtension\Evaluation;

final class TextEvaluation
{
  /**
   * Adds text "PHPfoo-evaluate" at the end on saving
   */
  public function evaluateFieldValue(
    string $value,
    string $is_in,
    bool &$set,
  ): string {
    return $value . 'PHPfoo-evaluate';
  }

  /**
   * Adds text "PHPfoo-deevaluate" at the end on opening
   */
  public function deevaluateFieldValue(array $parameters): string
  {
    return $parameters['value'] . 'PHPfoo-deevaluate';
  }
}
