<?php

defined('TYPO3') or die();

$GLOBALS['TCA']['tx_myextension_product']['columns']['slug']['config']
  ['generatorOptions']['regexReplacements'] = [
    // Replace Foo, foo, FOO,... with "bar", ignoring case
    '/foo/i' => 'bar',
    // Remove a string in parentheses
    '/\(.*\)/' => '',
    // Remove a string in parentheses, with a custom regex delimiter
    '@\(.*\)@' => '',
  ];
