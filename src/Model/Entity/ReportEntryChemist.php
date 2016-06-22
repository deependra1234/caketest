<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ReportEntryChemist Entity.
 *
 * @property int $id
 * @property int $report_master_id
 * @property \App\Model\Entity\ReportMaster $report_master
 * @property int $patch_id
 * @property int $chemist_id
 * @property \App\Model\Entity\Chemist $chemist
 * @property int $user_id
 * @property \App\Model\Entity\User $user
 * @property int $product_id
 * @property \App\Model\Entity\Product $product
 * @property int $samples_given
 * @property string $gift
 * @property string $comment
 * @property \Cake\I18n\Time $created_on
 * @property \Cake\I18n\Time $updated_on
 */
class ReportEntryChemist extends Entity
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
