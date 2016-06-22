<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PatchsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PatchsTable Test Case
 */
class PatchsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\PatchsTable
     */
    public $Patchs;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.patchs',
        'app.users',
        'app.chemists',
        'app.patches',
        'app.states',
        'app.cities',
        'app.report_entry_chemists',
        'app.doctors',
        'app.report_entry_doctors'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Patchs') ? [] : ['className' => 'App\Model\Table\PatchsTable'];
        $this->Patchs = TableRegistry::get('Patchs', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Patchs);

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
