<?php

include("validacaoUsuario.php");

if($_SESSION["usuario"]["permissao"]!="2" && $_SESSION["usuario"]["permissao"]!="2"){

header("Content-Type: Application/json");

include "conexao.php";
$data = $_POST["nome"];
$horario= $_POST["sobrenome"];
$cod_time1 = $_POST["cpf"];
$cod_time2 = $_POST["nome_produto"];
$cod_time1 = $_POST["descricao"];
$cod_time1 = $_POST["peso"];
$cod_time1 = $_POST["tamanho"];
$cod_time1 = $_POST["cor"];
$cod_time1 = $_POST["quantidade"];
$cod_time1 = $_POST["valor_unitario"];
$id = $_POST["id_carrinho_produto"];



$update = "UPDATE carrinho_produto SET 
                            data='$data',
                            horario='$horario',
                            cod_time1='$cod_time1',   
                            cod_time2='$cod_time2'                  
                WHERE id_carrinho_produto='$id'";

$conexao->query($update);

$select = "SELECT * FROM view_carrinho_produto ";

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