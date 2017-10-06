<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Perguntas Model
 *
 * @method \App\Model\Entity\Pergunta get($primaryKey, $options = [])
 * @method \App\Model\Entity\Pergunta newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Pergunta[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Pergunta|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Pergunta patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Pergunta[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Pergunta findOrCreate($search, callable $callback = null, $options = [])
 */
class PerguntasTable extends Table
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

        $this->setTable('perguntas');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');
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
            ->requirePresence('nome', 'create')
            ->notEmpty('nome')
            ->add('nome', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->allowEmpty('explicacao');

        $validator
            ->integer('resposta')
            ->requirePresence('resposta', 'create')
            ->notEmpty('resposta');

        $validator
            ->requirePresence('resp1', 'create')
            ->notEmpty('resp1');

        $validator
            ->requirePresence('resp2', 'create')
            ->notEmpty('resp2');

        $validator
            ->allowEmpty('resp3');

        $validator
            ->allowEmpty('resp4');

        $validator
            ->allowEmpty('resp5');

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
        $rules->add($rules->isUnique(['nome']));

        return $rules;
    }
}
