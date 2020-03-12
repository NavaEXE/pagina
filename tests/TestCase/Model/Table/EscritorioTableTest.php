<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\EscritorioTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\EscritorioTable Test Case
 */
class EscritorioTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\EscritorioTable
     */
    protected $Escritorio;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Escritorio',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Escritorio') ? [] : ['className' => EscritorioTable::class];
        $this->Escritorio = TableRegistry::getTableLocator()->get('Escritorio', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Escritorio);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
