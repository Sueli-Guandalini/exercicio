<?php

include "validacaoUsuario.php";

if($_SESSION["usuario"]["permissao"]!="2"){

include "conexao.php";

header("Content-Type: Application/json");

$cod_carrinho = $_POST["cod_carrinho"];
$horario = $_POST["horario"];
$data = $_POST["data"];
$status = $_POST["status"];
$valor = $_POST["valor"];
$endereco_entrega = $_POST["endereco_entrega"];
$valor_frete = $_POST["valor_frete"];


$insert = "INSERT INTO venda(cod_carrinho, horario, data, status, valor, endereco_entrega, valor_frete ) 
                VALUES ('$cod_carrinho','$horario','$data','$status','$valor','$endereco_entrega','$valor_frete')";

$select = "SELECT * FROM venda ";

$resultado = $conexao->query($select);


foreach($resultado as $linha){
    $tabela[] = $linha;
}

echo json_encode($tabela, JSON_UNESCAPED_UNICODE);
}
else{
    header("location: login.php");
}

?>