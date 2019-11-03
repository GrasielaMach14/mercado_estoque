<h1>Editar Produto</h1>
<?php
    echo $this->Form->create($produto);
    echo $this->Form->input('nome');
    echo $this->Form->input('preco');
    echo $this->Form->button(__('Alterar'));
    echo $this->Form->end();
?>