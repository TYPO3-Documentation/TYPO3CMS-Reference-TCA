<?php

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

defined('TYPO3') or die();

ExtensionManagementUtility::addTCAcolumns('tx_myextension_talk', [
  'equipment' => [
    'label' => 'my_extension.db:talk.equipment',
    'config' => [
      'type' => 'select',
      'renderType' => 'selectMultipleSideBySide',
      'items' => [
        ['label' => 'my_extension.db:talk.equipment.audio', 'value' => '--div--'],
        ['label' => 'my_extension.db:talk.equipment.handheld_microphone', 'value' => 'handheld_microphone'],
        ['label' => 'my_extension.db:talk.equipment.headset', 'value' => 'headset'],
        ['label' => 'my_extension.db:talk.equipment.video', 'value' => '--div--'],
        ['label' => 'my_extension.db:talk.equipment.projector', 'value' => 'projector'],
        ['label' => 'my_extension.db:talk.equipment.video_recording', 'value' => 'video_recording'],
      ],
      'size' => 5,
      'autoSizeMax' => 10,
      'multiple' => true,
      'multiSelectFilterItems' => [
        ['label' => '', 'value' => ''],
        ['label' => 'my_extension.db:talk.equipment.microphone', 'value' => 'microphone'],
        ['label' => 'my_extension.db:talk.equipment.video', 'value' => 'video'],
      ],
      'behaviour' => [
        'allowLanguageSynchronization' => true,
      ],
    ],
  ],
]);
ExtensionManagementUtility::addToAllTCAtypes(
  'tx_myextension_talk',
  'equipment',
  'talk,workshop',
  'before:--div--;core.form.tabs:access',
);
