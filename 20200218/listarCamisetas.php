<?php
include "classCamiseta.php";
include "cabecalho.php";
?>
Objetos "Camiseta" instanciadas no sistema: <br />

<?php
	foreach($_SESSION["camiseta"] as $c){
		echo "
			Cor: <span style='color:$c->cor'>$c->cor</span><br />
			Tipo_manga: $c->tipo_manga <br />
			Tamanho: $c->tamanho <br />
			<hr />";
	}
?>
</body>
</html>
		