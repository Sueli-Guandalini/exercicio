<?php

include "classeReceita.php";

session_start();
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
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
		
		</style>
	</head>
<body>
<nav>
	<a href="form_receita.php">Cadastrar Receita</a> |
	<a href="listarReceita.php">Listar Receita</a> |
	<a href="encerrar.php">Encerrar</a>
</nav>
<hr />