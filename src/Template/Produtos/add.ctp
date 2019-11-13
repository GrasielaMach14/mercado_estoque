<h1>Adicionar Produto</h1>

<?php
    echo $this->Form->create($produto);
    echo $this->Form->input('nome');
    echo $this->Form->input('preco');
    echo $this->Form->button(__('Salvar'));
    echo $this->Form->end();
?>

