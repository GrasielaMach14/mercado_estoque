<?php
namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

class ClientesTable extends Table
{
    public function initialize(array $config)
    {
        $this->addBehavior('Timestamp');
    }
    public function validationDefault(Validator $validator)
    {
        $validator
            ->notEmpty('nome')
            ->notEmpty('email');

        return $validator;
    }

    public function isOwnedBy($clienteId, $userId)
    {
        return $this->exists(['id' => $clienteId, 'user_id' => $userId]);
    }
}


?>