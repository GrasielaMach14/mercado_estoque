<!--<a href="https://br.freepik.com/fotos-vetores-gratis/padrao">Padrão foto criado por freepik - br.freepik.com</a>-->
<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="webroot/css/menubar.css">
   </head>
    <body>
        <table class="tabela">
            <thead>
                <h1 class="text-center" style="margin-bottom: 7%;">Mercado XX Salvador</h1>
            </thead>
            <tbody>
                <tr class="linha1">
                    <td>
                        <h3 class="text-center">
                            <span class="glyphicon glyphicon-user center-block"></span>
                            <br>
                            <?= $this->Html->Link('Clientes', ['controller' => 'clientes', 'action' => 'index']);?>
                        </h3>        
                    </td>
                    <td>
                        <h3 class="text-center">
                            <span class="glyphicon glyphicon-barcode center-block"></span>
                            <br>
                            <?= $this->Html->Link('Produtos', ['controller' => 'produtos', 'action' => 'index']);?>
                        </h3>
                    </td>
                    <td>
                        <h3 class="text-center">
                            <span class="glyphicon glyphicon-th-list center-block"></span>
                            <br>
                            <?= $this->Html->Link('Estoque', ['controller' => 'estoques', 'action' => 'index']);?>  
                        </h3> 
                    </td>
                    <td>
                        <h3 class="text-center">
                            <span class="glyphicon glyphicon-log-in center-block"></span>
                            <br>
                            <?= $this->Html->Link('Login', ['controller' => 'users', 'action' => 'login']);?>     
                        </h3> 
                    </td>
                    <td>
                        <h3 class="text-center">
                            <span class="glyphicon glyphicon-ok-circle center-block"></span>
                            <br>
                            <?= $this->Html->Link('Inscreva-se', ['controller' => 'users', 'action' => 'add']);?> 
                        </h3> 
                    </td>
                </tr>
            </tbody>
        </table>
       
        <div class="container text-center">
            <div class="row conteudo" style="margin-left:150px;">
                <div class="col-sm-4">
                
                </div>
                <div class="col-sm-4">
                    
                </div>
                <div class="col-sm-4">
                    
                </div>
                <div class="col-sm-4">
                    
                </div>
                <div class="col-sm-4">
                    
                </div>
            </div>
        </div>
        <script src="webroot/js/menubar.js"></script>
    </body>
</html>

<!--<footer>
    <p style="color: bisque;font-size: 11px;padding: 5px;">Desenvolvido por Grasiela usando CakePhp 3.x</p>
</footer>-->