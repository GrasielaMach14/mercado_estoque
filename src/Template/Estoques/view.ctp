<h3>Estoque</h3>
<h1><?= h($estoque->cliente_id) ?></h1>
<p><?= h($estoque->produto_id) ?></p>
<p><?= h($estoque->quantidade) ?></p>
<p><small>Criado: <?= $estoque->created->format(DATE_RFC850) ?></small></p>
