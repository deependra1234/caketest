<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * User Entity.
 *
 * @property int $id
 * @property int $user_type_id
 * @property \App\Model\Entity\UserType $user_type
 * @property string $username
 * @property string $password
 * @property string $name
 * @property \Cake\I18n\Time $created_on
 * @property \Cake\I18n\Time $updated_on
 * @property int $status
 * @property \App\Model\Entity\Chemist[] $chemists
 * @property \App\Model\Entity\Doctor[] $doctors
 * @property \App\Model\Entity\Patch[] $patchs
 * @property \App\Model\Entity\ReportEntryChemist[] $report_entry_chemists
 * @property \App\Model\Entity\ReportEntryDoctor[] $report_entry_doctors
 * @property \App\Model\Entity\ReportMaster[] $report_masters
 */
class User extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        '*' => true,
        'id' => false,
    ];

    /**
     * Fields that are excluded from JSON an array versions of the entity.
     *
     * @var array
     */
    protected $_hidden = [
        'password'
    ];
}
