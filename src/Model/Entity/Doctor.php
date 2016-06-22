<?php

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Doctor Entity.
 *
 * @property int $id
 * @property int $name
 * @property int $patch_id
 * @property \App\Model\Entity\Patch $patch
 * @property int $user_id
 * @property \App\Model\Entity\User $user
 * @property string $specialzation
 * @property \Cake\I18n\Time $dob
 * @property \Cake\I18n\Time $marriage_date
 * @property string $address
 * @property int $state_id
 * @property \App\Model\Entity\State $state
 * @property int $city_id
 * @property \App\Model\Entity\City $city
 * @property string $mail
 * @property string $mobile
 * @property int $status
 * @property \Cake\I18n\Time $created_on
 * @property \Cake\I18n\Time $updated_on
 * @property \App\Model\Entity\ReportEntryDoctor[] $report_entry_doctors
 */
class Doctor extends Entity {

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
