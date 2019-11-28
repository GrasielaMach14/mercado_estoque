<?php

namespace App\Controller;

    class EstoquesController extends AppController 
    {
        public function index()
        {
            $estoques = $this->Estoques->find('all');
            $this->set(compact('estoques'));
        }
        public function view($id = null)
        {
            $estoque = $this->Estoques->get($id);
            $this->set(compact('estoque'));
        }
        public function add()
        {
            $estoque = $this->Estoques->newEntity();
            if ($this->request->is('post')) {
                $estoque = $this->Estoques->patchEntity($estoque, $this->request->getData());
                $estoque->user_id = $this->Auth->user('id');
                if ($this->Estoques->save($estoque)) {
                    $this->Flash->success(__('Movimentação do estoque adicionado com sucesso.'));
                    return $this->redirect(['action' => 'index']);
                }
                $this->Flash->error(__('Não é possível adicionar a movimentação.'));
            }
            $this->set('estoque', $estoque);
        }
        public function edit($id = null)
        {
            $estoque = $this->Estoques->get($id);
            if ($this->request->is(['post', 'put'])) {
                $this->Estoques->patchEntity($estoque, $this->request->getData());
                if ($this->Estoques->save($estoque)) {
                    $this->Flash->success(__('Dados da movimentação do estoque foi atualizado.'));
                    return $this->redirect(['action' => 'index']);
                }
                $this->Flash->error(__('Não pôde ser atualizado.'));
            }

            $this->set('estoque', $estoque);
        }
        public function delete($id)
        {
            $this->request->allowMethod(['post', 'delete']);

            $estoque = $this->Estoques->get($id);
            if ($this->Estoques->delete($estoque)) {
                $this->Flash->success(__('Movimentação do estoque com id: {0} foi deletado.', h($id)));
                return $this->redirect(['action' => 'index']);
            }
        }

        public function isAuthorized($user)
        {
            if ($this->request->getParam('action') === 'add') {
                return true;
            }
        
            // Apenas o proprietário do artigo pode editar e excluí
            if (in_array($this->request->getParam('action'), ['edit', 'delete'])) {
                $estoqueId = (int)$this->request->getParam('pass.0');
                
                if ($this->Estoques->isOwnedBy($estoqueId, $user['id'])) {
                    return true;
                }
            }
        
            return parent::isAuthorized($user);
        }
    }

?>