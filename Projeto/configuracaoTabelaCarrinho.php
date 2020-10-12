<?php
    $p = null;
    $p["cabecalho"] = array("Nome","Sobrenome","CPF");

    require_once "conexao.php";

    $sql = "SELECT * FROM view_carrinho";

    $resultado = $conexao->query($sql);

    foreach($resultado as $linha){
        $p["dados"][]=$linha;
    }
    $p["nome"] = "carrinho";
?>