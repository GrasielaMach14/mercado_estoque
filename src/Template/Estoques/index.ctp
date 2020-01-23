<!--<a href="https://br.freepik.com/fotos-vetores-gratis/padrao">Padrão foto criado por freepik - br.freepik.com</a>-->
<div class="displaycontainer">
    <h1>Movimentação do Estoque</h1>
    <table>
        <tr>
            <th>Id</th>
            <th>Cliente</th>
            <th>Produto</th>
            <th>Quantidade</th>
            <th>Tipo</th>
            <th>Entrada</th>
            <th>Saída</th>
            <th>Ação</th>
        </tr>
        <!-- Aqui é onde iremos iterar nosso objeto de solicitação $articles, exibindo informações de artigos -->

        <?php foreach ($estoques as $estoque): ?>
        <tr>
            <td>
                <?= $this->Html->link($estoque->id, ['action' => 'view', $estoque->id]) ?>
            </td>
            <td><?= $estoque->cliente_id ?></td>
            <td><?= $estoque->produto_id ?></td>
            <td><?= $estoque->quantidade ?></td>
            <td><?= $estoque->tipo ?>
                <?php if($estoque->tipo == 1){echo "Entrada";}else{echo "Saída";} ?>
            </td>
            <td><?= $estoque->entrou ?></td>
            <td><?= $estoque->saiu ?></td>
            <td>
                <?= $this->Html->link('Editar', ['action' => 'edit', $estoque->id]) ?>
                <?= $this->Form->postLink(
                    'Deletar',
                    ['action' => 'delete', $estoque->id],
                    ['confirm' => 'Tem certeza?'])
                ?>           
            </td>
        </tr>
        <?php endforeach; ?>
    </table>

<!-- MODAL
    <div class="modal" id="myModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Adicionar Movimentação</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>rsrsrsrsrsrrsrss</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>

    <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
  Abrir modal de demonstração
    </button> -->
    
    <div class="paginator">
        <ul class="pagination">
            <?php
                echo $this->Paginator->prev('Voltar');
                echo $this->Paginator->numbers();
                echo $this->Paginator->next('Avançar');
            ?>
        </ul>
    </div>

    <button class="btnAdd"><?= $this->Html->link('Incluir', ['action' => 'add']) ?></button>
</div>
<script src="https://code.jquery.com/jquery/2.1.3/jquery.min.js" type="text/javascript"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
