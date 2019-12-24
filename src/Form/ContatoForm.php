<?php
namespace App\Form;

use Cake\Form\Form;
use Cake\Form\Schema;
use Cake\Validation\Validator;
use Cake\Network\Email\Email;

class ContatoForm extends Form {

    public function _buildSchema(Schema $schema){
        $schema->addField('nome', 'string');
        $schema->addField('email', 'string');
        $schema->addField('msg', 'text');

        return $schema;
    }
    public function _buildValidator(Validator $validator) {
        $validator->add('msg', [
            'minLength' => [
                'rule' => ['minLength', 10],
                'msg' => 'Só é permitido 10 caracteres no campo mensagem.'
                ]
        ]);

        $validator->notEmpty('nome');
        $validator->notEmpty('email');
        
        return $validator;
    }
    public  function _execute(array $data) {
        
        $email = new Email('gmail');
        $email->to('aciatuani@gmail.com');
        $email->subject('Contato feito pelo site.');

        $msg = "Contato feito pelo site
                Nome:{$data['nome']}<br>
                Email:{$data['email']}<br>
                Mensagem:{$data['msg']}<br>
                ";

                return $email->send($msg);
    }
}

?>