<?php

include("validacaoUsuario.php");

if($_SESSION["usuario"]["permissao"]!="2" && $_SESSION["usuario"]["permissao"]!="2"){

header("Content-Type: Application/json");

include "conexao.php";
$cod_cliente = $_POST["cod_cliente"];
$id_carrinho = $_POST["id_carrinho"];

$update = "UPDATE carrinho SET 
                        cod_cliente='$cod_cliente'                    
                WHERE id_carrinho='$id_carrinho'";

$conexao->query($update);

$select = "SELECT * FROM view_carrinho ORDER BY id_carrinho";

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