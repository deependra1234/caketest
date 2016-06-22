<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ReportEntryDoctorsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ReportEntryDoctorsTable Test Case
 */
class ReportEntryDoctorsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ReportEntryDoctorsTable
     */
    public $ReportEntryDoctors;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.report_entry_doctors',
        'app.report_masters',
        'app.users',
        'app.user_types',
        'app.chemists',
        'app.patches',
        'app.states',
        'app.cities',
        'app.report_entry_chemists',
        'app.products',
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
        $config = TableRegistry::exists('ReportEntryDoctors') ? [] : ['className' => 'App\Model\Table\ReportEntryDoctorsTable'];
        $this->ReportEntryDoctors = TableRegistry::get('ReportEntryDoctors', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ReportEntryDoctors);

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
