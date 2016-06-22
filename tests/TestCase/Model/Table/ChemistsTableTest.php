<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ChemistsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ChemistsTable Test Case
 */
class ChemistsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ChemistsTable
     */
    public $Chemists;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.chemists',
        'app.patches',
        'app.users',
        'app.states',
        'app.cities',
        'app.report_entry_chemists'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Chemists') ? [] : ['className' => 'App\Model\Table\ChemistsTable'];
        $this->Chemists = TableRegistry::get('Chemists', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Chemists);

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
