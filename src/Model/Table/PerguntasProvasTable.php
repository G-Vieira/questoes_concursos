<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * PerguntasProvas Model
 *
 * @property \App\Model\Table\PerguntasTable|\Cake\ORM\Association\BelongsTo $Perguntas
 * @property \App\Model\Table\ProvasTable|\Cake\ORM\Association\BelongsTo $Provas
 *
 * @method \App\Model\Entity\PerguntasProva get($primaryKey, $options = [])
 * @method \App\Model\Entity\PerguntasProva newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\PerguntasProva[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\PerguntasProva|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\PerguntasProva patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\PerguntasProva[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\PerguntasProva findOrCreate($search, callable $callback = null, $options = [])
 */
class PerguntasProvasTable extends Table
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

        $this->setTable('perguntas_provas');
        $this->setDisplayField('pergunta_id');
        $this->setPrimaryKey(['pergunta_id', 'prova_id']);

        $this->belongsTo('Perguntas', [
            'foreignKey' => 'pergunta_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Provas', [
            'foreignKey' => 'prova_id',
            'joinType' => 'INNER'
        ]);
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
        $rules->add($rules->existsIn(['pergunta_id'], 'Perguntas'));
        $rules->add($rules->existsIn(['prova_id'], 'Provas'));

        return $rules;
    }
}
