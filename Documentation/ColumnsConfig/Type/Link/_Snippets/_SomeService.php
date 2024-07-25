<?php

namespace MyVendor\MyExtension\Service;

use TYPO3\CMS\Frontend\ContentObject\ContentObjectRenderer;
use TYPO3\CMS\Frontend\Typolink\LinkFactory;

class SomeService
{
    public function __construct(
        private readonly LinkFactory $linkFactory,
    ) {}

    public function getLink(string $tcaLinkValue, ContentObjectRenderer $contentObjectRenderer): string
    {
        $link = $this->linkFactory->create(
            '',
            [
                'parameter'        => $tcaLinkValue,
                'forceAbsoluteUrl' => true,
            ],
            $contentObjectRenderer
        );
        return $link->getUrl();
    }
}
