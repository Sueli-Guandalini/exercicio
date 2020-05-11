<?php
include "cabecalho.php";

	if(empty($_POST)){
	echo'
	<form action="form_animal.php"  method="POST">
	
		<h1>Cadastrar animal: <h1>
		<br />
		<input type="radio" name="tipo" value="Ave" checked="checked"/>Ave
		
		<input type="radio"  name="tipo" value="Reptil" />Reptil
				
		<input type="radio"  name="tipo" value="Mamifero" />Mamífero
				
		<input type="radio"  name="tipo" value="Peixe" />Peixe
				
		<input type="radio"  name="tipo" value="Anfibio" />Anfibio
				
		<br />
	
		<input type="submit" value="Próximo" />
	
		
	</form>';
	}else{
	echo' <form action="instanciarAnimal.php" method="POST">
			Cadastrar Animal: '.$_POST["tipo"].'
			<p>
				<input type="hidden" name="peso" value=".$_POST["tipo"]." />
				<input type="number" name="peso" placeholder="Peso..." />
				<input type="number" name="comprimento" placeholder="Comprimento..."/>
			</p>
			<p>
				<input type="number" name="altura" placeholder="Altura..."/>
				<input type="color" name="cor" placeholder="Cor Predominante..."/>
			</p>
			<p>
				<input type="text" name="especie" placeholder="Nome Espécie..."/>
			</p>';
		
		if ($_POST["tipo"] == "Ave"){
			echo'<input type="number" name="altura" placeholder="Altura Máxima..."/>';
		}else if ($_POST["tipo"] == "Mamifero"){
			echo'<input type="number" name="velocidade" placeholder="Velocidade Máxima..."/>';
		}elseif ($_POST["tipo"] == "Anfibio"){
			echo'<input type="number" name="tempo" placeholder="Tempo Máximo Submerso..."/>';
		}elseif ($_POST["tipo"] == "Reptil"){
			echo'<input type="number" name="tempo" placeholder="Tempo Máximo Submerso..."/>';			
		}elseif ($_POST["tipo"] == "Peixe"){
			echo'<input type="number" name="temperatura" placeholder="Temperatura Média..."/>';	
		}
			echo'<input type="submit" value="Enviar"/>
	</form>';		
	}	
	?>
</body>
</html>