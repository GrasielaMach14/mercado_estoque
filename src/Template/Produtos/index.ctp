<!--<a href="https://br.freepik.com/fotos-vetores-gratis/padrao">Padrão foto criado por freepik - br.freepik.com</a>-->
<h1>Produtos</h1>
<table>
    <tr>
        <th>Id</th>
        <th>Nome do Produto</th>
        <th>Preço</th>
        <th>Data de criação</th>
        <th>Ação</th>
    </tr>

    <!-- Aqui é onde iremos iterar nosso objeto de solicitação $articles, exibindo informações de artigos -->

    <?php foreach ($produtos as $produto): ?>
    <tr>
        <td><?= $produto->id ?></td>
        <td>
            <?= $this->Html->link($produto->nome, ['action' => 'view', $produto->id]) ?>
        </td>
        <td><?= $this->Money->format($produto->preco) ?></td>   
        <td><?= $produto->created ?></td>
        <td>
            <?= $this->Html->link('Editar', ['action' => 'edit', $produto->id]) ?>
            <?= $this->Form->postLink(
                'Deletar',
                ['action' => 'delete', $produto->id],
                ['confirm' => 'Tem certeza?'])
            ?>
           
        </td>
    </tr>
    <?php endforeach; ?>
</table>
<button class="btnAdd"><?= $this->Html->link('Incluir', ['action' => 'add']) ?></button>
<!--<footer>
    <p style="color: bisque;font-size: 11px;padding: 5px;">Desenvolvido por Grasiela usando CakePhp 3.x</p>
</footer>-->