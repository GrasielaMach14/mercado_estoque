<h1>Editar Cliente</h1>
<?php
    echo $this->Form->create($cliente);
    echo $this->Form->input('nome');
    echo $this->Form->input('email');
    echo $this->Form->button(__('Alterar'));
    echo $this->Form->end();
?>