<?php
require_once("topo.php"); 
?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">[Menu]</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
          <a class="nav-link" href="<?php echo URL ?>">#Principal <span class="sr-only">(current)</span></a>
      </li>
       <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Cadastros
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="javascript::" id="cliente">Cadastro Cliente</a>
          <a class="dropdown-item" href="javascript::" id="fornecedor">Cadastro Fornecedor</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="javascript::" id=""></a>
          <a class="dropdown-item" href="javascript::" id=""></a>
        </div>
      </li>
       <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Consultas
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="javascript::" id="listarclientes">Listagem Clientes</a>
          <a class="dropdown-item" href="javascript::" id="listarfornecedor">Listagem Fornecedor</a>     
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="javascript::" id=""></a>
          <a class="dropdown-item" href="javascript::" id=""></a>
        </div>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Pesquisar" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Pesquisar</button>
    </form>
  </div>
</nav>
<!-- Retorno das paginas -->
<div class="container">
	<br />
	<div id="retorno"></div>
</div>

<?php
include_once "script.php";
?>
<script type="text/javascript">
   $("#cliente").click(function(){
        load_page('<?php echo chamarPagina('clientes'); ?>');
   });

   $("#fornecedor").click(function(){
        load_page('<?php echo chamarPagina('fornecedores'); ?>');
   });   
        
   $("#listarclientes").click(function(){
        load_page('<?php echo chamarPagina('lstclientes'); ?>');
   });

   $("#listarfornecedor").click(function(){
        load_page('<?php echo chamarPagina('lstfornecedor'); ?>');
   });

 
</script> 
<?php
require_once("rodape.php");
?>

