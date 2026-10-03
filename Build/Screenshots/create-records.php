<?php

declare(strict_types=1);

/*
 * Creates the records of the example extension that the screenshots show:
 * a storage folder with locations, speakers, conferences, talks and
 * comments, placeholder images, and a German translation.
 *
 * Runs after "typo3 setup" and "typo3 extension:setup".
 */

use TYPO3\CMS\Core\Authentication\CommandLineUserAuthentication;
use TYPO3\CMS\Core\Configuration\SiteWriter;
use TYPO3\CMS\Core\Core\Bootstrap;
use TYPO3\CMS\Core\Core\Environment;
use TYPO3\CMS\Core\Core\SystemEnvironmentBuilder;
use TYPO3\CMS\Core\DataHandling\DataHandler;
use TYPO3\CMS\Core\Localization\LanguageServiceFactory;
use TYPO3\CMS\Core\Resource\StorageRepository;
use TYPO3\CMS\Core\Site\SiteFinder;
use TYPO3\CMS\Core\Utility\GeneralUtility;

$classLoader = require __DIR__ . '/../../.Build/vendor/autoload.php';
SystemEnvironmentBuilder::run(0, SystemEnvironmentBuilder::REQUESTTYPE_CLI);
$container = Bootstrap::init($classLoader);
Bootstrap::initializeBackendUser(CommandLineUserAuthentication::class);
$GLOBALS['BE_USER']->authenticate();
$GLOBALS['LANG'] = $container->get(LanguageServiceFactory::class)
    ->createFromUserPreferences($GLOBALS['BE_USER']);

addGermanToSite($container->get(SiteFinder::class), $container->get(SiteWriter::class));
$images = createImages(Environment::getPublicPath() . '/fileadmin/conference/');

$process = static function (array $data, array $commands = []): DataHandler {
    $dataHandler = GeneralUtility::makeInstance(DataHandler::class);
    $dataHandler->start($data, $commands);
    $dataHandler->process_datamap();
    $dataHandler->process_cmdmap();
    if ($dataHandler->errorLog !== []) {
        throw new RuntimeException(implode("\n", $dataHandler->errorLog));
    }
    return $dataHandler;
};

// The storage folder for all records
$dataHandler = $process(['pages' => ['NEWfolder' => [
    'pid' => 1,
    'title' => 'Conferences',
    'doktype' => 254,
]]]);
$pid = $dataHandler->substNEWwithIDs['NEWfolder'];

$storage = GeneralUtility::makeInstance(StorageRepository::class)->getDefaultStorage();
$fileUid = static fn(string $name): int => $storage->getFile('conference/' . $name)->getUid();
$reference = static fn(string $file, string $table, string $field, string $record): array => [
    'pid' => $pid,
    'uid_local' => $fileUid($file),
    'tablenames' => $table,
    'fieldname' => $field,
    'uid_foreign' => $record,
];

