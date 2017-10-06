<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * PerguntasProva Entity
 *
 * @property int $pergunta_id
 * @property int $prova_id
 *
 * @property \App\Model\Entity\Pergunta $pergunta
 * @property \App\Model\Entity\Prova $prova
 */
class PerguntasProva extends Entity
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
        'pergunta_id' => true,
        'prova_id' => true
    ];
}
