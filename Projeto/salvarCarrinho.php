<?php

include "validacaoUsuario.php";

if($_SESSION["usuario"]["permissao"]!="2"){

include "conexao.php";

header("Content-Type: Application/json");

$cod_cliente = $_POST["nome"];
$cod_cliente = $_POST["sobrenome"];
$cod_cliente = $_POST["cpf"];

$insert = "INSERT INTO carrinho(nome,sobrenome,cpf)
     VALUES ('$cod_cliente','$cod_cliente','$cod_cliente')";


$conexao->query($insert);

$select = "SELECT * FROM view_carrinho";

$resultado = $conexao->query($select);


foreach($resultado as $linha){
    $tabela[] = $linha;
}

echo json_encode($tabela);
}
else{
    header("location: login.php");
}

?>