<?php
namespace App\Model\Table;

use App\Model\Entity\Chemist;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Chemists Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Patches
 * @property \Cake\ORM\Association\BelongsTo $Users
 * @property \Cake\ORM\Association\BelongsTo $States
 * @property \Cake\ORM\Association\BelongsTo $Cities
 * @property \Cake\ORM\Association\HasMany $ReportEntryChemists
 */
class ChemistsTable extends Table
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

        $this->table('chemists');
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
        $this->hasMany('ReportEntryChemists', [
            'foreignKey' => 'chemist_id'
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
            ->requirePresence('name', 'create')
            ->notEmpty('name');

        $validator
            ->requirePresence('owner_name', 'create')
            ->notEmpty('owner_name');

        $validator
            ->requirePresence('owner_email', 'create')
            ->notEmpty('owner_email');

        $validator
            ->requirePresence('owner_mobile', 'create')
            ->notEmpty('owner_mobile');

        $validator
            ->requirePresence('contact_email', 'create')
            ->notEmpty('contact_email');

        $validator
            ->requirePresence('contact_mobile', 'create')
            ->notEmpty('contact_mobile');

        $validator
            ->requirePresence('contact_name', 'create')
            ->notEmpty('contact_name');

        $validator
            ->requirePresence('address', 'create')
            ->notEmpty('address');

        $validator
            ->integer('status')
            ->requirePresence('status', 'create')
            ->notEmpty('status');

        $validator
            ->dateTime('created_on')
            ->requirePresence('created_on', 'create')
            ->notEmpty('created_on');

        $validator
            ->dateTime('updated_on')
            ->requirePresence('updated_on', 'create')
            ->notEmpty('updated_on');

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
        $rules->add($rules->existsIn(['patch_id'], 'Patchs'));
        $rules->add($rules->existsIn(['user_id'], 'Users'));
        $rules->add($rules->existsIn(['state_id'], 'States'));
        $rules->add($rules->existsIn(['city_id'], 'Cities'));
        return $rules;
    }
}
