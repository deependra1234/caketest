<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ReportMastersTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ReportMastersTable Test Case
 */
class ReportMastersTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ReportMastersTable
     */
    public $ReportMasters;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.report_masters',
        'app.users',
        'app.user_types',
        'app.chemists',
        'app.patches',
        'app.states',
        'app.cities',
        'app.report_entry_chemists',
        'app.products',
        'app.report_entry_doctors',
        'app.doctors',
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
        $config = TableRegistry::exists('ReportMasters') ? [] : ['className' => 'App\Model\Table\ReportMastersTable'];
        $this->ReportMasters = TableRegistry::get('ReportMasters', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ReportMasters);

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
