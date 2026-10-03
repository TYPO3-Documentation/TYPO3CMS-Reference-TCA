<?php

declare(strict_types=1);

namespace MyVendor\MyExtension\Backend;

final class CommentLabel
{
  /**
   * Shows the name of the commenter and the date of the comment,
   * for example "Jane Doe (2026-06-12)"
   */
  public function getLabel(array &$parameters): void
  {
    $name = (string)($parameters['row']['name'] ?? '');
    $created = (int)($parameters['row']['crdate'] ?? 0);
    $parameters['title'] = $created > 0
      ? sprintf('%s (%s)', $name, date('Y-m-d', $created))
      : $name;
  }
}
