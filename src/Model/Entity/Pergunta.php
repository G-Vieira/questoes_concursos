<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Pergunta Entity
 *
 * @property int $id
 * @property string $nome
 * @property string $explicacao
 * @property int $resposta
 * @property string $resp1
 * @property string $resp2
 * @property string $resp3
 * @property string $resp4
 * @property string $resp5
 */
class Pergunta extends Entity
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
        'id' => false
    ];
}
