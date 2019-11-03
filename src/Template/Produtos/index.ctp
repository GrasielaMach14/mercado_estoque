<!--<a href="https://br.freepik.com/fotos-vetores-gratis/padrao">Padrão foto criado por freepik - br.freepik.com</a>
<link href="webroot/bootstrap-3.3.7-dist/bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet">-->
<h1>Produtos</h1>
<button  style="background-color:#9FA6A83D"><?= $this->Html->link('Incluir', ['action' => 'add']) ?></button>
<table>
    <tr>
        <th>Id</th>
        <th>Nome do Produto</th>
        <th>Preço</th>
        <th>Data de criação</th>
    </tr>

    <!-- Aqui é onde iremos iterar nosso objeto de solicitação $articles, exibindo informações de artigos -->

    <?php foreach ($produtos as $produto): ?>
    <tr>
        <td><?= $produto->id ?></td>
        <td>
            <?= $this->Html->link($produto->nome, ['action' => 'view', $produto->id]) ?>
        </td>
        <td><?= $produto->preco ?></td>
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
<footer>
    <p style="color: bisque;font-size: 11px;padding: 5px;">Desenvolvido por Grasiela usando CakePhp 3.x</p>
</footer>