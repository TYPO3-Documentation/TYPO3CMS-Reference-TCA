<?php

declare(strict_types=1);

namespace MyVendor\MyExtension\Frontend;

use TYPO3\CMS\Frontend\ContentObject\ContentObjectRenderer;
use TYPO3\CMS\Frontend\Typolink\LinkFactory;

/**
 * Creates the URL of the ticket link of a conference: a page of the site or
 * the shop of a ticket provider
 */
final readonly class TicketUriBuilder
{
  public function __construct(
    private LinkFactory $linkFactory,
  ) {}

  /**
   * @param array<string, mixed> $conference
   */
  public function getUri(array $conference, ContentObjectRenderer $contentObjectRenderer): string
  {
    return $this->linkFactory
      ->createUri((string)($conference['ticket_link'] ?? ''), $contentObjectRenderer)
      ->getUrl();
  }
}
