<?php

use MyVendor\MyExtension\Slug\SlugModifier;

defined('TYPO3') or die();

$GLOBALS['TCA']['pages']['columns']['slug']['config']
  ['generatorOptions']['postModifiers'][]
  = SlugModifier::class . '->modifySlug';
