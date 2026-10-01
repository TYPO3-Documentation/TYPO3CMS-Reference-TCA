<?php

declare(strict_types=1);

namespace MyVendor\MyExtension\UserFunctions;

final class MyItemsProcFunc
{
  /**
   * Add two items to the existing ones
   */
  public function itemsProcFunc(array &$params): void
  {
    $params['items'][] = ['label' => 'item 1 from itemsProcFunc()'];
    $params['items'][] = ['label' => 'item 2 from itemsProcFunc()'];
  }
}
