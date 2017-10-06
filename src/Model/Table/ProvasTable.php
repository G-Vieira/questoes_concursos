<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Provas Model
 *
 * @method \App\Model\Entity\Prova get($primaryKey, $options = [])
 * @method \App\Model\Entity\Prova newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Prova[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Prova|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Prova patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Prova[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Prova findOrCreate($search, callable $callback = null, $options = [])
 */
class ProvasTable extends Table
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

        $this->setTable('provas');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');
        $this->belongsTo('Concursos',[
          'foreignKey' => 'concurso_id'
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
            ->requirePresence('nome', 'create')
            ->notEmpty('nome');

        $validator
            ->integer('ano')
            ->requirePresence('ano', 'create')
            ->notEmpty('ano');

        $validator
            ->requirePresence('nivel', 'create')
            ->notEmpty('nivel');

        $validator
            ->requirePresence('tipo', 'create')
            ->notEmpty('tipo');

        $validator
            ->requirePresence('banca', 'create')
            ->notEmpty('banca');

        $validator
            ->integer('concurso_id')
            ->requirePresence('concurso_id', 'create')
            ->notEmpty('concurso_id');

        return $validator;
    }
}
