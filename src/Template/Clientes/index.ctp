<!--<a href="https://br.freepik.com/fotos-vetores-gratis/padrao">Padrão foto criado por freepik - br.freepik.com</a>-->
<div class="displaycontainer">
    <h1>Clientes</h1>
    <table>
        <tr>
            <th>Id</th>
            <th>Nome</th>
            <th>Email</th>
            <th>Created</th>
            <th>Ação</th>
        </tr>
        <!-- Aqui é onde iremos iterar nosso objeto de solicitação $articles, exibindo informações de artigos -->

        <?php foreach ($clientes as $cliente): ?>
        <tr>
            <td><?= $cliente->id ?></td>
            <td>
                <?= $this->Html->link($cliente->nome, ['action' => 'view', $cliente->id]) ?>
            </td>
            <td><?= $cliente->email ?></td>
            <td><?= $cliente->created ?></td>
            <td>
                <?= $this->Html->link('Editar', ['action' => 'edit', $cliente->id]) ?>
                <?= $this->Form->postLink(
                    'Deletar',
                    ['action' => 'delete', $cliente->id],
                    ['confirm' => 'Tem certeza?'])
                ?>            
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
    <button class="btnAdd"><?= $this->Html->link('Incluir', ['action' => 'add']) ?></button>
</div>