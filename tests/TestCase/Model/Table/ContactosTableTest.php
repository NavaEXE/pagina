<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ContactosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ContactosTable Test Case
 */
class ContactosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ContactosTable
     */
    protected $Contactos;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Contactos',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Contactos') ? [] : ['className' => ContactosTable::class];
        $this->Contactos = TableRegistry::getTableLocator()->get('Contactos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Contactos);

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
