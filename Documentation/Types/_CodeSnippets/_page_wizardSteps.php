<?php

$GLOBALS['TCA']['pages']['types']['123']['wizardSteps'] = [
    'setup' => [
        'title' => 'backend.wizards.page:step.setup',
        'fields' => ['title', 'slug', 'nav_title', 'hidden', 'nav_hide'],
    ],
    'special' => [
        'title' => 'backend.wizards.page:wizard.special_step',
        'fields' => ['my_custom_field'],
        'after' => ['setup'],
    ],
];
