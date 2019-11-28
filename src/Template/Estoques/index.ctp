<!--<a href="https://br.freepik.com/fotos-vetores-gratis/padrao">Padrão foto criado por freepik - br.freepik.com</a>-->
<div class="displaycontainer">
    <h1>Movimentação do Estoque</h1>
    <table>
        <tr>
            <th>Id</th>
            <th>Cliente</th>
            <th>Produto</th>
            <th>Quantidade</th>
            <th>Entrada</th>
            <th>Saída</th>
            <th>Ação</th>
        </tr>
        <!-- Aqui é onde iremos iterar nosso objeto de solicitação $articles, exibindo informações de artigos -->

        <?php foreach ($estoques as $estoque): ?>
        <tr>
            <td><?= $estoque->id ?></td>
            <td><?= $estoque->cliente_id ?></td>
            <td>
                <?= $this->Html->link($estoque->produto_id, ['action' => 'view', $estoque->id]) ?>
            </td>
            <td><?= $estoque->quantidade ?></td>
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
    <button class="btnAdd"><?= $this->Html->link('Incluir', ['action' => 'add']) ?></button>
</div>