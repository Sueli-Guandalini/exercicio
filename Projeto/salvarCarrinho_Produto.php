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
$cod_categoria = $_POST["cod_categoria"];
$valor_unitario = $_POST["valor_unitario"];
$estoque = $_POST["estoque"];

$insert = "INSERT INTO produto(nome_produto, descricao, peso, tamanho, cor, cod_categoria, valor_unitario, estoque) 
VALUES ('$nome_produto','$descricao','$peso','$tamanho','$cor','$cod_categoria', '$valor_unitario', '$estoque')";

$conexao->query($insert);

$select = "SELECT * FROM view_carrinho_produto";

$resultado = $conexao->query($select);


foreach($resultado as $linha){
    $tabela[] = $linha;
}

echo json_encode($tabela);
}
else{
    header("location: login.php");
}