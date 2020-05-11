<?php
	include "cabecalho.php";
?>
<h1>Animais cadastrados:</h1>

<?php
	foreach(S_SESSION["Animal"] as $a){
		$tipo = get_class($a);
		$a->exibeDados();
		echo' $tipo.":".$a->getEspecie()."<br />";


?>

</body>
</html>