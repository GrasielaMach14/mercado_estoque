<?php
namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

class EstoquesTable extends Table
{
    public function initialize(array $config)
    {
        $this->addBehavior('Timestamp');
        $this->belongsToMany('Clientes');

    }
    public function validationDefault(Validator $validator)
    {
        $validator
            ->notEmpty('cliente_id')
            ->notEmpty('produto_id')
            ->notEmpty('quantidade')
            ->notEmpty('entrou')
            ->notEmpty('saiu');

        return $validator;
    }

    public function isOwnedBy($estoqueId, $userId)
    {
        return $this->exists(['id' => $estoqueId, 'user_id' => $userId]);
    }
}


?>