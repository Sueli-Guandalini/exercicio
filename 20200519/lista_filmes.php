<?php

require_once "classFilmes.php";

include "cabecalho.php";

echo "<table border='1'>";
echo 	"<tr>";
echo		"<th>Título</th><th>Sinopse</th><th>Preço(R$)</th><th>Tempo de duração</th><th>Produtora</th>";
echo	"</tr>";

foreach($_SESSION["filmes"] as $i=>$a){
	echo "<tr>";
	echo	"<td>$a->titulo</td>";
	echo	"<td>$a->sinopse</td>";
	echo	"<td>$a->preco</td>";
	echo	"<td>$a->tempo</td>";
	echo	"<td>$a->produtora</td>";
	echo "</tr>";
}

echo "</table>";

?>
</body>
</html>