<?php

include "classeReceita.php";
include "cabecalho.php";

$r = new Receita();

$r->tipo = $_POST["tipo"];
$r->ingredientes = $_POST["ingredientes"];
$r->preparo = $_POST["preparo"];
$r->nome = $_POST["nome"];


$_SESSION["receita"][] = $r;

?>
<h3>Receita inserida com sucesso.</h3>

</body>
</html>
