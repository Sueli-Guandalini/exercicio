<?php
session_start();

include "Ave.php";
include "Mamifero.php";
include "Reptil.php";
include "Peixe.php";
include "Anfibio.php";
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<style>
			input{margin:5px; width:300px;}
		</style>
	</head>
	<body>
		<a href="form_animal.php">Cadastrar Animal</a> |
		<a href="exibe_animal.php">Listar Animal</a> |
		<a href="encerrar.php">Encerrar</a> 
	<hr />