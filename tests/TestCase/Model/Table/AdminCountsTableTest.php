<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AdminCountsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AdminCountsTable Test Case
 */
class AdminCountsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\AdminCountsTable
     */
    protected $AdminCounts;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected array $fixtures = [
        'app.AdminCounts',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('AdminCounts') ? [] : ['className' => AdminCountsTable::class];
        $this->AdminCounts = $this->getTableLocator()->get('AdminCounts', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->AdminCounts);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\AdminCountsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
