<div class="centralizar">
    <h1>Adicionar Produto</h1>
    <?php
        echo $this->Form->create($produto);
        echo $this->Form->input('nome');
        echo $this->Form->input('preco');
        echo $this->Form->button(__('Cadastrar'));
        echo $this->Form->end();
    ?>
    <button><?= $this->Html->Link('Voltar', ['style' => 'color: #ffff;', 'controller' => 'produtos', 'action' => 'index']);?></button>
</div>