$data = [];
$data['tt_content'] = [
    'NEWwelcome' => [
        'pid' => 1, 'CType' => 'text', 'header' => 'Welcome',
        'bodytext' => '<p>The conferences of this year.</p>',
    ],
];
$data['tx_myextension_location'] = [
    'NEWbasel' => [
        'pid' => $pid, 'name' => 'Congress Center', 'street' => 'Messeplatz 21',
        'zip' => '4058', 'city' => 'Basel', 'country' => 'CH',
        'latitude' => '47.563167', 'longitude' => '7.600833', 'image' => 'NEWimgbasel',
        'directions' => 'Tram 2 or 6 to the stop Messeplatz.',
    ],
    'NEWleipzig' => [
        'pid' => $pid, 'name' => 'Kongresshalle', 'street' => 'Pfaffendorfer Strasse 31',
        'zip' => '04105', 'city' => 'Leipzig', 'country' => 'DE',
        'latitude' => '51.348611', 'longitude' => '12.371389', 'image' => 'NEWimgleipzig',
    ],
];
$data['tx_myextension_speaker'] = [
    'NEWspada' => [
        'pid' => $pid, 'salutation' => 'ms', 'name' => 'Ada Example', 'company' => 'Example Agency',
        'email' => 'ada@example.org', 'website' => 'https://example.org', 'country' => 'DE',
        'bio' => '<p>Ada builds extensions for public institutions.</p>', 'photo' => 'NEWimgada',
    ],
    'NEWspben' => [
        'pid' => $pid, 'salutation' => 'mr', 'name' => 'Ben Sample', 'company' => 'Sample Ltd.',
        'email' => 'ben@example.com', 'country' => 'CH',
    ],
    'NEWspkim' => [
        'pid' => $pid, 'salutation' => 'mx', 'name' => 'Kim Muster', 'company' => 'Muster AG',
        'email' => 'kim@example.net', 'country' => 'AT',
    ],
];
$data['tx_myextension_talk'] = [
    'NEWtalktca' => [
        'pid' => $pid, 'talk_type' => 'talk', 'title' => 'TCA for extension developers',
        'speaker' => 'NEWspada', 'start_time' => strtotime('2027-05-12 10:00'), 'duration' => 45,
        'room' => 'Main hall', 'level' => 1,
        'abstract' => 'How the table configuration array turns a database table into a backend form.',
    ],
    'NEWtalkworkshop' => [
        'pid' => $pid, 'talk_type' => 'workshop', 'title' => 'Write your first form element',
        'speaker' => 'NEWspben', 'start_time' => strtotime('2027-05-12 14:00'), 'duration' => 180,
        'room' => 'Room A', 'level' => 2, 'max_participants' => 20,
        'requirements' => 'A laptop with DDEV installed.',
    ],
    'NEWtalkkeynote' => [
        'pid' => $pid, 'talk_type' => 'keynote', 'title' => 'Twenty years of TCA',
        'speaker' => 'NEWspkim', 'start_time' => strtotime('2027-05-12 09:00'), 'duration' => 60,
        'room' => 'Main hall',
    ],
];
$data['tx_myextension_comment'] = [
    'NEWcomment' => [
        'pid' => $pid, 'name' => 'Chris Visitor', 'email' => 'chris@example.org',
        'content' => 'Will the talks be recorded?', 'approved' => 1,
    ],
];
$data['tx_myextension_conference'] = [
    'NEWconfdev' => [
        'pid' => $pid, 'title' => 'TYPO3 Developer Days 2027',
        'conference_date' => strtotime('2027-05-12'), 'location' => 'NEWbasel', 'published' => 1,
        'seats' => 350, 'website' => 'https://example.org', 'contact_email' => 'team@example.org',
        'color' => '#ff8700', 'description' => '<p>Three days about building TYPO3 extensions.</p>',
        'internal_notes' => 'Catering confirmed for 350 people.',
        'speakers' => 'NEWspada,NEWspben,NEWspkim',
        'talks' => 'NEWtalkkeynote,NEWtalktca,NEWtalkworkshop',
        'comments' => 'NEWcomment', 'logo' => 'NEWimglogo',
    ],
    'NEWconfeditors' => [
        'pid' => $pid, 'title' => 'Editors Day 2027',
        'conference_date' => strtotime('2027-09-23'), 'location' => 'NEWleipzig', 'published' => 0,
        'seats' => 120, 'contact_email' => 'editors@example.org', 'color' => '#2f99a4',
        'speakers' => 'NEWspada',
    ],
];
$data['sys_file_reference'] = [
    'NEWimgbasel' => $reference('basel.png', 'tx_myextension_location', 'image', 'NEWbasel'),
    'NEWimgleipzig' => $reference('leipzig.png', 'tx_myextension_location', 'image', 'NEWleipzig'),
    'NEWimgada' => $reference('ada.png', 'tx_myextension_speaker', 'photo', 'NEWspada'),
    'NEWimglogo' => $reference('logo.png', 'tx_myextension_conference', 'logo', 'NEWconfdev'),
];
$dataHandler = $process($data);
$conference = $dataHandler->substNEWwithIDs['NEWconfdev'];
$talk = $dataHandler->substNEWwithIDs['NEWtalktca'];

// German translations of the storage folder and of the first conference
$dataHandler = $process([], [
    'pages' => [$pid => ['localize' => 1]],
    'tx_myextension_conference' => [$conference => ['localize' => 1]],
]);
$process([
    'tx_myextension_conference' => [
        $dataHandler->copyMappingArray_merged['tx_myextension_conference'][$conference] => [
            'title' => 'TYPO3-Entwicklertage 2027',
        ],
    ],
]);

echo 'Created the example records in page ' . $pid . ', conference ' . $conference . ', talk ' . $talk . "\n";

function addGermanToSite(SiteFinder $siteFinder, SiteWriter $siteWriter): void
{
    $site = $siteFinder->getSiteByIdentifier('main')->getConfiguration();
    $site['languages'][1] = [
        'title' => 'Deutsch',
        'enabled' => true,
        'languageId' => 1,
        'base' => '/de/',
        'locale' => 'de_DE.UTF-8',
        'navigationTitle' => 'Deutsch',
        'flag' => 'de',
        'fallbackType' => 'strict',
    ];
    $siteWriter->write('main', $site);
}

/**
 * Placeholder images with a label, so no image files have to be stored
 *
 * @return list<string>
 */
function createImages(string $folder): array
{
    GeneralUtility::mkdir_deep($folder);
    $images = [
        'basel.png' => [[47, 153, 164], 'Congress Center'],
        'leipzig.png' => [[96, 125, 139], 'Kongresshalle'],
        'ada.png' => [[255, 135, 0], 'Ada'],
        'logo.png' => [[41, 37, 69], 'T3DD 2027'],
    ];
    foreach ($images as $name => [$color, $label]) {
        $image = imagecreatetruecolor(800, 600);
        imagefill($image, 0, 0, imagecolorallocate($image, ...$color));
        imagestring($image, 5, 40, 280, $label, imagecolorallocate($image, 255, 255, 255));
        imagepng($image, $folder . $name);
    }
    return array_keys($images);
}
