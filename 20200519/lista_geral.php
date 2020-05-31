<?php

require_once "classeFilmes.php";
require_once "classeLivro.php";
include "cabecalho.php";


if(!empty($_SESSION["geral"])){

	foreach($_SESSION["geral"] as $g){
		echo (post_class($g));
		$g->exibe();
	}

} else{
	echo 'Nenhum cadastro realizado';
}
?>
</fieldset>
</body>
</html>