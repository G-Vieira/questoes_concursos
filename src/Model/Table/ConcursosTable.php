<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Concursos Model
 *
 * @method \App\Model\Entity\Concurso get($primaryKey, $options = [])
 * @method \App\Model\Entity\Concurso newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Concurso[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Concurso|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Concurso patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Concurso[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Concurso findOrCreate($search, callable $callback = null, $options = [])
 */
class ConcursosTable extends Table
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

        $this->setTable('concursos');
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
            ->notEmpty('nome');

        $validator
            ->requirePresence('tipo', 'create')
            ->notEmpty('tipo');

        $validator
            ->requirePresence('banca', 'create')
            ->notEmpty('banca');

        $validator
            ->requirePresence('estado', 'create')
            ->notEmpty('estado');

        return $validator;
    }
}
