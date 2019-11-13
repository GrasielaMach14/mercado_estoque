<h5>Produto:</h5>
<h1><?= h($produto->nome) ?></h1>
<h3>R$ <?= h($produto->preco) ?></h3>
<p><small>Criado: <?= $produto->created->format(DATE_RFC850) ?></small></p>