<?php
    $p = null;
    $p["cabecalho"] = array("Nome","Ano");

    include "conexao.php";

    $sql = "SELECT * FROM campeonato ORDER BY nome";

    $resultado = $conexao->query($sql);

    foreach($resultado as $linha){
        $p["dados"][]=$linha;
    }
?>