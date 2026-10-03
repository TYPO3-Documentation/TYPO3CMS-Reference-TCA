<?php

use TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider;

return [
  'my-extension-conference-list' => [
    'provider' => SvgIconProvider::class,
    'source' => 'EXT:my_extension/Resources/Public/Icons/ConferenceList.svg',
  ],
  'my-extension-talk' => [
    'provider' => SvgIconProvider::class,
    'source' => 'EXT:my_extension/Resources/Public/Icons/Talk.svg',
  ],
  'my-extension-talk-workshop' => [
    'provider' => SvgIconProvider::class,
    'source' => 'EXT:my_extension/Resources/Public/Icons/Workshop.svg',
  ],
  'my-extension-talk-keynote' => [
    'provider' => SvgIconProvider::class,
    'source' => 'EXT:my_extension/Resources/Public/Icons/Keynote.svg',
  ],
];
