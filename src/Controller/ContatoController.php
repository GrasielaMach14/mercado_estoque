<?php
namespace App\Controller;

use App\Form\ContatoForm;

class ContatoController extends AppController {

    public function index(){
        $contato = new ContatoForm();

        if($this->request->is('post')) {

            if($contato->execute($this->request->data())) {
                $this->Flash->set('Email enviado com sucesso.', ['element' => 'sucess']);
            }else{
                $this->Flash->set('Falha ao enviar email.', ['element' => 'error']);
            }
            
        }
        $this->set('contato',$contato);
    }
}
?>