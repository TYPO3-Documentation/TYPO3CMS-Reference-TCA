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
use TYPO3\CMS\Core\Database\ConnectionPool;
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

$images = createImages(Environment::getPublicPath() . '/fileadmin/conference/');
// The folder with the materials of the workshop
GeneralUtility::mkdir_deep(Environment::getPublicPath() . '/fileadmin/workshops/first-form-element/');

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
$data['backend_layout'] = [
    'NEWlayout' => [
        'pid' => 1, 'title' => 'Two columns',
        'config' => "backend_layout {\n  colCount = 2\n  rowCount = 1\n  rows {\n    1 {\n      columns {\n        1 {\n          name = Main\n          colPos = 0\n        }\n        2 {\n          name = Sidebar\n          colPos = 1\n        }\n      }\n    }\n  }\n}\n",
    ],
];
$data['tt_content'] = [
    'NEWwelcome' => [
        'pid' => 1, 'CType' => 'text', 'header' => 'Welcome',
        'bodytext' => '<p>The conferences of this year.</p>',
    ],
    'NEWplugin' => [
        'pid' => 1, 'CType' => 'myextension_conferencelist', 'header' => 'Upcoming conferences',
        'pi_flexform' => ['data' => [
            'sDEF' => ['lDEF' => ['settings.mode' => ['vDEF' => 'upcoming']]],
            'sHighlights' => ['lDEF' => [
                'settings.introduction' => ['vDEF' => '<p>Meet the community in Basel and Leipzig.</p>'],
                'settings.highlights' => ['el' => [
                    '1' => ['highlight' => ['el' => [
                        'title' => ['vDEF' => 'Twenty years of TCA'],
                        'link' => ['vDEF' => 'https://example.org/keynote'],
                    ]]],
                ]],
            ]],
        ]],
    ],
    'NEWgettingthere' => [
        'pid' => $pid, 'CType' => 'text', 'header' => 'Getting there',
        'bodytext' => '<p>The congress center is next to the main station.</p>',
    ],
];
$data['tx_myextension_location'] = [
    'NEWbasel' => [
        'pid' => $pid, 'name' => 'Congress Center', 'street' => 'Messeplatz 21',
        'zip' => '4058', 'city' => 'Basel', 'country' => 'CH',
        'latitude' => '47.563167', 'longitude' => '7.600833', 'image' => 'NEWimgbasel',
        'directions' => 'Tram 2 or 6 to the stop Messeplatz.', 'capacity' => 1000,
        'main_venue' => 1, 'marker' => 'venue.svg',
    ],
    'NEWhall' => [
        'pid' => $pid, 'name' => 'Hall 1', 'city' => 'Basel', 'parent' => 'NEWbasel',
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
        'email' => 'ada@example.org', 'website' => 'https://example.org/profile/ada', 'country' => 'DE',
        'bio' => '<p>Ada builds extensions for <strong>public institutions</strong>.</p>', 'photo' => 'NEWimgada',
        'short_bio' => 'Ada builds TYPO3 extensions for public institutions.',
        'topics' => 'tca,fluid',
        'social_links' => '{"mastodon": "https://example.org/@ada", "code": "https://example.org/ada"}',
        // Fixed, as a generated identifier would change every screenshot
        'identifier' => '01999b10-6c00-7d2a-9a3e-2f1b8c4d5e6f',
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
        'abstract' => "How the table configuration array turns a database table into a backend form.\n\n\n\nWith examples from a real extension.",
        'comments' => 'NEWcommenttalk', 'recording_allowed' => 1, 'spoken_language' => 'en',
        'audience' => 'developers,integrators', 'equipment' => 'handheld_microphone,projector',
    ],
    'NEWtalkworkshop' => [
        'pid' => $pid, 'talk_type' => 'workshop', 'title' => 'Write your first form element',
        'speaker' => 'NEWspben', 'start_time' => strtotime('2027-05-12 14:00'), 'duration' => 180,
        'room' => 'Room A', 'level' => 2, 'max_participants' => 20,
        'requirements' => "A laptop with DDEV installed:\n\n\tddev config --project-type=typo3\n\tddev start",
        'materials' => '1:/workshops/first-form-element/',
    ],
    'NEWtalkkeynote' => [
        'pid' => $pid, 'talk_type' => 'keynote', 'title' => 'Twenty years of TCA',
        'speaker' => 'NEWspkim', 'start_time' => strtotime('2027-05-12 09:00'), 'duration' => 60,
        'room' => 'Main hall',
    ],
];
$data['tx_myextension_sponsor'] = [
    'NEWsphosting' => [
        'pid' => $pid, 'name' => 'Example Hosting', 'tier' => 'gold', 'logo' => 'NEWimghosting',
    ],
    'NEWspagency' => [
        'pid' => $pid, 'name' => 'Sample Agency', 'tier' => 'silver', 'logo' => 'NEWimgagency',
    ],
];
$data['sys_category'] = [
    'NEWcattopics' => ['pid' => $pid, 'title' => 'Topics'],
    'NEWcatbackend' => ['pid' => $pid, 'title' => 'Backend', 'parent' => 'NEWcattopics'],
    'NEWcatfrontend' => ['pid' => $pid, 'title' => 'Frontend', 'parent' => 'NEWcattopics'],
    'NEWcatediting' => ['pid' => $pid, 'title' => 'Editing', 'parent' => 'NEWcattopics'],
];
$data['fe_groups'] = [
    'NEWfegroup' => ['pid' => $pid, 'title' => 'Attendees'],
];
$data['fe_users'] = [
    'NEWfechris' => [
        'pid' => $pid, 'username' => 'chris', 'name' => 'Chris Visitor',
        'password' => 'Attendee-2027!', 'usergroup' => 'NEWfegroup', 'tx_myextension_badge_name' => 'Chris',
    ],
    'NEWfesam' => [
        'pid' => $pid, 'username' => 'sam', 'name' => 'Sam Listener',
        'password' => 'Attendee-2027!', 'usergroup' => 'NEWfegroup',
    ],
    'NEWferobin' => [
        'pid' => $pid, 'username' => 'robin', 'name' => 'Robin Example',
        'password' => 'Attendee-2027!', 'usergroup' => 'NEWfegroup',
    ],
];
$data['tx_myextension_registration'] = [
    'NEWregchris' => ['pid' => $pid, 'attendee' => 'fe_users_NEWfechris', 'ticket' => 'regular', 'status' => 'confirmed'],
    'NEWregsam' => ['pid' => $pid, 'attendee' => 'fe_users_NEWfesam', 'ticket' => 'student', 'status' => 'confirmed'],
    'NEWregrobin' => ['pid' => $pid, 'attendee' => 'fe_users_NEWferobin', 'ticket' => 'regular', 'status' => 'waiting'],
];
$data['tx_myextension_hotel'] = [
    'NEWhotelfair' => ['pid' => $pid, 'name' => 'Hotel at the Fair', 'city' => 'Basel'],
    'NEWhotelriver' => ['pid' => $pid, 'name' => 'River Hotel', 'city' => 'Basel'],
];
$data['tx_myextension_partnership'] = [
    'NEWpartnership' => ['pid' => $pid, 'partner' => 'NEWconfeditors', 'discount' => 20],
];
$data['tx_myextension_comment'] = [
    'NEWcomment' => [
        'pid' => $pid, 'name' => 'Chris Visitor', 'email' => 'chris@example.org',
        'content' => 'Will the talks be recorded?', 'approved' => 1,
    ],
    'NEWcommenttalk' => [
        'pid' => $pid, 'name' => 'Sam Listener', 'email' => 'sam@example.org',
        'content' => 'Are the slides available after the talk?', 'approved' => 0,
    ],
];
$data['tx_myextension_conference'] = [
    'NEWconfdev' => [
        'pid' => $pid, 'title' => 'TYPO3 Developer Days 2027',
        'conference_date' => strtotime('2027-05-12'), 'location' => 'NEWbasel', 'published' => 1,
        'event_format' => 'hybrid', 'stream_url' => 'https://example.org/live',
        'registration_open' => 1, 'registration_deadline' => strtotime('2027-04-30 23:59'),
        'ticket_link' => 'https://example.org/tickets',
        'seats' => 350, 'website' => 'https://example.org', 'contact_email' => 'team@example.org',
        'color' => '#ff8700', 'description' => '<p>Three days about building TYPO3 extensions.</p>',
        'hashtag' => '#T3DD27', 'tracks' => "Backend\nFrontend\nEditing", 'amenities' => 9, 'timezone' => 'Europe/Zurich',
        'end_date' => strtotime('2027-05-14'), 'doors_open' => '2027-05-12T08:30:00',
        'overlay_color' => '#29254580', 'livestream_password' => 'Stream-Basel-2027',
        'ticketing_secret' => 'a3f1c9e07b5d4e2f8c6a1b0d9e7f3c5a2b4d6e8f',
        'embed_code' => '<iframe src="https://example.org/live/embed" title="Live stream"></iframe>',
        'prices' => "Regular ticket|450 EUR\nStudent ticket|150 EUR\nSpeaker|free",
        'internal_notes' => 'Catering confirmed for 350 people.',
        'speakers' => 'NEWspada,NEWspben,NEWspkim',
        'talks' => 'NEWtalkkeynote,NEWtalktca,NEWtalkworkshop',
        'comments' => 'NEWcomment', 'logo' => 'NEWimglogo',
        'registrations' => 'NEWregchris,NEWregsam', 'waiting_list' => 'NEWregrobin',
        'hotels' => 'NEWhotelfair,NEWhotelriver', 'content_elements' => 'NEWgettingthere',
        'partners' => 'NEWpartnership',
    ],
    'NEWconfeditors' => [
        'pid' => $pid, 'title' => 'Editors Day 2027',
        'conference_date' => strtotime('2027-09-23'), 'location' => 'NEWleipzig', 'published' => 0,
        'event_format' => 'onsite',
        'seats' => 120, 'contact_email' => 'editors@example.org', 'color' => '#2f99a4',
        'speakers' => 'NEWspada',
    ],
];
$data['sys_file_reference'] = [
    'NEWimgbasel' => $reference('basel.png', 'tx_myextension_location', 'image', 'NEWbasel'),
    'NEWimgleipzig' => $reference('leipzig.png', 'tx_myextension_location', 'image', 'NEWleipzig'),
    'NEWimgada' => $reference('ada.png', 'tx_myextension_speaker', 'photo', 'NEWspada'),
    'NEWimglogo' => $reference('logo.png', 'tx_myextension_conference', 'logo', 'NEWconfdev'),
    'NEWimghosting' => $reference('hosting.png', 'tx_myextension_sponsor', 'logo', 'NEWsphosting'),
    'NEWimgagency' => $reference('agency.png', 'tx_myextension_sponsor', 'logo', 'NEWspagency'),
];
$dataHandler = $process($data);
$uids = [
    'storageFolder' => $pid,
    'contentElement' => $dataHandler->substNEWwithIDs['NEWwelcome'],
    'conference' => $dataHandler->substNEWwithIDs['NEWconfdev'],
    'talk' => $dataHandler->substNEWwithIDs['NEWtalktca'],
    'workshop' => $dataHandler->substNEWwithIDs['NEWtalkworkshop'],
    'speaker' => $dataHandler->substNEWwithIDs['NEWspada'],
    'location' => $dataHandler->substNEWwithIDs['NEWbasel'],
    'hall' => $dataHandler->substNEWwithIDs['NEWhall'],
    'backendLayout' => $dataHandler->substNEWwithIDs['NEWlayout'],
    'hotel' => $dataHandler->substNEWwithIDs['NEWhotelfair'],
    'comment' => $dataHandler->substNEWwithIDs['NEWcomment'],
    'plugin' => $dataHandler->substNEWwithIDs['NEWplugin'],
    'feUser' => $dataHandler->substNEWwithIDs['NEWfechris'],
];
$conference = $uids['conference'];

