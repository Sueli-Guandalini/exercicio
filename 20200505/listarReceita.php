<?php
include "classeReceita.php";
include "cabecalho.php";
?>

Objeto "Receita" instanciada no sistema: <br />

<?php

	foreach($_SESSION["Receita"] as $i=>$receita) {
		echo"
			Tipo receita: $receita->tipo <br />
			Lista de ingredientes: $receita->ingredientes <br />
			Modo de Preparo: $receita->preparo <br />
			Nome da receita: $receita->nome <br />
			</hr>";
	}	
			
?>
</body>
</html>