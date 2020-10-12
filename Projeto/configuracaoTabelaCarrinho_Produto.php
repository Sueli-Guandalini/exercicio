<?php
    $p = null;
    $p["cabecalho"] = array("Nome","Sobrenome","CPF","Nome do Produto","Descricao","Peso","Tamanho",
        "Cor","Quantidade","Valor Unitario");

    include "conexao.php";

    $sql = "SELECT * FROM view_carrinho_produto ";

    $resultado = $conexao->query($sql);

    foreach($resultado as $linha){
        
        $p["dados"][]=$linha;
    }
    $p["nome"] = "carrinho_produto";
?>