// The days of a workshop come from its conference, which has to exist when
// the value is saved: the first two days of the conference
$process(['tx_myextension_talk' => [$uids['workshop'] => ['days' => 3]]]);

// Relations that need the final uids: the filter of the main sponsor reads
// the sponsor from the database
$process([
    'tx_myextension_conference' => [$conference => [
        'main_sponsor' => 'tx_myextension_sponsor_' . $dataHandler->substNEWwithIDs['NEWsphosting'],
        'related_content' => 'pages_1,tt_content_' . $uids['contentElement'],
        'categories' => $dataHandler->substNEWwithIDs['NEWcatbackend'],
    ]],
    'tx_myextension_talk' => [$uids['talk'] => [
        'related_talks' => 'tx_myextension_talk_' . $uids['workshop'] . ',tx_myextension_talk_' . $dataHandler->substNEWwithIDs['NEWtalkkeynote'],
        'topic' => $dataHandler->substNEWwithIDs['NEWcatbackend'],
        // The items of the track come from the tracks of the conference
        'track' => 'Backend',
    ]],
]);
configureSite($container->get(SiteFinder::class), $container->get(SiteWriter::class), $dataHandler->substNEWwithIDs['NEWcattopics']);

// German translations of the storage folder, the first conference and a speaker
$dataHandler = $process([], [
    'pages' => [$pid => ['localize' => 1]],
    'tx_myextension_conference' => [$conference => ['localize' => 1]],
    'tx_myextension_speaker' => [$uids['speaker'] => ['localize' => 1]],
]);
$uids['conferenceTranslation'] = $dataHandler->copyMappingArray_merged['tx_myextension_conference'][$conference];
$uids['speakerTranslation'] = $dataHandler->copyMappingArray_merged['tx_myextension_speaker'][$uids['speaker']];
$process([
    'tx_myextension_conference' => [
        $uids['conferenceTranslation'] => [
            'title' => 'TYPO3-Entwicklertage 2027',
        ],
    ],
]);

