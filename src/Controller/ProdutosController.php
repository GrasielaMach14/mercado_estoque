<?php
namespace App\Controller;

class ProdutosController extends AppController
{
    public $paginate = [
        'limit' => 3
    ];

    public function initialize(){
        parent::initialize();
        $this->loadComponent('Paginator');
    }

    public function index()
    {
        $produtos = $this->Produtos->find('all');
        $this->set(compact('produtos'));

        $this->set('produtos', $this->paginate($produtos));
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
            $produto->user_id = $this->Auth->user('id');
            if ($this->Produtos->save($produto)) {
                $this->Flash->success(__('Seu produto foi salvo.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Não é possível adicionar o seu produto.'));
        }
        $this->set('produto', $produto);
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

    public function isAuthorized($user)
    {
        if ($this->request->getParam('action') === 'add') {
            return true;
        }
    
        // Apenas o proprietário do artigo pode editar e excluí
        if (in_array($this->request->getParam('action'), ['edit', 'delete'])) {
            $produtoId = (int)$this->request->getParam('pass.0');
            if ($this->Produtos->isOwnedBy($produtoId, $user['id'])) {
                return true;
            }
        }
    
        return parent::isAuthorized($user);
    }
}


?>