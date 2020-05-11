<?php
include "Animal.php";
include_once "Ave.php";
include_once "Reptil.php";
include_once "Anfibio.php";
include_once "Peixe.php";
include_once "Mamifero.php";

$tipo = $_POST["tipo"];

if ($_POST["tipo"] == "Ave"){
$av = new Ave($_POST["peso"], $_POST["comprimento"], $_POST["altura"], $_POST["cor"], $_POST["especie"], $_POST["altura"]);
	$_SESSION["Ave"][]= $av;
}	
	
	
if ($_POST["tipo"] == "Reptil"){
$r = new Reptil($_POST["peso"], $_POST["comprimento"], $_POST["altura"], $_POST["cor"], $_POST["especie"], $_POST["tempo"]);
	$_SESSION["Reptil"][]= $r;
}	
	
if ($_POST["tipo"] == "Anfibio"){
$an = new Anfibio($_POST["peso"], $_POST["comprimento"], $_POST["altura"], $_POST["cor"], $_POST["especie"], $_POST["tempo"]);
	$_SESSION["Anfibio"][]= $an;
}	
	
if ($_POST["tipo"] == "Peixe"){	
$p = new Peixe($_POST["peso"], $_POST["comprimento"], $_POST["altura"], $_POST["cor"], $_POST["especie"], $_POST["temperatura"]);
	$_SESSION["Peixe"][]= $p;
}	
	
if ($_POST["tipo"] == "Mamifero"){	
$m = new Mamifero($_POST["peso"], $_POST["comprimento"], $_POST["altura"], $_POST["cor"], $_POST["especie"], $_POST["velocidade"]);
	$_SESSION["Mamifero"][]= $m;

}
?>