// The label of a comment shows its creation date, which must not change
// with every run
GeneralUtility::makeInstance(ConnectionPool::class)
    ->getConnectionForTable('tx_myextension_comment')
    ->update('tx_myextension_comment', ['crdate' => strtotime('2027-05-12 18:30')], ['pid' => $pid]);

// The uids depend on the records that "typo3 setup" creates, which differ
// between TYPO3 versions, so the screenshots read them from this file
file_put_contents(Environment::getVarPath() . '/screenshot-records.json', json_encode($uids));
echo 'Created the example records: ' . json_encode($uids) . "\n";

/**
 * Adds German to the site, and the root category that the topic of a talk
 * starts from
 */
function configureSite(SiteFinder $siteFinder, SiteWriter $siteWriter, int $rootCategory): void
{
    $site = $siteFinder->getSiteByIdentifier('main')->getConfiguration();
    $site['categories']['root'] = $rootCategory;
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
        'hosting.png' => [[200, 164, 0], 'Example Hosting'],
        'agency.png' => [[120, 120, 120], 'Sample Agency'],
    ];
    foreach ($images as $name => [$color, $label]) {
        $image = imagecreatetruecolor(800, 600);
        imagefill($image, 0, 0, imagecolorallocate($image, ...$color));
        imagestring($image, 5, 40, 280, $label, imagecolorallocate($image, 255, 255, 255));
        imagepng($image, $folder . $name);
    }
    return array_keys($images);
}
