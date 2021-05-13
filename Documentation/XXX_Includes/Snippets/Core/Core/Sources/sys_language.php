<?php // Automatic screenshot: Remove this comment if you want to manually change this file

return [
   // [start ctrl]
   'ctrl' => [ 
      'label' => 'title',
      'tstamp' => 'tstamp',
      'sortby' => 'sorting',
      'default_sortby' => 'title',
      'title' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_language',
      'adminOnly' => true,
      'rootLevel' => 1,
      'enablecolumns' => [ 
         'disabled' => 'hidden',
      ],
      'typeicon_column' => 'flag',
      'typeicon_classes' => [ 
         'default' => 'mimetypes-x-sys_language',
         'mask' => 'flags-###TYPE###',
      ],
      'versioningWS_alwaysAllowLiveEdit' => true,
   ],
   // [end ctrl]
   // [start columns]
   'columns' => [ 
      // [start title]
      'title' => [ 
         'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.language',
         'config' => [ 
            'type' => 'input',
            'size' => 35,
            'max' => 80,
            'eval' => 'trim,required',
         ],
      ],
      // Example from extension "styleguide", table "sys_language"
      // [end title]
      // [start hidden]
      'hidden' => [ 
         'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.enabled',
         'exclude' => true,
         'config' => [ 
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'default' => 0,
            'items' => [ 
               '0' => [ 
                  '0' => '',
                  '1' => '',
                  'invertStateDisplay' => true,
               ],
            ],
         ],
      ],
      // Example from extension "styleguide", table "sys_language"
      // [end hidden]
      // [start language_isocode]
      'language_isocode' => [ 
         'exclude' => true,
         'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_language.language_isocode',
         'config' => [ 
            'type' => 'select',
            'renderType' => 'selectSingle',
            'size' => 1,
            'minitems' => 0,
            'maxitems' => 1,
            'items' => [ 
            ],
            'itemsProcFunc' => 'TYPO3\CMS\Core\Service\IsoCodeService->renderIsoCodeSelectDropdown',
         ],
      ],
      // Example from extension "styleguide", table "sys_language"
      // [end language_isocode]
      // [start flag]
      'flag' => [ 
         'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_language.flag',
         'config' => [ 
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => [ 
               '0' => [ 
                  '0' => '',
                  '1' => 0,
                  '2' => '',
               ],
               '1' => [ 
                  '0' => 'multiple',
                  '1' => 'multiple',
                  '2' => 'flags-multiple',
               ],
               '2' => [ 
                  '0' => 'ad',
                  '1' => 'ad',
                  '2' => 'flags-ad',
               ],
               '3' => [ 
                  '0' => 'ae',
                  '1' => 'ae',
                  '2' => 'flags-ae',
               ],
               '4' => [ 
                  '0' => 'af',
                  '1' => 'af',
                  '2' => 'flags-af',
               ],
               '5' => [ 
                  '0' => 'ag',
                  '1' => 'ag',
                  '2' => 'flags-ag',
               ],
               '6' => [ 
                  '0' => 'ai',
                  '1' => 'ai',
                  '2' => 'flags-ai',
               ],
               '7' => [ 
                  '0' => 'al',
                  '1' => 'al',
                  '2' => 'flags-al',
               ],
               '8' => [ 
                  '0' => 'am',
                  '1' => 'am',
                  '2' => 'flags-am',
               ],
               '9' => [ 
                  '0' => 'an',
                  '1' => 'an',
                  '2' => 'flags-an',
               ],
               '10' => [ 
                  '0' => 'ao',
                  '1' => 'ao',
                  '2' => 'flags-ao',
               ],
               '11' => [ 
                  '0' => 'aq',
                  '1' => 'aq',
                  '2' => 'flags-aq',
               ],
               '12' => [ 
                  '0' => 'ar',
                  '1' => 'ar',
                  '2' => 'flags-ar',
               ],
               '13' => [ 
                  '0' => 'as',
                  '1' => 'as',
                  '2' => 'flags-as',
               ],
               '14' => [ 
                  '0' => 'at',
                  '1' => 'at',
                  '2' => 'flags-at',
               ],
               '15' => [ 
                  '0' => 'au',
                  '1' => 'au',
                  '2' => 'flags-au',
               ],
               '16' => [ 
                  '0' => 'aw',
                  '1' => 'aw',
                  '2' => 'flags-aw',
               ],
               '17' => [ 
                  '0' => 'ax',
                  '1' => 'ax',
                  '2' => 'flags-ax',
               ],
               '18' => [ 
                  '0' => 'az',
                  '1' => 'az',
                  '2' => 'flags-az',
               ],
               '19' => [ 
                  '0' => 'ba',
                  '1' => 'ba',
                  '2' => 'flags-ba',
               ],
               '20' => [ 
                  '0' => 'bb',
                  '1' => 'bb',
                  '2' => 'flags-bb',
               ],
               '21' => [ 
                  '0' => 'bd',
                  '1' => 'bd',
                  '2' => 'flags-bd',
               ],
               '22' => [ 
                  '0' => 'be',
                  '1' => 'be',
                  '2' => 'flags-be',
               ],
               '23' => [ 
                  '0' => 'bf',
                  '1' => 'bf',
                  '2' => 'flags-bf',
               ],
               '24' => [ 
                  '0' => 'bg',
                  '1' => 'bg',
                  '2' => 'flags-bg',
               ],
               '25' => [ 
                  '0' => 'bh',
                  '1' => 'bh',
                  '2' => 'flags-bh',
               ],
               '26' => [ 
                  '0' => 'bi',
                  '1' => 'bi',
                  '2' => 'flags-bi',
               ],
               '27' => [ 
                  '0' => 'bj',
                  '1' => 'bj',
                  '2' => 'flags-bj',
               ],
               '28' => [ 
                  '0' => 'bl',
                  '1' => 'bl',
                  '2' => 'flags-bl',
               ],
               '29' => [ 
                  '0' => 'bm',
                  '1' => 'bm',
                  '2' => 'flags-bm',
               ],
               '30' => [ 
                  '0' => 'bn',
                  '1' => 'bn',
                  '2' => 'flags-bn',
               ],
               '31' => [ 
                  '0' => 'bo',
                  '1' => 'bo',
                  '2' => 'flags-bo',
               ],
               '32' => [ 
                  '0' => 'bq',
                  '1' => 'bq',
                  '2' => 'flags-bq',
               ],
               '33' => [ 
                  '0' => 'br',
                  '1' => 'br',
                  '2' => 'flags-br',
               ],
               '34' => [ 
                  '0' => 'bs',
                  '1' => 'bs',
                  '2' => 'flags-bs',
               ],
               '35' => [ 
                  '0' => 'bt',
                  '1' => 'bt',
                  '2' => 'flags-bt',
               ],
               '36' => [ 
                  '0' => 'bv',
                  '1' => 'bv',
                  '2' => 'flags-bv',
               ],
               '37' => [ 
                  '0' => 'bw',
                  '1' => 'bw',
                  '2' => 'flags-bw',
               ],
               '38' => [ 
                  '0' => 'by',
                  '1' => 'by',
                  '2' => 'flags-by',
               ],
               '39' => [ 
                  '0' => 'bz',
                  '1' => 'bz',
                  '2' => 'flags-bz',
               ],
               '40' => [ 
                  '0' => 'ca',
                  '1' => 'ca',
                  '2' => 'flags-ca',
               ],
               '41' => [ 
                  '0' => 'catalonia',
                  '1' => 'catalonia',
                  '2' => 'flags-catalonia',
               ],
               '42' => [ 
                  '0' => 'cc',
                  '1' => 'cc',
                  '2' => 'flags-cc',
               ],
               '43' => [ 
                  '0' => 'cd',
                  '1' => 'cd',
                  '2' => 'flags-cd',
               ],
               '44' => [ 
                  '0' => 'cf',
                  '1' => 'cf',
                  '2' => 'flags-cf',
               ],
               '45' => [ 
                  '0' => 'cg',
                  '1' => 'cg',
                  '2' => 'flags-cg',
               ],
               '46' => [ 
                  '0' => 'ch',
                  '1' => 'ch',
                  '2' => 'flags-ch',
               ],
               '47' => [ 
                  '0' => 'ci',
                  '1' => 'ci',
                  '2' => 'flags-ci',
               ],
               '48' => [ 
                  '0' => 'ck',
                  '1' => 'ck',
                  '2' => 'flags-ck',
               ],
               '49' => [ 
                  '0' => 'cl',
                  '1' => 'cl',
                  '2' => 'flags-cl',
               ],
               '50' => [ 
                  '0' => 'cm',
                  '1' => 'cm',
                  '2' => 'flags-cm',
               ],
               '51' => [ 
                  '0' => 'cn',
                  '1' => 'cn',
                  '2' => 'flags-cn',
               ],
               '52' => [ 
                  '0' => 'co',
                  '1' => 'co',
                  '2' => 'flags-co',
               ],
               '53' => [ 
                  '0' => 'cr',
                  '1' => 'cr',
                  '2' => 'flags-cr',
               ],
               '54' => [ 
                  '0' => 'cs',
                  '1' => 'cs',
                  '2' => 'flags-cs',
               ],
               '55' => [ 
                  '0' => 'cu',
                  '1' => 'cu',
                  '2' => 'flags-cu',
               ],
               '56' => [ 
                  '0' => 'cv',
                  '1' => 'cv',
                  '2' => 'flags-cv',
               ],
               '57' => [ 
                  '0' => 'cw',
                  '1' => 'cw',
                  '2' => 'flags-cw',
               ],
               '58' => [ 
                  '0' => 'cx',
                  '1' => 'cx',
                  '2' => 'flags-cx',
               ],
               '59' => [ 
                  '0' => 'cy',
                  '1' => 'cy',
                  '2' => 'flags-cy',
               ],
               '60' => [ 
                  '0' => 'cz',
                  '1' => 'cz',
                  '2' => 'flags-cz',
               ],
               '61' => [ 
                  '0' => 'de',
                  '1' => 'de',
                  '2' => 'flags-de',
               ],
               '62' => [ 
                  '0' => 'dj',
                  '1' => 'dj',
                  '2' => 'flags-dj',
               ],
               '63' => [ 
                  '0' => 'dk',
                  '1' => 'dk',
                  '2' => 'flags-dk',
               ],
               '64' => [ 
                  '0' => 'dm',
                  '1' => 'dm',
                  '2' => 'flags-dm',
               ],
               '65' => [ 
                  '0' => 'do',
                  '1' => 'do',
                  '2' => 'flags-do',
               ],
               '66' => [ 
                  '0' => 'dz',
                  '1' => 'dz',
                  '2' => 'flags-dz',
               ],
               '67' => [ 
                  '0' => 'ec',
                  '1' => 'ec',
                  '2' => 'flags-ec',
               ],
               '68' => [ 
                  '0' => 'ee',
                  '1' => 'ee',
                  '2' => 'flags-ee',
               ],
               '69' => [ 
                  '0' => 'eg',
                  '1' => 'eg',
                  '2' => 'flags-eg',
               ],
               '70' => [ 
                  '0' => 'eh',
                  '1' => 'eh',
                  '2' => 'flags-eh',
               ],
               '71' => [ 
                  '0' => 'en-us-gb',
                  '1' => 'en-us-gb',
                  '2' => 'flags-en-us-gb',
               ],
               '72' => [ 
                  '0' => 'england',
                  '1' => 'england',
                  '2' => 'flags-gb-eng',
               ],
               '73' => [ 
                  '0' => 'er',
                  '1' => 'er',
                  '2' => 'flags-er',
               ],
               '74' => [ 
                  '0' => 'es',
                  '1' => 'es',
                  '2' => 'flags-es',
               ],
               '75' => [ 
                  '0' => 'et',
                  '1' => 'et',
                  '2' => 'flags-et',
               ],
               '76' => [ 
                  '0' => 'eu',
                  '1' => 'eu',
                  '2' => 'flags-eu',
               ],
               '77' => [ 
                  '0' => 'fi',
                  '1' => 'fi',
                  '2' => 'flags-fi',
               ],
               '78' => [ 
                  '0' => 'fj',
                  '1' => 'fj',
                  '2' => 'flags-fj',
               ],
               '79' => [ 
                  '0' => 'fk',
                  '1' => 'fk',
                  '2' => 'flags-fk',
               ],
               '80' => [ 
                  '0' => 'fm',
                  '1' => 'fm',
                  '2' => 'flags-fm',
               ],
               '81' => [ 
                  '0' => 'fo',
                  '1' => 'fo',
                  '2' => 'flags-fo',
               ],
               '82' => [ 
                  '0' => 'fr',
                  '1' => 'fr',
                  '2' => 'flags-fr',
               ],
               '83' => [ 
                  '0' => 'ga',
                  '1' => 'ga',
                  '2' => 'flags-ga',
               ],
               '84' => [ 
                  '0' => 'gb',
                  '1' => 'gb',
                  '2' => 'flags-gb',
               ],
               '85' => [ 
                  '0' => 'gd',
                  '1' => 'gd',
                  '2' => 'flags-gd',
               ],
               '86' => [ 
                  '0' => 'ge',
                  '1' => 'ge',
                  '2' => 'flags-ge',
               ],
               '87' => [ 
                  '0' => 'gf',
                  '1' => 'gf',
                  '2' => 'flags-gf',
               ],
               '88' => [ 
                  '0' => 'gg',
                  '1' => 'gg',
                  '2' => 'flags-gg',
               ],
               '89' => [ 
                  '0' => 'gh',
                  '1' => 'gh',
                  '2' => 'flags-gh',
               ],
               '90' => [ 
                  '0' => 'gi',
                  '1' => 'gi',
                  '2' => 'flags-gi',
               ],
               '91' => [ 
                  '0' => 'gl',
                  '1' => 'gl',
                  '2' => 'flags-gl',
               ],
               '92' => [ 
                  '0' => 'gm',
                  '1' => 'gm',
                  '2' => 'flags-gm',
               ],
               '93' => [ 
                  '0' => 'gn',
                  '1' => 'gn',
                  '2' => 'flags-gn',
               ],
               '94' => [ 
                  '0' => 'gp',
                  '1' => 'gp',
                  '2' => 'flags-gp',
               ],
               '95' => [ 
                  '0' => 'gq',
                  '1' => 'gq',
                  '2' => 'flags-gq',
               ],
               '96' => [ 
                  '0' => 'gr',
                  '1' => 'gr',
                  '2' => 'flags-gr',
               ],
               '97' => [ 
                  '0' => 'gs',
                  '1' => 'gs',
                  '2' => 'flags-gs',
               ],
               '98' => [ 
                  '0' => 'gt',
                  '1' => 'gt',
                  '2' => 'flags-gt',
               ],
               '99' => [ 
                  '0' => 'gu',
                  '1' => 'gu',
                  '2' => 'flags-gu',
               ],
               '100' => [ 
                  '0' => 'gw',
                  '1' => 'gw',
                  '2' => 'flags-gw',
               ],
               '101' => [ 
                  '0' => 'gy',
                  '1' => 'gy',
                  '2' => 'flags-gy',
               ],
               '102' => [ 
                  '0' => 'hk',
                  '1' => 'hk',
                  '2' => 'flags-hk',
               ],
               '103' => [ 
                  '0' => 'hm',
                  '1' => 'hm',
                  '2' => 'flags-hm',
               ],
               '104' => [ 
                  '0' => 'hn',
                  '1' => 'hn',
                  '2' => 'flags-hn',
               ],
               '105' => [ 
                  '0' => 'hr',
                  '1' => 'hr',
                  '2' => 'flags-hr',
               ],
               '106' => [ 
                  '0' => 'ht',
                  '1' => 'ht',
                  '2' => 'flags-ht',
               ],
               '107' => [ 
                  '0' => 'hu',
                  '1' => 'hu',
                  '2' => 'flags-hu',
               ],
               '108' => [ 
                  '0' => 'id',
                  '1' => 'id',
                  '2' => 'flags-id',
               ],
               '109' => [ 
                  '0' => 'ie',
                  '1' => 'ie',
                  '2' => 'flags-ie',
               ],
               '110' => [ 
                  '0' => 'il',
                  '1' => 'il',
                  '2' => 'flags-il',
               ],
               '111' => [ 
                  '0' => 'im',
                  '1' => 'im',
                  '2' => 'flags-im',
               ],
               '112' => [ 
                  '0' => 'in',
                  '1' => 'in',
                  '2' => 'flags-in',
               ],
               '113' => [ 
                  '0' => 'io',
                  '1' => 'io',
                  '2' => 'flags-io',
               ],
               '114' => [ 
                  '0' => 'iq',
                  '1' => 'iq',
                  '2' => 'flags-iq',
               ],
               '115' => [ 
                  '0' => 'ir',
                  '1' => 'ir',
                  '2' => 'flags-ir',
               ],
               '116' => [ 
                  '0' => 'is',
                  '1' => 'is',
                  '2' => 'flags-is',
               ],
               '117' => [ 
                  '0' => 'it',
                  '1' => 'it',
                  '2' => 'flags-it',
               ],
               '118' => [ 
                  '0' => 'jm',
                  '1' => 'jm',
                  '2' => 'flags-jm',
               ],
               '119' => [ 
                  '0' => 'jo',
                  '1' => 'jo',
                  '2' => 'flags-jo',
               ],
               '120' => [ 
                  '0' => 'jp',
                  '1' => 'jp',
                  '2' => 'flags-jp',
               ],
               '121' => [ 
                  '0' => 'ke',
                  '1' => 'ke',
                  '2' => 'flags-ke',
               ],
               '122' => [ 
                  '0' => 'kg',
                  '1' => 'kg',
                  '2' => 'flags-kg',
               ],
               '123' => [ 
                  '0' => 'kh',
                  '1' => 'kh',
                  '2' => 'flags-kh',
               ],
               '124' => [ 
                  '0' => 'ki',
                  '1' => 'ki',
                  '2' => 'flags-ki',
               ],
               '125' => [ 
                  '0' => 'kl',
                  '1' => 'kl',
                  '2' => 'flags-kl',
               ],
               '126' => [ 
                  '0' => 'km',
                  '1' => 'km',
                  '2' => 'flags-km',
               ],
               '127' => [ 
                  '0' => 'kn',
                  '1' => 'kn',
                  '2' => 'flags-kn',
               ],
               '128' => [ 
                  '0' => 'kp',
                  '1' => 'kp',
                  '2' => 'flags-kp',
               ],
               '129' => [ 
                  '0' => 'kr',
                  '1' => 'kr',
                  '2' => 'flags-kr',
               ],
               '130' => [ 
                  '0' => 'kw',
                  '1' => 'kw',
                  '2' => 'flags-kw',
               ],
               '131' => [ 
                  '0' => 'ky',
                  '1' => 'ky',
                  '2' => 'flags-ky',
               ],
               '132' => [ 
                  '0' => 'kz',
                  '1' => 'kz',
                  '2' => 'flags-kz',
               ],
               '133' => [ 
                  '0' => 'la',
                  '1' => 'la',
                  '2' => 'flags-la',
               ],
               '134' => [ 
                  '0' => 'lb',
                  '1' => 'lb',
                  '2' => 'flags-lb',
               ],
               '135' => [ 
                  '0' => 'lc',
                  '1' => 'lc',
                  '2' => 'flags-lc',
               ],
               '136' => [ 
                  '0' => 'li',
                  '1' => 'li',
                  '2' => 'flags-li',
               ],
               '137' => [ 
                  '0' => 'lk',
                  '1' => 'lk',
                  '2' => 'flags-lk',
               ],
               '138' => [ 
                  '0' => 'lr',
                  '1' => 'lr',
                  '2' => 'flags-lr',
               ],
               '139' => [ 
                  '0' => 'ls',
                  '1' => 'ls',
                  '2' => 'flags-ls',
               ],
               '140' => [ 
                  '0' => 'lt',
                  '1' => 'lt',
                  '2' => 'flags-lt',
               ],
               '141' => [ 
                  '0' => 'lu',
                  '1' => 'lu',
                  '2' => 'flags-lu',
               ],
               '142' => [ 
                  '0' => 'lv',
                  '1' => 'lv',
                  '2' => 'flags-lv',
               ],
               '143' => [ 
                  '0' => 'ly',
                  '1' => 'ly',
                  '2' => 'flags-ly',
               ],
               '144' => [ 
                  '0' => 'ma',
                  '1' => 'ma',
                  '2' => 'flags-ma',
               ],
               '145' => [ 
                  '0' => 'mc',
                  '1' => 'mc',
                  '2' => 'flags-mc',
               ],
               '146' => [ 
                  '0' => 'md',
                  '1' => 'md',
                  '2' => 'flags-md',
               ],
               '147' => [ 
                  '0' => 'me',
                  '1' => 'me',
                  '2' => 'flags-me',
               ],
               '148' => [ 
                  '0' => 'mf',
                  '1' => 'mf',
                  '2' => 'flags-mf',
               ],
               '149' => [ 
                  '0' => 'mg',
                  '1' => 'mg',
                  '2' => 'flags-mg',
               ],
               '150' => [ 
                  '0' => 'mh',
                  '1' => 'mh',
                  '2' => 'flags-mh',
               ],
               '151' => [ 
                  '0' => 'mi',
                  '1' => 'mi',
                  '2' => 'flags-mi',
               ],
               '152' => [ 
                  '0' => 'mk',
                  '1' => 'mk',
                  '2' => 'flags-mk',
               ],
               '153' => [ 
                  '0' => 'ml',
                  '1' => 'ml',
                  '2' => 'flags-ml',
               ],
               '154' => [ 
                  '0' => 'mm',
                  '1' => 'mm',
                  '2' => 'flags-mm',
               ],
               '155' => [ 
                  '0' => 'mn',
                  '1' => 'mn',
                  '2' => 'flags-mn',
               ],
               '156' => [ 
                  '0' => 'mo',
                  '1' => 'mo',
                  '2' => 'flags-mo',
               ],
               '157' => [ 
                  '0' => 'mp',
                  '1' => 'mp',
                  '2' => 'flags-mp',
               ],
               '158' => [ 
                  '0' => 'mq',
                  '1' => 'mq',
                  '2' => 'flags-mq',
               ],
               '159' => [ 
                  '0' => 'mr',
                  '1' => 'mr',
                  '2' => 'flags-mr',
               ],
               '160' => [ 
                  '0' => 'ms',
                  '1' => 'ms',
                  '2' => 'flags-ms',
               ],
               '161' => [ 
                  '0' => 'mt',
                  '1' => 'mt',
                  '2' => 'flags-mt',
               ],
               '162' => [ 
                  '0' => 'mu',
                  '1' => 'mu',
                  '2' => 'flags-mu',
               ],
               '163' => [ 
                  '0' => 'mv',
                  '1' => 'mv',
                  '2' => 'flags-mv',
               ],
               '164' => [ 
                  '0' => 'mw',
                  '1' => 'mw',
                  '2' => 'flags-mw',
               ],
               '165' => [ 
                  '0' => 'mx',
                  '1' => 'mx',
                  '2' => 'flags-mx',
               ],
               '166' => [ 
                  '0' => 'my',
                  '1' => 'my',
                  '2' => 'flags-my',
               ],
               '167' => [ 
                  '0' => 'mz',
                  '1' => 'mz',
                  '2' => 'flags-mz',
               ],
               '168' => [ 
                  '0' => 'na',
                  '1' => 'na',
                  '2' => 'flags-na',
               ],
               '169' => [ 
                  '0' => 'nc',
                  '1' => 'nc',
                  '2' => 'flags-nc',
               ],
               '170' => [ 
                  '0' => 'ne',
                  '1' => 'ne',
                  '2' => 'flags-ne',
               ],
               '171' => [ 
                  '0' => 'nf',
                  '1' => 'nf',
                  '2' => 'flags-nf',
               ],
               '172' => [ 
                  '0' => 'ng',
                  '1' => 'ng',
                  '2' => 'flags-ng',
               ],
               '173' => [ 
                  '0' => 'ni',
                  '1' => 'ni',
                  '2' => 'flags-ni',
               ],
               '174' => [ 
                  '0' => 'gb-nir',
                  '1' => 'gb-nir',
                  '2' => 'flags-gb-nir',
               ],
               '175' => [ 
                  '0' => 'nl',
                  '1' => 'nl',
                  '2' => 'flags-nl',
               ],
               '176' => [ 
                  '0' => 'no',
                  '1' => 'no',
                  '2' => 'flags-no',
               ],
               '177' => [ 
                  '0' => 'np',
                  '1' => 'np',
                  '2' => 'flags-np',
               ],
               '178' => [ 
                  '0' => 'nr',
                  '1' => 'nr',
                  '2' => 'flags-nr',
               ],
               '179' => [ 
                  '0' => 'nu',
                  '1' => 'nu',
                  '2' => 'flags-nu',
               ],
               '180' => [ 
                  '0' => 'nz',
                  '1' => 'nz',
                  '2' => 'flags-nz',
               ],
               '181' => [ 
                  '0' => 'om',
                  '1' => 'om',
                  '2' => 'flags-om',
               ],
               '182' => [ 
                  '0' => 'pa',
                  '1' => 'pa',
                  '2' => 'flags-pa',
               ],
               '183' => [ 
                  '0' => 'pe',
                  '1' => 'pe',
                  '2' => 'flags-pe',
               ],
               '184' => [ 
                  '0' => 'pf',
                  '1' => 'pf',
                  '2' => 'flags-pf',
               ],
               '185' => [ 
                  '0' => 'pg',
                  '1' => 'pg',
                  '2' => 'flags-pg',
               ],
               '186' => [ 
                  '0' => 'ph',
                  '1' => 'ph',
                  '2' => 'flags-ph',
               ],
               '187' => [ 
                  '0' => 'pk',
                  '1' => 'pk',
                  '2' => 'flags-pk',
               ],
               '188' => [ 
                  '0' => 'pl',
                  '1' => 'pl',
                  '2' => 'flags-pl',
               ],
               '189' => [ 
                  '0' => 'pm',
                  '1' => 'pm',
                  '2' => 'flags-pm',
               ],
               '190' => [ 
                  '0' => 'pn',
                  '1' => 'pn',
                  '2' => 'flags-pn',
               ],
               '191' => [ 
                  '0' => 'pr',
                  '1' => 'pr',
                  '2' => 'flags-pr',
               ],
               '192' => [ 
                  '0' => 'ps',
                  '1' => 'ps',
                  '2' => 'flags-ps',
               ],
               '193' => [ 
                  '0' => 'pt',
                  '1' => 'pt',
                  '2' => 'flags-pt',
               ],
               '194' => [ 
                  '0' => 'pw',
                  '1' => 'pw',
                  '2' => 'flags-pw',
               ],
               '195' => [ 
                  '0' => 'py',
                  '1' => 'py',
                  '2' => 'flags-py',
               ],
               '196' => [ 
                  '0' => 'qa',
                  '1' => 'qa',
                  '2' => 'flags-qa',
               ],
               '197' => [ 
                  '0' => 'qc',
                  '1' => 'qc',
                  '2' => 'flags-qc',
               ],
               '198' => [ 
                  '0' => 're',
                  '1' => 're',
                  '2' => 'flags-re',
               ],
               '199' => [ 
                  '0' => 'ro',
                  '1' => 'ro',
                  '2' => 'flags-ro',
               ],
               '200' => [ 
                  '0' => 'rs',
                  '1' => 'rs',
                  '2' => 'flags-rs',
               ],
               '201' => [ 
                  '0' => 'ru',
                  '1' => 'ru',
                  '2' => 'flags-ru',
               ],
               '202' => [ 
                  '0' => 'rw',
                  '1' => 'rw',
                  '2' => 'flags-rw',
               ],
               '203' => [ 
                  '0' => 'sa',
                  '1' => 'sa',
                  '2' => 'flags-sa',
               ],
               '204' => [ 
                  '0' => 'sb',
                  '1' => 'sb',
                  '2' => 'flags-sb',
               ],
               '205' => [ 
                  '0' => 'sc',
                  '1' => 'sc',
                  '2' => 'flags-sc',
               ],
               '206' => [ 
                  '0' => 'gb-sct',
                  '1' => 'gb-sct',
                  '2' => 'flags-gb-sct',
               ],
               '207' => [ 
                  '0' => 'sd',
                  '1' => 'sd',
                  '2' => 'flags-sd',
               ],
               '208' => [ 
                  '0' => 'se',
                  '1' => 'se',
                  '2' => 'flags-se',
               ],
               '209' => [ 
                  '0' => 'sg',
                  '1' => 'sg',
                  '2' => 'flags-sg',
               ],
               '210' => [ 
                  '0' => 'sh',
                  '1' => 'sh',
                  '2' => 'flags-sh',
               ],
               '211' => [ 
                  '0' => 'si',
                  '1' => 'si',
                  '2' => 'flags-si',
               ],
               '212' => [ 
                  '0' => 'sj',
                  '1' => 'sj',
                  '2' => 'flags-sj',
               ],
               '213' => [ 
                  '0' => 'sk',
                  '1' => 'sk',
                  '2' => 'flags-sk',
               ],
               '214' => [ 
                  '0' => 'sl',
                  '1' => 'sl',
                  '2' => 'flags-sl',
               ],
               '215' => [ 
                  '0' => 'sm',
                  '1' => 'sm',
                  '2' => 'flags-sm',
               ],
               '216' => [ 
                  '0' => 'sn',
                  '1' => 'sn',
                  '2' => 'flags-sn',
               ],
               '217' => [ 
                  '0' => 'so',
                  '1' => 'so',
                  '2' => 'flags-so',
               ],
               '218' => [ 
                  '0' => 'sr',
                  '1' => 'sr',
                  '2' => 'flags-sr',
               ],
               '219' => [ 
                  '0' => 'ss',
                  '1' => 'ss',
                  '2' => 'flags-ss',
               ],
               '220' => [ 
                  '0' => 'st',
                  '1' => 'st',
                  '2' => 'flags-st',
               ],
               '221' => [ 
                  '0' => 'sv',
                  '1' => 'sv',
                  '2' => 'flags-sv',
               ],
               '222' => [ 
                  '0' => 'sx',
                  '1' => 'sx',
                  '2' => 'flags-sx',
               ],
               '223' => [ 
                  '0' => 'sy',
                  '1' => 'sy',
                  '2' => 'flags-sy',
               ],
               '224' => [ 
                  '0' => 'sz',
                  '1' => 'sz',
                  '2' => 'flags-sz',
               ],
               '225' => [ 
                  '0' => 'tc',
                  '1' => 'tc',
                  '2' => 'flags-tc',
               ],
               '226' => [ 
                  '0' => 'td',
                  '1' => 'td',
                  '2' => 'flags-td',
               ],
               '227' => [ 
                  '0' => 'tf',
                  '1' => 'tf',
                  '2' => 'flags-tf',
               ],
               '228' => [ 
                  '0' => 'tg',
                  '1' => 'tg',
                  '2' => 'flags-tg',
               ],
               '229' => [ 
                  '0' => 'th',
                  '1' => 'th',
                  '2' => 'flags-th',
               ],
               '230' => [ 
                  '0' => 'tj',
                  '1' => 'tj',
                  '2' => 'flags-tj',
               ],
               '231' => [ 
                  '0' => 'tk',
                  '1' => 'tk',
                  '2' => 'flags-tk',
               ],
               '232' => [ 
                  '0' => 'tl',
                  '1' => 'tl',
                  '2' => 'flags-tl',
               ],
               '233' => [ 
                  '0' => 'tm',
                  '1' => 'tm',
                  '2' => 'flags-tm',
               ],
               '234' => [ 
                  '0' => 'tn',
                  '1' => 'tn',
                  '2' => 'flags-tn',
               ],
               '235' => [ 
                  '0' => 'to',
                  '1' => 'to',
                  '2' => 'flags-to',
               ],
               '236' => [ 
                  '0' => 'tr',
                  '1' => 'tr',
                  '2' => 'flags-tr',
               ],
               '237' => [ 
                  '0' => 'tt',
                  '1' => 'tt',
                  '2' => 'flags-tt',
               ],
               '238' => [ 
                  '0' => 'tv',
                  '1' => 'tv',
                  '2' => 'flags-tv',
               ],
               '239' => [ 
                  '0' => 'tw',
                  '1' => 'tw',
                  '2' => 'flags-tw',
               ],
               '240' => [ 
                  '0' => 'tz',
                  '1' => 'tz',
                  '2' => 'flags-tz',
               ],
               '241' => [ 
                  '0' => 'ua',
                  '1' => 'ua',
                  '2' => 'flags-ua',
               ],
               '242' => [ 
                  '0' => 'ug',
                  '1' => 'ug',
                  '2' => 'flags-ug',
               ],
               '243' => [ 
                  '0' => 'um',
                  '1' => 'um',
                  '2' => 'flags-um',
               ],
               '244' => [ 
                  '0' => 'us',
                  '1' => 'us',
                  '2' => 'flags-us',
               ],
               '245' => [ 
                  '0' => 'uy',
                  '1' => 'uy',
                  '2' => 'flags-uy',
               ],
               '246' => [ 
                  '0' => 'uz',
                  '1' => 'uz',
                  '2' => 'flags-uz',
               ],
               '247' => [ 
                  '0' => 'va',
                  '1' => 'va',
                  '2' => 'flags-va',
               ],
               '248' => [ 
                  '0' => 'vc',
                  '1' => 'vc',
                  '2' => 'flags-vc',
               ],
               '249' => [ 
                  '0' => 've',
                  '1' => 've',
                  '2' => 'flags-ve',
               ],
               '250' => [ 
                  '0' => 'vg',
                  '1' => 'vg',
                  '2' => 'flags-vg',
               ],
               '251' => [ 
                  '0' => 'vi',
                  '1' => 'vi',
                  '2' => 'flags-vi',
               ],
               '252' => [ 
                  '0' => 'vn',
                  '1' => 'vn',
                  '2' => 'flags-vn',
               ],
               '253' => [ 
                  '0' => 'vu',
                  '1' => 'vu',
                  '2' => 'flags-vu',
               ],
               '254' => [ 
                  '0' => 'gb-wls',
                  '1' => 'gb-wls',
                  '2' => 'flags-gb-wls',
               ],
               '255' => [ 
                  '0' => 'wf',
                  '1' => 'wf',
                  '2' => 'flags-wf',
               ],
               '256' => [ 
                  '0' => 'ws',
                  '1' => 'ws',
                  '2' => 'flags-ws',
               ],
               '257' => [ 
                  '0' => 'ye',
                  '1' => 'ye',
                  '2' => 'flags-ye',
               ],
               '258' => [ 
                  '0' => 'yt',
                  '1' => 'yt',
                  '2' => 'flags-yt',
               ],
               '259' => [ 
                  '0' => 'za',
                  '1' => 'za',
                  '2' => 'flags-za',
               ],
               '260' => [ 
                  '0' => 'zm',
                  '1' => 'zm',
                  '2' => 'flags-zm',
               ],
               '261' => [ 
                  '0' => 'zw',
                  '1' => 'zw',
                  '2' => 'flags-zw',
               ],
            ],
            'size' => 1,
            'minitems' => 0,
            'maxitems' => 1,
            'fieldWizard' => [ 
               'selectIcons' => [ 
                  'disabled' => false,
               ],
            ],
         ],
      ],
      // Example from extension "styleguide", table "sys_language"
      // [end flag]
   ],
   // [end columns]
   // [start types]
   'types' => [ 
      '1' => [ 
         'showitem' => '
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                    title,language_isocode,flag,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                    hidden,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
        ',
      ],
   ],
   // [end types]
];