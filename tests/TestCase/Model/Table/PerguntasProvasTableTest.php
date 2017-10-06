<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PerguntasProvasTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PerguntasProvasTable Test Case
 */
class PerguntasProvasTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\PerguntasProvasTable
     */
    public $PerguntasProvas;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.perguntas_provas',
        'app.perguntas',
        'app.provas',
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
        $config = TableRegistry::exists('PerguntasProvas') ? [] : ['className' => PerguntasProvasTable::class];
        $this->PerguntasProvas = TableRegistry::get('PerguntasProvas', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->PerguntasProvas);

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
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
