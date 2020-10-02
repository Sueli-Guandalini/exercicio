<?php
    $p = null;
    $p["cabecalho"] = array("Data","Horário","Time da Casa","Time Visitante");

    include "conexao.php";

    $sql = "SELECT * FROM view_jogo ORDER BY data DESC";

    $resultado = $conexao->query($sql);

    foreach($resultado as $linha){
        
        $p["dados"][]=$linha;
    }
    $p["nome"] = "jogo";
?>