<?php

include "classeReceita.php";
include "cabecalho.php";

$r = new Receita($_POST);



$_SESSION["Receita"][] = $r;

?>
<h3>Receita inserida com sucesso.</h3>

</body>
</html>
