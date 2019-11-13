<h1>Adicionar Cliente</h1>
<?php
    echo $this->Form->create($cliente);
    echo $this->Form->input('nome');
    echo $this->Form->input('email');
    echo $this->Form->button(__('Cadastrar'));
    echo $this->Form->end();
?>