<?php

declare(strict_types=1);

namespace MyVendor\MyExtension\Slug;

use TYPO3\CMS\Backend\Form\FormDataProvider\TcaSlug;
use TYPO3\CMS\Core\Site\Entity\Site;

/**
 * Shows the path of the program in front of the slug of a talk
 */
final class TalkSlugPrefix
{
  /**
   * @param array{site: Site} $parameters
   */
  public function getPrefix(array $parameters, TcaSlug $reference): string
  {
    return rtrim((string)$parameters['site']->getBase(), '/') . '/program/';
  }
}
