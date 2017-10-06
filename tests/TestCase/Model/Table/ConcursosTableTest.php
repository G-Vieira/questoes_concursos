<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ConcursosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ConcursosTable Test Case
 */
class ConcursosTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ConcursosTable
     */
    public $Concursos;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.concursos'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Concursos') ? [] : ['className' => ConcursosTable::class];
        $this->Concursos = TableRegistry::get('Concursos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Concursos);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
