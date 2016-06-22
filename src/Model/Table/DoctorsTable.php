<?php

namespace App\Model\Table;

use App\Model\Entity\Doctor;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Doctors Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Patches
 * @property \Cake\ORM\Association\BelongsTo $Users
 * @property \Cake\ORM\Association\BelongsTo $States
 * @property \Cake\ORM\Association\BelongsTo $Cities
 * @property \Cake\ORM\Association\HasMany $ReportEntryDoctors
 */
class DoctorsTable extends Table {

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config) {
        parent::initialize($config);
        $this->behaviors("Timestamp");
        $this->table('doctors');
        $this->displayField('name');
        $this->primaryKey('id');

        $this->belongsTo('Patchs', [
            'foreignKey' => 'patch_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Users', [
            'foreignKey' => 'user_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('States', [
            'foreignKey' => 'state_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Cities', [
            'foreignKey' => 'city_id',
            'joinType' => 'INNER'
        ]);
        $this->hasMany('ReportEntryDoctors', [
            'foreignKey' => 'doctor_id'
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator) {
        $validator
                ->integer('id')
                ->allowEmpty('id', 'create');

        $validator
                ->requirePresence('name', 'create')
                ->notEmpty('name');

        $validator
                ->requirePresence('specialzation', 'create')
                ->notEmpty('specialzation');

     

        $validator
                ->requirePresence('address', 'create')
                ->notEmpty('address');

        $validator
                ->requirePresence('mail', 'create')
                ->notEmpty('mail');

        $validator
                ->requirePresence('mobile', 'create')
                ->notEmpty('mobile');

        $validator
                ->integer('status')
                ->requirePresence('status', 'create')
                ->notEmpty('status');



        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    
    public function buildRules(RulesChecker $rules) {
        $rules->add($rules->existsIn(['patch_id'], 'Patchs'));
        $rules->add($rules->existsIn(['user_id'], 'Users'));
        $rules->add($rules->existsIn(['state_id'], 'States'));
        $rules->add($rules->existsIn(['city_id'], 'Cities'));
        return $rules;
    }

}
