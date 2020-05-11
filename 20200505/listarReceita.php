<?php
include "classeReceita.php";
include "cabecalho.php";
?>

Objeto "Receita" instanciada no sistema: <br />

<?php

	foreach($_SESSION["receita"] as $r) {
		echo"
			Tipo receita: $r->tipo <br />
			Lista de ingredientes: $r->ingredientes <br />
			Modo de Preparo: $r->preparo <br />
			Nome da receita: $r->nome <br />
			</hr>";
	}	
			
?>
</body>
</html>