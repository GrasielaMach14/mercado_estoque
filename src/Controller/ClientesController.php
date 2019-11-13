<?php

namespace App\Controller;

    class ClientesController extends AppController 
    {
        public function index()
        {
            $clientes = $this->Clientes->find('all');
            $this->set(compact('clientes'));
        }
        public function view($id = null)
        {
            $cliente = $this->Clientes->get($id);
            $this->set(compact('cliente'));
        }
        public function add()
        {
            $cliente = $this->Clientes->newEntity();
            if ($this->request->is('post')) {
                $cliente = $this->Clientes->patchEntity($cliente, $this->request->getData());
                if ($this->Clientes->save($cliente)) {
                    $this->Flash->success(__('Cliente adiicionado com sucesso.'));
                    return $this->redirect(['action' => 'index']);
                }
                $this->Flash->error(__('Não é possível adicionar cliente.'));
            }
            $this->set('cliente', $cliente);
        }
        public function edit($id = null)
        {
            $cliente = $this->Clientes->get($id);
            if ($this->request->is(['post', 'put'])) {
                $this->Clientes->patchEntity($cliente, $this->request->getData());
                if ($this->Clientes->save($cliente)) {
                    $this->Flash->success(__('Dados do cliente foi atualizado.'));
                    return $this->redirect(['action' => 'index']);
                }
                $this->Flash->error(__('Não pôde ser atualizado.'));
            }

            $this->set('cliente', $cliente);
        }
        public function delete($id)
        {
            $this->request->allowMethod(['post', 'delete']);

            $cliente = $this->Clientes->get($id);
            if ($this->Clientes->delete($cliente)) {
                $this->Flash->success(__('Cliente com id: {0} foi deletado.', h($id)));
                return $this->redirect(['action' => 'index']);
            }
        }
    }

?>