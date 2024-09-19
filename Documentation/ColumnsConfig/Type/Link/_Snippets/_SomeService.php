<?php

namespace MyVendor\MyExtension\Service;

use TYPO3\CMS\Frontend\ContentObject\ContentObjectRenderer;
use TYPO3\CMS\Frontend\Typolink\LinkFactory;

class SomeService
{
    public function __construct(
        private readonly LinkFactory $linkFactory,
    ) {}

    public function getUri(string $tcaLinkValue, ContentObjectRenderer $contentObjectRenderer): string
    {
        return $this->linkFactory->createUri(
            '',
            [
                'parameter'        => $tcaLinkValue,
                'forceAbsoluteUrl' => true,
            ],
            $contentObjectRenderer
        );
    }
}
