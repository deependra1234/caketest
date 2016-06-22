<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Chemist Entity.
 *
 * @property int $id
 * @property string $name
 * @property string $owner_name
 * @property string $owner_email
 * @property string $owner_mobile
 * @property string $contact_email
 * @property string $contact_mobile
 * @property string $contact_name
 * @property int $patch_id
 * @property \App\Model\Entity\Patch $patch
 * @property int $user_id
 * @property \App\Model\Entity\User $user
 * @property string $address
 * @property int $state_id
 * @property \App\Model\Entity\State $state
 * @property int $city_id
 * @property \App\Model\Entity\City $city
 * @property int $status
 * @property \Cake\I18n\Time $created_on
 * @property \Cake\I18n\Time $updated_on
 * @property \App\Model\Entity\ReportEntryChemist[] $report_entry_chemists
 */
class Chemist extends Entity
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
}
