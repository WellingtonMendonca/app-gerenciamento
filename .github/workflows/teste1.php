<?php
require_once("topo.php");

?>

<style>

    #erro {display:none;}
</style>



<?php



    ?>
    <a href="javascript::" onClick="load_page('<?php echo URL; ?>view/vazio.php');" class="btn btn-secondary">Fechar</a></br></br>
    <a data-toggle="modal" href="javascript::" data-target="#ModalEditar" role="button" class="btn btn-info">Editar</a>
    <?php
 
  
            $tabela = '
            <!-- Modal -->
            <div class="modal" tabindex="-1" role="dialog" id="ModalEditar">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">Editar Dados</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                            <!-- Corpo do formulario -->
                            <form name="form">
                              <div class="form-group">
                                <label for="inputnome">Nome *</label>
                                <input type="text" class="form-control" id="nome" name="nome" value="" placeholder="Nome do usuario">
                              </div>

                              <div class="form-group">
                                <label for="inputsobrenome">Sobre Nome *</label>
                                <input type="text" class="form-control" id="sobrenome" name="sobrenome" value="" placeholder="Sobre nome usuario">
                              </div>
                            </form>
                                <div class="alert alert-danger" role="alert" id="erro">
                                  Favor preencher os campos com *
                                </div>
                    </div>
                    <div class="modal-footer">
                      <a class="btn btn-primary" href="javascript::" id="btnEnviar" style="border-radius: 0px; width: 150px;">Gravar</a>
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                      
                    </div>
                  </div>
                </div>
              </div>
            
            ';



 echo $tabela;  //exibir a tabela
 require_once("script.php");
require_once("rodape.php");
 ?> 
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>