<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ReportEntryChemistsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ReportEntryChemistsTable Test Case
 */
class ReportEntryChemistsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ReportEntryChemistsTable
     */
    public $ReportEntryChemists;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.report_entry_chemists',
        'app.report_masters',
        'app.users',
        'app.user_types',
        'app.chemists',
        'app.patches',
        'app.states',
        'app.cities',
        'app.doctors',
        'app.report_entry_doctors',
        'app.products',
        'app.patchs'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('ReportEntryChemists') ? [] : ['className' => 'App\Model\Table\ReportEntryChemistsTable'];
        $this->ReportEntryChemists = TableRegistry::get('ReportEntryChemists', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ReportEntryChemists);

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
