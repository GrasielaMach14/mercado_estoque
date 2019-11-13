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
            ->notEmpty('preco');

        return $validator;
    }
}


?>