<?php

declare(strict_types=1);

namespace T3docs\ReferenceTca\Tests\Functional;

use PHPUnit\Framework\Attributes\Test;
use TYPO3\CMS\Core\Configuration\Tca\TcaFactory;
use TYPO3\CMS\Core\Configuration\Tca\TcaMigration;
use TYPO3\CMS\Core\Database\ConnectionPool;
use TYPO3\CMS\Core\Localization\LanguageServiceFactory;
use TYPO3\TestingFramework\Core\Functional\FunctionalTestCase;

/**
 * Checks that the example extension in Documentation/CodeSnippets/my_extension
 * installs and that its TCA needs no migration, so the examples
 * shown in the manual are valid for the current TYPO3 version.
 */
final class MyExtensionTest extends FunctionalTestCase
{
    private const EXTENSION_PATH = __DIR__ . '/../../Documentation/CodeSnippets/my_extension/';

    protected array $testExtensionsToLoad = [
        'myvendor/my-extension',
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
