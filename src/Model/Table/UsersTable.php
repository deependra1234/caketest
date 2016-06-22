<?php
namespace App\Model\Table;

use App\Model\Entity\User;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Users Model
 *
 * @property \Cake\ORM\Association\BelongsTo $UserTypes
 * @property \Cake\ORM\Association\HasMany $Chemists
 * @property \Cake\ORM\Association\HasMany $Doctors
 * @property \Cake\ORM\Association\HasMany $Patchs
 * @property \Cake\ORM\Association\HasMany $ReportEntryChemists
 * @property \Cake\ORM\Association\HasMany $ReportEntryDoctors
 * @property \Cake\ORM\Association\HasMany $ReportMasters
 */
class UsersTable extends Table
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

        $this->table('users');
        $this->displayField('name');
        $this->primaryKey('id');

        $this->belongsTo('UserTypes', [
            'foreignKey' => 'user_type_id',
            'joinType' => 'INNER'
        ]);
        $this->hasMany('Chemists', [
            'foreignKey' => 'user_id'
        ]);
        $this->hasMany('Doctors', [
            'foreignKey' => 'user_id'
        ]);
        $this->hasMany('Patchs', [
            'foreignKey' => 'user_id'
        ]);
        $this->hasMany('ReportEntryChemists', [
            'foreignKey' => 'user_id'
        ]);
        $this->hasMany('ReportEntryDoctors', [
            'foreignKey' => 'user_id'
        ]);
        $this->hasMany('ReportMasters', [
            'foreignKey' => 'user_id'
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
            ->requirePresence('username', 'create')
            ->notEmpty('username');

        $validator
            ->requirePresence('password', 'create')
            ->notEmpty('password');

        $validator
            ->requirePresence('name', 'create')
            ->notEmpty('name');

       

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
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->isUnique(['username']));
        $rules->add($rules->existsIn(['user_type_id'], 'UserTypes'));
        return $rules;
    }
}
