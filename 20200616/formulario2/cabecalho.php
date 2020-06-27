<?php
    session_start();
?>
<!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8" />
    <style>
			fieldset {
				border: 2px brown solid;
				border-radius: 10px;
				width: 25%;
			}
			
			input {
				background-color: lightblue;
				text-color: black;
				font-weight: bold;
			}
			select {
				background-color: lightblue;
				text-color: black;
				font-weight: bold;
			}
		
	</style>
</head>
<body>
<fieldset>
    <nav>
        <a href="form2.php">Cadastrar</a> | 
        <a href="listar_form2.php">Listar</a> |
        <a href="limpar_lista.php">Encerrar</a>
    </nav>  
<hr />