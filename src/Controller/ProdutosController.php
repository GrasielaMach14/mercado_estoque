<?php
namespace App\Controller;


class ProdutosController extends AppController
{

    public function index()
    {
        $produtos = $this->Produtos->find('all');
        $this->set(compact('produtos'));
    }
    public function view($id = null)
    {
        $produto = $this->Produtos->get($id);
        $this->set(compact('produto'));
     // debug($produto);
    }
    public function add()
    {
        $produto = $this->Produtos->newEntity();
        if ($this->request->is('post')) {
            $produto = $this->Produtos->patchEntity($produto, $this->request->getData());
            if ($this->Produtos->save($produto)) {
                $this->Flash->success(__('Seu produto foi salvo.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Não é possível adicionar o seu produto.'));
        }
        $this->set('$produto', $produto);
    }
    public function edit($id = null)
    {
        $produto = $this->Produtos->get($id);
        if ($this->request->is(['post', 'put'])) {
            $this->Produtos->patchEntity($produto, $this->request->getData());
            if ($this->Produtos->save($produto)) {
                $this->Flash->success(__('Seu produto foi atualizado.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Seu produto não pôde ser atualizado.'));
        }

        $this->set('produto', $produto);
    }
    public function delete($id)
    {
        $this->request->allowMethod(['post', 'delete']);

        $produto = $this->Produtos->get($id);
        if ($this->Produtos->delete($produto)) {
            $this->Flash->success(__('O produto com id: {0} foi deletado.', h($id)));
            return $this->redirect(['action' => 'index']);
        }
    }
}


?>