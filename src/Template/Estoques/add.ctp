<div class="displaycontainer">
<h1>Adicionar Movimentação</h1>

    <?php
        echo $this->Form->create($estoque);
        echo $this->Form->input('cliente_id');
        echo $this->Form->input('produto_id');
        echo $this->Form->input('quantidade');
        echo $this->Form->input('tipo', array('type' => 'radio',
        'legend' => false, 
        'class' => 'radio-inline radio-styled', 
        'options' => array(1 => 'Entrada', 0 => 'Saída'), 
        'value' => 1
        )); 
        /*echo $this->Form->input('entrou');
        echo $this->Form->input('saiu');*/
        echo $this->Form->button(__('Cadastrar'));
        echo $this->Form->end();
    ?>
   <!-- <div class="modal" id="addModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                </div>
                <div class="modal-footer">
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery/2.1.3/jquery.min.js" type="text/javascript"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script scr="webroot/js/janela.js"></script>
  -->