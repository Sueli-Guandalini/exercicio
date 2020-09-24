<?php
    $p = null;
    $p["cabecalho"] = array("Data Nascimento","Nome","Cidade","Estado","Camisa","Time");

    require_once "conexao.php";

    $sql = "SELECT * FROM view_jogador";

    $resultado = $conexao->query($sql);

    foreach($resultado as $linha){
        $p["dados"][]=$linha;
    }
    $p["nome"] = "jogador";
?>