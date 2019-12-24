<?php
namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

class ProdutosTable extends Table
{
    public function initialize(array $config)
    {
        $this->addBehavior('Timestamp');
    }
    public function validationDefault(Validator $validator)
    {
        $validator
            ->notEmpty('nome')
            ->notEmpty('preco',[
                'rule' => ['decimal', 2],
                'message' => 'Este campo só aceita números. Ex: 0,00']);

        return $validator;
    }

    public function isOwnedBy($produtoId, $userId)
    {
        return $this->exists(['id' => $produtoId, 'user_id' => $userId]);
    }
}


?>