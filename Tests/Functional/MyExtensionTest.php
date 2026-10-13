<?php

declare(strict_types=1);

namespace T3docs\ReferenceTca\Tests\Functional;

use MyVendor\MyExtension\Backend\FeedbackCountFormatter;
use PHPUnit\Framework\Attributes\Test;
use TYPO3\CMS\Core\Configuration\Tca\TcaFactory;
use TYPO3\CMS\Core\Configuration\Tca\TcaMigration;
use TYPO3\CMS\Core\Database\ConnectionPool;
use TYPO3\CMS\Core\Localization\LanguageServiceFactory;
use TYPO3\TestingFramework\Core\Functional\FunctionalTestCase;

/**
 * Checks that the example extension in Documentation/CodeSnippets/my_extension
 * and the site package in Documentation/CodeSnippets/my_sitepackage install
 * and that their TCA needs no migration, so the examples shown in the manual
 * are valid for the current TYPO3 version.
 */
final class MyExtensionTest extends FunctionalTestCase
{
    private const EXTENSION_PATH = __DIR__ . '/../../Documentation/CodeSnippets/my_extension/';

    protected array $testExtensionsToLoad = [
        'myvendor/my-extension',
        'myvendor/my-sitepackage',
    ];

    #[Test]
    public function databaseTablesAreCreatedFromTca(): void
    {
        $connectionPool = $this->get(ConnectionPool::class);
        foreach ($this->getTableNames() as $tableName) {
            $schemaManager = $connectionPool->getConnectionForTable($tableName)->createSchemaManager();
            self::assertTrue($schemaManager->tablesExist([$tableName]), $tableName . ' was not created');
            $columnNames = array_keys($schemaManager->listTableColumns($tableName));
            foreach (array_keys($GLOBALS['TCA'][$tableName]['columns']) as $fieldName) {
                if (in_array($GLOBALS['TCA'][$tableName]['columns'][$fieldName]['config']['type'], ['none', 'user'], true)) {
                    continue;
                }
                self::assertContains(strtolower($fieldName), array_map(strtolower(...), $columnNames), $tableName . '.' . $fieldName . ' has no column');
            }
        }
    }

    #[Test]
    public function tcaNeedsNoMigration(): void
    {
        $tca = $this->get(TcaFactory::class)->createNotMigrated();
        $messages = $this->get(TcaMigration::class)->migrate($tca)->getMessages();
        self::assertSame([], $messages);
    }

    #[Test]
    public function sitePackageOverridesTheExtension(): void
    {
        $suggestOptions = $GLOBALS['TCA']['tx_myextension_conference']['columns']['related_content']['config']['suggestOptions'];
        // The site package sets single keys, so the option of the extension stays
        self::assertTrue($suggestOptions['default']['searchWholePhrase']);
        // The option of the site package
        self::assertSame('6,7', $suggestOptions['default']['pidList']);
        // The site package also changes a table of the Core
        self::assertSame('', $GLOBALS['TCA']['tt_content']['columns']['header']['l10n_mode']);
        // The site package changes the ctrl section of a table of the extension
        self::assertTrue($GLOBALS['TCA']['tx_myextension_hotel']['ctrl']['security']['ignoreWebMountRestriction']);
        // The item of the site package follows the item it is placed after
        $audienceItems = $GLOBALS['TCA']['tx_myextension_talk']['columns']['audience']['config']['items'];
        $values = array_column($audienceItems, 'value');
        self::assertSame('agencies', $values[array_search('decision_makers', $values, true) + 1]);
        self::assertSame('business', $audienceItems[array_search('agencies', $values, true)]['group']);
        $languageService = $this->get(LanguageServiceFactory::class)->create('default');
        self::assertSame('Agencies', $languageService->sL('LLL:my_sitepackage.db:talk.audience.agencies'));
        // The site package renames a content element of the extension in the wizard
        $creationOptions = $GLOBALS['TCA']['tt_content']['types']['myextension_conferenceteaser']['creationOptions'];
        self::assertSame('Event teaser', $languageService->sL('LLL:' . $creationOptions['title']));
    }

    #[Test]
    public function feedbackCountIsShownAsText(): void
    {
        $GLOBALS['LANG'] = $this->get(LanguageServiceFactory::class)->create('default');
        $formatter = new FeedbackCountFormatter();
        self::assertSame('1 attendee', $formatter->format(['value' => 1]));
        self::assertSame('12 attendees', $formatter->format(['value' => '12']));
    }

    #[Test]
    public function workshopsShowTheFeedbackPaletteWithALabelOfTheirOwn(): void
    {
        $types = $GLOBALS['TCA']['tx_myextension_talk']['types'];
        self::assertStringContainsString('--palette--;;feedback', $types['talk']['showitem']);
        self::assertStringContainsString('--palette--;;feedback', $types['keynote']['showitem']);
        self::assertStringContainsString('--palette--;my_extension.db:talk.feedback.workshop;feedback', $types['workshop']['showitem']);
        self::assertStringNotContainsString('--palette--;;feedback', $types['workshop']['showitem']);
    }

    #[Test]
    public function overrideChangesTheDefaultOfTheAutoCreatedColumn(): void
    {
        $column = $GLOBALS['TCA']['tx_myextension_conference']['columns']['hidden'];
        self::assertSame(1, $column['config']['default']);
        // The manual shows the column as the Core creates it, before the override
        require __DIR__ . '/../../Documentation/Ctrl/_CodeSnippets/_AutoCreatedColumns/_autoCreateConference.php';
        $column['config']['default'] = 0;
        self::assertSame($column, $GLOBALS['TCA']['tx_myextension_conference']['columns']['hidden']);
    }

    #[Test]
    public function partnershipTypesHaveNoCreationLinkOfTheirOwn(): void
    {
        foreach ($GLOBALS['TCA']['tx_myextension_partnership']['types'] as $type => $configuration) {
            self::assertFalse($configuration['creationOptions']['enableDirectRecordTypeCreation'], 'type ' . $type);
        }
    }

    #[Test]
    public function allLabelsAreTranslated(): void
    {
        $languageService = $this->get(LanguageServiceFactory::class)->create('default');
        $files = new \RecursiveIteratorIterator(new \RecursiveDirectoryIterator(self::EXTENSION_PATH . 'Configuration'));
        foreach ($files as $file) {
            if (!in_array($file->getExtension(), ['php', 'xml'], true)) {
                continue;
            }
            preg_match_all('/my_extension\.db:[A-Za-z0-9_.]+/', (string)file_get_contents($file->getPathname()), $matches);
            foreach (array_unique($matches[0]) as $label) {
                // With the LLL: prefix, sL() returns an empty string for a missing label
                self::assertNotSame('', $languageService->sL('LLL:' . $label), $label . ' in ' . $file->getFilename() . ' has no translation');
            }
        }
    }

    /**
     * @return list<string>
     */
    private function getTableNames(): array
    {
        $tableNames = [];
        foreach (glob(self::EXTENSION_PATH . 'Configuration/TCA/*.php') as $file) {
            $tableNames[] = basename($file, '.php');
        }
        return $tableNames;
    }
}
