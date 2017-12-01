<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CmensagensTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CmensagensTable Test Case
 */
class CmensagensTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\CmensagensTable
     */
    public $Cmensagens;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.cmensagens'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Cmensagens') ? [] : ['className' => CmensagensTable::class];
        $this->Cmensagens = TableRegistry::get('Cmensagens', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Cmensagens);

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
