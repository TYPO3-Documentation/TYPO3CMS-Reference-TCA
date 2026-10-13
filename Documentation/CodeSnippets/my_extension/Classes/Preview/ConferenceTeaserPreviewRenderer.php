<?php

declare(strict_types=1);

namespace MyVendor\MyExtension\Preview;

use Symfony\Component\DependencyInjection\Attribute\Autoconfigure;
use TYPO3\CMS\Backend\Preview\PreviewRendererInterface;
use TYPO3\CMS\Backend\Preview\StandardContentPreviewRenderer;
use TYPO3\CMS\Backend\View\BackendLayout\Grid\GridColumnItem;
use TYPO3\CMS\Core\Domain\RecordInterface;

/**
 * Shows the teased conference and the link text of a conference teaser
 * in the page module. The header, the footer and the wrap of the preview
 * stay the same as for the other content elements.
 */
#[Autoconfigure(public: true)]
final readonly class ConferenceTeaserPreviewRenderer implements PreviewRendererInterface
{
  public function __construct(
    private StandardContentPreviewRenderer $standardContentPreviewRenderer,
  ) {}

  public function renderPageModulePreviewHeader(GridColumnItem $item): string
  {
    return $this->standardContentPreviewRenderer->renderPageModulePreviewHeader($item);
  }

  public function renderPageModulePreviewContent(GridColumnItem $item): string
  {
    $record = $item->getRecord();
    $conference = $record->get('tx_myextension_teaser_conference');
    if (!$conference instanceof RecordInterface) {
      return '';
    }
    return sprintf(
      '<p><strong>%s</strong></p><p>%s</p>',
      htmlspecialchars((string)$conference->get('title')),
      htmlspecialchars((string)$record->get('tx_myextension_teaser_link_text')),
    );
  }

  public function renderPageModulePreviewFooter(GridColumnItem $item): string
  {
    return $this->standardContentPreviewRenderer->renderPageModulePreviewFooter($item);
  }

  public function wrapPageModulePreview(string $previewHeader, string $previewContent, GridColumnItem $item): string
  {
    return $this->standardContentPreviewRenderer->wrapPageModulePreview($previewHeader, $previewContent, $item);
  }
}
