<?php

declare(strict_types=1);

namespace MyVendor\MyExtension\Slug;

final class SlugModifier
{
  public function modifySlug(array $parameters): string
  {
    // Remove a trailing "-copy" that editors left in the title
    return preg_replace('/-copy$/', '', $parameters['slug']);
  }
}
