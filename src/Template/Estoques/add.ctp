<div class="displaycontainer">
    <h1>Adicionar Movimentação</h1>
    <?php
        echo $this->Form->create($estoque);
        echo $this->Form->input('cliente_id');
        echo $this->Form->input('produto_id');
        echo $this->Form->input('entrou');
        echo $this->Form->input('saiu');
        echo $this->Form->button(__('Cadastrar'));
        echo $this->Form->end();
    ?>
    <button class="btnV"><?= $this->Html->Link('Voltar', ['action' => 'index']);?></button>
</div>
