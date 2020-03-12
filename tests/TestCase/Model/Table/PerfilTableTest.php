<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PerfilTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PerfilTable Test Case
 */
class PerfilTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\PerfilTable
     */
    protected $Perfil;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Perfil',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Perfil') ? [] : ['className' => PerfilTable::class];
        $this->Perfil = TableRegistry::getTableLocator()->get('Perfil', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Perfil);

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
