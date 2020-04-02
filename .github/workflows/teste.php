<?php
  require_once "classes/clientes.class.php";
  include_once "topo.php"; 

//Instanciar o metodo cliente;
//$cliente = new clientes();

//if(!empty($_POST)){
	//Setar e informar os campos da tabela
	$cliente->setValor("id", "1");
	$cliente->setValor("nome", "1");
	$cliente->setValor("sobrenome", "1");
	$cliente->valorpk = 9;
	$cliente->order = 1; //Ordernar pela coluna

	//if($cliente->insert($cliente) == 1):
	//	echo "Incluido registro com sucesso";
	//else:
	//	echo "Erro ao incluir ";
	//endif;	
//}
	$cliente->listAll($cliente);
	        $tabela = '
				<table class="table">
				  <thead class="thead-dark">
				    <tr>
				      <th scope="Id">#</th>
				      <th scope="col">Nome</th>
				      <th scope="col">Sobrenome</th>
				    </tr>
				  </thead>
				  <tbody>';
		while($res = $cliente->retornaDados()):
            $tabela .= '
       			    <tr>
 				      <th scope="row">'.$res->id.'</th>
				      <td>'.$res->nome.'</td>
				      <td>'.$res->sobrenome.'</td>
				    </tr>';
        endwhile; 

            $tabela .= "  
             	</tbody>
             	</table>" ;
	      //echo $res->id ." ". $res->nome . " ". $res->sobrenome . "<br />";

             echo $tabela; //exibir a tabela

include_once "rodape.php"; 
?>