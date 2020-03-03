<?php
include "cabecalho.php";
?>
	<h1>Criar objeto camiseta</h1>
	<form action="instanciarCamiseta.php" method="post">
		Definir cor da camiseta:
		<input type="color" name="cor" />
		<br />
		
		<input type="string"  name="tipo_manga" 
							placeholder="Tipo_manga..." />
		<br />
		
		<input type="string"  name="tamanho"
							placeholder="Tamanho..." />
		<br />
		
		<input type="submit" value="Criar camiseta" />
		
	<form>
</body>
</html>