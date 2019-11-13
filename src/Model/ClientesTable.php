<?php

namespace App\Model\Table;

use Cake\ORM\Table;

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
    }

?>