<?php
namespace App\Model\Table;

use App\Model\Entity\ReportEntryDoctor;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ReportEntryDoctors Model
 *
 * @property \Cake\ORM\Association\BelongsTo $ReportMasters
 * @property \Cake\ORM\Association\BelongsTo $Patches
 * @property \Cake\ORM\Association\BelongsTo $Doctors
 * @property \Cake\ORM\Association\BelongsTo $Users
 * @property \Cake\ORM\Association\BelongsTo $Products
 */
class ReportEntryDoctorsTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->table('report_entry_doctors');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->belongsTo('ReportMasters', [
            'foreignKey' => 'report_master_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Patchs', [
            'foreignKey' => 'patch_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Doctors', [
            'foreignKey' => 'doctor_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Users', [
            'foreignKey' => 'user_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Products', [
            'foreignKey' => 'product_id',
            'joinType' => 'INNER'
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->integer('samples_given')
            ->requirePresence('samples_given', 'create')
            ->notEmpty('samples_given');

        $validator
            ->requirePresence('gift', 'create')
            ->notEmpty('gift');

        $validator
            ->requirePresence('comment', 'create')
            ->notEmpty('comment');

       

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['report_master_id'], 'ReportMasters'));
        $rules->add($rules->existsIn(['patch_id'], 'Patchs'));
        $rules->add($rules->existsIn(['doctor_id'], 'Doctors'));
        $rules->add($rules->existsIn(['user_id'], 'Users'));
        $rules->add($rules->existsIn(['product_id'], 'Products'));
        return $rules;
    }
}
