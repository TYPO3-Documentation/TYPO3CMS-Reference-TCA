<?php

declare(strict_types=1);

namespace MyVendor\MyExtension\UserFunctions\FormEngine;

final class ItemsProcFunc
{
  /**
   * Add two items to the existing ones
   */
  public function itemsProcFunc(array &$params): void
  {
    $params['items'][] = [
      'label' => 'item 1 from itemsProcFunc()',
      'value' => 'val1',
    ];
    $params['items'][] = [
      'label' => 'item 2 from itemsProcFunc()',
      'value' => 'val2',
    ];
  }
}
