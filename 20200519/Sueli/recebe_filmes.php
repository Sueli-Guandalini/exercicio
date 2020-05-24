<?php

require_once "classFilmes.php";
include "cabecalho.php";

$filme = new Filmes($_POST);

$_SESSION["filmes"][] = $filme;

?>

Filme cadastrado com sucesso!
</body>
</html>