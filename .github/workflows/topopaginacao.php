<?php
//Parametros iniciais da paginação

if (!empty($_GET['pagina'])) {
$pagina = $_GET['pagina'];
} else {
  $pagina = "";
}
if (!$pagina) {
$pc = "1";
} else {
$pc = $pagina;
}

$ordenar = 1; 
$pagina = 1;  
$inicio = $pc - 1;
$inicio = $inicio * PG_TOTALLINHAS;
$tr = $totalregistros; 
$tp = ceil( $tr / PG_TOTALLINHAS ); 
$ultimo = ceil( $tr / PG_TOTALLINHAS );
 