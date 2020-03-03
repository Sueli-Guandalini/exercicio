<?php
include "classCamiseta.php";
include "cabecalho.php";

$c = new Camiseta();

$c->cor = $_POST["cor"];
$c->tipo_manga = $_POST["tipo_manga"];
$c->tamanho = $_POST["tamanho"];



$_SESSION["camiseta"][] = $c;


?>
<h3>Camiseta Inserida com sucesso.</h3>

</body>
</html>