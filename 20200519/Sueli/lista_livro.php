<?php

require_once "classLivro.php";

include "cabecalho.php";

echo "<table border='1'>";
echo 	"<tr>";
echo		"<th>Título</th><th>Sinopse</th><th>Preço(R$)</th><th>Quantidade de Páginas</th><th>Editora</th>";
echo	"</tr>";

foreach($_SESSION["livro"] as $i=>$a){
	echo "<tr>";
	echo	"<td>$a->titulo</td>";
	echo	"<td>$a->sinopse</td>";
	echo	"<td>$a->preco</td>";
	echo	"<td>$a->quantpaginas</td>";
	echo	"<td>$a->editora</td>";
	echo "</tr>";
}

echo "</table>";

?>
</body>
</html>