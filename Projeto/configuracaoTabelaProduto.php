<?php
    $p = null;
    $p["cabecalho"] = array("Nome","Descrição","Peso","Tamanho","Cor","Tipo","Valor Unitario","Estoque");

    include "conexao.php";

    $sql = "SELECT * FROM view_produto ";

    $resultado = $conexao->query($sql);

    foreach($resultado as $linha){
        $p["dados"][]=$linha;
    }
    $p["nome"] = "produto";
?>