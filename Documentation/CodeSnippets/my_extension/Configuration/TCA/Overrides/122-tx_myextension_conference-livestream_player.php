<?php

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

defined('TYPO3') or die();

ExtensionManagementUtility::addTCAcolumns('tx_myextension_conference', [
  'livestream_player' => [
    'label' => 'my_extension.db:conference.livestream_player',
    'displayCond' => 'FIELD:event_format:IN:online,hybrid',
    'config' => [
      'type' => 'flex',
      // Two settings of the player do not need a file of their own
      'ds' => '
        <T3DataStructure>
          <ROOT>
            <type>array</type>
            <el>
              <autoplay>
                <label>my_extension.db:conference.livestream_player.autoplay</label>
                <config>
                  <type>check</type>
                  <renderType>checkboxToggle</renderType>
                </config>
              </autoplay>
              <muted>
                <label>my_extension.db:conference.livestream_player.muted</label>
                <config>
                  <type>check</type>
                  <renderType>checkboxToggle</renderType>
                </config>
              </muted>
            </el>
          </ROOT>
        </T3DataStructure>
      ',
    ],
  ],
]);
ExtensionManagementUtility::addToAllTCAtypes(
  'tx_myextension_conference',
  'livestream_player',
  '',
  'after:livestream_password',
);
