<?php

include "validacaoUsuario.php";

if($_SESSION["usuario"]["permissao"]!="2"){

include "conexao.php";

header("Content-Type: Application/json");

$nome_produto = $_POST["nome_produto"];
$descricao = $_POST["descricao"];
$peso = $_POST["peso"];
$tamanho = $_POST["tamanho"];
$cor = $_POST["cor"];
$cor="<div style=\"background-color:$cor; width:50px; height:50px;\"> </div>";
$cod_categoria = $_POST["cod_categoria"];
$valor_unitario = $_POST["valor_unitario"];
$estoque = $_POST["estoque"];

$insert = "INSERT INTO produto(nome_produto, descricao, peso, tamanho, cor, cod_categoria, valor_unitario, estoque) 
VALUES ('$nome_produto','$descricao','$peso','$tamanho','$cor','$cod_categoria', '$valor_unitario', '$estoque')";

$conexao->query($insert);

$select = "SELECT * FROM view_produto";

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